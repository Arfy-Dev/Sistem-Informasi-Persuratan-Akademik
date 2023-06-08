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

    public function delete($id){
       $result = $this->fakultasModel->delete($id);
 
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