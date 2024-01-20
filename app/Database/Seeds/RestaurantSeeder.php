<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    public function run()
    {
        $restaurants = [
            [
                'name' => 'Restaurante 1',
                'address' => 'Rua do Restaurante 1',
                'phone' => '990000100',
                'email' => 'restaurante_1@gmail.com',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Restaurante 2',
                'address' => 'Rua do Restaurante 2',
                'phone' => '990000200',
                'email' => 'restaurante_2@gmail.com',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Restaurante 3',
                'address' => 'Rua do Restaurante 3',
                'phone' => '990000300',
                'email' => 'restaurante_3@gmail.com',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        $this->db->table('restaurants')->insertBatch($restaurants);
    }
}
