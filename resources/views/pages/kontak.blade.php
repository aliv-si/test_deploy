@extends('layouts.app')

@section('title', 'Kontak - HIMASI')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-primary-400 to-primary-600 py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-4xl lg:text-5xl font-bold mb-4">Hubungi Kami</h1>
            <p class="text-lg opacity-90 max-w-2xl mx-auto">
                Ada pertanyaan atau ingin berkolaborasi? Jangan ragu untuk menghubungi kami.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h2 class="text-2xl font-bold text-primary-300 mb-6">Kirim Pesan</h2>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('/kontak') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" class="form-input" placeholder="Masukkan nama lengkap" required>
                            @error('nama')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="example@email.com" required>
                            @error('email')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="subjek" class="form-label">Subjek</label>
                            <input type="text" id="subjek" name="subjek" class="form-input" placeholder="Subjek pesan" required>
                            @error('subjek')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea id="pesan" name="pesan" class="form-textarea" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                            @error('pesan')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-primary-400 to-primary-600 text-white font-semibold py-3 px-6 rounded-lg hover:opacity-90 transition-opacity">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div>
                    <h2 class="text-2xl font-bold text-primary-300 mb-6">Informasi Kontak</h2>
                    <p class="text-primary-900 mb-8">
                        Kami senang mendengar dari Anda. Hubungi kami melalui informasi di bawah ini atau kirim pesan langsung.
                    </p>

                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-primary-300 mb-1">Alamat</h3>
                                <p class="text-primary-900">Jl. Contoh Alamat No. 123, Kota, Indonesia</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-primary-300 mb-1">Email</h3>
                                <a href="mailto:himasi@example.com" class="text-primary-400 hover:text-primary-600 transition-colors">
                                    himasi@example.com
                                </a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-primary-300 mb-1">Telepon</h3>
                                <a href="tel:+621234567890" class="text-primary-400 hover:text-primary-600 transition-colors">
                                    +62 123 4567 890
                                </a>
                            </div>
                        </div>

                        <!-- Operating Hours -->
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-primary-300 mb-1">Jam Operasional</h3>
                                <p class="text-primary-900">Senin - Jumat: 08:00 - 17:00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-8 pt-8 border-t border-primary-100">
                        <h3 class="font-semibold text-primary-300 mb-4">Ikuti Kami</h3>
                        <div class="flex gap-4">
                            <a href="#" class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center hover:bg-primary-400 hover:text-white transition-all group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center hover:bg-primary-400 hover:text-white transition-all group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center hover:bg-primary-400 hover:text-white transition-all group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="h-96 bg-primary-100">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613507864!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b45e67356080477!2sMonument%20Nasional!5e0!3m2!1sen!2sid!4v1635388000000!5m2!1sen!2sid"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </section>
@endsection
