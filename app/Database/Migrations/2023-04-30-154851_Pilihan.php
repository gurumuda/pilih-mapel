<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pilihan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'pilihan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pilihan');
    }

    public function down()
    {
        $this->forge->dropTable('pilihan');
    }
}
