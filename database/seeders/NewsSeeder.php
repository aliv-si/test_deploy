<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::truncate();

        $user = User::first();

        $newsList = [
            [
                'news_headline' => 'HIMASI Gelar Musyawarah Besar 2026',
                'news_content' => 'Himpunan Mahasiswa Sistem Informasi (HIMASI) sukses menggelar Musyawarah Besar (Mubes) 2026 di Gedung Serbaguna Universitas Amikom Yogyakarta. Acara ini dihadiri oleh seluruh anggota aktif HIMASI dan menghasilkan kepengurusan baru periode 2026/2027. Ketua terpilih menyampaikan visi misi untuk membawa HIMASI lebih maju dan berdampak.',
                'tag' => ['Event', 'Organisasi', 'Musyawarah'],
                'date' => '2026-02-15',
                'image_news' => 'news/mubes.png',
            ],
            [
                'news_headline' => 'Workshop Web Development Bersama HIMASI',
                'news_content' => 'Departemen IPTEK HIMASI mengadakan workshop Web Development yang diikuti lebih dari 50 mahasiswa Sistem Informasi. Workshop ini membahas teknologi terkini seperti Laravel, React, dan Tailwind CSS. Peserta mendapatkan pengalaman langsung membangun aplikasi web dari nol hingga deploy.',
                'tag' => ['Event', 'Workshop', 'IPTEK'],
                'date' => '2026-02-20',
                'image_news' => 'news/workshop.png',
            ],
            [
                'news_headline' => 'HIMASI Raih Juara di Kompetisi Hackathon Nasional',
                'news_content' => 'Tim dari HIMASI berhasil meraih juara 2 dalam Hackathon Nasional yang diadakan di Jakarta. Tim yang terdiri dari 4 mahasiswa Sistem Informasi ini berhasil mengembangkan aplikasi solusi smart campus dalam waktu 48 jam. Prestasi ini membuktikan kualitas mahasiswa SI Amikom di kancah nasional.',
                'tag' => ['Berita', 'Prestasi', 'Hackathon'],
                'date' => '2026-01-28',
                'image_news' => 'news/hackathon.png',
            ],
            [
                'news_headline' => 'Kunjungan Industri ke PT Telkom Indonesia',
                'news_content' => 'Departemen Eksternal HIMASI mengadakan kunjungan industri ke kantor PT Telkom Indonesia di Bandung. Sebanyak 30 mahasiswa berkesempatan melihat langsung proses kerja di divisi IT dan berdiskusi dengan para profesional. Kegiatan ini bertujuan memberikan wawasan dunia kerja kepada mahasiswa.',
                'tag' => ['Event', 'Eksternal', 'Kunjungan Industri'],
                'date' => '2026-01-15',
                'image_news' => 'news/kunjungan.png',
            ],
            [
                'news_headline' => 'Seminar Teknologi: AI dan Masa Depan Sistem Informasi',
                'news_content' => 'HIMASI menggelar seminar teknologi bertema "AI dan Masa Depan Sistem Informasi" yang menghadirkan pembicara dari Google Indonesia dan Tokopedia. Seminar ini membahas bagaimana kecerdasan buatan akan mengubah lanskap pekerjaan di bidang sistem informasi dan bagaimana mahasiswa bisa mempersiapkan diri.',
                'tag' => ['Event', 'Seminar', 'Teknologi', 'AI'],
                'date' => '2026-02-10',
                'image_news' => 'news/seminar_ai.png',
            ],
            [
                'news_headline' => 'Gathering HIMASI 2026: Mempererat Silaturahmi',
                'news_content' => 'Departemen Internal HIMASI sukses menggelar acara Gathering tahunan yang diikuti lebih dari 100 anggota. Acara berlangsung di area wisata Kaliurang dengan berbagai kegiatan outbound, games, dan sharing session. Kegiatan ini bertujuan mempererat hubungan antar anggota HIMASI dari berbagai angkatan.',
                'tag' => ['Event', 'Internal', 'Gathering'],
                'date' => '2026-02-05',
                'image_news' => 'news/gathering.png',
            ],
            [
                'news_headline' => 'Forum Aspirasi Mahasiswa SI Semester Genap',
                'news_content' => 'Departemen Aspirasi HIMASI menyelenggarakan Forum Aspirasi Mahasiswa untuk menampung keluhan dan saran terkait proses perkuliahan semester genap. Forum ini menghasilkan beberapa rekomendasi yang akan disampaikan kepada pihak kampus untuk perbaikan kualitas akademik.',
                'tag' => ['Berita', 'Aspirasi', 'Forum'],
                'date' => '2026-02-25',
                'image_news' => 'news/aspirasi.png',
            ],
            [
                'news_headline' => 'Pelatihan Kepemimpinan untuk Staff Muda HIMASI',
                'news_content' => 'Staff Muda HIMASI mengikuti pelatihan kepemimpinan yang diadakan selama dua hari. Pelatihan ini meliputi materi public speaking, manajemen waktu, teamwork, dan problem solving. Kegiatan ini merupakan bagian dari program kaderisasi untuk mempersiapkan generasi penerus kepengurusan HIMASI.',
                'tag' => ['Berita', 'Staff Muda', 'Pelatihan'],
                'date' => '2026-01-20',
                'image_news' => 'news/pelatihan.png',
            ],
            [
                'news_headline' => 'Lomba Desain UI/UX Tingkat Mahasiswa',
                'news_content' => 'HIMASI menyelenggarakan Lomba Desain UI/UX antar mahasiswa dengan tema "Inovasi Aplikasi Edukasi Masa Depan". Acara ini dimeriahkan oleh puluhan peserta yang menampilkan berbagai prototipe aplikasi yang unik dan inovatif. Pemenang lomba diumumkan pada acara puncak Inagurasi mahasiswa baru.',
                'tag' => ['Event', 'Lomba', 'UI/UX', 'Desain'],
                'date' => '2026-03-01',
                'image_news' => 'news/uiux_lomba.png',
            ],
            [
                'news_headline' => 'Sosialisasi PKM 2026: Strategi Lolos Pendanaan',
                'news_content' => 'Departemen Pendidikan dan Penalaran HIMASI menggelar sosialisasi Program Kreativitas Mahasiswa (PKM) tahun 2026. Narasumber yang dihadirkan adalah dosen pembimbing PKM yang berpengalaman, serta tim mahasiswa yang sukses mendapatkan pendanaan tahun lalu.',
                'tag' => ['Berita', 'Sosialisasi', 'PKM', 'Pendidikan'],
                'date' => '2026-03-05',
                'image_news' => 'news/sosialisasi_pkm.png',
            ],
            [
                'news_headline' => 'Bakti Sosial HIMASI: Berbagi dengan Sesama',
                'news_content' => 'Sebagai bentuk pengabdian kepada masyarakat, HIMASI mengadakan kegiatan Bakti Sosial di Panti Asuhan Yogyakarta. Mahasiswa membagikan sembako, pakaian layak pakai, serta buku-buku bacaan. Kegiatan ini diharapkan dapat meringankan beban saudara-saudara yang membutuhkan.',
                'tag' => ['Event', 'Sosial', 'Pengabdian'],
                'date' => '2026-03-10',
                'image_news' => 'news/baksos.png',
            ],
            [
                'news_headline' => 'Peluncuran Website Resmi HIMASI 2026',
                'news_content' => 'HIMASI secara resmi meluncurkan website barunya yang dikembangkan oleh tim internal Departemen IPTEK. Website ini akan menjadi pusat informasi seputar kegiatan himpunan, bank soal, dan forum aspirasi mahasiswa. Mahasiswa kini dapat mengakses berbagai layanan akademik non-formal dengan lebih mudah.',
                'tag' => ['Berita', 'Website', 'Teknologi'],
                'date' => '2026-03-16',
                'image_news' => 'news/launching_web.png',
            ],
        ];

        foreach ($newsList as $news) {
            $headline = $news['news_headline'];
            News::create([
                'news_headline' => $headline,
                'news_content' => $news['news_content'],
                'tag' => $news['tag'],
                'date' => $news['date'],
                'slug' => Str::slug($headline),
                'image_news' => $news['image_news'],
                'user_id' => $user->id,
            ]);
        }
    }
}
