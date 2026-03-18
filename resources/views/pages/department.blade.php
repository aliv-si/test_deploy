@extends('layouts.app')

@section('title', 'HIMASI – Departemen')

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
        class="bg-gradient-to-b from-gray-100 to-white relative flex flex-col justify-center items-center p-0 py-10 md:px-0 md:py-15 select-none overflow-hidden">
        <h1
            class="w-full text-[15.5vw] p-0 m-0 font-poppins text-primary-300 font-semibold whitespace-nowrap leading-none text-center">
            Departemen</h1>
        <!-- <p
                                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/8 z-10 inline-flex items-center gap-2 bg-primary-200 text-white font-poppins font-medium px-5 py-3 rounded-full shadow-lg">
                                    Departemen HIMASI
                                </p> -->
    </section>

    {{-- Subtitle --}}
    <p
        class="text-gray-500 text-center text-base md:text-lg max-w-3xl mx-auto font-poppins leading-relaxed mb-10 px-6 md:px-0 select-none ">
        The brilliant minds and dedicated individuals powering our initiatives.<br class="hidden md:block">
        Driving innovation and creating meaningful impact beyond the organization.
    </p>

    {{-- Hero Section --}}
    <section class="pb-16 md:pb-16 select-none" x-data="{ activeTab: '{{ $departments->first()->name_department ?? '' }}' }">
        <div class="max-w-4xl mx-auto px-6 text-center">
            {{-- Badge --}}
            <!-- <div     class="flex items-center justify-center gap-2 mb-6">
                                        <spa  n class="text-sm font-semibold tracking-widest uppercase text-primary-600 font-poppins">Get to know</span>
                                    </div> -->

            {{-- Title --}}
            <!-- <h1 class="text-3xl md:text-5xl font-bold font-poppins text-primary-300 leading-tight mb-5">
                                        Departemen HIMASI
                                    </h1> -->

            {{-- Tab Navigation with Guide --}}
            <div class="relative">
                <div
                    class="flex overflow-x-auto no-scrollbar scrollbar-hide -mx-6 px-6 py-3 md:mx-0 md:inline-flex md:flex-wrap md:justify-center items-center md:bg-white md:rounded-full md:shadow-sm md:py-1.5 md:px-2.5 gap-2 md:gap-1">
                    @foreach ($departments as $department)
                        <button @click="activeTab = '{{ $department->name_department }}'"
                            :class="activeTab === '{{ $department->name_department }}'
                                ?
                                'bg-primary-700 text-white shadow-sm' :
                                'bg-white text-gray-600 shadow-sm md:bg-transparent md:shadow-none hover:text-primary-700 hover:bg-gray-100'"
                            class="px-5 py-2.5 rounded-full text-sm font-medium font-poppins transition-all duration-300 cursor-pointer whitespace-nowrap flex-shrink-0">
                            {{ $department->name_department }}
                        </button>
                    @endforeach
                </div>
                {{-- Tab Guide Image --}}
                <img src="{{ asset('img/TabGuide.png') }}" alt="Choose Department"
                    class="hidden md:block w-36 lg:w-38 select-none pointer-events-none absolute -right-20 lg:-right-12 -top-3 opacity-80 rotate-2"
                    draggable="false">
            </div>
        </div>

        {{-- Members --}}
        <div class="max-w-7xl mx-auto p-6 md:px-20 md:mt-14">
            @foreach ($departments as $department)
                <div x-show="activeTab === '{{ $department->name_department }}'"
                    class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 pb-10">
                    <div class="flex flex-col">
                        <h2 class="text-3xl font-poppins text-primary-300 font-semibold mb-2">
                            {{ $department->full_name ?? $department->name_department }}</h2>
                        <div class="w-28 h-1 bg-primary-200 rounded-2xl"></div>
                    </div>
                    <p class="text-gray-500 text-sm font-poppins max-w-sm">
                        {{ $department->profil }}
                    </p>
                </div>
            @endforeach
            @foreach ($departments as $department)
                <div x-show="activeTab === '{{ $department->name_department }}'"
                    x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0">

                    @if ($department->members->count() > 0)
                        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-5">
                            @foreach ($department->members as $member)
                                <div
                                    class="group relative bg-gray-200 rounded-2xl overflow-hidden aspect-[3/4] hover:shadow-xl hover:-translate-y-2 transition-all duration-500">
                                    {{-- Photo with hover swap --}}
                                    @if ($member->photo)
                                        <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}"
                                            class="w-full h-full object-cover transition-opacity {{ $member->photo_hover ? 'group-hover:opacity-0' : '' }}"
                                            draggable="false">
                                        @if ($member->photo_hover)
                                            <img src="{{ asset('storage/' . $member->photo_hover) }}"
                                                alt="{{ $member->name }} casual"
                                                class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition-opacity"
                                                draggable="false">
                                        @endif
                                    @else
                                        <div
                                            class="w-full h-full flex items-center justify-center bg-gray-200 text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="0.5" stroke="currentColor" class="w-32 h-32">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                            </svg>
                                        </div>
                                    @endif

                                    {{-- Info Overlay --}}
                                    <div
                                        class="absolute bottom-3 left-3 right-3 bg-white/90 backdrop-blur-sm rounded-xl px-4 py-3 flex items-center justify-between">
                                        <div class="min-w-0">
                                            <h3 class="text-sm font-semibold font-poppins text-primary-300 truncate"
                                                title="{{ $member->name }}">
                                                {{ $member->name }}</h3>
                                            <p class="text-xs text-gray-500 font-poppins">
                                                {{ $member->positionRole->name ?? '-' }}</p>
                                        </div>
                                        @if ($member->instagram)
                                            <a href="https://instagram.com/{{ ltrim($member->instagram, '@') }}"
                                                target="_blank" rel="noopener noreferrer"
                                                class="text-primary-300 hover:text-primary-600 transition-colors ml-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="currentColor">
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
                        </div>
                    @else
                        <div class="flex items-center justify-center py-20">
                            <p class="text-gray-400 font-poppins text-sm">Belum ada anggota di departemen ini.</p>
                        </div>
                    @endif

                    {{-- Program Kerja --}}
                    @if ($department->workPrograms->count() > 0)
                        <div class="mt-14">
                            <h3 class="text-3xl font-semibold font-poppins text-primary-300 mb-3">Program Kerja</h3>
                            <div class="w-28 h-1 bg-primary-200 mb-6"></div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach ($department->workPrograms as $index => $proker)
                                    <div
                                        class="flex items-start gap-4 bg-white border border-gray-300 rounded-xl p-5 hover:shadow-lg transition-shadow duration-300">
                                        <span
                                            class="flex-shrink-0 w-9 h-9 rounded-lg bg-primary-600/10 text-primary-600 flex items-center justify-center text-sm font-bold font-poppins">
                                            {{ $index + 1 }}
                                        </span>
                                        <div>
                                            <p class="text-medium font-semibold font-poppins text-gray-800">
                                                {{ $proker->name }}
                                            </p>
                                            @if ($proker->description)
                                                <p class="text-sm font-poppins text-gray-500 mt-1">
                                                    {{ $proker->description }}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </section>
    {{-- End Members --}}

@endsection

