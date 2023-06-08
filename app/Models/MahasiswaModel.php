<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    // Start Copy 1
    // Sesuaikan dengan field di database
    protected $allowedFields = ['nim', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat_mhs', 'semester', 'id_prodi'];
    // Start Copy 1
    
    public function getAllMahasiswa(){ 
        return $this->findAll();
     }
     
    public function getMahasiswaById($id){ 
        return $this->find($id);
     }
     
    //  $user = $userModel->find($user_id);
}