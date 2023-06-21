<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FormMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'size' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'size' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
            'placeholder' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'required' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('form');
        $seeder = \Config\Database::seeder();
        $seeder->call('FormSeeder');
    }

    public function down()
    {
        //
    }
}
