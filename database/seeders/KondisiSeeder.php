<?php

namespace Database\Seeders;

use App\Models\Kondisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KondisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kondisi = [
            [
                'name' => 'bekas'
            ],
            [
                'name' => 'baru'
            ],
            [
                'name' => 'bekas-baru'
            ]
        ];

        Kondisi::insert($kondisi);
    }
}
