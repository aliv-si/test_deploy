@extends('layouts.app')

@section('title', 'Himpunan Mahasiswa Sistem Informasi (HIMASI) Amikom Yogyakarta')

@section('content')
    {{-- Header --}}
    <header class="relative min-h-screen flex items-center -mt-16 pt-16 select-none">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="img/background.png" alt="Background" class="w-full h-full object-cover opacity-25" draggable="false">
        </div>

        <div class="max-w-7xl mx-auto px-6 md:px-10 w-full">
            <div class="flex flex-col-reverse md:flex-row items-center justify-between">
                <div class="relative md:w-1/2 text-center md:text-left">
                    <h1 class="text-3xl md:text-5xl font-semibold text-primary-300 font-poppins">
                        Himpunan Mahasiswa<br>Program Studi<br>Sistem Informasi
                    </h1>
                    <div class="h-1.5 bg-primary-200 mt-2 mx-auto md:ml-0 w-24 md:w-[400px]"></div>
                    <p class="text-primary-300 mt-3 text-2xl font-medium font-grotesk italic">
                        Adaptif, Inovatif, Kreatif
                    </p>
                </div>

                <div class="relative md:w-1/2 flex justify-center mb-8 md:mb-0">
                    <img src="img/logo-himasi.png" alt="HIMASI Logo" class="w-68 md:w-96" draggable="false">
                </div>
            </div>
        </div>
    </header>
    {{-- End Header --}}

    {{-- About Us --}}
    <section id="about-section" class="relative pt-10 pb-20 px-6 md:px-20 mb-10 select-none">
        <div class="flex flex-col items-center text-center relative z-10 pb-6">
            <h2 class="text-3xl font-poppins text-primary-300 font-semibold">About Us</h2>
            <div class="w-24 h-1 bg-black mt-3"></div>
            <p class="text-primary-300 mt-3 text-lg font-base font-poppins max-w-3xl">
                Himpunan Mahasiswa Program Studi Sistem Informasi atau disingkat dengan HIMASI didirikan pada tanggal 22
                Oktober 2022. Sebuah organisasi untuk mewadahi, mewakili aspirasi, dan mengembangkan minat dan bakat para
                mahasiswa yang mengambil Program Studi Sistem Informasi di Universitas Amikom Yogyakarta.
            </p>
        </div>
    </section>
    {{-- End About Us --}}

    {{-- Prodi Sistem Informasi --}}
    <section class="py-16 px-6 md:px-20 bg-gray-50 select-none">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-10">
            <!-- Kiri: Logo/Gambar -->
            <div class="md:w-1/2 flex justify-center">
                <img src="img/logo-si.png" alt="Sistem Informasi Amikom" class="w-48 md:w-72" draggable="false">
            </div>
            <!-- Kanan: Info Prodi -->
            <div class="md:w-1/2">
                <h2 class="text-3xl font-poppins text-primary-300 font-semibold">Program Studi Sistem Informasi</h2>
                <div class="w-24 h-1 bg-primary-200 mt-3"></div>
                <p class="text-primary-300 mt-4 text-base font-poppins leading-relaxed">
                    Program Studi Sistem Informasi Universitas Amikom Yogyakarta mencetak lulusan yang kompeten di bidang
                    teknologi informasi, analisis bisnis, dan pengembangan sistem. Dengan kurikulum berbasis industri dan
                    didukung dosen berpengalaman, prodi ini siap membawa mahasiswa menjadi profesional IT yang adaptif dan
                    inovatif.
                </p>
                <a href="https://si.amikom.ac.id/sambutan-kaprodi/" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 mt-6 bg-primary-600 hover:bg-primary-700 text-white font-poppins font-semibold px-6 py-3 rounded-lg shadow-md transition-colors duration-300">
                    Kunjungi Website Prodi
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    {{-- End Prodi Sistem Informasi --}}

    {{-- Organisasi Kami --}}
    <section class="px-6 md:px-20 pt-20 select-none">
        <!-- Header: Title left, Description right -->
        <div class="flex flex-col-2 md:flex-row md:items-end md:justify-between gap-4 pb-10">
            <h2 class="text-3xl font-poppins text-primary-300 font-semibold">Kenali Tim <br> HIMASI Kami</h2>
            <p class="text-gray-500 text-sm font-poppins max-w-sm">
                Pengurus HIMASI yang berkomitmen untuk mewadahi, menyalurkan aspirasi, dan mengembangkan potensi mahasiswa
                Sistem Informasi.
            </p>
        </div>

        <!-- Team Slider -->
        <div id="team-slider" class="flex gap-5">
            @foreach ($members->take(3) as $member)
                <div
                    class="group relative bg-gray-200 rounded-2xl overflow-hidden aspect-[3/4] flex-shrink-0 w-[calc(50%-10px)] sm:w-[calc(33.333%-14px)] lg:w-[calc(25%-15px)] snap-start hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                    <!-- Photo -->
                    @if ($member->photo)
                        <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}"
                            class="w-full h-full object-cover" draggable="false">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-gray-200 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                                stroke="currentColor" class="w-32 h-32">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </div>
                    @endif

                    <!-- Info Overlay at Bottom -->
                    <div
                        class="absolute bottom-3 left-3 right-3 bg-white/90 backdrop-blur-sm rounded-xl px-4 py-3 flex items-center justify-between">
                        <div>
                            <h3 class="text-sm font-semibold font-poppins text-primary-300">{{ $member->name }}</h3>
                            <p class="text-xs text-gray-500 font-poppins">{{ $member->positionRole->name ?? '-' }}</p>
                        </div>
                        @if ($member->instagram)
                            <a href="https://instagram.com/{{ ltrim($member->instagram, '@') }}" target="_blank"
                                rel="noopener noreferrer" class="text-primary-300 hover:text-primary-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z" />
                                    <circle cx="16.806" cy="7.207" r="1.078" />
                                    <path
                                        d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach

            <!-- CTA Card: Lihat Semua Anggota (hidden, revealed on scroll) -->
            <a href="/department"
                class="rounded-2xl border-2 border-dashed border-gray-300 aspect-[3/4] flex-shrink-0 w-[calc(50%-10px)] sm:w-[calc(33.333%-14px)] lg:w-[calc(25%-15px)] snap-start flex flex-col items-center justify-center gap-3 hover:border-primary-600 hover:bg-primary-600/5 transition-all duration-300 group">
                <div
                    class="w-14 h-14 rounded-full bg-gray-100 group-hover:bg-primary-600/10 flex items-center justify-center transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="size-7 text-gray-400 group-hover:text-primary-600 transition-all duration-500 group-hover:rotate-[360deg]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </div>
                <span
                    class="text-sm font-semibold font-poppins text-gray-400 group-hover:text-primary-600 transition-colors">
                    Lihat Semua
                </span>
            </a>
        </div>
    </section>
    {{-- End Organisasi Kami --}}

    {{-- Quote Section --}}
    <section class="min-h-[60vh] flex items-center justify-center px-6 md:px-20 mb-10 select-none">
        <div class="max-w-4xl mx-auto text-center">
            <span class="text-4xl md:text-7xl font-serif text-primary-200 leading-none select-none">"</span>
            <blockquote class="text-lg md:text-3xl font-poppins text-primary-300 font-medium italic leading-relaxed -mt-6">
                Leadership is not about being in charge.<br> It is about taking care of those in your charge.
            </blockquote>
            <div class="w-14 h-1 bg-primary-200 mx-auto mt-6 rounded-full"></div>
            <p class="opacity-50 font-poppins mt-4 text-lg">— Simon Sinek</p>
        </div>
    </section>
    {{-- End Quote Section --}}

    {{-- Aspiration CTA --}}
    <section class="px-20 pb-10 shadow-lg select-none overflow-visible">
        <div class="relative mx-auto bg-primary-600 rounded-3xl min-h-[280px] flex items-center">

            {{-- Image : Char --}}
            <div class="hidden md:flex absolute right-8 -top-12 bottom-0 w-[45%] items-end">
                <img src="{{ asset('img/aspirasi.png') }}" alt="Ruang Aspirasi" class="w-full drop-shadow-2xl"
                    draggable="false">
            </div>

            {{-- Text Content --}}
            <div class="relative z-10 md:w-1/2 p-8 md:p-12">
                <h3 class="text-2xl md:text-3xl font-poppins font-bold text-white leading-tight">
                    Ada yang Ingin <br> Kamu Sampaikan?
                </h3>
                <p class="text-white font-poppins mt-3 text-sm md:text-base max-w-md leading-relaxed">
                    Sampaikan ide, saran, atau kritik yang membangun. Kami membuka ruang untuk setiap kritik, saran, dan
                    harapan demi himpunan yang lebih baik.
                </p>
                <div class="mt-6">
                    <a href="/aspirasi"
                        class="inline-flex items-center gap-2 bg-primary-200 opacity-90 hover:opacity-100 text-primary-300 font-poppins font-semibold px-6 py-3 rounded-lg transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg">
                        Sampaikan Aspirasi
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Mobile image --}}
            <div class="md:hidden w-full">
                <img src="{{ asset('img/aspirasi.png') }}" alt="Ruang Aspirasi" class="w-full h-48 object-cover"
                    draggable="false">
            </div>
        </div>
    </section>
    {{-- End Aspiration CTA --}}

    {{-- Berita Acara --}}
    <section class="bg-white px-20 pb-10 select-none">
        <div class="flex justify-between pb-6">
            <h2 class="text-3xl font-poppins text-primary-300 font-semibold">Kabar Terkini</h2>
            <!-- Navigation Arrows -->
            <div class="flex items-end gap-2">
                <a href="/berita"
                    class="inline-flex items-center gap-1 text-gray-400 font-poppins mx-2 hover:text-primary-600 hover:-translate-y-0.5 transition-all duration-300">Lihat
                    Semua
                </a>
                <!-- <button id="news-prev"
                                    class="p-2 rounded-full border border-gray-300 hover:bg-gray-100 transition-colors cursor-pointer disabled:opacity-30 disabled:cursor-default"
                                    {{ $newsList->count() == 0 ? 'disabled' : '' }}>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                    </svg>
                                </button>
                                <button id="news-next"
                                    class="p-2 rounded-full border border-gray-300 hover:bg-gray-100 transition-colors cursor-pointer disabled:opacity-30 disabled:cursor-default"
                                    {{ $newsList->count() == 0 ? 'disabled' : '' }}>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button> -->
            </div>
        </div>

        @if ($newsList->count() > 0)
            <div id="news-slider"
                class="flex gap-4 pb-3 overflow-x-auto overflow-y-hidden scroll-smooth snap-x snap-mandatory scrollbar-hide">
                @foreach ($newsList as $news)
                    <a href="{{ route('news.show', ['slug' => $news->slug]) }}"
                        class="group block flex-shrink-0 w-[calc(100%-16px)] sm:w-[calc(50%-12px)] lg:w-[calc(25%-12px)] snap-start">
                        <!-- Thumbnail -->
                        <div class="w-full aspect-video overflow-hidden rounded-xl">
                            <img src="{{ asset('storage/' . $news->image_news) }}" alt="{{ $news->news_headline }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                draggable="false">
                        </div>
                        <!-- Info -->
                        <h3
                            class="text-sm font-semibold font-poppins text-primary-300 line-clamp-2 mt-3 group-hover:text-primary-600 transition-colors">
                            {{ $news->news_headline }}
                        </h3>
                        <p class="text-xs text-gray-500 font-poppins mt-1 line-clamp-2">
                            {{ Str::limit($news->news_content, 80) }}
                        </p>
                        <p class="text-xs text-gray-300 font-poppins mt-1">
                            {{ $news->date->format('d M Y') }}
                        </p>
                    </a>
                @endforeach
            </div>
        @else
            <div class="border border-gray-200 rounded-3xl flex flex-col items-center justify-center py-12 text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                    stroke="currentColor" class="w-16 h-16 mb-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                </svg>
                <p class="text-gray-300 text-medium font-poppins font-medium">Belum ada berita</p>
            </div>
        @endif

    </section>
    {{-- End Berita Acara --}}

