<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table = 'prodi';
    
    public function getProdi(){ 
        return $this->findAll();
     }
}