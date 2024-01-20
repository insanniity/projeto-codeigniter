<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        // Create users table
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ],
            'restaurant_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => TRUE
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => TRUE
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => TRUE
            ],
            'roles' => [
                'type' => 'VARCHAR',
                'constraint' => 500,
                'null' => TRUE
            ],
            'blocked_until' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => TRUE
            ],
            'active' => [
                'type' => 'INT',
                'constraint' => 1,
                'null' => TRUE
            ],
            'code' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => TRUE
            ],
            'last_login' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ]
        ]);

        // primary key
        $this->forge->addKey('user_id', true);

        // create table
        $this->forge->createTable('users');
    }

    public function down()
    {
        // drop table
        $this->forge->dropTable('users');
    }
}
