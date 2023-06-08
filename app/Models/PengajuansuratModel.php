<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuansuratModel extends Model
{
    protected $table = 'pengajuan_surat';
    
    public function getAllPengajuansurat(){ 
        return $this->findAll();
     }
}