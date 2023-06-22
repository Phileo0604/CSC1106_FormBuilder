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
            . view('account/create')
            . view('templates/footer');
    }

    $accountModel = model(AccountModel::class);

    $post = $this->request->getPost(['email', 'password']);

    // Check if the email already exists
    $existingUser = $accountModel->getUser($post['email']);
    if ($existingUser) {
        // Email already exists, display an error message
        $data = [
            'title' => 'Create an Account',
            'error' => 'Email already exists'
        ];
        return view('templates/header', $data)
            . view('account/create')
            . view('templates/footer');
    }


    // Hash the password
    $hashedPassword = password_hash($post['password'], PASSWORD_DEFAULT);

    $accountModel->save([
        'email' => $post['email'],
        'password'  => $hashedPassword,
    ]);

    return view('templates/header', ['title' => 'Create an Account'])
        . view('account/success')
        . view('templates/footer');
}

}


