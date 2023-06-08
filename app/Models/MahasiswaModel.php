<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat_mhs', 'semester', 'id_prodi'];
    
    public function getTable() {
        return $this->table;
    }

    public function setTable($table) {
        $this->table = $table;
    }
    
    public function getAllowedFields() {
        return $this->allowedFields;
    }

    public function setAllowedFields($allowedFields) {
        $this->allowedFields = $allowedFields;
    }
    
    public function getAllMahasiswa(){ 
        return $this->findAll();
     }
}