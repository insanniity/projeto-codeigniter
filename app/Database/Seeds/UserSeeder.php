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
                'restaurant_id' => 1,
                'password' => password_hash('123456', PASSWORD_DEFAULT),
                'name' => 'Administrador',
                'email' => 'admin@gmail.com',
                'phone' => '999999999',
                'roles' => '["admin"]',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => NULL
            ],
            // [
            //     'restaurant_id' => 1,
            //     'username' => 'user_rest1',
            //     'password' => password_hash('123456', PASSWORD_DEFAULT),
            //     'name' => 'Colaborador Restaurante 1',
            //     'email' => 'user_rest1@gmail.com',
            //     'phone' => '990001101',
            //     'roles' => '["user"]',
            //     'active' => 1,
            //     'created_at' => date('Y-m-d H:i:s')
            // ],
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
