<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(500)->create();
        // User::factory()->create([
        //     'name' => 'Tran Long',
        //     'email' => 'long@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
    }
}
