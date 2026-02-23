<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition(): array
    {
        $headlines = [
            'Pelantikan Pengurus HIMASI Periode 2025/2026',
            'Workshop UI/UX Design Bersama Praktisi Industri',
            'Seminar Nasional Transformasi Digital di Era Society 5.0',
            'Kompetisi Hackathon HIMASI Cup 2025',
            'Kunjungan Industri ke PT Telkom Indonesia',
            'Pelatihan Data Science untuk Mahasiswa SI',
            'Musyawarah Besar HIMASI Tahun 2025',
            'Webinar Keamanan Siber: Tantangan dan Peluang',
            'Program Magang HIMASI x Startup Lokal',
            'Launching Website Baru HIMASI Amikom',
        ];

        $contents = [
            'Kegiatan pelantikan pengurus baru HIMASI periode 2025/2026 telah dilaksanakan dengan penuh antusiasme. Acara ini dihadiri oleh seluruh civitas akademika Program Studi Sistem Informasi. Ketua HIMASI yang baru terpilih menyampaikan visi dan misi untuk memajukan organisasi ke depannya.',
            'Workshop UI/UX Design yang diselenggarakan oleh HIMASI berhasil menarik perhatian lebih dari 100 peserta. Narasumber dari industri berbagi pengalaman dan tips praktis dalam mendesain antarmuka yang user-friendly dan modern.',
            'Seminar Nasional dengan tema Transformasi Digital telah sukses digelar di Auditorium Universitas Amikom Yogyakarta. Para pembicara dari berbagai latar belakang membahas peran teknologi informasi dalam menghadapi tantangan Society 5.0.',
            'Hackathon HIMASI Cup 2025 telah diikuti oleh puluhan tim dari berbagai program studi. Kompetisi ini mendorong mahasiswa untuk berinovasi dan mengembangkan solusi teknologi untuk permasalahan nyata di masyarakat.',
            'Kunjungan industri ke PT Telkom Indonesia memberikan wawasan berharga bagi mahasiswa tentang dunia kerja di bidang IT. Mahasiswa mendapat kesempatan untuk melihat langsung proses pengembangan layanan digital skala nasional.',
        ];

        $categories = ['Kegiatan', 'Workshop', 'Seminar', 'Kompetisi', 'Kunjungan'];
        $tags = [
            ['kegiatan', 'organisasi'],
            ['workshop', 'uiux', 'desain'],
            ['seminar', 'teknologi', 'digital'],
            ['kompetisi', 'hackathon', 'coding'],
            ['kunjungan', 'industri', 'magang'],
        ];

        $headline = fake()->randomElement($headlines);
        $index = fake()->numberBetween(0, 4);

        return [
            'image_news' => 'news/dummy-news-' . fake()->numberBetween(1, 5) . '.jpg',
            'date' => fake()->dateTimeBetween('-6 months', 'now'),
            'news_headline' => $headline,
            'news_content' => $contents[$index],
            'tag' => json_encode($tags[$index]),
            'slug' => Str::slug($headline) . '-' . fake()->unique()->numberBetween(1, 100),
            'user_id' => User::first()?->id ?? 1,
        ];
    }
}
