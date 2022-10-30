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
                'description' => 'administrator, level entitas yang mengurusi seluruh sistem',
            ],
            [
                'name' => 'customer',
                'description' => 'customer, level entitas yang hanya dapat melakukan pencarian kost'
            ],
            [
                'name' => 'owner',
                'description' => 'owner, level entitas yang dapat melakukan untuk memasarkan kosannya'
            ],
        ];

        $this->db->table('auth_groups')->insertBatch($data);
    }
}
