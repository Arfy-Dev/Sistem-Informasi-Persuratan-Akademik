<?php

namespace App\Controllers;

class Pengajuan extends BaseController
{
    protected $pengajuanModel;

    public function __construct(){
        $this->pengajuanModel = new \App\Models\PengajuanModel();    
    }
    
    public function index()
    {
        $data = [
            'title' => 'Pengajuan Surat'
        ];

        return view('/pengajuan/index', $data);
    }

    public function create(){
        // $data = [
        //     'title' => 'Form Tambah Data',
        //     'validation' => \Config\Services::validation()
        // ];

        return view('/pengajuan/create');
    }

    public function save(){
        $this->pengajuanModel->setTable('mahasiswa');
        $cari = $this->request->getVar('nim');
        $hasil = $this->pengajuanModel->where('nim', $cari)->findAll(1);
        if(empty($hasil)){
            // Data Tabel Mahasiswa
            // Mendefinisikan nama tabel
            $this->pengajuanModel->setTable('mahasiswa');

            // Mendefinisikan kolom tabel
            $this->pengajuanModel->setAllowedFields(['nim', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat_mhs', 'semester', 'id_prodi']);
            
            // Menyimpan data dari form
            $this->pengajuanModel->save([
                'nim' => $this->request->getVar('nim'),
                'nama' => $this->request->getVar('nama'),
                'tempat_lahir' => $this->request->getVar('tempat_lahir'),
                'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
                'alamat_mhs' => $this->request->getVar('alamat_mhs'),
                'semester' => $this->request->getVar('semester'),
                'id_prodi' => $this->request->getVar('id_prodi')
            ]);    
        }
        
        // Membangun ulang model
        unset($this->pengajuanModel);
        $this->pengajuanModel= new \App\Models\PengajuanModel(); 
        $this->pengajuanModel->setTable('orangtua');
        $hasil = $this->pengajuanModel->where('nim', $cari)->findAll(1);
        if(empty($hasil)){
            if(!empty($this->request->getVar('nama_ortu'))){
                // Mendefinisikan nama tabel
                $this->pengajuanModel->setTable('orangtua');

                // Mendefinisikan kolom tabel
                $this->pengajuanModel->setAllowedFields(['id_orangtua', 'nama_orangtua', 'pekerjaan_orangtua', 'alamat_orangtua', 'nim']);
                
                // Menyimpan data dari form
                $this->pengajuanModel->save([
                    'id_orangtua' => substr(uniqid(), 5, 10).substr( $this->request->getVar('nim'), 6, 10),
                    'nama_orangtua' => $this->request->getVar('nama_ortu'),
                    'pekerjaan_orangtua' => $this->request->getVar('pekerjaan_ortu'),
                    'alamat_orangtua' => $this->request->getVar('alamat_ortu'),
                    'nim' => $this->request->getVar('nim'),
                ]);    
            }
        }
        
        // Membangun ulang model
        unset($this->pengajuanModel);
        $this->pengajuanModel= new \App\Models\PengajuanModel(); 
            
        // Data Tabel Pengajuan Surat
        // Mendefinisikan nama tabel
        $this->pengajuanModel->setTable('pengajuan_surat');
            
        // Mendefinisikan kolom tabel
        $this->pengajuanModel->setAllowedFields(['id_pengajuan', 'tanggal_pengajuan', 'nim', 'kode_surat', 'status']);

        // Menyimpan data dari form
        $this->pengajuanModel->save([
            'id_pengajuan' => $this->request->getVar('kode_surat').$this->request->getVar('id_pengajuan'),
            'nim' => $this->request->getVar('nim'),
            'tanggal_pengajuan' => $this->request->getVar('tanggal_pengajuan'),
            'kode_surat' => $this->request->getVar('kode_surat'),
            'status' => $this->request->getVar('status')
        ]);
   
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        $data = [
            'title' => 'Pengajuan Surat',
            'id_pengajuan' => $this->request->getVar('id_pengajuan'),
            'kode_surat' => $this->request->getVar('kode_surat'),
        ];

        return view('/pengajuan/index', $data);
    }
}