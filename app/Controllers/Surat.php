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

    public function delete($id){
       $result = $this->suratModel->delete($id);
 
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