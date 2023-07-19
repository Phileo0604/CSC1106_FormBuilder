<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FormBuilder extends Migration
{
    public function up()
    {
        // $this->forge->dropTable('forms');
        // $this->forge->dropTable('users');
        //Forms Table
        $this->forge->addField([
            'formID' => [
                'type' => 'INT',
                'size' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'userID' => [
                'type' => 'INT',
            ],
            'formName' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'formHTML' => [
                'type' => 'TEXT',
            ]
        ]);

        $this->forge->addKey('formID', true);
        $this->forge->createTable('forms');
        $seeder = \Config\Database::seeder();
        $seeder->call('FormSeeder');

        // Users Table
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'uuid' => [
                'type'       => 'VARCHAR',
                'constraint' => '36',
                'default'    => null,
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'TIMESTAMP',
                'null'       => true,
                'default'    => null,
                'on_update'  => 'CURRENT_TIMESTAMP',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
        // $seeder = \Config\Database::seeder();
        // $seeder->call('UserSeeder');
    }   

    public function down()
    {
        //
        $this->forge->dropTable('forms');
        $this->forge->dropTable('users');
    }
}