@endsection

@push('scripts')
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('news-slider');
            const prevBtn = document.getElementById('news-prev');
            const nextBtn = document.getElementById('news-next');

            if (!slider || !prevBtn || !nextBtn) return;

            function getScrollAmount() {
                const item = slider.querySelector('a');
                if (!item) return 300;
                return item.offsetWidth + 16; // item width + gap
            }

            function updateButtons() {
                prevBtn.disabled = slider.scrollLeft <= 0;
                nextBtn.disabled = slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 1;
            }

            function smoothScroll(el, distance, duration) {
                let start = el.scrollLeft;
                let startTime = null;

                // Disable snap temporarily so animation is smooth
                el.style.scrollSnapType = 'none';

                function animation(currentTime) {
                    if (startTime === null) startTime = currentTime;
                    let timeElapsed = currentTime - startTime;
                    let amount = Math.min(timeElapsed / duration, 1);

                    // Ease In Out Quad
                    let ease = amount < 0.5 ? 2 * amount * amount : -1 + (4 - 2 * amount) * amount;
                    el.scrollLeft = start + (distance * ease);

                    if (timeElapsed < duration) {
                        requestAnimationFrame(animation);
                    } else {
                        // Restore snap after animation
                        el.style.scrollSnapType = '';
                        updateButtons();
                    }
                }
                requestAnimationFrame(animation);
            }

            prevBtn.addEventListener('click', () => {
                smoothScroll(slider, -getScrollAmount(), 400); // 400ms duration
            });

            nextBtn.addEventListener('click', () => {
                smoothScroll(slider, getScrollAmount(), 400); // 400ms duration
            });

            slider.addEventListener('scroll', updateButtons);
            updateButtons();

            // Mouse drag for news slider
            enableMouseDrag(slider);

            // Mouse drag for team slider
            const teamSlider = document.getElementById('team-slider');
            if (teamSlider) enableMouseDrag(teamSlider);

            function enableMouseDrag(el) {
                let isDown = false;
                let startX;
                let scrollLeft;
                let hasDragged = false;

                el.addEventListener('mousedown', (e) => {
                    isDown = true;
                    hasDragged = false;
                    el.style.scrollSnapType = 'none';
                    startX = e.pageX - el.offsetLeft;
                    scrollLeft = el.scrollLeft;
                    e.preventDefault();
                });

                el.addEventListener('mouseleave', () => {
                    isDown = false;
                    el.style.scrollSnapType = '';
                });

                el.addEventListener('mouseup', () => {
                    isDown = false;
                    el.style.scrollSnapType = '';
                });

                el.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - el.offsetLeft;
                    const walk = (x - startX) * 1.5;
                    if (Math.abs(walk) > 5) hasDragged = true;
                    el.scrollLeft = scrollLeft - walk;
                });

                // Prevent link navigation when dragging
                el.addEventListener('click', (e) => {
                    if (hasDragged) {
                        e.preventDefault();
                        e.stopPropagation();
                        hasDragged = false;
                    }
                }, true);
            }
        });
    </script>
    <script>
        // Counter animation
        const counters = document.querySelectorAll('.counter');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-target');
                    const duration = 1500;
                    const start = performance.now();

                    function update(now) {
                        const elapsed = now - start;
                        const progress = Math.min(elapsed / duration, 1);
                        const eased = 1 - Math.pow(1 - progress, 3);
                        counter.textContent = Math.floor(target * eased);
                        if (progress < 1) {
                            requestAnimationFrame(update);
                        } else {
                            counter.textContent = target;
                        }
                    }
                    requestAnimationFrame(update);
                    observer.unobserve(counter);
                }
            });
        }, {
            threshold: 0.5
        });
        counters.forEach(c => observer.observe(c));
    </script>
@endpush

