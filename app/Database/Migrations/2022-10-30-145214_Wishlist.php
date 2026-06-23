<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wishlist extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_wishlist' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'id_kosan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
        ]);

        $this->forge->addKey('id_wishlist', true);
        $this->forge->createTable('wishlist');
    }

    public function down()
    {
        $this->forge->dropTable('wishlist');
    }
}
