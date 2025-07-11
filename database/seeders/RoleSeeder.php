<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            'role_name' => 'Admin',
        ]);

         Role::factory()->create([
            'role_name' => 'Contributor',
        ]);

         Role::factory()->create([
            'role_name' => 'Subscriber',
        ]);



    }
}
