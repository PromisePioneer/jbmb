<?php

namespace Database\Seeders;

use App\Models\MotorStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statusMotor = [
            [
                'name' => 'Terjual'
            ],
            [
                'name' => 'Tersedia'
            ]
        ];
        MotorStatus::insert($statusMotor);
    }
}
