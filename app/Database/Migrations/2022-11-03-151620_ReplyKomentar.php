<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ReplyKomentar extends Migration
{
    public function up()
    {
        //make table reply comment

        $this->forge->addField([
            'id' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'id_komentar' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'reply' => [
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
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_komentar', 'komentar', 'id_komentar', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('reply_komentar');
    }

    public function down()
    {
        //
        $this->forge->dropTable('reply_komentar');
    }
}
