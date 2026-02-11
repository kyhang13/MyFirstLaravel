<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the users table with dummy data.
     */
    public function run(): void
    {
        // Create 20 random users using the factory
        User::factory()->count(20)->create();
    }
}
