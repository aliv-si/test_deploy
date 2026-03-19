<p align="center">
  <img src="public/img/logo-himasi.png" alt="Logo HIMASI" width="80">
  &nbsp;&nbsp;&nbsp;
  <img src="public/img/logo-si.png" alt="Logo Sistem Informasi AMIKOM" width="80">
</p>

# HIMASI Website

Website resmi **Himpunan Mahasiswa Sistem Informasi (HIMASI)** Universitas AMIKOM Yogyakarta. Dibangun sebagai platform informasi organisasi yang mencakup profil departemen, berita, bank soal, dan ruang aspirasi mahasiswa.

## Tech Stack

| Kategori           | Teknologi    | Versi      |
| ------------------ | ------------ | ---------- |
| Framework          | Laravel      | ^11.31     |
| Admin Panel        | Filament     | ^3.2       |
| CSS Framework      | Tailwind CSS | ^4.0       |
| Build Tool         | Vite         | ^6.0       |
| JS Interactivity   | Alpine.js    | ^3.x (CDN) |
| Alert/Notification | SweetAlert2  | ^11.21     |
| Database           | MySQL        | -          |
| PHP                | PHP          | ^8.2       |

## Prerequisites

Sebelum menjalankan project ini, pastikan sudah menginstall:

- **PHP** >= 8.2 (dengan ekstensi: BCMath, Ctype, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML)
- **Composer** >= 2.x
- **Node.js** >= 18.x & **npm**
- **MySQL** >= 8.0
- **Git**

