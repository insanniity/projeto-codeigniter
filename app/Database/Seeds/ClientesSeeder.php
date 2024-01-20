<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('clients')->insert([
            'name' => 'João da Silva',
            'email' => 'joao@gmail.com',
            'phone' => '31999999999',
            'birthday' => '1993-01-01',
            'address' => 'Rua 1',
        ]);

        $this->db->table('clients')->insert([
            'name' => 'Maria da Silva',
            'email' => 'maria@gmail.com',
            'phone' => '31999999999',
            'birthday' => '1993-01-01',
            'address' => 'Rua 1',
        ]);

        $this->db->table('clients')->insert([
            'name' => 'José da Silva',
            'email' => 'jose@gmail.com',
            'phone' => '31999999999',
            'birthday' => '1993-01-01',
            'address' => 'Rua 1',
        ]);
    }
}
