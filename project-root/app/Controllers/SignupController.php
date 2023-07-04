<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class SignupController extends Controller
{
    private $validationRules = [
        'name' => 'required|min_length[2]|max_length[50]',
        'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[4]|max_length[50]',
        'confirmpassword' => 'required|matches[password]'
    ];

    public function index()
    {
        helper('form');
        $data = [];
        return view('auth/signup', $data);
    }

    public function store()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (!$this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('auth/signup');
        }

        $model = model(UserModel::class);  // Create an instance of the UserModel
        $post = $this->request->getPost(['name', 'email', 'password', 'security_question', 'security_answer']);

        // Validate the form data against the validation rules
        if (!$this->validate($this->validationRules)) {
            // The validation fails, so returns the form.
            return view('auth/signup', ['validation' => $this->validator]);
        }

        $hashedPassword = password_hash($post['password'], PASSWORD_DEFAULT);

        $model->save([
            'name' => $post['name'],
            'email' => $post['email'],
            'password' => $hashedPassword,
            'security_question' => $post['security_question'],
            'security_answer' => $post['security_answer']
        ]);

        return view('auth/success');
    }
}
