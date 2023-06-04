<?php

namespace App\Controllers;

use App\Models\LacakModel;

class Lacak extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Lacak Surat'
        ];

        return view('lacak', $data);
    }
    
    public function cari()
    {
        $pengajuan = new LacakModel();
        $cari = $this->request->getVar('cari');
        $hasil = $pengajuan->where('id_pengajuan', $cari)->findAll(1);
        if (empty($hasil)) {
            $data = [
                'title' => 'Lacak Surat'
            ];
            session()->setFlashdata('pesan', 'Data Tidak Ditemukan');
            return view('lacak', $data);
        } else {
            $data = [
                'title' => 'Lacak Surat',
                'hasil' => $hasil
            ];
            session()->setFlashdata('pesan', 'Data Ditemukan');
            return view('lacak', $data);
        }
    }
}