<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Libraries\Hash;
use App\Controllers\AuthController;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'       => 'Timothy Tan',
                'email'      => 'tim@gmail.com',
                'password'   => Hash::make('12345'),
                // Add token generation for uuid
                'uuid'       => null,
                'updated_at' => null,
            ],
            [
                'name'       => 'Tan Kai Yang',
                'email'      => 'kaiyang@gmail.com',
                'password'   => Hash::make('12345'),
                // Add token generation for uuid
                'uuid'       => null,
                'updated_at' => null,
            ],
            // Add more user data as needed
        ];

        $this->db->table('users')->insertBatch($data);
    }
}