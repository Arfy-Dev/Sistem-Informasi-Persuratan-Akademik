<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'nomor_surat';
    
    protected $allowedFields = ['nomor_surat', 'tanggal', 'tanggal_pengajuan', 'id_pengajuan'];

    public function getAllSurat(){ 
        return $this->findAll();
     }

     public function getSuratByIdPengajuan($id) {
        return $this->where('id_pengajuan', $id)->first();
    }
    
}