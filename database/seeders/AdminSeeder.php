<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@mushola.com'],
            [
                'name' => 'Admin Mushola',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}
