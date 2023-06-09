<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;
use App\Models\OrangTuaModel;
use App\Models\FakultasModel;
use App\Models\ProdiModel;
use App\Models\SuratModel;
use App\Models\PengajuansuratModel;
use App\Models\JenisSuratModel;

class Dashboard extends BaseController
{
   protected MahasiswaModel $mahasiswaModel;
   protected OrangTuaModel $orangtuaModel;
   protected FakultasModel $fakultasModel;
   protected ProdiModel $prodiModel;
   protected SuratModel $suratModel;
   protected PengajuansuratModel $pengajuansuratModel;
   protected JenisSuratModel $jenissuratModel;

   public function __construct(){
        $this->mahasiswaModel = new MahasiswaModel();
        $this->orangtuaModel = new OrangTuaModel();
        $this->fakultasModel = new FakultasModel();
        $this->prodiModel = new ProdiModel();
        $this->suratModel = new SuratModel();
        $this->pengajuansuratModel = new PengajuansuratModel();
        $this->jenissuratModel = new JenisSuratModel();
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
        $getFakultas = $this->fakultasModel->getAllFakultas();
        
        $data = [
            'title' => 'Data Program Studi',
            'data_prodi' => $result,
            'data_fakultas' => $getFakultas
        ];

        return view('dashboard/prodi', $data);
    }
     // Tabel Surat
     public function surat(){

        $result = $this->suratModel->getAllSurat();
        
        $data = [
            'title' => 'Data Surat',
            'data_surat' => $result
        ];

        return view('dashboard/surat', $data);
    }
    
     // Tabel Pengajuan Surat
     public function pengajuansurat(){

        $result = $this->pengajuansuratModel->getAllPengajuansurat();
        
        $data = [
            'title' => 'Data Pengajuan Surat',
            'data_pengajuan_surat' => $result
        ];

        return view('dashboard/pengajuansurat', $data);
    }
    
     // Tabel Pengajuan Surat Pimpinan
     public function pengajuan_surat(){

        $result = $this->pengajuansuratModel->getAllPengajuansurat();
        
        $data = [
            'title' => 'Data Pengajuan Surat',
            'data_pengajuan_surat' => $result
        ];

        return view('dashboard/pengajuan_surat', $data);
    }
    
     // Tabel Jenis Surat
     public function jenis_surat(){

        $result = $this->jenissuratModel->getAllJenisSurat();
        
        $data = [
            'title' => 'Data Jenis Surat',
            'data_jenis_surat' => $result
        ];

        return view('dashboard/jenissurat', $data);
    }

     // Tabel Surat untuk Pimpinan
     public function persuratan(){

        $result = $this->suratModel->getAllSurat();
        
        $data = [
            'title' => 'Data Surat',
            'data_surat' => $result
        ];

        return view('dashboard/persuratan', $data);
    }
}