<footer class="select-none">
    <div class="mx-auto mb-8 px-6 md:px-10">
        <div class="relative overflow-hidden p-6 md:p-8 md:pb-4 rounded-xl shadow-lg bg-gray-100">
            <div class="relative z-10">
                {{-- Header Footer: Logo --}}
                <div class="flex items-center gap-x-4 pb-6">
                    <img src="{{ asset('img/logo-himasi.png') }}" alt="Logo Himasi" class="h-11">
                    <img src="{{ asset('img/logo-si.png') }}" alt="Logo Sistem Informasi" class="h-9.5">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    {{-- Kolom 1: Informasi Universitas --}}
                    <div class="space-y-4">
                        <div>
                            <h3 class="font-medium font-poppins text-lg text-primary-300">Universitas Amikom
                                Yogyakarta</h3>
                            <p class="text-gray-600 font-poppins">Program Studi Sistem Informasi</p>
                            <p class="text-gray-600 font-poppins">
                                Instagram Prodi :
                                <a href="https://www.instagram.com/si.amikom" target="_blank"
                                    class="text-blue-600 hover:underline">@si.amikom</a>
                            </p>
                        </div>

                        <div>
                            <h3 class="font-medium font-poppins text-lg text-primary-300">Address</h3>
                            <p class="text-gray-600 font-poppins leading-relaxed">
                                Jl. Ring Road Utara, Ngringin, Condongcatur,<br>
                                Kec. Depok, Kabupaten Sleman,<br>
                                Daerah Istimewa Yogyakarta 55281
                            </p>
                        </div>

                        <div>
                            <!-- <h3 class="font-semibold font-poppins text-lg text-primary-300 mb-2">Social Media</h3> -->
                            <div class="flex items-center gap-4 mt-2">
                                <a href="https://www.instagram.com/himasiamikom" target="_blank"
                                    class="text-gray-400 hover:text-primary-600 transition-colors duration-300"
                                    aria-label="Instagram">
                                    <span class="sr-only">Instagram</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                        </path>
                                        <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                        <path
                                            d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="https://www.tiktok.com/@himasiamikom" target="_blank"
                                    class="text-gray-400 hover:text-primary-600 transition-colors duration-300"
                                    aria-label="TikTok">
                                    <span class="sr-only">TikTok</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="mailto:himasi@amikom.ac.id" target="_blank"
                                    class="text-gray-400 hover:text-primary-600 transition-colors duration-300"
                                    aria-label="Email">
                                    <span class="sr-only">Email</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Kolom 2: Navigasi --}}
                    <div class="hidden md:block">
                        <h3 class="font-medium font-poppins text-lg text-primary-300 mb-3">Navigation</h3>
                        <ul class="text-gray-400 space-y-2 font-poppins">
                            <li><a href="/" class="hover:text-primary-600 transition-colors">Home</a></li>
                            <li><a href="/profil" class="hover:text-primary-600 transition-colors">Profil</a></li>
                            <li><a href="/department" class="hover:text-primary-600 transition-colors">Departemen</a>
                            </li>
                            <li><a href="/berita" class="hover:text-primary-600 transition-colors">Berita</a></li>
                            <li><a href="/banksoal" class="hover:text-primary-600 transition-colors">Bank Soal</a>
                            </li>
                        </ul>
                    </div>

                    {{-- Kolom 3: Maps --}}
                    <div class="space-y-4">
                        <iframe class="w-full h-60 rounded-lg shadow-sm"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.281831557606!2d110.40688116996652!3d-7.759905827479537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas%20Amikom%20Yogyakarta!5e0!3m2!1sid!2sid!4v1739096462499!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

                {{-- Copyright --}}
                <div class="border-t border-black/10 mt-8 pt-4 text-center">
                    <p class="text-gray-600 font-poppins text-base">
                        &copy; <span class="font-semibold">2026</span> HIMASI. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

