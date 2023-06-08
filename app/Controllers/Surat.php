<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;
use App\Models\SuratModel;


class Surat extends BaseController{

    protected SuratModel $suratModel;

    public function __construct(){
       $this->suratModel = new SuratModel();
    }
    
    public function index(){
        
        $data = [
            'title' => 'Data Surat'
        ];

        return view('surat', $data);
    }

    //  Start Copy 1
   //  Menghapus data surat berdasarkan no surat
   public function delete($id){
    $result = $this->suratModel->delete($id);

    if ($result) {
      session()->setFlashdata('pesan', 'Data Berhasil Dihapus');

       return redirect()->to('surat');
    }else{
      session()->setFlashdata('pesan', 'Data Gagal Dihapus');

      return redirect()->to('surat');
   }
 }

//  Mengupdate data surat berdasarkan no surat
public function update(){
   $this->suratModel->whereIn('nomor_surat', [$this->request->getVar('nomor_surat')])->set(['tanggal' => $this->request->getVar('tanggal'),
   'tanggal_pengajuan' => $this->request->getVar('tanggal_pengajuan'),
   'id_pengajuan' => $this->request->getVar('id_pengajuan')])->update();

   session()->setFlashdata('pesan', 'Data Berhasil di Ubah');

   return redirect()->to('surat');
}

// Menyimpan data berdasarkan nomor_surat
public function save(){
   // Melakukan pemeriksaan nomor_surat terlebih dahulu
   $result = $this->suratModel->where('nomor_surat', $this->request->getVar('nomor_surat'))->findAll(1);

   // Jika tidak ditemukan maka simpan data
   if(empty($result)){

       // Menyimpan data dari form
       $this->suratModel->insert([
           'nomor_surat' => $this->request->getVar('nomor_surat'),
           'tanggal' => $this->request->getVar('tanggal'),
           'tanggal_pengajuan' => $this->request->getVar('tanggal_pengajuan'),
           'id_pengajuan' => $this->request->getVar('id_pengajuan')
       ]);
       
      //  Munculkan pesan berhasil
       session()->setFlashdata('pesan', 'Data Berhasil di Tambah');
       
       return redirect()->to('surat');
       
   }else{
      // Jika nomor_surat ditemukan maka munculkan pesan
      session()->setFlashdata('pesan', 'Data Sudah Tersedia');
      
      return redirect()->to('surat');
   }
}    
//  End Copy 1
    

}