<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    protected UsersModel $usersModel;

    public function __construct(){
       $this->usersModel = new UsersModel();
    }
    public function index()
    {
        return redirect()->to('/pengajuan');
    }

    public function process()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
    
        // Jika role admin
        $dataUser = $users->where([
            'username' => $username,
            'role' => 'admin',
        ])->first();
        
        if ($dataUser) {
            if ($password == $dataUser->password) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                session()->setFlashdata('pesan', 'login berhasil');
                return redirect()->to('mahasiswa');
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        }

        // jika role pimpinan
        $dataUser = $users->where([
            'username' => $username,
            'role' => 'pimpinan',
        ])->first();
        
        if ($dataUser) {
            if ($password == $dataUser->password) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                session()->setFlashdata('pesan', 'login berhasil');
                return redirect()->to('pengajuan_surat');
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/pengajuan');
    }
}