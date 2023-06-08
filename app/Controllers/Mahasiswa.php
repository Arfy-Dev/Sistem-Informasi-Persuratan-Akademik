<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController{

    protected MahasiswaModel $mahasiswaModel;

    public function __construct(){
       $this->mahasiswaModel = new MahasiswaModel();
    }
    
    
   // Menampilkan view tabel mahasiswa  
    public function index(){
        
        $data = [
            'title' => 'Data Mahasiswa',
        ];

        return view('mahasiswa', $data);
    }

   //  Start Copy 1
   //  Menghapus data mahasiswa berdasarkan nim
    public function delete($id){
       $result = $this->mahasiswaModel->delete($id);

       if ($result) {
         session()->setFlashdata('pesan', 'Data Berhasil Dihapus');

          return redirect()->to('mahasiswa');
       }else{
         session()->setFlashdata('pesan', 'Data Gagal Dihapus');

         return redirect()->to('mahasiswa');
      }
    }

   //  Mengupdate data mahasiswa berdasarkan nim
   public function update(){
      $this->mahasiswaModel->whereIn('nim', [$this->request->getVar('nim')])->set(['nama' => $this->request->getVar('nama'),
      'tempat_lahir' => $this->request->getVar('tempat_lahir'),
      'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
      'alamat_mhs' => $this->request->getVar('alamat_mhs'),
      'semester' => $this->request->getVar('semester'),
      'id_prodi' => $this->request->getVar('id_prodi')])->update();

      session()->setFlashdata('pesan', 'Data Berhasil di Ubah');
   
      return redirect()->to('mahasiswa');
   }

   // Menyimpan data berdasarkan nim
   public function save(){
      // Melakukan pemeriksaan NIM terlebih dahulu
      $result = $this->mahasiswaModel->where('nim', $this->request->getVar('nim'))->findAll(1);

      // Jika tidak ditemukan maka simpan data
      if(empty($result)){

          // Menyimpan data dari form
          $this->mahasiswaModel->insert([
              'nim' => $this->request->getVar('nim'),
              'nama' => $this->request->getVar('nama'),
              'tempat_lahir' => $this->request->getVar('tempat_lahir'),
              'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
              'alamat_mhs' => $this->request->getVar('alamat_mhs'),
              'semester' => $this->request->getVar('semester'),
              'id_prodi' => $this->request->getVar('id_prodi')
          ]);
          
         //  Munculkan pesan berhasil
          session()->setFlashdata('pesan', 'Data Berhasil di Tambah');
          
          return redirect()->to('mahasiswa');
          
      }else{
         // Jika NIM ditemukan maka munculkan pesan
         session()->setFlashdata('pesan', 'Data Sudah Tersedia');
         
         return redirect()->to('mahasiswa');
      }
  }    
   //  End Copy 1
}