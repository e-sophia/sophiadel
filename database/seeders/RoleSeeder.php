<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $boutique = Role::create([
            'name' => 'Boutique'
        ]);

        $clinic = Role::create([
            'name' => 'Clinic'
        ]);

        $library = Role::create([
            'name' => 'Library'
        ]);
    }
}
