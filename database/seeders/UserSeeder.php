<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           // Create 5 users using factory
    User::factory(5)->create();

    // Create user role entries
    $adminRole = Role::where('role_name', 'Admin')->first();
    $user = User::first(); // Fetch the first user from the database

    if ($adminRole && $user) {
        // Attach the Admin role to the first user
        $user->roles()->attach($adminRole->id);
    }

    // Get all roles except 'Admin'
    $nonAdminRoles = Role::where('role_name', '!=', 'Admin')->get();
    $nonAdminUsers = User::whereDoesntHave('roles', function ($query) {
        $query->where('role_name', 'Admin');
    })->get();

    foreach($nonAdminUsers as $nonAdminUser) {
        $randomRoles = $nonAdminRoles->random(rand(1,2));
        $nonAdminUser->roles()->attach($randomRoles);
      }

    }
}
