<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table = 'prodi';
    
    public function getAllProdi(){ 
        return $this->findAll();
     }
}