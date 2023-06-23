<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\AccountModel;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function create()
{
    helper('form');

    // Checks whether the form is submitted.
    if (! $this->request->is('post')) {
        // The form is not submitted, so returns the form.
        return view('templates/header', ['title' => 'Create an Account'])
            . view('account/register')
            . view('templates/footer');
    }

    $accountModel = model(AccountModel::class);

    $post = $this->request->getPost(['email', 'password', 'security_question', 'security_answer']);

    // Check if the username already exists
    $existingUser = $accountModel->getUser($post['email']);
    if ($existingUser) {
        // Username already exists, display an error message
        $data = [
            'title' => 'Create an Account',
            'error' => 'Email already exists'
        ];
        return view('templates/header', $data)
            . view('account/register')
            . view('templates/footer');
    }

    // Hash the password
    $hashedPassword = password_hash($post['password'], PASSWORD_DEFAULT);

    $accountModel->save([
        'email' => $post['email'],
        'password' => $hashedPassword,
        'security_question' => $post['security_question'],
        'security_answer' => $post['security_answer'],
    ]);
    

    return view('templates/header', ['title' => 'Create an Account'])
        . view('account/success')
        . view('templates/footer');
}

}


