<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Masak Pot - Hansa Fab Tutorial" />

        <title>Masak Pot | Hansa Fab</title>

        <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🍲</text></svg>">

        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        @vite(['resources/css/app.css'])
    </head>
    <body class="bg-[#0a0612] text-[#e9e9ff] min-h-screen overflow-x-hidden relative">

        <!-- Animated background orbs -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
            <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] rounded-full bg-orange-600/20 blur-[100px] animate-float-slow"></div>
            <div class="absolute bottom-[-20%] left-[-10%] w-[500px] h-[500px] rounded-full bg-amber-600/20 blur-[120px] animate-float"></div>
        </div>

        <!-- ======================= NAVBAR ======================= -->
        <nav class="fixed top-0 inset-x-0 z-50 glass">
            <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-500 to-indigo-500 flex items-center justify-center font-display font-bold text-xl shadow-lg twitch-glow">
                        H
                    </div>
                    <span class="font-display font-bold text-lg">HANSA<span class="text-gradient">FAB</span></span>
                </a>

                <div class="hidden md:flex items-center gap-6 text-sm font-medium">
                    <a href="{{ url('/') }}#home" class="hover:text-purple-300 transition">Home</a>
                    <a href="{{ route('tutorial') }}" class="hover:text-purple-300 transition">Tutorial</a>
                    <a href="{{ route('masak-pot') }}" class="text-purple-300 hover:text-purple-200 transition font-semibold">Masak Pot</a>
                </div>

                <a href="{{ route('tutorial') }}"
                   class="px-4 py-2 rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 font-semibold text-sm transition hover:scale-105 shadow-lg twitch-glow">
                    Back
                </a>
            </div>
        </nav>

        <!-- ======================= ACCESS PAGES NAV ======================= -->
        <section class="pt-28 pb-10 px-4">
            <div class="max-w-3xl mx-auto">
                <div class="flex justify-center gap-2 text-xs uppercase tracking-widest text-gray-500 mb-4"><span>Akses Page Lain</span></div>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('tutorial') }}"
                       class="px-5 py-3 rounded-2xl glass hover:bg-white/10 font-bold text-sm hover:scale-105 transition flex items-center gap-2">
                        🗡️ Cari Monster
                    </a>
                    <a href="{{ route('masak-pot') }}"
                       class="px-5 py-3 rounded-2xl bg-gradient-to-r from-purple-600 to-indigo-600 font-bold text-sm shadow-lg twitch-glow hover:scale-105 transition flex items-center gap-2">
                        🍲 Masak Pot
                    </a>
                </div>
            </div>
        </section>

        <!-- ======================= MASAK POT HERO ======================= -->
        <section class="py-12 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="text-6xl mb-4 animate-float">🍲</div>
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-orange-500/10 border border-orange-500/30 text-sm text-orange-200 mb-6">
                    <span>🔥</span>
                    <span>Masak Pot</span>
                </div>
                <h1 class="font-display text-3xl sm:text-4xl font-extrabold mb-4">
                    MASAK <span class="text-gradient">POT</span>
                </h1>
                <p class="text-gray-400 max-w-xl mx-auto">
                    Halaman untuk memasak / crafting dengan pot.
                    Konten akan dilengkapi selanjutnya. ✨
                </p>
            </div>
        </section>

        <!-- ======================= PLACEHOLDER CONTENT ======================= -->
        <section class="pb-24 px-4">
            <div class="max-w-4xl mx-auto glass rounded-3xl p-10 text-center">
                <div class="text-7xl mb-4">🫕</div>
                <h2 class="font-display text-2xl font-bold mb-3">Masih Kosong</h2>
                <p class="text-gray-400 mb-6">
                    Halaman <span class="text-orange-300 font-semibold">Masak Pot</span> sedang disiapkan.<br>
                    Sementara itu, kamu bisa kembali ke halaman pencarian monster.
                </p>
                <a href="{{ route('tutorial') }}"
                   class="inline-block px-6 py-3 rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 font-semibold hover:scale-105 transition shadow-lg twitch-glow">
                    🗡️ Kembali ke Cari Monster
                </a>
            </div>
        </section>

        <!-- ======================= FOOTER ======================= -->
        <footer class="py-8 px-4 border-t border-white/10">
            <div class="max-w-6xl mx-auto text-center text-sm text-gray-500">
                <p class="mb-2">© {{ date('Y') }} Hansa Fab. All rights reserved.</p>
                <div class="flex justify-center items-center gap-3 text-xs text-orange-400/70">
                    <span>🍲 Masak Pot</span>
                    <span>•</span>
                    <span>🔥 Crafting</span>
                    <span>•</span>
                    <span>💜 #HansaFam</span>
                </div>
            </div>
        </footer>
    </body>
</html>
