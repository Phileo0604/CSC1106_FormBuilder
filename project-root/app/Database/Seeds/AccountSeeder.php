<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'email' => 'tim',
            'password'    => '12345',
            'security_question' => 'What is your favorite color?',
            'security_answer' => 'blue',
        ];

        // Using Query Builder
        $this->db->table('account')->insert($data);
    }
}
