<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FotoKosan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kosan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'id_foto' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
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
