<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthCheckFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null) // before function is called before reaching to controller, like middleware
    {

        if (!session()->has('loggedUser')) {  // check if session exists or not, if not
            return redirect()->to('signin')->with('fail', 'You must be logged in'); // redirect to log out page
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}