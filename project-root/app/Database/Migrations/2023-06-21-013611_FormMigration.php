<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FormMigration extends Migration
{
    public function up()
    {
        $this->forge->dropTable('fields');
        $this->forge->dropTable('forms');
        // Fields Table
        $this->forge->addField([
            'fieldID' => [
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
            'label' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'formID' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);

        $this->forge->addKey('fieldID', true);
        // $this->forge->addForeignKey('formID', 'forms', 'formID', 'CASCADE', 'CASCADE');
        $this->forge->createTable('fields');
        $seeder = \Config\Database::seeder();
        $seeder->call('FieldSeeder');


        //Forms Table
        $this->forge->addField([
            'formID' => [
                'type' => 'INT',
                'size' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'fieldID' => [
                'type' => 'INT',
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
    }

    public function down()
    {
        //
    }
}
