<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ReportKomentar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_report_komentar' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
            'id_komentar' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
<<<<<<< HEAD
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
=======
>>>>>>> 0170a1a02b6f1496392b03855728d684f2276f78
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_user_komentar' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'laporan_komentar' => [
                'type' => 'TEXT',
            ],
            'komentar_dilaporkan' => [
                'type' => 'TEXT',
            ],
            'isReply' => [
                'type' => 'INT',
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

        $this->forge->addKey('id_report_komentar', true);
        $this->forge->createTable('report_komentar');
    }

    public function down()
    {
        $this->forge->dropTable('report_komentar');
    }
}
