<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Dashboard extends BaseController
{
   protected MahasiswaModel $mahasiswaModel;

   public function __construct(){
    $this->mahasiswaModel = new MahasiswaModel();

   }

    public function index()
    {
        $data = [
            'title' => 'SIPA'
        ];

        return view('dashboard', $data);
    }

    public function mahasiswa(){

        $result = $this->mahasiswaModel->getAllMahasiswa();
        
        $data = [
            'title' => 'Data Pegawai',
            'data_mahasiswa' => $result
        ];

        return view('dashboard/mahasiswa', $data);
    }
}