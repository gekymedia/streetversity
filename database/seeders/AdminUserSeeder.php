<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin role if it doesn't exist
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Create admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@streetversity.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'), // Change this password!
                'email_verified_at' => now(),
            ]
        );

        // Assign admin role
        if (!$admin->hasRole('admin')) {
            $admin->assignRole('admin');
        }

        $this->command->info('Admin user created successfully!');
        $this->command->info('Email: admin@streetversity.com');
        $this->command->info('Password: password');
        $this->command->warn('Please change the password after first login!');
    }
}
