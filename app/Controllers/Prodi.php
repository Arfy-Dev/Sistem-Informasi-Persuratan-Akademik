<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;
use App\Models\ProdiModel;


class Prodi extends BaseController{

    protected ProdiModel $prodiModel;

    public function __construct(){
       $this->prodiModel = new ProdiModel();
    }
    
    public function index(){
        
        $data = [
            'title' => 'Data Program Studi'
        ];

        return view('prodi', $data);
    }

    public function delete($id){
       $result = $this->prodiModel->delete($id);
 
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