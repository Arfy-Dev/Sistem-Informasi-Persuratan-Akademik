<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'nomor_surat';
    
    public function getAllSurat(){ 
        return $this->findAll();
     }
}