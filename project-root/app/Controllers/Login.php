<?php

namespace App\Controllers;

use App\Models\AccountModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (!$this->request->is('post')) {
            // The form is not submitted, so return the form.
            return view('templates/header', ['title' => 'Login'])
                . view('account/login')
                . view('templates/footer');
        }

        // Get the POST data
        $post = $this->request->getPost(['email', 'password']);

        // Load the user model
        $accountModel = new AccountModel();

        // Get the user from the database
        $user = $accountModel->getUser($post['email']);

        // Check if the user exists and the password is correct
        if ($user && password_verify($post['password'], $user['password'])) {
            // User is authenticated, store user data in session or perform other actions
            session()->set('user_id', $user['id']);
            return view('account/success'); // Replace '/dashboard' with the desired redirect URL
        } else {
            // Invalid login credentials, display an error message
            $data = [
                'title' => 'Login',
                'error' => 'Invalid login credentials'
            ];
            return view('templates/header', $data)
                . view('account/login')
                . view('templates/footer');
        }
    }
}
