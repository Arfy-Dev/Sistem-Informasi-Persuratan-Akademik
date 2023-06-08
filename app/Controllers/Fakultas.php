<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;
use App\Models\FakultasModel;

class Fakultas extends BaseController{

    protected FakultasModel $fakultasModel;

    public function __construct(){
       $this->fakultasModel = new FakultasModel();
    }
    
    public function index(){
        
        $data = [
            'title' => 'Data Fakultas'
        ];

        return view('fakultas', $data);
    }

       
   //  Menghapus data fakultas berdasarkan id
    public function delete($id){
        $result = $this->fakultasModel->delete($id);
 
        if ($result) {
          session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
 
           return redirect()->to('fakultas');
        }else{
          session()->setFlashdata('pesan', 'Data Gagal Dihapus');
 
          return redirect()->to('fakultas');
       }
     }
 
    //  Mengupdate data fakultas berdasarkan id_fakultas
    public function update(){
       $this->fakultasModel->whereIn('id_fakultas', [$this->request->getVar('id_fakultas')])->set(['nama' => $this->request->getVar('nama'),
       'alamat_fakultas' => $this->request->getVar('alamat_fakultas')])->update();
     
       session()->setFlashdata('pesan', 'Data Berhasil di Ubah');
    
       return redirect()->to('fakultas');
    }
 
    // Menyimpan data berdasarkan id
    public function save(){
       // Melakukan pemeriksaan id terlebih dahulu
    //    $result = $this->fakultasModel->where('id_fakultas', $this->request->getVar('id_fakultas'))->findAll(1);
       $result = $this->fakultasModel->where('id_fakultas', 2)->findAll(1);
 
    //    dd($result);
       // Jika tidak ditemukan maka simpan data
       if(empty($result)){
 
           // Menyimpan data dari form
           $this->fakultasModel->insert([
               'id_fakultas' => $this->request->getVar('id_fakultas'),
               'nama' => $this->request->getVar('nama'),
               'alamat_fakultas' => $this->request->getVar('alamat_fakultas')
           ]);
           
          //  Munculkan pesan berhasil
           session()->setFlashdata('pesan', 'Data Berhasil di Tambah');
           
           return redirect()->to('fakultas');
           
       }else{
          // Jika id_fakultas ditemukan maka munculkan pesan
          session()->setFlashdata('pesan', 'ID Fakultas Sudah Tersedia');
          
          return redirect()->to('fakultas');
       }
   }    
    
}