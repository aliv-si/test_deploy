@extends('layouts.app')

@section('title', $news->news_headline)

@section('content')
    <div class="max-w-7xl mx-auto px-6 py-8 md:py-12">
        <!-- Breadcrumbs -->
        <nav class="flex items-center flex-wrap gap-2 text-sm text-gray-500 font-poppins mb-8">
            <a class="hover:text-primary-600 transition-colors inline-flex items-center gap-1" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-[1em] flex-shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Home
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-3.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
            <a class="hover:text-primary-600 transition-colors" href="{{ route('berita') }}">Berita</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-3.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
            <span class="text-gray-600 font-medium line-clamp-1">{{ Str::limit($news->news_headline, 50) }}</span>
        </nav>

        <div class="flex flex-col lg:flex-row gap-10">
            {{-- Main Article --}}
            <main class="flex-1 flex flex-col gap-8 min-w-0">
                <!-- Article Header -->
                <header class="flex flex-col gap-5">
                    <!-- Headline -->
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-300 font-poppins leading-tight">
                        {{ $news->news_headline }}
                    </h1>

                    <!-- Date & Share -->
                    <div class="flex items-center justify-between py-4 border-y border-gray-200">
                        <div class="flex items-center gap-2 text-sm text-gray-500 font-poppins">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                            {{ $news->date->translatedFormat('l, d F Y') }}
                        </div>
                        <!-- Share Buttons -->
                        <div class="flex items-center gap-1">
                            <span class="text-xs text-gray-400 font-poppins mr-1 hidden sm:inline">Share:</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                                target="_blank" rel="noopener"
                                class="p-2 rounded-full text-gray-400 hover:text-white hover:bg-[#1877F2] transition-all duration-200"
                                title="Share di Facebook">
                                <svg class="size-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                </svg>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($news->news_headline) }}"
                                target="_blank" rel="noopener"
                                class="p-2 rounded-full text-gray-400 hover:text-white hover:bg-black transition-all duration-200"
                                title="Share di X">
                                <svg class="size-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                </svg>
                            </a>
                            <a href="https://api.whatsapp.com/send?text={{ urlencode($news->news_headline . ' ' . request()->url()) }}"
                                target="_blank" rel="noopener"
                                class="p-2 rounded-full text-gray-400 hover:text-white hover:bg-[#25D366] transition-all duration-200"
                                title="Share di WhatsApp">
                                <svg class="size-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                </svg>
                            </a>
                            <button
                                onclick="navigator.clipboard.writeText(window.location.href); this.title='Tersalin!'; setTimeout(() => this.title='Salin Link', 2000)"
                                class="p-2 rounded-full text-gray-400 hover:text-primary-600 hover:bg-primary-600/10 transition-all duration-200 cursor-pointer"
                                title="Salin Link">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                </svg>
                            </button>
                        </div>
                    </div>

                </header>

                <!-- Featured Image -->
                <figure class="w-full">
                    <div class="aspect-[16/9] w-full overflow-hidden rounded-2xl bg-gray-100 shadow-sm">
                        <img alt="{{ $news->news_headline }}" class="w-full h-full object-cover"
                            src="{{ asset('storage/' . $news->image_news) }}" draggable="false" />
                    </div>
                </figure>

                <!-- Article Body -->
                <article class="prose prose-lg max-w-none text-gray-700 font-poppins leading-relaxed">
                    {!! nl2br(e($news->news_content)) !!}
                </article>

                <!-- Tags at Bottom -->
                @if ($news->tag && count($news->tag) > 0)
                    <div class="flex flex-wrap items-center gap-2 pt-6 border-t border-gray-200 mt-4">
                        <span class="text-sm font-medium text-gray-400 font-poppins mr-2">Tags:</span>
                        @foreach ($news->tag as $tag)
                            <a href="{{ route('news.category', $tag) }}"
                                class="px-3 py-1.5 rounded-full bg-gray-100 text-sm font-poppins text-gray-600 hover:bg-primary-600 hover:text-white transition-all duration-200">
                                {{ $tag }}
                            </a>
                        @endforeach
                    </div>
                @endif
            </main>

            {{-- Sidebar: Berita Lainnya --}}
            <aside class="lg:w-72 flex-shrink-0 sticky top-24 self-start">
                <h3 class="text-xl font-semibold font-poppins text-primary-300 border-b-2 border-primary-200 pb-3 mb-4">
                    Berita Lainnya
                </h3>
                <div class="flex flex-col gap-5">
                    @foreach ($latestNews->where('id_news', '!=', $news->id_news)->take(7) as $related)
                        <a href="{{ route('news.show', ['slug' => $related->slug]) }}" class="group flex gap-3">
                            <div class="w-20 h-14 flex-shrink-0 overflow-hidden rounded-lg">
                                <img src="{{ asset('storage/' . $related->image_news) }}"
                                    alt="{{ $related->news_headline }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                    draggable="false">
                            </div>
                            <div class="flex flex-col justify-center min-w-0">
                                <h4
                                    class="text-sm font-semibold font-poppins text-primary-300 line-clamp-2 group-hover:text-primary-600 transition-colors">
                                    {{ $related->news_headline }}
                                </h4>
                                <p class="text-xs text-gray-400 font-poppins mt-1">
                                    {{ $related->date->format('d M Y') }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </aside>
        </div>
    </div>
@endsection

