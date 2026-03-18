<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Member;
use App\Models\News;
use App\Models\Department;
use App\Models\Position;
use App\Models\WorkProgram;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Data Dummy (dari NewsSeeder)
        $this->call(NewsSeeder::class);

        // Department, Position, Member & WorkProgram
        $this->call(DepartmentSeeder::class);

        // Data Dummy (dari QuestionBankSeeder)
        $this->call(QuestionBankSeeder::class);
    }
}
