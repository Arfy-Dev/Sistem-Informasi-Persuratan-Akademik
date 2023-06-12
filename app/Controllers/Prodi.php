<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;
use App\Models\ProdiModel;
use App\Models\FakultasModel;


class Prodi extends BaseController{

    protected ProdiModel $prodiModel;
    protected FakultasModel $fakultasModel;

    public function __construct(){
       $this->prodiModel = new ProdiModel();
       $this->fakultasModel = new FakultasModel();
    }
    
    public function index(){
         $data_fakultas = $this->fakultasModel->getAllFakultas();
        
        $data = [
            'title' => 'Data Program Studi',
            'data_fakultas' => $data_fakultas
        ];

        return view('prodi', $data);
    }

   
   //  Menghapus data prodi berdasarkan id
   public function delete($id){
      $result = $this->prodiModel->delete($id);

      if ($result) {
         session()->setFlashdata('pesan', 'Data Berhasil Dihapus');

         return redirect()->to('prodi');
      }else{
         session()->setFlashdata('pesan', 'Data Gagal Dihapus');

         return redirect()->to('prodi');
      }
   }

   //  Mengupdate data prodi berdasarkan id_prodi
   public function update(){
      $this->prodiModel->whereIn('id_prodi', [$this->request->getVar('id_prodi')])->set(['nama' => $this->request->getVar('nama'),
      'alamat_prodi' => $this->request->getVar('alamat_prodi'),
      'id_fakultas' => $this->request->getVar('id_fakultas')])->update();

      session()->setFlashdata('pesan', 'Data Berhasil di Ubah');

      return redirect()->to('prodi');
   }

   // Menyimpan data berdasarkan id_prodi
   public function save(){
      // Melakukan pemeriksaan id_prodi terlebih dahulu
      $result = $this->prodiModel->where('id_prodi', $this->request->getVar('id_prodi'))->findAll(1);

      // Jika tidak ditemukan maka simpan data
      if(empty($result)){

         // Menyimpan data dari form
         $this->prodiModel->insert([
            'id_prodi' => $this->request->getVar('id_prodi'),
            'nama' => $this->request->getVar('nama'),
            'alamat_prodi' => $this->request->getVar('alamat_prodi'),
            'id_fakultas' => $this->request->getVar('id_fakultas')
         ]);
         
         //  Munculkan pesan berhasil
         session()->setFlashdata('pesan', 'Data Berhasil di Tambah');
         
         return redirect()->to('prodi');
         
      }else{
         // Jika id_prodi ditemukan maka munculkan pesan
         session()->setFlashdata('pesan', 'Data Sudah Tersedia');
         
         return redirect()->to('prodi');
      }
   }     

}