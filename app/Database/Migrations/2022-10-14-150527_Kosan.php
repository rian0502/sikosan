<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kosan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_kosan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'namaKost' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kota' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'fasilitas' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'type' => [
                'type' => 'ENUM',
                'constraint' => ['Putra', 'Putri', 'Campur'],
            ],
            'idPemilik' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_kosan', true);
        $this->forge->createTable('kosan');
    }

    public function down()
    {
        //
        $this->forge->dropTable('kosan');
    }
}




