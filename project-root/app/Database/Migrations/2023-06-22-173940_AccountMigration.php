<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AccountMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'security_question' => [  
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'security_answer' => [  
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('account');

        $seeder = \Config\Database::seeder();
        $seeder->call('AccountSeeder');
    }

    public function down()
    {
        $this->forge->dropTable('account');
    }
}
