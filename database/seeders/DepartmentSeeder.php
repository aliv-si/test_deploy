<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Member;
use App\Models\Position;
use App\Models\WorkProgram;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Department::truncate();
        Member::truncate();
        Position::truncate();
        WorkProgram::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Daftar Jabatan
        $positions = [
            ['id' => 1,  'name' => 'Ketua Umum',            'order' => 1],
            ['id' => 2,  'name' => 'Wakil Ketua',           'order' => 2],
            ['id' => 3,  'name' => 'Sekretaris',            'order' => 3],
            ['id' => 4,  'name' => 'Sekretaris 2',          'order' => 4],
            ['id' => 5,  'name' => 'Bendahara',             'order' => 5],
            ['id' => 6,  'name' => 'Bendahara 2',           'order' => 6],
            ['id' => 7,  'name' => 'Ketua Departemen',      'order' => 7],
            ['id' => 8,  'name' => 'Sekretaris Departemen',  'order' => 8],
            ['id' => 9,  'name' => 'Anggota',               'order' => 9],
            ['id' => 10, 'name' => 'Staff Muda',            'order' => 10],
        ];

        foreach ($positions as $pos) {
            Position::create($pos);
        }

        // Daftar Departemen
        $departments = [
            [
                'id_department' => 1,
                'name_department' => 'BPH',
                'full_name' => 'Badan Pengurus Harian',
                'profil' => 'Inti kepengurusan HIMASI yang bertanggung jawab atas koordinasi seluruh kegiatan organisasi.',
            ],
            [
                'id_department' => 2,
                'name_department' => 'Internal',
                'full_name' => 'Departemen Internal',
                'profil' => 'Departemen Internal bertugas memperkuat solidaritas dan hubungan antar anggota HIMASI.',
            ],
            [
                'id_department' => 3,
                'name_department' => 'Eksternal',
                'full_name' => 'Departemen Eksternal',
                'profil' => 'Departemen Eksternal menjalin hubungan dengan organisasi dan pihak luar kampus.',
            ],
            [
                'id_department' => 4,
                'name_department' => 'Aspirasi',
                'full_name' => 'Departemen Aspirasi',
                'profil' => 'Departemen Aspirasi mewadahi dan menyalurkan aspirasi mahasiswa Sistem Informasi.',
            ],
            [
                'id_department' => 5,
                'name_department' => 'IPTEK',
                'full_name' => 'Departemen IPTEK',
                'profil' => 'Departemen IPTEK fokus pada pengembangan ilmu pengetahuan dan teknologi mahasiswa.',
            ],
            [
                'id_department' => 6,
                'name_department' => 'Staff Muda',
                'full_name' => 'Staff Muda',
                'profil' => 'Staff Muda merupakan wadah kaderisasi untuk calon pengurus HIMASI selanjutnya.',
            ],
        ];

        foreach ($departments as $dept) {
            Department::create($dept);
        }

        // Dummy Proker Department
        $workPrograms = [
            // BPH
            ['name' => 'Rapat Koordinasi Bulanan', 'description' => 'Rapat bulanan seluruh pengurus untuk koordinasi kegiatan.', 'department_id' => 1, 'order' => 1],
            ['name' => 'Evaluasi Kinerja Departemen', 'description' => 'Evaluasi berkala terhadap kinerja setiap departemen.', 'department_id' => 1, 'order' => 2],
            ['name' => 'Penyusunan LPJ', 'description' => 'Menyusun laporan pertanggungjawaban kegiatan.', 'department_id' => 1, 'order' => 3],
            ['name' => 'Koordinasi Antar Departemen', 'description' => 'Menjembatani komunikasi antar departemen.', 'department_id' => 1, 'order' => 4],

            // Internal
            ['name' => 'Gathering HIMASI', 'description' => 'Acara kebersamaan seluruh anggota HIMASI.', 'department_id' => 2, 'order' => 1],
            ['name' => 'Pelatihan Soft Skill', 'description' => 'Pelatihan pengembangan kemampuan non-teknis.', 'department_id' => 2, 'order' => 2],
            ['name' => 'Family Day', 'description' => 'Kegiatan rekreasi bersama anggota HIMASI.', 'department_id' => 2, 'order' => 3],
            ['name' => 'Forum Diskusi Internal', 'description' => 'Wadah diskusi ide dan gagasan antar anggota.', 'department_id' => 2, 'order' => 4],

            // Eksternal
            ['name' => 'Kunjungan Industri', 'description' => 'Mengunjungi perusahaan teknologi untuk belajar langsung.', 'department_id' => 3, 'order' => 1],
            ['name' => 'Kolaborasi Antar Himpunan', 'description' => 'Kerja sama dengan himpunan lain.', 'department_id' => 3, 'order' => 2],
            ['name' => 'Networking Event', 'description' => 'Event pertemuan dengan profesional dan alumni.', 'department_id' => 3, 'order' => 3],

            // Aspirasi
            ['name' => 'Survey Kepuasan Mahasiswa', 'description' => 'Survey untuk menampung keluhan dan saran mahasiswa.', 'department_id' => 4, 'order' => 1],
            ['name' => 'Forum Aspirasi Mahasiswa', 'description' => 'Forum terbuka untuk menyampaikan aspirasi.', 'department_id' => 4, 'order' => 2],
            ['name' => 'Pengelolaan Kotak Saran', 'description' => 'Mengelola dan menindaklanjuti saran dari mahasiswa.', 'department_id' => 4, 'order' => 3],

            // IPTEK
            ['name' => 'Workshop Web Development', 'description' => 'Workshop pembuatan website untuk mahasiswa.', 'department_id' => 5, 'order' => 1],
            ['name' => 'Seminar Teknologi', 'description' => 'Seminar menghadirkan pembicara dari industri IT.', 'department_id' => 5, 'order' => 2],
            ['name' => 'Hackathon Internal', 'description' => 'Kompetisi coding antar mahasiswa Sistem Informasi.', 'department_id' => 5, 'order' => 3],
            ['name' => 'Study Group Pemrograman', 'description' => 'Kelompok belajar pemrograman bersama.', 'department_id' => 5, 'order' => 4],
            ['name' => 'Tech Talk Series', 'description' => 'Seri presentasi tentang tren teknologi terbaru.', 'department_id' => 5, 'order' => 5],

            // Staff Muda
            ['name' => 'Pelatihan Kepemimpinan', 'description' => 'Pelatihan dasar kepemimpinan untuk staff muda.', 'department_id' => 6, 'order' => 1],
            ['name' => 'Orientasi Organisasi', 'description' => 'Pengenalan struktur dan budaya organisasi HIMASI.', 'department_id' => 6, 'order' => 2],
            ['name' => 'Project Mini Staff Muda', 'description' => 'Project kecil untuk melatih kemampuan berorganisasi.', 'department_id' => 6, 'order' => 3],
        ];

        foreach ($workPrograms as $wp) {
            WorkProgram::create($wp);
        }

        // Data Anggota
        $members = [
            // BPH
            ['name' => 'Decky Umbariksa', 'position_id' => 1, 'department_id' => 1, 'instagram' => '@mangdeccc', 'photo' => 'members/ahmad.png', 'photo_hover' => 'members/ahmad_hover.png'],
            ['name' => 'Rahmat Ramadhan', 'position_id' => 2, 'department_id' => 1, 'instagram' => '@393foru'],
            ['name' => 'Dian Indah Safitri', 'position_id' => 3, 'department_id' => 1, 'instagram' => '@indaahhaa'],
            ['name' => 'Rezza Alfat Harya Sambada', 'position_id' => 4, 'department_id' => 1, 'instagram' => '@zzaref.al_'],
            ['name' => 'Nailah Putri Alidya', 'position_id' => 5, 'department_id' => 1, 'instagram' => '@nailahaldya'],
            ['name' => 'Revalia Zalzabila Andriana', 'position_id' => 6, 'department_id' => 1, 'instagram' => '@revaliazaa'],

            // Internal
            ['name' => 'Dimas Muhammad Rofiq', 'position_id' => 7, 'department_id' => 2, 'instagram' => '@dimasmrofiq_'],
            ['name' => 'Anna Theresia Ekaputri Rettobjaan', 'position_id' => 8, 'department_id' => 2, 'instagram' => '@annatheresiaa_'],
            ['name' => 'Margareta Dwi Anisa', 'position_id' => 9, 'department_id' => 2, 'instagram' => '@artnssaa'],
            ['name' => "Muhammad Nu'man Zain", 'position_id' => 9, 'department_id' => 2, 'instagram' => '@nivz19'],
            ['name' => 'Muhammad Ikliluddin Darmawan', 'position_id' => 9, 'department_id' => 2, 'instagram' => '@dmuhammadwawan'],
            ['name' => 'Muhammad Ilham Fauzan', 'position_id' => 9, 'department_id' => 2, 'instagram' => '@fauzan.milham1'],
            ['name' => 'Suhail Sadiq Syawie', 'position_id' => 9, 'department_id' => 2],

            // Eksternal
            ['name' => 'Ahmad Zaenuri Zafa Muzaky', 'position_id' => 7, 'department_id' => 3, 'instagram' => '@zaenurizaa'],
            ['name' => 'Andhara Elirica Aliyah Putri', 'position_id' => 8, 'department_id' => 3, 'instagram' => '@dwaraa_'],
            ['name' => 'Edho Bima Putra', 'position_id' => 9, 'department_id' => 3, 'instagram' => '@vbreeeee'],
            ['name' => 'Ramaditya Joya Perdana', 'position_id' => 9, 'department_id' => 3, 'instagram' => '@ramaditya7'],
            ['name' => 'Marselus Sarong', 'position_id' => 9, 'department_id' => 3, 'instagram' => '@mrselussarong'],
            ['name' => 'Rafi Wibowo', 'position_id' => 9, 'department_id' => 3, 'instagram' => '@fulbusternevan'],
            ['name' => 'Muhammad Nur Ilham', 'position_id' => 9, 'department_id' => 3, 'instagram' => '@ilham_nz'],

            // Aspirasi
            ['name' => 'Husnan Hidayat', 'position_id' => 7, 'department_id' => 4, 'instagram' => '@husnanhdt'],
            ['name' => 'Alfathya Viandra Safawi', 'position_id' => 8, 'department_id' => 4, 'instagram' => '@thhhhyyyya_'],
            ['name' => 'M Fahri Hasan Nurcahyadi', 'position_id' => 9, 'department_id' => 4, 'instagram' => '@fahrii.hasan'],
            ['name' => 'Noor Muhammad Ilham Liduadji', 'position_id' => 9, 'department_id' => 4, 'instagram' => '@hamadjie'],
            ['name' => 'Dorasti Riski Margaretha Simanjuntak', 'position_id' => 9, 'department_id' => 4, 'instagram' => '@doraaaaa.smjtk'],
            ['name' => 'Rahma Apta Karisa', 'position_id' => 9, 'department_id' => 4, 'instagram' => '@apt_k'],

            // IPTEK
            ['name' => 'Alief Fathin Adi Kusuma', 'position_id' => 7, 'department_id' => 5, 'instagram' => '@kayreh.11'],
            ['name' => 'Nelson Raymond', 'position_id' => 8, 'department_id' => 5, 'instagram' => '@nelsonraymnd'],
            ['name' => 'Muhammad Hafidz Akmal', 'position_id' => 9, 'department_id' => 5, 'instagram' => '@hafidzakmal175'],
            ['name' => 'Fawwazrijal Hadi Nashiruddin Hasan', 'position_id' => 9, 'department_id' => 5, 'instagram' => '@fwzreza_'],
            ['name' => 'Anugrah Sulis Setiaji', 'position_id' => 9, 'department_id' => 5, 'instagram' => '@anugrahss_15'],
            ['name' => "Najib A'roof Ulinnuha", 'position_id' => 9, 'department_id' => 5, 'instagram' => '@nnajibb_'],

            // Staff Muda
            ['name' => 'Massaid Ihsan Kinandani', 'position_id' => 10, 'department_id' => 6, 'instagram' => '@massasihhh'],
            ['name' => 'Naufal Hamdani', 'position_id' => 10, 'department_id' => 6, 'instagram' => '@iamnofall'],
            ['name' => "Wezha Sha'ban Vallenzi", 'position_id' => 10, 'department_id' => 6, 'instagram' => '@wzhvllnzi'],
            ['name' => 'Dwi Yoga Zulfan Anggara', 'position_id' => 10, 'department_id' => 6, 'instagram' => '@zulfffan_'],
            ['name' => 'Faza Akmal Alfithra', 'position_id' => 10, 'department_id' => 6, 'instagram' => '@fazaakmal27'],
            ['name' => 'Muhammad Iqbal', 'position_id' => 10, 'department_id' => 6, 'instagram' => '@m.iiqbaall_'],
            ['name' => 'Dwi Eva Yuliana', 'position_id' => 10, 'department_id' => 6, 'instagram' => '@_vaylna'],
            ['name' => 'Niha Royatoe Sholihah', 'position_id' => 10, 'department_id' => 6, 'instagram' => '@niha.ryt_'],
            ['name' => 'Fadel Muhammad Santoso', 'position_id' => 10, 'department_id' => 6, 'instagram' => '@gatotperkasa420'],
            ['name' => 'Chiquita Nabilla Purnamaningtyas', 'position_id' => 10, 'department_id' => 6, 'instagram' => '@macquitas'],
            ['name' => 'Althaf Ahmad Tajudin', 'position_id' => 10, 'department_id' => 6, 'instagram' => '@althafahmadt'],
            ['name' => 'Alifa Haiyunadara', 'position_id' => 10, 'department_id' => 6],
            ['name' => 'Wilgipson Maga', 'position_id' => 10, 'department_id' => 6, 'instagram' => '@wilgipson22'],
        ];

        foreach ($members as $member) {
            Member::create($member);
        }
    }
}
