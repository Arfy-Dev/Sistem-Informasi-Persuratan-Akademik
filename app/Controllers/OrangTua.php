<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrangTuaModel;

class OrangTua extends BaseController{

    protected OrangTuaModel $orangtuaModel;

    public function __construct(){
       $this->orangtuaModel = new OrangTuaModel();
    }
    
    
   // Menampilkan view tabel OrangTua  
    public function index(){
        
        $data = [
            'title' => 'Data Orang Tua'
        ];

        return view('orangtua', $data);
    }

   //  Menghapus data orangtua berdasarkan id
    public function delete($id){
       $result = $this->orangtuaModel->delete($id);

       if ($result) {
         session()->setFlashdata('pesan', 'Data Berhasil Dihapus');

          return redirect()->to('orangtua');
       }else{
         session()->setFlashdata('pesan', 'Data Gagal Dihapus');

         return redirect()->to('orangtua');
      }
    }

   //  Mengupdate data orangtua berdasarkan id
   public function update(){
      $this->orangtuaModel->whereIn('id_orangtua', [$this->request->getVar('id_orangtua')])->set(['nama_orangtua' => $this->request->getVar('nama_orangtua'),
      'pekerjaan_orangtua' => $this->request->getVar('pekerjaan_orangtua'),
      'alamat_orangtua' => $this->request->getVar('alamat_orangtua'),
      'nim' => $this->request->getVar('nim')])->update();

      session()->setFlashdata('pesan', 'Data Berhasil di Ubah');
   
      return redirect()->to('orangtua');
   }

   public function save(){
      $result = $this->orangtuaModel->where('id_orangtua', $this->request->getVar('id_orangtua'))->findAll(1);
      if(empty($result)){
          // Data Tabel Orang Tua
          // Mendefinisikan nama tabel

          // Menyimpan data dari form
          $this->orangtuaModel->insert([
              'id_orangtua' => $this->request->getVar('id_orangtua'),
              'pekerjaan_orangtua' => $this->request->getVar('pekerjaan_orangtua'),
              'alamat_orangtua' => $this->request->getVar('alamat_orangtua'),
              'nim' => $this->request->getVar('nim')
          ]);    
          session()->setFlashdata('pesan', 'Data Berhasil di Tambah');
          return redirect()->to('orangtua');
      }else{
         // Jika id_orangtua ditemukan maka update field berdasarkan NIM
         session()->setFlashdata('pesan', 'Data Sudah Tersedia');
         return redirect()->to('orangtua');
      }
  }    

}