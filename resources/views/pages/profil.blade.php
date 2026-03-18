@extends('layouts.app')

@section('title', 'HIMASI – Profil')

@section('content')
    <section
        class="bg-gradient-to-b from-primary-200 to-white relative flex flex-col justify-center items-center p-0 md:px-0 py-15 select-none overflow-hidden">
        <h1
            class="w-full text-2xl md:text-[15.8vw] p-0 m-0 font-poppins text-white font-semibold whitespace-nowrap leading-none text-center">
            Profil HIMASI</h1>
        <!-- <p
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 inline-flex items-center gap-2 bg-primary-200 text-white font-poppins font-medium px-5 py-3 rounded-full shadow-lg">
            Profile
        </p> -->
    </section>

    {{-- Short Description --}}
    <header class="min-h-[65vh] w-full flex items-center justify-center gap-20 px-20 pb-10 select-none">
        <div class="max-w-5xl flex items-center justify-center gap-20">
            <div class="flex-shrink-0">
                <img src="img/logo-himasi.png" alt="HIMASI Logo" class="w-64 md:w-76">
            </div>
    
            <div class="max-w-2xl text-center md:text-left">
                <h1 class="text-2xl md:text-3xl font-semibold text-primary-300 font-poppins">Himpunan Mahasiswa Sistem Informasi
                </h1>
                <div class="h-1 bg-primary-200 mt-3 mx-auto md:ml-0 w-24 md:w-[200px]"></div>
                <p class="mt-4 text-primary-300 font-poppins text-justify">
                    <span class="font-semibold">HIMASI</span> adalah Himpunan Mahasiswa Program Studi Sistem Informasi yang
                    dibentuk
                    dengan tujuan untuk menyalurkan aspirasi mahasiswa Program Studi Sistem Informasi di
                    <span class="font-semibold">UNIVERSITAS AMIKOM Yogyakarta</span>. HIMASI berkedudukan di kampus <span
                        class="font-semibold">UNIVERSITAS
                        AMIKOM Yogyakarta</span>, dan akan tetap berdiri selama masih ada mahasiswa Program Studi
                    Sistem Informasi.
                </p>
            </div>
        </div>
    </header>
    {{-- End Short Description --}}

    {{-- Visi & Misi --}}
    <section class="bg-primary-600 flex flex-col font-poppins items-center w-full gap-5 p-20 select-none">
    
        <div class="text-center pb-6">
            <h2 class="text-4xl font-semibold text-white font-poppins">Visi & Misi</h2>
            <div class="w-24 h-1 bg-yellow-500 mx-auto mt-2"></div>
        </div>

        <div class="bg-white max-w-5xl p-8 shadow-md rounded-lg">
            <h3 class="text-2xl font-bold text-primary-300">VISI</h3>
            <div class="w-12 h-1 bg-yellow-500 mt-1"></div>
            <p class="mt-5 text-primary-300">Menjadikan himpunan mahasiswa sistem informasi sebagai
                wadah pemersatu, penampung, aspirasi dan penyalur bakat mahasiswa. Prodi sistem informasi
                sehingga terwujud himpunan yang solid dan bersinergi.</p>
        </div>

        <div class="bg-white max-w-5xl p-8 shadow-md rounded-lg">
            <h3 class="text-2xl font-bold text-primary-300">MISI</h3>
            <div class="w-12 h-1 bg-yellow-500 mt-1"></div>
            <ul class="mt-5 text-primary-300 list-decimal list-inside space-y-2">
                <li>Menjadi wadah kegiatan, penyalur aspirasi, minat, bakat dan tempat tukar pikiran dengan asas
                    kekeluargaan.</li>
                <li>Mengembangkan dan menyalurkan potensi dari setiap mahasiswa untuk maju dan berkembang.</li>
                <li>Menjalin hubungan yang baik dengan civitas, alumni, serta organisasi atau lembaga lainnya
                    khususnya di lingkungan Universitas Amikom Yogyakarta.</li>
                <li>Menyelenggarakan dan melanjutkan kegiatan yang dapat mendukung tercapainya mahasiswa yang
                    aktif, memiliki solidaritas, berwawasan dan keterampilan yang kompeten.</li>
            </ul>
        </div>
    </section>
    {{-- End Visi & Misi --}}

    {{-- Structur Organitation --}}
    <section class="bg-gradient-to-b from-primary-600 to-white pb-16 select-none">
        <div>
            <div class="flex justify-center">
                <img src="img/struktur-organisasi.png" alt="Struktur Organisasi"
                    class="w-full max-w-5xl shadow-lg rounded-lg">
            </div>
        </div>
    </section>
    {{-- End Structur Organitation --}}

@endsection

