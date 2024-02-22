<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123')
            ],
            [
                'name' => 'seller',
                'email' => 'seller@gmail.com',
                'password' => bcrypt('seller123')
            ],
            [
                'name' => 'buyer',
                'email' => 'buyer@gmail.com',
                'password' => bcrypt('buyer123')
            ],
        ];

        User::insert($user);
    }
}
