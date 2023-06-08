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