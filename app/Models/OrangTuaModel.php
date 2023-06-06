<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangTuaModel extends Model
{
    protected $table = 'orangtua';
    
    public function getAllOrangTua(){ 
        return $this->findAll();
     }
}