@extends('layouts.app')

@section('title', 'HIMASI - Bank Soal')

@section('content')
    {{-- Header --}}
    <section
        class="bg-gradient-to-b from-gray-100 to-white relative flex flex-col justify-center items-center p-0 md:px-0 py-8 select-none overflow-hidden">
        <h1
            class="w-full text-2xl md:text-[19.9vw] p-0 m-0 font-poppins text-primary-300 font-semibold whitespace-nowrap leading-none text-center">
            Bank Soal</h1>
        <!-- <p
                                                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/8 z-10 inline-flex items-center gap-2 bg-primary-200 text-white font-poppins font-medium px-5 py-3 rounded-full shadow-lg">
                                                        Soal Latihan Ujian
                                                    </p> -->
    </section>

    {{-- Main Bank Soal Section --}}
    <section class="max-w-7xl mx-auto px-6 md:px-10 relative z-10 w-full mb-16 flex flex-col gap-6 select-none">
        <div data-purpose="search-filters"
            class="bg-white rounded-3xl p-4 md:p-6 shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 flex flex-col gap-6">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div class="flex items-center gap-1 text-gray-400 font-medium font-poppins shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg>
                    <span>Filter</span>
                </div>

                <div class="flex-1 grid grid-cols-1 md:grid-cols-4 gap-4">
                    {{-- Filter Semester --}}
                    <div class="custom-dropdown relative" data-target="filter-semester">
                        <select class="hidden" id="filter-semester">
                            <option value="all" selected>Semua Semester</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <option value="3">Semester 3</option>
                            <option value="4">Semester 4</option>
                            <option value="5">Semester 5</option>
                            <option value="6">Semester 6</option>
                            <option value="7">Semester 7</option>
                            <option value="8">Semester 8</option>
                        </select>
                        <button type="button"
                            class="dropdown-trigger w-full flex items-center justify-between gap-2 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3.5 text-sm font-poppins text-gray-700 hover:border-primary-300 focus:outline-none focus:ring-4 focus:ring-primary-600/10 focus:border-primary-600 transition-all cursor-pointer">
                            <span class="dropdown-label truncate">Semua Semester</span>
                            <svg class="dropdown-chevron h-4 w-4 text-gray-400 transition-transform duration-300 shrink-0"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="dropdown-menu hidden absolute z-50 w-full mt-2 bg-white border border-gray-100 rounded-xl shadow-lg overflow-hidden animate-dropdown">
                            <div class="py-1 max-h-60 overflow-y-auto">
                                <div class="dropdown-item active px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="all">Semua Semester</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="1">Semester 1</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="2">Semester 2</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="3">Semester 3</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="4">Semester 4</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="5">Semester 5</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="6">Semester 6</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="7">Semester 7</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="8">Semester 8</div>
                            </div>
                        </div>
                    </div>

                    {{-- Filter Tahun Ajaran --}}
                    <div class="custom-dropdown relative" data-target="filter-year">
                        <select class="hidden" id="filter-year">
                            <option value="all" selected>Semua Tahun Ajaran</option>
                            <option value="2023/2024">2023/2024</option>
                            <option value="2022/2023">2022/2023</option>
                            <option value="2021/2022">2021/2022</option>
                        </select>
                        <button type="button"
                            class="dropdown-trigger w-full flex items-center justify-between gap-2 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3.5 text-sm font-poppins text-gray-700 hover:border-primary-300 focus:outline-none focus:ring-4 focus:ring-primary-600/10 focus:border-primary-600 transition-all cursor-pointer">
                            <span class="dropdown-label truncate">Semua Tahun Ajaran</span>
                            <svg class="dropdown-chevron h-4 w-4 text-gray-400 transition-transform duration-300 shrink-0"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="dropdown-menu hidden absolute z-50 w-full mt-2 bg-white border border-gray-100 rounded-xl shadow-lg overflow-hidden animate-dropdown">
                            <div class="py-1 max-h-60 overflow-y-auto">
                                <div class="dropdown-item active px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="all">Semua Tahun Ajaran</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="2023/2024">2023/2024</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="2022/2023">2022/2023</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="2021/2022">2021/2022</div>
                            </div>
                        </div>
                    </div>

                    {{-- Filter Tipe Ujian --}}
                    <div class="custom-dropdown relative" data-target="filter-type">
                        <select class="hidden" id="filter-type">
                            <option value="all" selected>Semua Tipe Ujian</option>
                            <option value="UTS">UTS (Ujian Tengah Semester)</option>
                            <option value="UAS">UAS (Ujian Akhir Semester)</option>
                        </select>
                        <button type="button"
                            class="dropdown-trigger w-full flex items-center justify-between gap-2 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3.5 text-sm font-poppins text-gray-700 hover:border-primary-300 focus:outline-none focus:ring-4 focus:ring-primary-600/10 focus:border-primary-600 transition-all cursor-pointer">
                            <span class="dropdown-label truncate">Semua Tipe Ujian</span>
                            <svg class="dropdown-chevron h-4 w-4 text-gray-400 transition-transform duration-300 shrink-0"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="dropdown-menu hidden absolute z-50 w-full mt-2 bg-white border border-gray-100 rounded-xl shadow-lg overflow-hidden animate-dropdown">
                            <div class="py-1 max-h-60 overflow-y-auto">
                                <div class="dropdown-item active px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="all">Semua Tipe Ujian</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="UTS">UTS</div>
                                <div class="dropdown-item px-4 py-2.5 text-sm font-poppins cursor-pointer transition-colors hover:bg-gray-50"
                                    data-value="UAS">UAS</div>
                            </div>
                        </div>
                    </div>

                    <button type="button" id="reset-filter-btn"
                        class="group w-full flex items-center justify-center gap-2 bg-gray-50 text-gray-400 border border-gray-100 rounded-xl px-4 py-3.5 text-sm font-poppins font-medium hover:bg-red-500/90 hover:text-white hover:border-red-500/90 focus:outline-none focus:ring-4 focus:ring-red-600/10 focus:border-red-600 transition-all cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor"
                            class="size-4 shrink-0 transition-transform duration-500 group-hover:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                        <span>Reset</span>
                    </button>
                </div>
            </div>
        </div>
        {{-- End FilterBar --}}

        {{-- Tabel Daftar Soal --}}
        <div class="bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 overflow-hidden">
            <div class="p-6 md:p-8 border-b border-gray-100 flex justify-between items-center">
                <h3 class="font-poppins font-semibold text-primary-300 text-2xl">Daftar Soal</h3>
                <span
                    class="text-sm font-poppins text-gray-500 bg-gray-100 px-3 py-1 rounded-full">{{ $questions->count() }}
                    Soal</span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left font-poppins border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-500 text-sm tracking-wide border-b border-gray-200">
                            <th class="py-4 px-6 font-semibold w-16">No</th>
                            <th class="py-4 px-6 font-semibold">Mata Kuliah</th>
                            <th class="py-4 px-6 font-semibold text-center w-28">Semester</th>
                            <th class="py-4 px-6 font-semibold text-center w-36">Tahun Ajaran</th>
                            <th class="py-4 px-6 font-semibold text-center w-32">Kategori</th>
                            <th class="py-4 px-6 font-semibold text-right w-40"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-gray-700" id="question-list">
                        @forelse ($questions as $index => $question)
                            <tr class="hover:bg-primary-50/50 transition-colors question-row"
                                data-semester="{{ $question->semester }}" data-year="{{ $question->school_year }}"
                                data-type="{{ strtoupper($question->category) }}">
                                <td class="py-4 px-6 text-gray-400 font-medium row-number">{{ $index + 1 }}</td>
                                <td class="py-4 px-6">
                                    <div class="font-medium text-primary-300">{{ $question->subject }}</div>
                                    <div class="text-sm text-gray-400 mt-0.5">
                                        {{ $question->subject_code }}</div>
                                </td>
                                <td class="py-2 px-3 text-center">
                                    <span
                                        class="inline-flex items-center justify-center bg-gray-100 text-gray-600 px-2.5 py-1 rounded-md text-xs font-medium">Semester
                                        {{ $question->semester }}</span>
                                </td>
                                <td class="py-4 px-6 text-center text-sm font-medium">{{ $question->tahun_ajaran }}</td>
                                <td class="py-4 px-6 text-center">
                                    @php
                                        $catColor =
                                            strtolower($question->category) == 'uts'
                                                ? 'bg-green-100 text-green-500'
                                                : (strtolower($question->category) == 'uas'
                                                    ? 'bg-yellow-100 text-yellow-500'
                                                    : 'bg-gray-100 text-gray-700');
                                    @endphp
                                    <span
                                        class="inline-flex items-center justify-center px-3 py-1 rounded-full text-xs font-semibold {{ $catColor }}">
                                        {{ strtoupper($question->category) }}
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-right">
                                    <div class="flex items-center justify-end gap-3">
                                        <a href="{{ route('question.view', $question->nama_file) }}" target="_blank"
                                            class="p-2 text-gray-400 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors"
                                            title="Lihat PDF">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" class="size-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('question.download', $question->id_soal) }}" download
                                            class="p-2 text-gray-400 hover:text-primary-600 hover:bg-blue-50 rounded-lg transition-colors"
                                            title="Download">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" class="size-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="py-12 px-6 text-center text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-12 mx-auto mb-3 opacity-20">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg>
                                    <p class="font-poppins text-sm text-gray-300">Belum ada soal</p>
                                </td>
                            </tr>
                            </tr>
                        @endforelse
                        <!-- Empty State for JS Filtering -->
                        <tr id="empty-state" class="hidden">
                            <td colspan="6" class="py-12 px-6 text-center text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-12 mx-auto mb-3 opacity-20">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                <p id="empty-state-text" class="font-poppins text-sm text-gray-400">Tidak ada soal yang
                                    cocok dengan filter.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        {{-- End Tabel Daftar Soal --}}
    </section>

    {{-- Dropdown Animation --}}
    <style>
        .animate-dropdown {
            animation: dropdownSlide 0.3s ease-out;
        }

        @keyframes dropdownSlide {
            from {
                opacity: 0;
                transform: translateY(-4px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-item.active {
            font-weight: 500;
        }
    </style>

    {{-- Script JavaScript untuk Custom Dropdown + Filter Interaktif --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ========== Custom Dropdown Logic ==========
            const dropdowns = document.querySelectorAll('.custom-dropdown');

            dropdowns.forEach(dropdown => {
                const trigger = dropdown.querySelector('.dropdown-trigger');
                const menu = dropdown.querySelector('.dropdown-menu');
                const label = dropdown.querySelector('.dropdown-label');
                const chevron = dropdown.querySelector('.dropdown-chevron');
                const items = dropdown.querySelectorAll('.dropdown-item');
                const hiddenSelect = dropdown.querySelector('select');

                // Toggle menu
                trigger.addEventListener('click', (e) => {
                    e.stopPropagation();
                    // Close all other dropdowns first
                    dropdowns.forEach(other => {
                        if (other !== dropdown) {
                            other.querySelector('.dropdown-menu').classList.add('hidden');
                            other.querySelector('.dropdown-chevron').classList.remove(
                                'rotate-180');
                        }
                    });
                    menu.classList.toggle('hidden');
                    chevron.classList.toggle('rotate-180');
                });

                // Select item
                items.forEach(item => {
                    item.addEventListener('click', () => {
                        const value = item.dataset.value;
                        const text = item.textContent.trim();

                        // Update label
                        label.textContent = text;

                        // Update active state
                        items.forEach(i => i.classList.remove('active'));
                        item.classList.add('active');

                        // Update hidden select & fire change event
                        hiddenSelect.value = value;
                        hiddenSelect.dispatchEvent(new Event('change'));

                        // Close menu
                        menu.classList.add('hidden');
                        chevron.classList.remove('rotate-180');
                    });
                });
            });

            // Close dropdowns on outside click
            document.addEventListener('click', () => {
                dropdowns.forEach(dropdown => {
                    dropdown.querySelector('.dropdown-menu').classList.add('hidden');
                    dropdown.querySelector('.dropdown-chevron').classList.remove('rotate-180');
                });
            });

            // ========== Filter Table Logic ==========
            const filterSemester = document.getElementById('filter-semester');
            const filterYear = document.getElementById('filter-year');
            const filterType = document.getElementById('filter-type');
            const resetFilterBtn = document.getElementById('reset-filter-btn');

            const tableRows = document.querySelectorAll('.question-row');
            const emptyState = document.getElementById('empty-state');
            const totalSoalBadge = document.querySelector('h3.text-2xl').nextElementSibling;

            function filterTable() {
                const semesterValue = filterSemester.value;
                const yearValue = filterYear.value;
                const typeValue = filterType.value;

                let visibleCount = 0;

                tableRows.forEach((row) => {
                    const rowSemester = row.getAttribute('data-semester');
                    const rowYear = row.getAttribute('data-year');
                    const rowType = row.getAttribute('data-type');

                    const matchSemester = (semesterValue === 'all') || (rowSemester === semesterValue);
                    const matchYear = (yearValue === 'all') || (rowYear === yearValue);
                    const matchType = (typeValue === 'all') || (rowType.toUpperCase() === typeValue
                        .toUpperCase());

                    if (matchSemester && matchYear && matchType) {
                        row.classList.remove('hidden');
                        visibleCount++;
                        const numCell = row.querySelector('.row-number');
                        if (numCell) numCell.textContent = visibleCount;
                    } else {
                        row.classList.add('hidden');
                    }
                });

                if (totalSoalBadge) {
                    totalSoalBadge.textContent = visibleCount + ' Soal';
                }

                if (visibleCount === 0) {
                    emptyState.classList.remove('hidden');
                } else {
                    emptyState.classList.add('hidden');
                }
            }

            filterSemester.addEventListener('change', filterTable);
            filterYear.addEventListener('change', filterTable);
            filterType.addEventListener('change', filterTable);

            // Handle Reset Filter Button
            if (resetFilterBtn) {
                resetFilterBtn.addEventListener('click', function() {
                    dropdowns.forEach(dropdown => {
                        const items = dropdown.querySelectorAll('.dropdown-item');
                        const hiddenSelect = dropdown.querySelector('select');
                        const label = dropdown.querySelector('.dropdown-label');

                        // Find the 'all' option
                        const allItem = Array.from(items).find(item => item.dataset.value ===
                        'all');

                        if (allItem) {
                            // Update UI state
                            items.forEach(i => i.classList.remove('active'));
                            allItem.classList.add('active');
                            label.textContent = allItem.textContent.trim();

                            // Reset select value
                            hiddenSelect.value = 'all';
                        }
                    });

                    // Trigger table filter to refresh view
                    filterTable();
                });
            }
        });
    </script>
    {{-- End Main Bank Soal Section --}}
@endsection

