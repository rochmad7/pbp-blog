<?php

namespace App\Database\Seeds;

use \CodeIgniter\I18n\Time;

class KategoriSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Bisnis',
                'icon' => 'material://Icons.work',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama' => 'Ilmu Pengetahuan',
                'icon' => 'material://Icons.science',
                'created_at' => Time::parse('October 4, 2020 17:15:10', 'Asia/Jakarta'),
                'updated_at' => Time::parse('October 4, 2020 17:35:20', 'Asia/Jakarta'),
            ],
            [
                'nama' => 'Olahraga',
                'icon' => 'material://Icons.directions_bike',
                'created_at' => Time::parse('December 1, 2019 15:19:46', 'Asia/Jakarta'),
                'updated_at' => Time::parse('December 1, 2019 15:28:38', 'Asia/Jakarta'),
            ],
            [
                'nama' => 'Prestasi',
                'icon' => 'material://Icons.emoji_events',
                'created_at' => Time::parse('December 5, 2019 15:30:46', 'Asia/Jakarta'),
                'updated_at' => Time::parse('December 5, 2019 15:45:38', 'Asia/Jakarta'),
            ],
        ];

        // Using Query Builder
        $this->db->table('kategori')->insertBatch($data);
    }
}
