<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Forms extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'   => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'title'   => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
 
        $this->forge->addKey('id', true);
        $this->forge->createTable('forms');
    }

    public function down()
    {
        //
    }
}
