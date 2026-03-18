@extends('layouts.app')

@section('title', 'HIMASI – Berita')

<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>
@section('content')
    {{-- Header --}}
    <section
        class="bg-gradient-to-b from-gray-100 to-white relative flex flex-col justify-center items-center p-0 py-5 md:px-0 md:py-10 select-none overflow-hidden">
        <h1
            class="w-full text-[15.7vw] p-0 m-0 font-poppins text-primary-300 font-semibold whitespace-nowrap leading-none text-center">
            Berita Acara</h1>
        <!-- <p
                                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/8 z-10 inline-flex items-center gap-2 bg-primary-200 text-white font-poppins font-medium px-5 py-3 rounded-full shadow-lg">
                                        News & Events
                                    </p> -->
    </section>

    {{-- Berita Acara --}}
    <section class="max-w-7xl mx-auto rounded-3xl pb-10 md:py-10 px-6 md:px-10 select-none">

        <div class="flex flex-col gap-3 md:flex-row md:gap-8">
            {{-- Sidebar Kategori --}}
            <aside class="md:w-64 w-full flex-shrink-0 relative md:sticky md:top-24 self-start">
                <h4
                    class="text-sm font-semibold font-poppins text-gray-400 uppercase tracking-wide px-3 pb-3 hidden md:block">
                    Kategori
                </h4>
                <ul
                    class="flex overflow-x-auto gap-3 pb-2 md:pb-0 md:flex-col md:gap-0 md:space-y-1 md:overflow-visible scrollbar-hide no-scrollbar -mx-6 px-6 md:mx-0 md:px-0">
                    <li class="flex-shrink-0">
                        <button data-category=""
                            class="category-btn active flex justify-center md:justify-start items-center gap-2 px-4 py-2 md:px-3 md:py-2 rounded-full md:rounded-lg font-poppins text-sm whitespace-nowrap md:whitespace-normal w-max md:w-full cursor-pointer bg-primary-600 text-white transition-all duration-200 shadow-sm md:shadow-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25a2.25 2.25 0 0 1-2.25-2.25v-2.25Z" />
                            </svg>
                            Semua
                        </button>
                    </li>
                    <li class="flex-shrink-0">
                        <button data-category="Berita"
                            class="category-btn flex justify-center md:justify-start items-center gap-2 px-4 py-2 md:px-3 md:py-2 rounded-full md:rounded-lg font-poppins text-sm whitespace-nowrap md:whitespace-normal w-max md:w-full cursor-pointer text-gray-600 hover:bg-primary-600/5 hover:text-primary-600 transition-all duration-200 shadow-sm md:shadow-none border border-gray-100 md:border-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                            </svg>
                            Berita
                        </button>
                    </li>
                    <li class="flex-shrink-0">
                        <button data-category="Blog"
                            class="category-btn flex justify-center md:justify-start items-center gap-2 px-4 py-2 md:px-3 md:py-2 rounded-full md:rounded-lg font-poppins text-sm whitespace-nowrap md:whitespace-normal w-max md:w-full cursor-pointer text-gray-600 hover:bg-primary-600/5 hover:text-primary-600 transition-all duration-200 shadow-sm md:shadow-none border border-gray-100 md:border-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>
                            Blog
                        </button>
                    </li>
                    <li class="flex-shrink-0">
                        <button data-category="Event"
                            class="category-btn flex justify-center md:justify-start items-center gap-2 px-4 py-2 md:px-3 md:py-2 rounded-full md:rounded-lg font-poppins text-sm whitespace-nowrap md:whitespace-normal w-max md:w-full cursor-pointer text-gray-600 hover:bg-primary-600/5 hover:text-primary-600 transition-all duration-200 shadow-sm md:shadow-none border border-gray-100 md:border-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                            Event
                        </button>
                    </li>
                    @php $filteredTags = $categories->diff(['Semua', 'Berita', 'Blog', 'Event']); @endphp
                    @foreach ($filteredTags->take(5) as $tag)
                        <li class="flex-shrink-0">
                            <button data-category="{{ $tag }}"
                                class="category-btn flex justify-center md:justify-start items-center gap-2 px-4 py-2 md:px-3 md:py-2 rounded-full md:rounded-lg font-poppins text-sm whitespace-nowrap md:whitespace-normal w-max md:w-full cursor-pointer text-gray-400 hover:bg-primary-600/5 hover:text-primary-600 transition-all duration-200 shadow-sm md:shadow-none border border-gray-100 md:border-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                </svg>
                                {{ $tag }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </aside>

            {{-- Konten Berita --}}
            <div class="flex-1">
                {{-- Active Filter Indicator --}}
                <div id="active-filter-container" class="hidden py-3 items-center">
                    <h2 id="active-filter-text"
                        class="inline-flex items-center rounded-full text-xl font-poppins font-semibold text-primary-300">
                    </h2>
                </div>
                @if ($newsList->count() > 0)
                    <div id="news-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($newsList as $news)
                            <a href="{{ route('news.show', ['slug' => $news->slug]) }}" class="group block news-card"
                                data-tags="{{ json_encode($news->tag ?? []) }}">
                                <!-- Thumbnail -->
                                <div class="w-full aspect-video overflow-hidden rounded-xl">
                                    <img src="{{ asset('storage/' . $news->image_news) }}" alt="{{ $news->news_headline }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        draggable="false">
                                </div>
                                <!-- Info -->
                                <h3
                                    class="text-md font-semibold font-poppins text-primary-300 line-clamp-2 mt-3 group-hover:text-primary-600 transition-colors">
                                    {{ $news->news_headline }}
                                </h3>
                                <p class="text-sm text-gray-500 font-poppins mt-1 line-clamp-2">
                                    {{ Str::limit($news->news_content, 80) }}
                                </p>
                                <p class="text-sm text-gray-400 font-poppins mt-1">
                                    {{ $news->date->format('d M Y') }}
                                </p>
                            </a>
                        @endforeach
                    </div>

                    {{-- Empty state for filtered results --}}
                    <div id="no-results"
                        class="hidden border border-gray-200 rounded-3xl flex-col items-center justify-center py-12 text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                            stroke="currentColor" class="w-16 h-16 mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                        </svg>
                        <p class="text-gray-300 text-medium font-poppins font-medium">Tidak ada berita dalam kategori ini
                        </p>
                    </div>
                @else
                    <div
                        class="border border-gray-200 rounded-3xl flex flex-col items-center justify-center py-12 text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                            stroke="currentColor" class="w-16 h-16 mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                        </svg>
                        <p class="text-gray-300 text-medium font-poppins font-medium">Belum ada berita</p>
                    </div>
                @endif
            </div>
        </div>

    </section>
    {{-- End Berita Acara --}}
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryBtns = document.querySelectorAll('.category-btn');
            const cards = document.querySelectorAll('.news-card');
            const noResults = document.getElementById('no-results');
            const filterContainer = document.getElementById('active-filter-container');
            const filterText = document.getElementById('active-filter-text');

            const catActiveClasses = ['bg-primary-600', 'text-white'];
            const catInactiveClasses = ['text-gray-400', 'hover:bg-primary-600/5', 'hover:text-primary-600'];

            function filterCards(category) {
                // Main categories that shouldn't show the indicator text
                const mainCategories = ['Berita', 'Blog', 'Event'];

                // Update indicator - only show if category exists AND it's not a main category
                if (category && !mainCategories.includes(category)) {
                    filterText.textContent = '# ' + category;
                    filterContainer.classList.remove('hidden');
                    filterContainer.classList.add('flex');
                } else {
                    filterContainer.classList.add('hidden');
                    filterContainer.classList.remove('flex');
                }

                let visibleCount = 0;
                cards.forEach(card => {
                    const tags = JSON.parse(card.dataset.tags || '[]');
                    const show = !category || tags.includes(category);
                    card.style.display = show ? '' : 'none';
                    card.style.opacity = show ? '1' : '0';
                    if (show) visibleCount++;
                });
                if (noResults) {
                    noResults.classList.toggle('hidden', visibleCount > 0);
                    noResults.classList.toggle('flex', visibleCount === 0);
                }
            }

            function resetAll() {
                const mainCategories = ['', 'Berita', 'Blog', 'Event'];
                categoryBtns.forEach(b => {
                    b.classList.remove(...catActiveClasses, 'active', 'text-gray-600', 'text-gray-400');
                    b.classList.add(...catInactiveClasses);
                    if (mainCategories.includes(b.dataset.category)) {
                        b.classList.add('text-gray-600');
                    } else {
                        b.classList.add('text-gray-400');
                    }
                });
            }

            categoryBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    resetAll();
                    btn.classList.remove(...catInactiveClasses, 'text-gray-600', 'text-gray-400');
                    btn.classList.add(...catActiveClasses, 'active');
                    filterCards(btn.dataset.category);
                });
            });
        });
    </script>
@endpush

