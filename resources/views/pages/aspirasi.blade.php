<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Aspirasi</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
</head>

<body class="antialiased min-h-screen flex items-center justify-center bg-gray-100 p-4">
    <main class="relative w-full max-w-5xl bg-white rounded-2xl shadow-2xl flex flex-col lg:flex-row min-h-[550px]">

        {{-- Character decorations --}}
        <img src="{{ asset('img/char_male.png') }}" alt=""
            class="absolute -bottom-3 -right-38 w-52 lg:w-64 z-10 pointer-events-none select-none" draggable="false">
        <img src="{{ asset('img/char_female.png') }}" alt=""
            class="absolute -bottom-4 -left-35 w-52 lg:w-64 z-10 pointer-events-none select-none" draggable="false">

        {{-- Left Panel --}}
        <section
            class="lg:w-1/2 relative bg-primary-600 p-8 lg:p-12 flex flex-col justify-between overflow-hidden rounded-l-2xl">

            <div class="relative z-10 mt-12 lg:mt-0">
                <a href="/"
                    class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl border border-white/30 text-white/80 hover:text-white hover:bg-white/10 font-poppins text-sm font-semibold transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                    Kembali ke Beranda
                </a>
            </div>

            <div class="relative z-10 space-y-4 mb-5">
                {{-- Accent yellow (10%) — small tagline --}}
                <p class="text-primary-200 font-poppins font-medium tracking-wide uppercase text-sm">HIMASI AMIKOM</p>
                <h1 class="text-white text-4xl lg:text-5xl font-bold font-poppins leading-tight tracking-tight">
                    Ruang <br />
                    <span class="text-white/90">Aspirasi</span>
                </h1>
                <p class="text-white/70 font-poppins max-w-md text-lg leading-relaxed mt-4">
                    Ide dan saranmu sangat berarti bagi kemajuan program studi kita. Mari bangun lingkungan akademik
                    yang lebih baik bersama-sama.
                </p>
            </div>
        </section>

        {{-- Right Panel: Form (60% — Dominant: White/Neutral) --}}
        <section class="lg:w-1/2 p-8 lg:p-16 flex flex-col justify-center bg-white overflow-hidden rounded-r-2xl">
            <div class="max-w-md w-full mx-auto">
                {{-- Message --}}
                <div id="form-message" class="hidden mb-4 p-3 rounded-lg text-sm font-poppins"></div>

                <form id="aspiration-form" method="POST" action="{{ route('aspiration.store') }}" class="space-y-5">
                    @csrf
                    <div id="email-field">
                        <label class="block text-sm font-semibold font-poppins text-primary-300 mb-1"
                            for="email_student">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email_student" name="email_student"
                            class="w-full rounded-xl border border-gray-300 bg-white font-poppins text-sm py-3 px-4 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent transition"
                            placeholder="example@students.amikom.ac.id" pattern=".*@students\.amikom\.ac\.id$"
                            required />
                    </div>

                    <div id="class-field">
                        <label class="block text-sm font-semibold font-poppins text-primary-300 mb-1" for="class">
                            Kelas <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="class" name="class"
                            class="w-full rounded-xl border border-gray-300 bg-white font-poppins text-sm py-3 px-4 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent transition"
                            placeholder="eg: 24SI01" required />
                    </div>

                    <div>
                        <label class="block text-sm font-semibold font-poppins text-primary-300 mb-1" for="aspiration">
                            Pesan Aspirasi <span class="text-red-500">*</span>
                        </label>
                        <textarea id="aspiration" name="aspiration" rows="4"
                            class="w-full rounded-xl border border-gray-300 bg-white font-poppins text-sm py-3 px-4 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent transition resize-none"
                            spellcheck="false" placeholder="Tuliskan aspirasi, kritik, atau saran kamu..." required></textarea>
                    </div>

                    <div
                        class="flex items-center justify-between p-3 bg-primary-600/5 rounded-xl border border-primary-600/10">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-primary-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>
                            <span class="text-xs font-poppins font-semibold text-primary-300">Kirim sebagai
                                Anonim</span>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="is_anonymous" name="is_anonymous" value="1"
                                class="sr-only peer">
                            <div
                                class="w-9 h-5 bg-gray-200 rounded-full peer peer-checked:bg-primary-600 peer-focus:ring-2 peer-focus:ring-primary-600/20 transition-colors after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:after:translate-x-full">
                            </div>
                        </label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="privacy" name="privacy"
                            class="h-3 w-3 text-primary-600 border-gray-300 rounded focus:ring-primary-600" />
                        <label class="ml-2 text-xs font-poppins text-gray-500" for="privacy">
                            Saya menyetujui <a class="text-primary-600 hover:text-primary-700 underline"
                                href="#">kebijakan privasi</a> data aspirasi.
                        </label>
                    </div>

                    {{-- Submit button uses accent yellow (10%) --}}
                    <button type="submit" id="submit-btn"
                        class="w-full py-3 px-4 rounded-xl font-poppins font-semibold text-sm text-primary-300 bg-primary-200 opacity-90 hover:opacity-100 cursor-pointer shadow-md transition-all duration-200 hover:-translate-y-0.5">
                        Kirim
                    </button>

                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-400 font-poppins">Atau hubungi kami via</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <button type="button"
                            class="w-full inline-flex justify-center py-2.5 px-4 border border-gray-200 rounded-xl bg-white text-sm font-poppins font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 transition-colors">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            WhatsApp
                        </button>
                        <button type="button"
                            class="w-full inline-flex justify-center py-2.5 px-4 border border-gray-200 rounded-xl bg-white text-sm font-poppins font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 transition-colors">
                            <svg class="w-5 h-5 text-red-400 mr-2" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                            Email
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('aspiration-form');
            const messageDiv = document.getElementById('form-message');
            const submitBtn = document.getElementById('submit-btn');

            form.addEventListener('submit', async function(e) {
                e.preventDefault();
                submitBtn.disabled = true;
                submitBtn.textContent = 'Mengirim...';

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        body: new FormData(form),
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json',
                        }
                    });

                    const data = await response.json();
                    messageDiv.classList.remove('hidden', 'bg-green-100', 'text-green-700',
                        'bg-red-100', 'text-red-700');

                    if (data.success) {
                        messageDiv.classList.add('bg-green-100', 'text-green-700');
                        messageDiv.textContent = data.message;
                        form.reset();
                        toggleAnonymousFields(false);
                    } else {
                        messageDiv.classList.add('bg-red-100', 'text-red-700');
                        messageDiv.textContent = data.message || 'Terjadi kesalahan.';
                    }
                } catch (error) {
                    messageDiv.classList.remove('hidden', 'bg-green-100', 'text-green-700',
                        'bg-red-100', 'text-red-700');
                    messageDiv.classList.add('bg-red-100', 'text-red-700');
                    messageDiv.textContent = 'Gagal mengirim aspirasi. Coba lagi nanti.';
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Kirim';
                }
            });

            // Anonymous toggle
            const anonToggle = document.getElementById('is_anonymous');
            const emailField = document.getElementById('email-field');
            const classField = document.getElementById('class-field');
            const emailInput = document.getElementById('email_student');
            const classInput = document.getElementById('class');

            function toggleAnonymousFields(isAnon) {
                emailField.style.display = isAnon ? 'none' : '';
                classField.style.display = isAnon ? 'none' : '';
                emailInput.required = !isAnon;
                classInput.required = !isAnon;
                if (isAnon) {
                    emailInput.value = '';
                    classInput.value = '';
                }
            }

            anonToggle.addEventListener('change', function() {
                toggleAnonymousFields(this.checked);
            });
        });
    </script>
</body>

</html>
