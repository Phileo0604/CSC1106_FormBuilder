<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'email' => 'test@gmail.com',
            'password'    => '123',
        ];

        // Using Query Builder
        $this->db->table('account')->insert($data);
    }
}