> **Rekomendasi**: Gunakan [Laragon](https://laragon.org/) (Windows) untuk setup local development yang sudah include PHP, MySQL, dan Apache/Nginx.

## Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/aliv-si/himasi-website.git
cd himasi-website
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit file `.env` sesuai konfigurasi database lokal:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Setup Database

Buat database MySQL sesuai `nama_database`, lalu jalankan:

```bash
php artisan migrate
php artisan db:seed
```

### 5. Storage Link

```bash
php artisan storage:link
```

### 6. Jalankan Development Server

```bash
# Cara 1: Jalankan semua service sekaligus (recommended)
composer dev

# Cara 2: Jalankan manual di terminal terpisah
php artisan serve        # Terminal 1
npm run dev              # Terminal 2
```

Akses website di `http://localhost:8000`

## Struktur Project

```
himasi-website/
├── app/
│   ├── Filament/Resources/       # Admin panel resources (CRUD)
│   ├── Http/Controllers/         # Controller untuk frontend
│   ├── Models/                   # Eloquent models
│   └── Providers/
├── database/
│   ├── migrations/               # Skema database
│   └── seeders/                  # Data dummy & default
├── public/
│   ├── img/                      # Asset gambar statis
│   └── storage -> storage/app/public  # Symlink ke storage
├── resources/
│   ├── css/app.css               # Stylesheet utama (Tailwind v4)
│   ├── js/app.js                 # JavaScript utama
│   └── views/
│       ├── layouts/app.blade.php # Layout utama (navbar + footer)
│       ├── pages/                # Halaman-halaman frontend
│       └── partials/             # Komponen reusable (navbar, footer, preloader)
├── routes/web.php                # Semua route frontend
└── vite.config.js                # Konfigurasi Vite + Tailwind
```

## Halaman & Route

| Route               | Controller                     | View                  | Deskripsi                         |
| ------------------- | ------------------------------ | --------------------- | --------------------------------- |
| `/`                 | `HomeController@index`         | `pages.index`         | Homepage                          |
| `/profil`           | Closure                        | `pages.profil`        | Profil organisasi                 |
| `/department`       | `DepartmentController@index`   | `pages.department`    | Daftar departemen & anggota       |
| `/berita`           | `NewsController@index`         | `pages.berita`        | Daftar berita                     |
| `/berita/{slug}`    | `NewsController@show`          | `pages.detail-berita` | Detail berita                     |
| `/berita/tag/{tag}` | `NewsController@category`      | -                     | Filter berita berdasarkan tag     |
| `/aspirasi`         | `AspirationController@index`   | `pages.aspirasi`      | Form aspirasi (standalone layout) |
| `/banksoal`         | `QuestionBankController@index` | `pages.bank-soal`     | Bank soal                         |

> **Catatan**: Halaman aspirasi (`aspirasi.blade.php`) menggunakan **layout mandiri** (tidak extend `layouts.app`).

## Database Schema

### Entity Relationship

```
users ──────────┐
                ├──< news (user_id)
                └──< question_banks (user_id)

departments ────┐
                ├──< members (department_id)
                └──< work_programs (department_id)

positions ──────┘──< members (position_id)

aspirations (standalone)
```

### Tabel Utama

| Tabel            | PK              | Kolom Penting                                                                            | Relasi                          |
| ---------------- | --------------- | ---------------------------------------------------------------------------------------- | ------------------------------- |
| `departments`    | `id_department` | `name_department`, `full_name`, `profil`                                                 | has many members, work_programs |
| `members`        | `id`            | `name`, `photo`, `photo_hover`, `instagram`                                              | belongs to department, position |
| `positions`      | `id`            | `name`                                                                                   | has many members                |
| `work_programs`  | `id`            | `name`, `description`, `order`                                                           | belongs to department           |
| `news`           | `id_news`       | `news_headline`, `news_content`, `slug`, `tag` (JSON), `image_news`, `date`              | belongs to user                 |
| `aspirations`    | `id_aspiration` | `email_student`, `class`, `aspiration`, `is_anonymous`, `date`                           | standalone                      |
| `question_banks` | `id_soal`       | `subject`, `subject_code`, `semester`, `category` (uts/uas), `tahun_ajaran`, `nama_file` | belongs to user                 |

> **Perhatian**: Beberapa tabel menggunakan custom primary key (misalnya `id_department`, `id_news`, `id_soal`, `id_aspiration`), bukan default `id`. Pastikan model menggunakan `protected $primaryKey` yang sesuai.

## Admin Panel (Filament)

Admin panel tersedia di `/admin` menggunakan **Filament v3**. Resource yang tersedia:

| Resource               | Model        | Fitur                              |
| ---------------------- | ------------ | ---------------------------------- |
| `AspirationResource`   | Aspiration   | View & manage aspirasi masuk       |
| `DepartmentResource`   | Department   | CRUD departemen + anggota + proker |
| `NewsResource`         | News         | CRUD berita dengan image upload    |
| `QuestionBankResource` | QuestionBank | CRUD bank soal dengan file upload  |

### Login Admin

Buat akun admin Filament:

```bash
php artisan make:filament-user
```

## Seeders

| Seeder               | Deskripsi                                                         |
| -------------------- | ----------------------------------------------------------------- |
| `DatabaseSeeder`     | Menjalankan semua seeder + membuat test user (`test@example.com`) |
| `DepartmentSeeder`   | Data departemen, posisi, anggota, dan program kerja               |
| `NewsSeeder`         | Data dummy berita                                                 |
| `QuestionBankSeeder` | Data dummy bank soal                                              |

```bash
# Jalankan semua seeder
php artisan db:seed

# Jalankan seeder tertentu
php artisan db:seed --class=DepartmentSeeder

# Reset database + seed ulang
php artisan migrate:fresh --seed
```

## Frontend Architecture

### Layout System

- **`layouts/app.blade.php`** — Layout utama dengan navbar & footer
- **`partials/navbar.blade.php`** — Navigasi utama
- **`partials/footer.blade.php`** — Footer
- **`partials/preloader.blade.php`** — Preloader & page transition overlay

### Preloader & Page Transition

Website menggunakan animasi preloader dan transisi antar halaman:

- **Preloader** (first visit): Background biru dengan teks "Adaptif, Inovatif, Kreatif" yang muncul berurutan (Apple-style text reveal), lalu dua sheet (biru & kuning) bergeser ke atas
- **Page Transition**: Klik link internal → sheet kuning & biru naik menutupi layar → navigasi → sheet biru & kuning geser ke atas untuk reveal halaman baru
- Preloader hanya muncul sekali per session (`sessionStorage`)
- Konfigurasi animasi ada di `app.css` (keyframes) dan `app.js` (logic)

### Styling

- **Tailwind CSS v4** dengan custom theme di `app.css` (`@theme` directive)
- Color palette menggunakan `oklch()` color space
- Font: Poppins (primary), Lato, Space Grotesk, Albert Sans

### JavaScript

- `app.js` menangani: preloader, page transition, slider, mobile menu, form aspirasi (AJAX + SweetAlert2)
- Alpine.js digunakan untuk interaktivitas deklaratif (tab departemen, dll.)

## File Upload & Storage

File yang di-upload tersimpan di `storage/app/public/`:

| Jenis          | Path Storage               | Diakses via                     |
| -------------- | -------------------------- | ------------------------------- |
| Foto anggota   | `storage/app/public/`      | `asset('storage/...')`          |
| Gambar berita  | `storage/app/public/`      | `asset('storage/...')`          |
| File bank soal | `storage/app/public/soal/` | Route `/banksoal/download/{id}` |

> Pastikan sudah menjalankan `php artisan storage:link` agar file bisa diakses dari web.

## Development Tips

### Useful Commands

```bash
# Development server (all-in-one)
composer dev

# Clear semua cache
php artisan optimize:clear

# Build production assets
npm run build

# Format Blade files
npx prettier --write resources/views/**/*.blade.php
```

### Catatan Penting

1. **Custom Primary Keys** — Beberapa model menggunakan PK non-standar (`id_department`, `id_news`, `id_soal`, `id_aspiration`). Saat membuat relasi baru, perhatikan nama kolom FK-nya.

2. **Tailwind v4** — Menggunakan `@theme` dan `@source` directive yang hanya dikenali oleh Tailwind v4. IDE mungkin menampilkan warning "Unknown at rule" — ini normal dan bisa diabaikan.

3. **Standalone Page** — `aspirasi.blade.php` tidak menggunakan `layouts.app`, jadi perubahan pada layout tidak berlaku di halaman ini. Jika menambahkan partial baru, pastikan juga include di halaman aspirasi.

4. **Image Assets** — Gambar statis (logo, background, dll.) ada di `public/img/`. Gambar yang di-upload user/admin ada di `storage/app/public/`.

5. **Prettier** — Project menggunakan Prettier dengan plugin Blade (`@shufo/prettier-plugin-blade`) untuk formatting. Konfigurasi ada di `.prettierrc`.

## Kontributor

**Departemen IPTEK HIMASI Periode 26** — Universitas AMIKOM Yogyakarta
