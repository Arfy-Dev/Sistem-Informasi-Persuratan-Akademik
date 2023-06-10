<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class UsersAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(is_null(session()->get('logged_in'))){ 
            // dd($_SESSION['login']);
            return redirect()->to('pengajuan');
        }
        else{
            // return redirect()->to();
        }

    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here

    }
}