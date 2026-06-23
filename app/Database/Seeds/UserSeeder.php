<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Entities\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = new UserModel();

        $admin = new User([
            'email'    => 'admin@sikosan.com',
            'username' => 'admin',
            'password' => 'admin123',
            'active'   => 1,
        ]);
        $users->save($admin);
        
        $adminId = $users->getInsertID();
        $this->db->table('auth_groups_users')->insert([
            'group_id' => 1, 
            'user_id'  => $adminId
        ]);

        $owner = new User([
            'email'    => 'owner@sikosan.com',
            'username' => 'owner',
            'password' => 'owner123',
            'active'   => 1,
        ]);
        $users->save($owner);
        
        $ownerId = $users->getInsertID();
        $this->db->table('auth_groups_users')->insert([
            'group_id' => 3, 
            'user_id'  => $ownerId
        ]);
    }
}