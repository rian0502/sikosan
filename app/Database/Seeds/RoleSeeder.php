<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'description' => 'administrator'
            ],
            [
                'name' => 'customer',
                'description' => 'customer'
            ],
            [
                'name' => 'owner',
                'description' => 'owner'
            ],
        ];

        $this->db->table('auth_groups')->insertBatch($data);
    }
}
