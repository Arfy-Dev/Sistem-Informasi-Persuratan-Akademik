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


}