<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIMASI - {{ $department->name_department }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
</head>

<body class="bg-white">
    {{-- Navbar --}}
    <nav class="flex justify-between items-center px-6 py-4 shadow-md bg-white relative">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/logo-himasi.png') }}" alt="HIMASI Logo" class="h-8 w-8">
            <span class="text-xl font-poppins font-medium text-primary-300">HIMASI</span>
        </div>

        <!-- Navigation Links (Desktop) -->
        <ul class="hidden md:flex space-x-6 text-primary-300">
            <li><a href="/" class="relative hover:text-primary-600 font-poppins font-medium group">Home
                    <span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-primary-200 transition-all group-hover:w-full"></span></a>
            </li>
            <li><a href="/profil" class="relative hover:text-primary-600 font-poppins font-medium group">Profil
                    <span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-primary-200 transition-all group-hover:w-full"></span></a>
            </li>
            <li><a href="/department" class="relative hover:text-primary-600 font-poppins font-medium group">Departemen
                    <span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-primary-200 transition-all group-hover:w-full"></span></a>
            </li>
            <li><a href="/berita" class="relative hover:text-primary-600 font-poppins font-medium group">Berita
                    <span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-primary-200 transition-all group-hover:w-full"></span></a>
            </li>
            <li><a href="/banksoal" class="relative hover:text-primary-600 font-poppins font-medium group">Bank Soal
                    <span
                        class="absolute left-0 bottom-0 w-0 h-0.5 bg-primary-200 transition-all group-hover:w-full"></span></a>
            </li>
        </ul>

        <button id="menu-toggle" class="md:hidden focus:outline-none cursor-pointer">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="absolute top-full left-0 w-full bg-white shadow-lg hidden md:hidden z-50 transition-all ease-in-out duration-300">
            <ul class="flex flex-col space-y-3 p-4 text-primary-300">
                <li><a href="/" class="block font-poppins font-medium pb-2">Home</a></li>
                <li><a href="/profil" class="block font-poppins font-medium pb-2">Profil</a></li>
                <li><a href="/department" class="block font-poppins font-medium pb-2">Departemen</a></li>
                <li><a href="/berita" class="block font-poppins font-medium pb-2">Berita</a></li>
                <li><a href="/banksoal" class="block font-poppins font-medium pb-2">Bank Soal</a></li>
            </ul>
        </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Main content --}}
    <main>
        {{-- Detail Department --}}
        <section class="max-w-6xl mx-auto mt-6 p-4 pb-6">
            <!-- Breadcrumb Navigation -->
            <nav
                class="text-lg mb-4 flex flex-wrap items-center gap-x-1 sm:gap-x-2 overflow-x-auto px-4 sm:px-6 lg:px-8">
                <a href="/"
                    class="text-primary-600 hover:underline font-poppins font-medium whitespace-nowrap">Home</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4 text-primary-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                <a href="/department"
                    class="text-primary-300 hover:underline font-poppins font-medium whitespace-nowrap">Department</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4 text-primary-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                <p class="text-primary-300  font-poppins font-medium whitespace-nowrap">
                    {{ $department->name_department }}</p>
            </nav>

            <!-- Header Berita Terbaru dengan Garis Hitam -->
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-primary-300 font-poppins">
                    {{ $department->name_department }}</h2>
                <div class="w-24 h-1.5 bg-black mx-auto mt-2"></div>

                <div class="flex justify-center mt-8">
                    @if ($department->image_struktur)
                        <img src="{{ asset('storage/' . $department->image_struktur) }}"
                            alt="Struktur {{ $department->name_department }}"
                            class="w-full max-w-4xl shadow-lg rounded-lg">
                    @endif
                </div>
            </div>
        </section>

        <section class="px-6 py-12 bg-white">
            <div class="max-w-5xl mx-auto bg-gray-100 p-10 shadow-lg rounded-lg">
                <!-- Profil Departemen -->
                <div class="bg-white p-8 mt-8 shadow-md rounded-lg">
                    <h3 class="text-2xl font-bold text-primary-300 font-poppins">
                        Profil {{ $department->name_department }}
                    </h3>
                    <div class="w-full max-w-[250px] sm:max-w-[300px] md:max-w-[350px] h-1 bg-yellow-500 mt-1 sm:mt-2">
                    </div>
                    <div class="mt-4 text-primary-300 font-poppins prose max-w-none">
                        {!! $department->profil !!}
                    </div>

                </div>

                <!-- Program Kerja Departemen -->
                <div class="bg-white p-8 mt-6 shadow-md rounded-lg">
                    <h3 class="text-2xl font-bold text-primary-300 font-poppins">
                        Program Kerja {{ $department->name_department }}
                    </h3>
                    <div class="w-full max-w-[250px] sm:max-w-[300px] md:max-w-[350px] h-1 bg-yellow-500 mt-1 sm:mt-2">
                    </div>

                    @if ($department->work_program)
                        <ol class="mt-4 text-primary-300 list-decimal list-inside space-y-2 font-poppins">
                            @foreach (explode(',', $department->work_program) as $program)
                                <li>{{ trim($program) }}</li>
                            @endforeach
                        </ol>
                    @else
                        <p class="mt-4 text-primary-300/80 italic">
                            Belum ada program kerja yang ditambahkan
                        </p>
                    @endif
                </div>
            </div>
        </section>

        {{-- End Detail Department --}}

        {{-- Footer --}}
        <footer class="bg-white py-8">
            <div class="max-w-7xl mx-auto px-6 md:px-10">
                <!-- Card Footer -->
                <div class="bg-gray-100 p-6 rounded-xl shadow-lg">

                    <!-- Header Footer: Logo -->
                    <div class="flex items-center gap-x-3 pb-6">
                        <img src="{{ asset('img/logo-himasi.png') }}" alt="Logo Himasi" class="h-10">
                        <img src="{{ asset('img/logo-si.png') }}" alt="Logo Sistem Informasi" class="h-10">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                        <!--  Universitas & Navigasi -->
                        <div>
                            <h3 class="font-medium font-poppins text-lg">Universitas Amikom Yogyakarta</h3>
                            <p class="text-primary-300 font-poppins">Sistem Informasi</p>
                            <p class="text-primary-300 font-poppins">
                                Instagram Prodi :
                                <a href="https://www.instagram.com/si.amikom" class="text-blue-600">@si.amikom</a>
                            </p>
                            <h3 class="font-meidum font-poppins text-lg mt-4">Navigation</h3>
                            <ul class="text-gray-700 space-y-1 font-medium font-poppins">
                                <li><a href="/" class="hover:text-primary-600">&gt; Home</a></li>
                                <li><a href="/profil" class="hover:text-primary-600">&gt; Profil</a></li>
                                <li><a href="/department" class="hover:text-primary-600">&gt; Departemen</a></li>
                                <li><a href="/berita" class="hover:text-primary-600">&gt; Berita</a></li>
                                <li><a href="/banksoal" class="hover:text-primary-600">&gt; Bank Soal</a></li>
                            </ul>
                        </div>

                        <!-- Address & Social Media -->
                        <div>
                            <h3 class="font-medium font-poppins text-lg">Address</h3>
                            <p class="text-primray-300 font-poppins">
                                Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman,<br>
                                Daerah Istimewa Yogyakarta 55281
                            </p>
                            <h3 class="text-lg font-medium font-poppins mt-4">Social Media</h3>
                            <div class="flex space-x-4 mt-2">
                                <a href="https://www.instagram.com/himasiamikom" class="text-blue-600 text-xl"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path
                                            d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                        </path>
                                        <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                        <path
                                            d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                        </path>
                                    </svg></a>
                                <a href="#" class="text-blue-600 text-xl"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path
                                            d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>

                        <div>
                            <iframe class="w-full h-48 md:h-full rounded-lg "
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.281831557606!2d110.40688116996652!3d-7.759905827479537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas%20Amikom%20Yogyakarta!5e0!3m2!1sid!2sid!4v1739096462499!5m2!1sid!2sid"
                                allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>

                    <!-- Garis & Copyright (Sekarang di dalam Card) -->
                    <div class="border-t border-black mt-6 pt-4 text-center">
                        <p class="text-primary-300 font-medium font-poppins">
                            &copy; HIMASI <span class="font-bold">2025</span>. All Rights Reserved
                        </p>
                    </div>

                </div>
            </div>
        </footer>
        {{-- End Footer --}}
    </main>
    {{-- End Main content --}}
    <script src="js/script.js"></script>
</body>

</html>

