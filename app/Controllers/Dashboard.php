<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;
use App\Models\OrangTuaModel;

class Dashboard extends BaseController
{
   protected MahasiswaModel $mahasiswaModel;

   public function __construct(){
    $this->mahasiswaModel = new MahasiswaModel();
    $this->orangtuaModel = new OrangTuaModel();

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
            'title' => 'Data Mahasiswa',
            'data_mahasiswa' => $result
        ];

        return view('dashboard/mahasiswa', $data);
    }
    public function orangtua(){

        $result = $this->orangtuaModel->getAllOrangTua();
        
        $data = [
            'title' => 'Data Orang Tua',
            'data_orang_tua' => $result
        ];

        return view('dashboard/orangtua', $data);
    }
}