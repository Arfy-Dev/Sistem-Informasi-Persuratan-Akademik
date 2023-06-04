<?php

namespace App\Models;

use CodeIgniter\Model;

class LacakModel extends Model
{
    protected $table = 'pengajuan_surat';
    
    // public function getKomik($slug = false){
    //     if($slug == false){
    //         return $this->findAll();
    //     }
    //     else{
    //         return $this->where(['slug' => $slug])->first();
    //     }
    // }
}