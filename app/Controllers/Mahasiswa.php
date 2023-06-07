<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;
use App\Models\MahasiswaModel;


class Mahasiswa extends BaseController{

    protected MahasiswaModel $mahasiswaModel;

    public function __construct(){
       $this->mahasiswaModel = new MahasiswaModel();
    }
    
    public function index(){
        
        $data = [
            'title' => 'Data Mahasiswa'
        ];

        return view('mahasiswa', $data);
    }

    public function delete($id){
       $result = $this->mahasiswaModel->delete($id);
 
       if ($result) {
          session()->setFlashdata([
             'msg' => 'Data berhasil dihapus',
             'error' => false
          ]);
          return redirect()->to('/');
       }
 
       session()->setFlashdata([
          'msg' => 'Gagal menghapus data',
          'error' => true
       ]);
       return redirect()->to('/');
    }

    

}