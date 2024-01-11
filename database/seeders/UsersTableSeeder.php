<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Boutique',
            'email' => 'adminbt@example.com',
            'password' => Hash::make('admin123'),
            'role_id' => 1,
        ]);
    
        User::create([
            'name' => 'Clinic',
            'email' => 'admincl@example.com',
            'password' => Hash::make('admin456'),
            'role_id' => 2,
        ]);
    
        User::create([
            'name' => 'Library',
            'email' => 'adminlib@example.com',
            'password' => Hash::make('admin789'),
            'role_id' => 3,
        ]);
    }
}
