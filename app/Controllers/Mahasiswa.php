<?php

namespace App\Controllers;

use App\Models\LacakModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mahasiswa'
        ];

        return view('mahasiswa', $data);
    }
}