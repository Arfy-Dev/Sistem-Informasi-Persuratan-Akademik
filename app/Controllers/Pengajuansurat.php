<?php

namespace App\Controllers;

use App\Models\LacakModel;

class Pengajuansurat extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'pengajuan_surat'
        ];

        return view('pengajuan_surat', $data);
    }
}