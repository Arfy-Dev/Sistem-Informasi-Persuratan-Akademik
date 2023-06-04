<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SIPA'
        ];

        return view('home', $data);
    }
}