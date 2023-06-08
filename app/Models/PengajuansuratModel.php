<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuansuratModel extends Model
{
    protected $table = 'pengajuan_surat';
    
    protected $allowedFields = ['id_pengajuan', 'tanggal_pengajuan', 'nim', 'kode_surat','tanggal_ttd', 'deksripsi', 'status'];

    public function getAllPengajuansurat(){ 
        return $this->findAll();
     }
}