<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            [
                'email' => 'admin@ukmseni.com',
            ],
            [
                'name' => 'Administrator',
                'nim' => 'ADMIN001',
                'bidang' => 'Kesekretariatan',
                'google_id' => null,
                'avatar' => null,
                'role' => 'admin',
                'password' => 'admin123',
            ]
        );
    }
}