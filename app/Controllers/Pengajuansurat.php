<?php

namespace App\Controllers;

use App\Models\PengajuanSuratModel;
use App\Models\MahasiswaModel;

class PengajuanSurat extends BaseController{

    protected PengajuanSuratModel $pengajuanSuratModel;
    protected MahasiswaModel $mahasiswaModel;

    public function __construct(){
       $this->pengajuanSuratModel = new PengajuanSuratModel();
       $this->mahasiswaModel = new MahasiswaModel();
    }
    
    public function index(){
        $data = [
            'title' => 'Pengajuan Surat'
        ];

        return view('pengajuan_surat', $data);
    }

    public function ttd($id_pengajuan){
        // Variabel waktu saat ini
        $date = date('Y-m-d');
        
        // Update tanggal ttd dan status berdasarkan id_pengajuan
        $result = $this->pengajuanSuratModel->whereIn('id_pengajuan', [$id_pengajuan]
        )->set(['tanggal_ttd' => $date,
        'status' => 'Ditandatangani'])->update();

        if($result){
            // Jika berhasil mengupdate kirim notifikasi berhasil 
            session()->setFlashdata('pesan', 'Surat Berhasil Ditandatangani');
            return redirect()->to('pengajuan_surat');
        }else{
            // Jika gagal maka kirim notiifkasi gagal
            session()->setFlashdata('pesan', 'Surat Gagal Ditandatangani');
            return redirect()->to('pengajuan_surat');
        }
    }

   public function cetak_surat($id_pengajuan, $nim) {
        // id pengajuan
        $data_pengajuan = $this->pengajuanSuratModel->getPengajuanSuratById($id_pengajuan);

        // $nim
        $data_mahasiswa = $this->mahasiswaModel->getMahasiswaById($nim);

        // Cek Prodi
        if($data_mahasiswa['id_prodi'] == "TIN"){
            $prodi = "Teknik Industri";
        }elseif($data_mahasiswa['id_prodi'] == "SIF"){
            $prodi = "Sistem Informasi";
        }elseif($data_mahasiswa['id_prodi'] == "TIF"){
            $prodi = "Teknik Informastika";
        }elseif($data_mahasiswa['id_prodi'] == "TE"){
            $prodi = "Teknik Elektro";
        }elseif($data_mahasiswa['id_prodi'] == "MTK"){
            $prodi = "Matematika";
        }

        // Cek Jenis Surat
        if($data_pengajuan['kode_surat'] == 'SKAK'){
            $kode_surat = "SURAT KETERANGAN AKTIF KULIAH";
        }elseif($data_pengajuan['kode_surat'] == 'SKKB'){
            $kode_surat = "SURAT KETERANGAN BERKELAKUAN BAIK";
        }elseif($data_pengajuan['kode_surat'] == 'SKMK'){
            $kode_surat = "SURAT KETERANGAN MASIH KULIAH";
        }elseif($data_pengajuan['kode_surat'] == 'SKTB'){
            $kode_surat = "SURAT KETERANGAN BEBAS BEASISWA";
        }

        $data = [
            'title' => 'Surat Keterangan Berkelakukan Baik',
            'data_mahasiswa' => $data_mahasiswa,
            'data_pengajuan' => $data_pengajuan,
            'prodi' => $prodi,
            'kode_surat' => $kode_surat,
        ];
        
        return view('cetak_surat', $data);
   }
}