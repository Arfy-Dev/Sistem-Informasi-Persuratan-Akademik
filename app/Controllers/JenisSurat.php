<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;
use App\Models\JenisSuratModel;

class JenisSurat extends BaseController{

    protected JenisSuratModel $jenissuratModel;

    public function __construct(){
       $this->jenissuratModel = new JenisSuratModel();
    }
    
    public function index(){
        
        $data = [
            'title' => 'Data Jenis Surat'
        ];

        return view('jenis_surat', $data);
    }

    public function delete($id){
      $result = $this->jenissuratModel->delete($id);

      if ($result) {
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');

         return redirect()->to('jenis_surat');
      }else{
        session()->setFlashdata('pesan', 'Data Gagal Dihapus');

        return redirect()->to('jenis_surat');
     }
   }

    public function update(){
        $this->jenissuratModel->whereIn('kode_surat', [$this->request->getVar('kode_surat')])->set(['jenis_surat' => $this->request->getVar('jenis_surat')])->update();
  
  
        session()->setFlashdata('pesan', 'Data Berhasil di Ubah');
     
        return redirect()->to('jenis_surat');
     }
  
     
     public function save(){
        // Melakukan pemeriksaan NIM terlebih dahulu
        $result = $this->jenissuratModel->where('kode_surat', $this->request->getVar('kode_surat'))->findAll(1);

        // Jika tidak ditemukan maka simpan data
        if(empty($result)){
  
            // Menyimpan data dari form
            $this->jenissuratModel->insert([
                'kode_surat' => $this->request->getVar('kode_surat'),
                'jenis_surat' => $this->request->getVar('jenis_surat')
            ]);
            
           //  Munculkan pesan berhasil
            session()->setFlashdata('pesan', 'Data Berhasil di Tambah');
            
            return redirect()->to('jenis_surat');
            
        }else{
           // Jika kode surat ditemukan maka munculkan pesan
           session()->setFlashdata('pesan', 'Data Sudah Tersedia');
           
           return redirect()->to('jenis_surat');
        }
    }    
  }
