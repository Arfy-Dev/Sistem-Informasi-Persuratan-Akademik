<?php

namespace App\Controllers;

use App\Models\PengajuanSuratModel;

class PengajuanSurat extends BaseController{

    protected PengajuanSuratModel $pengajuanSuratModel;

    public function __construct(){
       $this->pengajuanSuratModel = new PengajuanSuratModel();
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
}