<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kost extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'namaKost' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kecamatan' => [
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
                'type' => 'VARCHAR',
                'constraint' => '20',
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
    }

    public function down()
    {
        //
    }
}
