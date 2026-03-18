<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake('id_ID')->name(),
            'position_id' => \App\Models\Position::inRandomOrder()->first()->id ?? null,
            'department_id' => \App\Models\Department::inRandomOrder()->first()->id_department ?? null,
            'photo' => null,
            'instagram' => '@' . fake()->userName(),
        ];
    }
}
