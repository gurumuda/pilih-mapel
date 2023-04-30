<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
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
            'status' => [
                'type' => 'ENUM("0","1")',
                'default' => '0'
            ],
            'karir' => [
                'type' => 'VARCHAR',
                'constraint' => '70',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
