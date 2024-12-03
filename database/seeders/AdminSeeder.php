<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Create the admin user
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        // Output email and password to the console
        $this->command->info('Admin User created successfully!');
        $this->command->info('Email: ' . $user->email);
        $this->command->info('Password: password');  // It's not advisable to store plaintext passwords, just for display purposes here
    }
}
