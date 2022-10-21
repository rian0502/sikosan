<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FotoKosan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kosan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_foto' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_foto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ]
        ]);
        $this->forge->addKey('id_foto', true);
        $this->forge->addForeignKey('id_kosan', 'kosan', 'id_kosan', 'CASCADE', 'CASCADE');
        $this->forge->createTable('foto_kosan');
        //
    }

    public function down()
    {
        //
        $this->forge->dropTable('foto_kosan');
    }
}
