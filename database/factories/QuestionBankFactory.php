<?php

namespace Database\Factories;

use App\Models\QuestionBank;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuestionBank>
 */
class QuestionBankFactory extends Factory
{
    protected $model = QuestionBank::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Mata kuliah khas Sistem Informasi
        $subjects = [
            'Pemrograman Web',
            'Sistem Basis Data',
            'Analisis & Desain Sistem',
            'Jaringan Komputer',
            'Pemrograman Mobile',
            'Manajemen Proyek TI',
            'Struktur Data dan Algoritma',
            'Kecerdasan Buatan',
            'E-Commerce',
            'Keamanan Sistem Informasi',
            'Sistem Operasi',
            'Rekayasa Perangkat Lunak'
        ];

        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'subject' => $this->faker->randomElement($subjects),
            'subject_code' => 'SI' . $this->faker->numerify('###'),
            'semester' => $this->faker->numberBetween(1, 8),
            'category' => $this->faker->randomElement(['uts', 'uas']),
            'tahun_ajaran' => $this->faker->randomElement(['2021/2022', '2022/2023', '2023/2024']),
            'nama_file' => $this->faker->uuid() . '.pdf',
            'tanggal_upload' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
