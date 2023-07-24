<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Libraries\Hash;


class UserSeeder extends Seeder
{
    public function __construct()
    {
        $this->db = db_connect();
        helper('token');
    }
    public function run()
    {
        $data = [
            [
                'name'       => 'Timothy Tan',
                'email'      => 'tim@gmail.com',
                'password'   => Hash::make('password123'),
                // Add token generation for uuid
                'uuid'       => generateToken(),
                'updated_at' => null,
            ],
            [
                'name'       => 'Tan Kai Yang',
                'email'      => 'kaiyang@gmail.com',
                'password'   => Hash::make('password123'),
                // Add token generation for uuid
                'uuid'       => generateToken(),
                'updated_at' => null,
            ],
            // Add more user data as needed
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
