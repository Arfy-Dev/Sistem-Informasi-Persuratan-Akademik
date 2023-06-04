<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table;
    protected $useTimestamps = true;
    protected $allowedFields;

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
    // public function getKomik($slug = false){
    //     if($slug == false){
    //         return $this->findAll();
    //     }
    //     else{
    //         return $this->where(['slug' => $slug])->first();
    //     }
    // }
}