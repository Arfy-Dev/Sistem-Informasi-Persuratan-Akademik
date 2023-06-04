<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SIPA'
        ];

        return view('dashboard', $data);
    }
}