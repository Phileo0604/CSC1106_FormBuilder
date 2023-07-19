<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
}

 

    public function down()
    {
        //
    }
}
