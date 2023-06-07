<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table = 'prodi';
    protected $primaryKey = 'id_prodi';
    
    public function getAllProdi(){ 
        return $this->findAll();
     }
}