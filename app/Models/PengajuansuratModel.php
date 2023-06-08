<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanSuratModel extends Model
{
    protected $table = 'pengajuan_surat';
    protected $allowedFields = ['id_pengajuan', 'tanggal_pengajuan', 'nim', 'kode_surat', 'tanggal_ttd', 'deskripsi', 'status'];
    protected $primaryKey = 'id_pengajuan';
    
    public function getAllPengajuanSurat(){ 

        return $this->findAll();
     }

     public function getPengajuanSuratById($id){ 
        return $this->find($id);
     }
}