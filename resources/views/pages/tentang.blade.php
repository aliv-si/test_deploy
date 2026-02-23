@extends('layouts.app')

@section('title', 'Tentang Kami - HIMASI')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-primary-400 to-primary-600 py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-4xl lg:text-5xl font-bold mb-4">Tentang HIMASI</h1>
            <p class="text-lg opacity-90 max-w-2xl mx-auto">
                Mengenal lebih dekat Himpunan Mahasiswa Sistem Informasi
            </p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-primary-300 mb-6">Siapa Kami?</h2>
                    <p class="text-primary-900 mb-4">
                        HIMASI (Himpunan Mahasiswa Sistem Informasi) adalah organisasi kemahasiswaan yang mewadahi seluruh mahasiswa program studi Sistem Informasi.
                    </p>
                    <p class="text-primary-900 mb-4">
                        Kami berkomitmen untuk mengembangkan potensi mahasiswa melalui berbagai kegiatan akademik, pengembangan soft skill, dan kegiatan sosial yang bermanfaat.
                    </p>
                    <p class="text-primary-900">
                        Dengan semangat kebersamaan dan inovasi, kami terus berupaya memberikan kontribusi positif bagi mahasiswa dan masyarakat.
                    </p>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/about-image.jpg') }}" alt="Tentang HIMASI" class="rounded-2xl shadow-lg">
                    <div class="absolute -bottom-6 -left-6 bg-primary-400 text-white p-6 rounded-2xl shadow-lg">
                        <p class="text-3xl font-bold">10+</p>
                        <p class="text-sm">Tahun Berdiri</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="py-16 lg:py-24 bg-primary-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Vision -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="w-16 h-16 bg-primary-400 rounded-xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-primary-300 mb-4">Visi</h3>
                    <p class="text-primary-900">
                        Menjadi himpunan mahasiswa yang unggul, inovatif, dan berdaya saing tinggi dalam mengembangkan potensi mahasiswa di bidang Sistem Informasi.
                    </p>
                </div>

                <!-- Mission -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="w-16 h-16 bg-primary-500 rounded-xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-primary-300 mb-4">Misi</h3>
                    <ul class="text-primary-900 space-y-3">
                        <li class="flex items-start gap-3">
                            <span class="w-2 h-2 bg-primary-400 rounded-full mt-2 flex-shrink-0"></span>
                            <span>Menyelenggarakan kegiatan yang mendukung pengembangan akademik dan non-akademik mahasiswa.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-2 h-2 bg-primary-400 rounded-full mt-2 flex-shrink-0"></span>
                            <span>Membangun kerjasama dengan berbagai pihak untuk meningkatkan kualitas program kerja.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-2 h-2 bg-primary-400 rounded-full mt-2 flex-shrink-0"></span>
                            <span>Menciptakan lingkungan yang kondusif untuk belajar dan berorganisasi.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="section-header">
                <h2 class="section-title">Pengurus Inti</h2>
                <p class="section-subtitle">Tim yang berdedikasi untuk kemajuan HIMASI</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach([
                    ['nama' => 'Nama Ketua', 'jabatan' => 'Ketua Umum'],
                    ['nama' => 'Nama Wakil', 'jabatan' => 'Wakil Ketua'],
                    ['nama' => 'Nama Sekretaris', 'jabatan' => 'Sekretaris'],
                    ['nama' => 'Nama Bendahara', 'jabatan' => 'Bendahara'],
                ] as $pengurus)
                    <div class="text-center group">
                        <div class="relative overflow-hidden rounded-2xl mb-4">
                            <img src="{{ asset('images/default-avatar.jpg') }}" alt="{{ $pengurus['nama'] }}" class="w-full aspect-square object-cover group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary-400/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6">
                                <div class="flex gap-3">
                                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-primary-100 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-primary-100 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-primary-300">{{ $pengurus['nama'] }}</h3>
                        <p class="text-primary-900 text-sm">{{ $pengurus['jabatan'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
