<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;
use App\Models\OrangTuaModel;
use App\Models\FakultasModel;
use App\Models\ProdiModel;

class Dashboard extends BaseController
{
   protected MahasiswaModel $mahasiswaModel;
   protected OrangTuaModel $orangtuaModel;
   protected FakultasModel $fakultasModel;
   protected ProdiModel $prodiModel;

   public function __construct(){
        $this->mahasiswaModel = new MahasiswaModel();
        $this->orangtuaModel = new OrangTuaModel();
        $this->fakultasModel = new FakultasModel();
        $this->prodiModel = new ProdiModel();
   }

    public function index()
    {
        $data = [
            'title' => 'SI Persuratan Akademik'
        ];

        return view('dashboard', $data);
    }

    // Tabel Mahasiswa
    public function mahasiswa(){

        $result = $this->mahasiswaModel->getAllMahasiswa();
        
        $data = [
            'title' => 'Data Mahasiswa',
            'data_mahasiswa' => $result
        ];

        return view('dashboard/mahasiswa', $data);
    }
    
    // Tabel Orang Tua
    public function orangtua(){

        $result = $this->orangtuaModel->getAllOrangTua();
        
        $data = [
            'title' => 'Data Orang Tua',
            'data_orang_tua' => $result
        ];

        return view('dashboard/orangtua', $data);
    }
     // Tabel Fakultas
     public function fakultas(){

        $result = $this->fakultasModel->getAllFakultas();
        
        $data = [
            'title' => 'Data Fakultas',
            'data_fakultas' => $result
        ];

        return view('dashboard/fakultas', $data);
    }
     // Tabel Prodi
     public function prodi(){

        $result = $this->prodiModel->getAllProdi();
        
        $data = [
            'title' => 'Data Program Studi',
            'data_prodi' => $result
        ];

        return view('dashboard/prodi', $data);
    }
}