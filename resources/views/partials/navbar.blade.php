<header
    class="sticky top-0 z-50 w-full shadow-xs bg-white dark:bg-background-dark md:bg-white/80 md:dark:bg-background-dark/80 md:backdrop-blur-md select-none border-b border-transparent md:border-none dark:md:border-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex flex-1 items-center space-x-3">
                <img src="{{ asset('img/logo-himasi.png') }}" alt="HIMASI Logo" class="h-7 w-7">
                <span class="text-xl font-poppins font-medium text-primary-300">HIMASI</span>
            </div>
            <!-- Navigation Links (Desktop) -->
            <ul class="hidden md:flex space-x-6">
                <li><a href="/"
                        class="relative font-poppins font-medium group hover:text-primary-600 {{ Request::is('/') ? 'text-primary-300' : 'text-gray-400' }}">Home
                        <span
                            class="absolute left-0 bottom-0 h-0.5 bg-primary-200 w-0 group-hover:w-full transition-all"></span></a>
                </li>
                <li><a href="/profil"
                        class="relative font-poppins font-medium group hover:text-primary-600 {{ Request::is('profil') ? 'text-primary-300' : 'text-gray-400' }}">Profil
                        <span
                            class="absolute left-0 bottom-0 h-0.5 bg-primary-200 w-0 group-hover:w-full transition-all"></span></a>
                </li>
                <li><a href="/department"
                        class="relative font-poppins font-medium group hover:text-primary-600 {{ Request::is('department') ? 'text-primary-300' : 'text-gray-400' }}">Departemen
                        <span
                            class="absolute left-0 bottom-0 h-0.5 bg-primary-200 w-0 group-hover:w-full transition-all"></span></a>
                </li>
                <li><a href="/berita"
                        class="relative font-poppins font-medium group hover:text-primary-600 {{ Request::is('berita*') ? 'text-primary-300' : 'text-gray-400' }}">Berita
                        <span
                            class="absolute left-0 bottom-0 h-0.5 bg-primary-200 w-0 group-hover:w-full transition-all"></span></a>
                </li>
                <!-- <li><a href="/banksoal"
                        class="relative font-poppins font-medium group hover:text-primary-600 {{ Request::is('banksoal*') ? 'text-primary-300' : 'text-gray-400' }}">Bank Soal
                        <span
                            class="absolute left-0 bottom-0 w-0 h-0.5 bg-primary-200 transition-all group-hover:w-full"></span></a>
                </li> -->
            </ul>
            <!-- CTA -->
            <div class="flex flex-1 items-center justify-end gap-4">
                <a href="{{ route('aspirasi') }}"
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
</header>
<!-- Mobile Menu -->
<div id="mobile-menu" class="fixed top-16 left-0 w-full bg-white shadow-xl hidden md:hidden z-50">
    <div class="max-w-7xl mx-auto px-6 md:px-10">
        <ul class="flex flex-col space-y-3 py-4 text-primary-300">
            <li class="mb-6"><a href="/" class="font-poppins font-medium">Home</a>
            </li>
            <li class="mb-6"><a href="/profil" class="font-poppins font-medium">Profil</a>
            </li>
            <li class="mb-6"><a href="/department" class="font-poppins font-medium">Departemen</a>
            </li>
            <li class="mb-6"><a href="/berita" class="font-poppins font-medium">Berita</a>
            </li>
            <li class="mb-6"><a href="/banksoal" class="font-poppins font-medium">Bank
                    Soal</a></li>
        </ul>
    </div>
</div>

