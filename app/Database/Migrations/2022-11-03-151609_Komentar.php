<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
    public function up()
    {
        //make table comment
        $this->forge->addField([
            'id_komentar' => [
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
            'komentar' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_komentar', true);
        $this->forge->addForeignKey('id_kosan', 'kosan', 'id_kosan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('komentar');
    }

    public function down()
    {
        //
        $this->forge->dropTable('komentar');
    }
}
