<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\News;
use App\Models\Member;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Dummy News Data
        News::factory(12)->create();

        // Dummy Member Data
        Member::factory(6)->create();
    }
}
