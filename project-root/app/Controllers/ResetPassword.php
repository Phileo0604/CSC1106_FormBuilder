<?php

namespace App\Controllers;

use App\Models\AccountModel;
use CodeIgniter\Controller;
use App\Controllers\BaseController;

class ResetPassword extends Controller
{
    public function index()
    {
        return view('reset');
    }

    public function reset($user = null)
    {
        helper('form');
        
        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'reset'])
                . view('account/reset')
                . view('templates/footer');
        }

        // Get the POST data
        $post = $this->request->getPost(['email', 'password', 'security_question', 'security_answer']);

        // Load the user model
        $accountModel = model(AccountModel::class);

        // Get the user from the database
        $user = $accountModel->getUser($post['email']);

        // Check if the user exists and the security question and answer are correct
        if ($user && $post['security_question'] == $user['security_question'] && $post['security_answer'] == $user['security_answer']) {
            // User is authenticated, store user data in session or perform other actions
            session()->set('user_id', $user['id']);
        // Hash the password
        $hashedPassword = password_hash($post['password'], PASSWORD_DEFAULT);

            $data = [
                'password' => $hashedPassword,
            ];
    
            $accountModel->update($user, $data);

            return view('templates/header', ['title' => 'reset'])
                . view('account/success')
                . view('templates/footer');
        } else {
            // Invalid login credentials, display an error message
            $data = [
                'title' => 'Login',
                'error' => 'Invalid Security Answer'
            ];
            return view('templates/header', $data)
                . view('account/reset')
                . view('templates/footer');
        }
    }
}
