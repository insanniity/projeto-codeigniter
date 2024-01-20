<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClientTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'client_id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'name' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'email' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'phone' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'birthday'=> [
                'type'              => 'DATE',
                'null'              => true,
            ],
            'address' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],
            'created_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'updated_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'deleted_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);

        $this->forge->addPrimaryKey('client_id');
        $this->forge->createTable('clients');
    }

    public function down()
    {
        $this->forge->dropTable('clients');
    }
}
