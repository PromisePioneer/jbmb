<?php

namespace Database\Seeders;

use App\Models\Jenis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenis = [
            [
                'name' => 'bebek'
            ],
            [
                'name' => 'skuter'
            ],
            [
                'name' => 'cruiser'
            ],
            [
                'name' => 'dual-sport'
            ],
            [
                'name' => 'naked-bike'
            ],
            [
                'name' => 'sportbike'
            ],
            [
                'name' => 'retro'
            ],
            [
                'name' => 'touring'
            ]
        ];

        Jenis::insert($jenis);
    }
}
