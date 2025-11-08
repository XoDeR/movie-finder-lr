<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::count() === 0) {
            // create test user
            // email: john@demo.com
            // pw: password
            \App\Models\User::factory()->create([
                'name' => 'John',
                'email' => 'john@demo.com',
            ]);
        }

        if (Movie::count() === 0) {
            $this->call([
                MovieSeeder::class,
            ]);
        }
    }
}
