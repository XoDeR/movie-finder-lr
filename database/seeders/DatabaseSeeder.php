<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // create test user
        // email: john@demo.com
        // pw: password
        \App\Models\User::factory()->create([
            'name' => 'John',
            'email' => 'john@demo.com',
        ]);
    }
}
