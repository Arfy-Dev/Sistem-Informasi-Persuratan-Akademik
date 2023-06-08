<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table = 'prodi';
    protected $primaryKey = 'id_prodi';
    
    protected $allowedFields = ['id_prodi', 'nama', 'alamat_prodi', 'nim', 'id_fakultas'];

    public function getAllProdi(){ 
        return $this->findAll();
     }
}