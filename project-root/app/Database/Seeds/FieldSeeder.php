<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FieldSeeder extends Seeder
{
    public function run()
    {
        $fieldData = [
            [
                'type' => 'text',
                'size' => 30,
                'placeholder' => 'Enter your full name',
                'required' => true,
                'label' => 'Name',
                'formId' => '1'
            ],
            [
                'type' => 'email',
                'size' => 40,
                'placeholder' => 'Enter your email address',
                'required' => true,
                'label' => 'Email',
                'formId' => '1'
            ],
            [
                'type' => 'password',
                'size' => 20,
                'placeholder' => 'Enter your password',
                'required' => true,
                'label' => 'Password',
                'formId' => '2'
            ],
            [
                'type' => 'textarea',
                'size' => 100,
                'placeholder' => 'Enter your message',
                'required' => false,
                'label' => 'Message',
                'formId' => '2'
            ],
        ];

        foreach ($fieldData as $data) {
            $this->db->table('fields')->insert($data);
        }
    }
}