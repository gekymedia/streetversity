<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Get roles
        $adminRole = Role::findByName('admin');
        $userRole = Role::findByName('user');

        // Admin User
        $admin = User::create([
            'name' => 'Streetversity Admin',
            'email' => 'admin@streetversity.com',
            'password' => Hash::make('admin123'),
            'email_verified_at' => now(),
        ]);
        $admin->assignRole($adminRole);

        // Regular User 1
        $user1 = User::create([
            'name' => 'John Doe',
            'email' => 'john@streetversity.com',
            'password' => Hash::make('user123'),
            'email_verified_at' => now(),
        ]);
        $user1->assignRole($userRole);

        // Regular User 2
        $user2 = User::create([
            'name' => 'Sarah Wilson',
            'email' => 'sarah@streetversity.com',
            'password' => Hash::make('user123'),
            'email_verified_at' => now(),
        ]);
        $user2->assignRole($userRole);
    }
}