<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Khaled Allam',
            'username' => 'kallam',
            'email' => 'kaaoaa505@gmail.com',
            'profile_image' => '2024050508241.png',
        ]);
    }
}
