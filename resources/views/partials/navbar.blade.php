<header
    class="sticky top-0 z-50 w-full border-[#f1f2f4] dark:border-gray-800 bg-white/80 dark:bg-background-dark/80 select-none">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 backdrop-blur-md">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="img/logo-himasi.png" alt="HIMASI Logo" class="h-8 w-8">
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
                <li><a href="/department"
                        class="relative hover:text-primary-600 font-poppins font-medium group">Departemen
                        <span
                            class="absolute left-0 bottom-0 w-0 h-0.5 bg-primary-200 transition-all group-hover:w-full"></span></a>
                </li>
                <li><a href="/berita" class="relative hover:text-primary-600 font-poppins font-medium group">Berita
                        <span
                            class="absolute left-0 bottom-0 w-0 h-0.5 bg-primary-200 transition-all group-hover:w-full"></span></a>
                </li>
                <!-- <li><a href="/banksoal" class="relative hover:text-primary-600 font-poppins font-medium group">Bank
                        Soal
                        <span
                            class="absolute left-0 bottom-0 w-0 h-0.5 bg-primary-200 transition-all group-hover:w-full"></span></a>
                </li> -->
            </ul>
            <!-- CTA -->
            <div class="flex items-center gap-4">
                <a href="#aspirasi-section"
                    class="group relative hidden md:flex h-10 w-10 items-center justify-center rounded-lg bg-primary-200 text-primary-300 shadow-sm hover:bg-primary-600 hover:text-white transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
                    </svg>
                    <!-- Custom Tooltip -->
                    <span
                        class="pointer-events-none absolute -bottom-10 left-1/2 -translate-x-1/2 px-3 py-1.5 bg-primary-300 text-white text-xs font-medium rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 whitespace-nowrap shadow-lg">
                        Kotak Aspirasi
                        <span class="absolute -top-1 left-1/2 -translate-x-1/2 w-2 h-2 bg-primary-300 rotate-45"></span>
                    </span>
                </a>
                <!-- Hamburger Button (Mobile) -->
                <button id="menu-toggle" class="md:hidden focus:outline-none cursor-pointer">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="absolute top-full left-0 w-full bg-white/90 backdrop-blur-md shadow-lg hidden md:hidden z-50 transition-all ease-in-out duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <ul class="flex flex-col space-y-3 py-4 text-primary-300">
                <li><a href="/" class="block font-poppins font-medium pb-2">Home</a></li>
                <li><a href="/profil" class="block font-poppins font-medium pb-2">Profil</a></li>
                <li><a href="/department" class="block font-poppins font-medium pb-2">Departemen</a></li>
                <li><a href="/berita" class="block font-poppins font-medium pb-2">Berita</a></li>
                <li><a href="/banksoal" class="block font-poppins font-medium pb-2">Bank Soal</a></li>
            </ul>
        </div>
    </div>
</header>
