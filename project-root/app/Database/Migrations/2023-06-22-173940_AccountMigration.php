<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AccountMigration extends Migration
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
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'password' => [
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
