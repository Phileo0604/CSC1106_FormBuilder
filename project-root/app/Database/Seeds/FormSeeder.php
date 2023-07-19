<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FormSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'userID' => 1,
                'formName' => 'Form 1',
                'formHTML' => 's:457:"<h1 class="col-md-12">Form title</h1><div class="vertical-line col-md-6"><label for="texty poo">texty poo</label><br><input type="text" id="texty poo" class="form-control"></div><div class="vertical-line col-md-1"><label for="checky box">checky box</label><br><input type="checkbox" id="checky box"></div><div class="vertical-line col-md-1"><label for="radio">radio</label><br><input type="radio" id="radio"></div><p class="col-md-12">this is some texty</p>";'
            ],
            [
                'userID' => 1,
                'formName' => 'Form 2',
                'formHTML' => 's:457:"<h1 class="col-md-12">Form title</h1><div class="vertical-line col-md-6"><label for="texty poo">texty poo</label><br><input type="text" id="texty poo" class="form-control"></div><div class="vertical-line col-md-1"><label for="checky box">checky box</label><br><input type="checkbox" id="checky box"></div><div class="vertical-line col-md-1"><label for="radio">radio</label><br><input type="radio" id="radio"></div><p class="col-md-12">this is some texty</p>";'
            ],
            [
                'userID' => 2,
                'formName' => 'Form 3',
                'formHTML' => 's:457:"<h1 class="col-md-12">Form title</h1><div class="vertical-line col-md-6"><label for="texty poo">texty poo</label><br><input type="text" id="texty poo" class="form-control"></div><div class="vertical-line col-md-1"><label for="checky box">checky box</label><br><input type="checkbox" id="checky box"></div><div class="vertical-line col-md-1"><label for="radio">radio</label><br><input type="radio" id="radio"></div><p class="col-md-12">this is some texty</p>";'
            ],
            // Add more mock data as needed
        ];

        // Insert the data into the 'fields' table
        $this->db->table('forms')->insertBatch($data);
    }
}