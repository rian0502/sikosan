<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FotoKosan extends Migration
{
    public function up()
    {$this->forge->addField([
        'id_kosan' => [
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => true,
        ],
        'id_photo' => [
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => true,
            'auto_increment' => true,
        ]
    ]);
    $this->forge->addKey('id_photo', true);
    $this->forge->createTable('foto_kosan');
    //
    }

    public function down()
    {
        //
        $this->forge->dropTable('foto_kosan');
    }
}
