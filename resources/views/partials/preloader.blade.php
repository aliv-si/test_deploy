{{-- Preloader --}}
<div id="preloader" class="fixed inset-0 z-[9999]">
    {{-- Background sheets (same as page transition) --}}
    <div class="preloader-sheet preloader-sheet-yellow absolute inset-0 bg-primary-200"></div>
    <div class="preloader-sheet preloader-sheet-blue absolute inset-0 bg-primary-600"></div>
    {{-- Centered text --}}
    <div class="absolute inset-0 flex items-center justify-center z-10">
        <div class="flex gap-2 md:gap-4 overflow-hidden">
            <span class="preloader-word text-white font-poppins text-2xl md:text-5xl font-semibold tracking-tight">Adaptif,</span>
            <span class="preloader-word text-white font-poppins text-2xl md:text-5xl font-semibold tracking-tight">Inovatif,</span>
            <span class="preloader-word text-primary-200 font-poppins text-2xl md:text-5xl font-semibold tracking-tight">Kreatif</span>
        </div>
    </div>
</div>

{{-- Page Transition Overlay --}}
<div id="page-transition" class="fixed inset-0 z-[9998] pointer-events-none" aria-hidden="true">
    {{-- Yellow sheet (behind, starts first) --}}
    <div class="transition-sheet sheet-yellow absolute inset-0 bg-primary-200"></div>
    {{-- Blue sheet (front, starts slightly after) --}}
    <div class="transition-sheet sheet-blue absolute inset-0 bg-primary-600"></div>
    {{-- Centered logo --}}
    <div class="transition-logo absolute inset-0 flex items-center justify-center z-10">
        <div class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-white flex items-center justify-center shadow-lg">
            <img src="{{ asset('img/logo-himasi.png') }}" alt="HIMASI" class="w-12 h-12 md:w-14 md:h-14" draggable="false">
        </div>
    </div>
</div>
