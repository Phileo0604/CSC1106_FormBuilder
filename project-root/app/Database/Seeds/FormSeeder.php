<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FormSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'formID' => 1,
                'fieldID' => 1,
                'userID' => 1,
                'formName' => 'Form 1',
            ],
            [
                'formID' => 2,
                'fieldID' => 2,
                'userID' => 1,
                'formName' => 'Form 2',
            ],
            [
                'formID' => 3,
                'fieldID' => 3,
                'userID' => 2,
                'formName' => 'Form 3',
            ],
            // Add more mock data as needed
        ];

        // Insert the data into the 'fields' table
        $this->db->table('forms')->insertBatch($data);
    }
}