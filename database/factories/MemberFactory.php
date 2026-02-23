<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    public function definition(): array
    {
        $positions = [
            'Ketua Umum',
            'Wakil Ketua',
            'Sekretaris',
            'Bendahara',
            'Kepala Dept. Pendidikan',
            'Kepala Dept. Komunikasi & Informasi',
            'Kepala Dept. Minat & Bakat',
            'Kepala Dept. Hubungan Masyarakat',
            'Kepala Dept. Kewirausahaan',
            'Kepala Dept. Sosial',
        ];

        static $index = 0;

        return [
            'name' => fake('id_ID')->name(),
            'position' => $positions[$index++ % count($positions)],
            'photo' => null,
            'instagram' => '@' . fake()->userName(),
            'order' => $index,
        ];
    }
}
