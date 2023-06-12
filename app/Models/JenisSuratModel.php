<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisSuratModel extends Model
{
    protected $table = 'jenis_surat';
    protected $primaryKey = 'kode_surat';
    
    protected $allowedFields = ['kode_surat', 'jenis_surat']; 

    public function getAllJenisSurat(){ 
        return $this->findAll();
     }
}