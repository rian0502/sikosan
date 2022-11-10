<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ReportKosan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_report' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_kosan' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'report' => [
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

        $this->forge->addKey('id_report', true);
        $this->forge->createTable('report_kosan');
    }

    public function down()
    {
        $this->forge->dropTable('report_kosan');
    }
}
