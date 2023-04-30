<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kodeKelas' => 'XI-1',
                'namaKelas'    => 'XI-Merdeka-1',
            ],
            [
                'kodeKelas' => 'XI-2',
                'namaKelas'    => 'XI-Merdeka-2',
            ],
            [
                'kodeKelas' => 'XI-3',
                'namaKelas'    => 'XI-Merdeka-3',
            ],
            [
                'kodeKelas' => 'XI-4',
                'namaKelas'    => 'XI-Merdeka-4',
            ],
            [
                'kodeKelas' => 'XI-5',
                'namaKelas'    => 'XI-Merdeka-5',
            ],
            [
                'kodeKelas' => 'XI-6',
                'namaKelas'    => 'XI-Merdeka-6',
            ],
        ];

        $this->db->table('kelas')->insertBatch($data);

        $data2 = [
            [
                'nama' => 'Alvian',
                'kelas' => 'XI-1',
                'status' => '0'
            ],
            [
                'nama' => 'Rafa',
                'kelas' => 'XI-1',
                'status' => '0'
            ],
            [
                'nama' => 'Nova',
                'kelas' => 'XI-2',
                'status' => '0'
            ],
            [
                'nama' => 'Alfarizi',
                'kelas' => 'XI-2',
                'status' => '0'
            ],
            [
                'nama' => 'Mariam',
                'kelas' => 'XI-3',
                'status' => '0'
            ],
            [
                'nama' => 'Azka',
                'kelas' => 'XI-3',
                'status' => '0'
            ],

        ];

        $this->db->table('siswa')->insertBatch($data2);
    }
}
