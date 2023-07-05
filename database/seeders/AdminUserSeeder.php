<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            // 'role' => 1,
            // 'phone' => '12345678',
            // 'address' => 'Jl. Admin',
            // 'line' => 'admin',
            // 'birthdate' => '2000-01-01',
        ]);

        User::create([
            'name' => 'Gerald Imanuel',
            'email' => 'gerald.imanuel@student.umn.ac.id',
            'password' => bcrypt('gerald'),
            // 'role' => 1,
            // 'phone' => '12345678',
            // 'address' => 'Jl. Admin',
            // 'line' => 'admin',
            // 'birthdate' => '2000-01-01',
        ]);

     
    }
}
