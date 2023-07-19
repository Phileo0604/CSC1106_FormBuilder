<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FormSeeder extends Seeder
{
    public function run()
    {
        $formData = [
            [
                'type' => 'text',
                'id' => 'fullname',
                'size' => 30,
                'placeholder' => 'Enter your full name',
                'required' => true,
            ],
            [
                'type' => 'email',
                'id' => 'email',
                'size' => 40,
                'placeholder' => 'Enter your email address',
                'required' => true,
            ],
            [
                'type' => 'password',
                'id' => 'password',
                'size' => 20,
                'placeholder' => 'Enter your password',
                'required' => true,
            ],
            [
                'type' => 'textarea',
                'id' => 'message',
                'size' => 100,
                'placeholder' => 'Enter your message',
                'required' => false,
            ],
        ];

        foreach ($formData as $data) {
            $this->db->table('form')->insert($data);
        }
    }
}