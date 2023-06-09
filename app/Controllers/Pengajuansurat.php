<?php

namespace App\Controllers;

use App\Models\PengajuanSuratModel;
use App\Models\MahasiswaModel;
use App\Models\SuratModel;

class PengajuanSurat extends BaseController{

    protected PengajuanSuratModel $pengajuanSuratModel;
    protected MahasiswaModel $mahasiswaModel;
    protected SuratModel $suratModel;
    protected $nomorSurat;
    protected $temp;
    
    public function __construct(){
       $this->pengajuanSuratModel = new PengajuanSuratModel();
       $this->mahasiswaModel = new MahasiswaModel();
       $this->suratModel = new SuratModel();
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
        
        //nomor surat 
        $this->nomorSurat += 1;
        
        // Update tanggal ttd dan status berdasarkan id_pengajuan
        $result = $this->pengajuanSuratModel->whereIn('id_pengajuan', [$id_pengajuan]
        )->set(['tanggal_ttd' => $date,
        'status' => 'Ditandatangani'])->update();

        $data_pengajuan = $this->pengajuanSuratModel->getPengajuanSuratById($id_pengajuan);

        $total_pengajuan = $this->pengajuanSuratModel->getAllPengajuanSurat();
        // dd(count($total_pengajuan));
        $this->nomorSurat = count($total_pengajuan);
        
        if($result){
             // Jika pengajuan sudah ditandantangani maka masukkan surat ke arsip surat
            $this->suratModel->insert([
                'nomor_surat' => $this->nomorSurat . "/" . $data_pengajuan['kode_surat'] . "/" . substr($date, 0, 4),
                'tanggal' => $date,
                'tanggal_pengajuan' => $data_pengajuan['tanggal_pengajuan'],
                'id_pengajuan' => $id_pengajuan
             ]);
    
            // Jika berhasil mengupdate kirim notifikasi berhasil 
            session()->setFlashdata('pesan', 'Surat Berhasil Ditandatangani');
            return redirect()->to('pengajuan_surat');
        }else{
            // Jika gagal maka kirim notiifkasi gagal
            session()->setFlashdata('pesan', 'Surat Gagal Ditandatangani');
            return redirect()->to('pengajuan_surat');
        }
    }

    // Mencetak surat pengajuan
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

   public function kirim_surat($id_pengajuan){
        // Mengumpulkan data pengajuan berdasarkan id pengajuan
        $data_pengajuan = $this->pengajuanSuratModel->getPengajuanSuratById($id_pengajuan);
        
        // lakukan update data
        $result = $this->pengajuanSuratModel->whereIn('id_pengajuan', [$id_pengajuan]
        )->set(['deskripsi' => 'http://localhost:8080/pengajuan_surat/cetak_surat/'. $id_pengajuan . '/' . $data_pengajuan['nim'],
        'status' => 'Dikirim'])->update();

        session()->setFlashdata('pesan', 'Surat Berhasil Dikirim');
        return redirect()->to('pengajuansurat');
   }

   public function lihat_surat($id_pengajuan) {
    // Kumpulkan data berdasarkan id pengajuan
    $data_pengajuan = $this->pengajuanSuratModel->getPengajuanSuratById($id_pengajuan);

    if (!empty($data_pengajuan['deskripsi'])) {
        return redirect()->to($data_pengajuan['deskripsi']);
    } else {
        session()->setFlashdata('pesan', 'Surat Belum Dikirim');
        return redirect()->back(); // Mengarahkan ke halaman sebelumnya
    }
}


}