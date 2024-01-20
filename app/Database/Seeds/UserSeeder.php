<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'username' => 'admin',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
                'name' => 'Administrador',
                'email' => 'admin@gmail.com',
                'phone' => '999999999',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => NULL
            ]
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
