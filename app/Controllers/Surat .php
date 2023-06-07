<?php

namespace App\Controllers;

use App\Models\LacakModel;

class Surat extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Surat'
        ];

        return view('surat', $data);
    }
}