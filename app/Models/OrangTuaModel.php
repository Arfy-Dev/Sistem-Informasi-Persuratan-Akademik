<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangTuaModel extends Model
{
    protected $table = 'orangtua';
    protected $primaryKey = 'id_orangtua';
    
    protected $allowedFields = ['id_orangtua', 'nama_orangtua', 'pekerjaan_orangtua', 'alamat_orangtua','nim'];

    public function getAllOrangTua(){ 
        return $this->findAll();
     }
}