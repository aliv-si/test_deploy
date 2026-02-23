@extends('layouts.app')

@section('title', 'HIMASI')

@section('content')
    {{-- Header --}}
    <header class="relative min-h-screen flex items-center -mt-16 pt-16">
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
                    <img src="img/logo-himasi.png" alt="HIMASI Logo" class="w-64 md:w-96" draggable="false">
                </div>
            </div>
        </div>
    </header>
    {{-- End Header --}}

    {{-- About Us --}}
    <section id="about-section" class="relative py-16 px-6 md:px-20 select-none">
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
                    class="inline-flex items-center gap-2 mt-6 bg-primary-600 hover:bg-primary-700 text-white font-poppins font-semibold px-6 py-3 rounded-lg shadow-md transition-colors">
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
    <section class="p-6 md:p-20 select-none">
        <!-- Header: Title left, Description right -->
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 pb-10">
            <h2 class="text-3xl font-poppins text-primary-300 font-semibold">Kenali Tim <br> HIMASI Kami</h2>
            <p class="text-gray-500 text-sm font-poppins max-w-sm">
                Pengurus HIMASI yang berkomitmen untuk mewadahi, menyalurkan aspirasi, dan mengembangkan potensi mahasiswa
                Sistem Informasi.
            </p>
        </div>

        <!-- Team Slider -->
        <div id="team-slider" class="flex gap-5 overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-hide">
            @foreach ($members->take(4) as $member)
                <div
                    class="group relative bg-gray-200 rounded-2xl overflow-hidden aspect-[3/4] flex-shrink-0 w-[calc(50%-10px)] sm:w-[calc(33.333%-14px)] lg:w-[calc(25%-15px)] snap-start">
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
                            <p class="text-xs text-gray-500 font-poppins">{{ $member->position }}</p>
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
            <a href="/profil"
                class="rounded-2xl border-2 border-dashed border-gray-300 aspect-[3/4] flex-shrink-0 w-[calc(50%-10px)] sm:w-[calc(33.333%-14px)] lg:w-[calc(25%-15px)] snap-start flex flex-col items-center justify-center gap-3 hover:border-primary-600 hover:bg-primary-600/5 transition-all duration-300 group">
                <div
                    class="w-14 h-14 rounded-full bg-gray-100 group-hover:bg-primary-600/10 flex items-center justify-center transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-7 text-gray-400 group-hover:text-primary-600 transition-colors">
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
    <section class="min-h-[75vh] flex items-center justify-center px-6 md:p-20 select-none">
        <div class="max-w-4xl mx-auto text-center">
            <span class="text-4xl md:text-7xl font-serif text-primary-200 leading-none select-none">"</span>
            <blockquote class="text-lg md:text-3xl font-poppins text-primary-300 font-medium italic leading-relaxed -mt-6">
                Leadership is not about being in charge.<br> It is about taking care of those in your charge.
            </blockquote>
            <div class="w-14 h-1 bg-primary-200 mx-auto mt-6 rounded-full"></div>
            <p class="text-gray-500 font-poppins mt-4 text-lg">— Simon Sinek</p>
        </div>
    </section>
    {{-- End Quote Section --}}

    {{-- Aspiration --}}
    <!-- <section id="aspirasi-section" class="relative py-16 px-6 md:px-20">
                             <div     cla   ss="flex flex-col items-center text-center relative z-10 pb-6">
                                     <h2  clas  s="text-3xl font-semibold font-poppins text-primary-300">Ruang Aspirasi</h2>
                                     <div   cla ss="w-24 h-1 bg-black mt-2"></div>
                               </di   v>

                                <div  cla   ss="absolute inset-0 bg-cover bg-center opacity-50" style="background-image: url('img/aspiration.png');">
                                </di  v>

                                <div    cla ss="absolute inset-0 bg-cover bg-center opacity-50" style="background-image: url('img/aspiration.png');">
                                    </div>

                            <div     cla    ss="relative max-w-5xl mx-auto bg-white p-10 rounded-xl shadow-lg">

                                    <div   cla  ss="flex flex-col md:flex-row gap-8 mt-6">
                                           <div cla ss="md:w-1/2">
                                            <p c    lass="text-primary-300 font-poppins text-lg leading-relaxed">
                                              HIMA  SI s    ebagai wadah aspirasi Mahasiswa Program Studi Sistem Informasi.
                                               Berb  agai    keluhan, ide, masukan, dan kritik terkait dengan akademik yang membangun terhadap
                                                kema   juan  Program Studi Sistem Informasi akan disalurkan ke Ketua Program Studi Sistem
                                                   Info rmasi yang
                                              tent  u sa    ja kami senantiasa menjaga privasi dan kredibilitas aspirator.
                                          </p>
                                         </di v>

                                           <div  class="md:w-1/2 bg-gray-50 p-6 rounded-xl shadow-md relative border border-gray-300">
                                          <for  m me    thod="POST" action="{{ route('aspiration.store') }}" id="aspiration-form"
                                                 enctype=   "multipart/form-data">
                                              @csr    f
                                                 <lab  el f or="email_student" class="block text-primary-300 font-poppins font-semibold mb-1">
                                                      Email <s  pan class="text-red-500">*</span>
                                             </la    bel>
                                                 <inp ut t  ype="email" name="email_student" id="email_student"
                                                     clas  s="w -full p-2 border border-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4"
                                                     plac   eholder="example@students.amikom.ac.id" pattern=".*@students\.amikom\.ac\.id$" required>
                                               <lab el f    or="class" class="block text-primary-300 font-poppins font-semibold mb-1">
                                                    Kela  s <s  pan class="text-red-500">*</span>
                                                </la   bel>
                                                    <input type="text" name="class" id="class"
                                                clas    s="w    -full p-2 border border-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4"
                                                   plac  ehol   der="Masukkan Kelas" required>

                                                   <label f or="aspiration" class="block text-primary-300 font-poppins font-semibold mb-1">
                                                    Aspi    rasimu <span class="text-red-500">*</span>
                                              </la  bel>
                                               <tex  tare   a name="aspiration" id="aspiration" rows="4"
                                                   clas   s="w  -full p-2 border border-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4"
                                                       plac eholder="Sampaikan Aspirasimu!" required></textarea>

                                              <but  ton     type="submit"
                                                  clas   s="b   g-primary-600 hover:bg-primary-700 cursor-pointer text-white font-poppins font-semibold px-6 py-2 rounded-lg shadow-md w-28 mx-auto block">
                                                     Kiri m
                                                  </bu tton >
                                            </fo  rm>
                                         </div>
                                  </di    v>
                                 </di  v>
                                </section> -->
    {{-- End Aspiration --}}

    {{-- Berita Acara --}}
    <section class="bg-white p-6 md:p-20 select-none">
        <div class="flex items-center justify-between pb-8">
            <h2 class="text-3xl font-poppins text-primary-300 font-semibold">Berita Acara</h2>
            <!-- Navigation Arrows -->
            <div class="flex gap-2">
                <button id="news-prev"
                    class="p-2 rounded-full border border-gray-300 hover:bg-gray-100 transition-colors cursor-pointer disabled:opacity-30 disabled:cursor-default">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button id="news-next"
                    class="p-2 rounded-full border border-gray-300 hover:bg-gray-100 transition-colors cursor-pointer disabled:opacity-30 disabled:cursor-default">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>

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
                    <p class="text-xs text-gray-400 font-poppins mt-1">
                        {{ $news->date->format('d M Y') }}
                    </p>
                </a>
            @endforeach
        </div>
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

            prevBtn.addEventListener('click', () => {
                slider.scrollBy({
                    left: -getScrollAmount() * 4,
                    behavior: 'smooth'
                });
            });

            nextBtn.addEventListener('click', () => {
                slider.scrollBy({
                    left: getScrollAmount() * 4,
                    behavior: 'smooth'
                });
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
