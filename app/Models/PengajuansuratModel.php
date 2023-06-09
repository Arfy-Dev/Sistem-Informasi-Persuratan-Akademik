<?php

namespace App\Models;
// namespace App\Config;

use CodeIgniter\Model;
// use CodeIgniter\Config;

class PengajuanSuratModel extends Model
{
    protected $table = 'pengajuan_surat';
    protected $allowedFields = ['id_pengajuan', 'tanggal_pengajuan', 'nim', 'kode_surat', 'tanggal_ttd', 'deskripsi', 'status'];
    protected $primaryKey = 'id_pengajuan';
    
    public function getAllPengajuanSurat(){ 

        return $this->findAll();
     }

     public function getPengajuanSuratById($id){ 
        return $this->find($id);
     }

    //  function sendEmail($attachment, $to, $title, $message){

	// 	$this->setFrom('12150313844@students.uin-suska.ac.id');
	// 	$this->setTo($to);

	// 	$this->attach($attachment);

	// 	$this->setSubject($title);
	// 	$this->setMessage($message);

	// 	if(! $this->email->send()){
	// 		return false;
	// 	}else{
	// 		return true;
	// 	}
	// }
}