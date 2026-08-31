<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Tutorial Hansa Fab - Cari monster berdasarkan Job Base dan Level" />

        <title>Tutorial | Hansa Fab</title>

        <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🗡️</text></svg>">

        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        @vite(['resources/css/app.css'])
    </head>
    <body class="bg-[#0a0612] text-[#e9e9ff] min-h-screen overflow-x-hidden relative">

        <!-- Animated background orbs -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
            <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] rounded-full bg-purple-600/20 blur-[100px] animate-float-slow"></div>
            <div class="absolute bottom-[-20%] right-[-10%] w-[500px] h-[500px] rounded-full bg-indigo-600/20 blur-[120px] animate-float"></div>
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
                    <a href="{{ url('/') }}#about" class="hover:text-purple-300 transition">About</a>
                    <a href="{{ url('/') }}#schedule" class="hover:text-purple-300 transition">Schedule</a>
                    <a href="{{ url('/') }}#community" class="hover:text-purple-300 transition">Community</a>
                    <a href="{{ route('tutorial') }}" class="text-purple-300 hover:text-purple-200 transition font-semibold">Tutorial</a>
                </div>

                <a href="{{ url('/') }}#contact"
                   class="px-4 py-2 rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 font-semibold text-sm transition hover:scale-105 shadow-lg twitch-glow">
                    Back
                </a>
            </div>
        </nav>

        <!-- ======================= TUTORIAL HERO ======================= -->
        <section class="pt-28 pb-10 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-purple-500/10 border border-purple-500/30 text-sm text-purple-200 mb-6">
                    <span>🗡️</span>
                    <span>Tutorial</span>
                </div>
                <h1 class="font-display text-3xl sm:text-4xl font-extrabold mb-4">
                    CARI <span class="text-gradient">MONSTER</span>
                </h1>
                <p class="text-gray-400 max-w-xl mx-auto">
                    Pilih Job Base &amp; masukkan Level untuk mencari monster yang cocok.
                    Isi form di bawah lalu tekan <span class="text-purple-300 font-semibold">Cari Monster</span>.
                </p>
            </div>
        </section>

        <!-- ======================= ACCESS PAGES NAV ======================= -->
        <section class="pb-10 px-4">
            <div class="max-w-3xl mx-auto">
                <p class="text-center text-xs uppercase tracking-widest text-gray-500 mb-4">Akses Page Lain</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <!-- Active: Cari Monster (default) -->
                    <a href="{{ route('tutorial') }}"
                       class="px-5 py-3 rounded-2xl bg-gradient-to-r from-purple-600 to-indigo-600 font-bold text-sm shadow-lg twitch-glow hover:scale-105 transition flex items-center gap-2">
                        🗡️ Cari Monster
                    </a>

                    <!-- Link to Masak Pot page -->
                    <a href="{{ route('masak-pot') }}"
                       class="px-5 py-3 rounded-2xl glass hover:bg-white/10 font-bold text-sm hover:scale-105 transition flex items-center gap-2">
                        🍲 Masak Pot
                    </a>
                </div>
            </div>
        </section>

        <!-- ======================= FORM ======================= -->
        <section class="pb-10 px-4">
            <div class="max-w-2xl mx-auto gradient-border rounded-3xl p-8">
                <form id="monster-form" class="space-y-6">
                    @csrf

                    <!-- Job Base -->
                    <div>
                        <label for="job_base" class="block text-sm font-semibold text-purple-200 mb-2">
                            Job Base
                        </label>
                        <select id="job_base" name="job_base" required
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm text-[#e9e9ff] focus:outline-none focus:border-purple-500 transition placeholder-gray-500 appearance-none cursor-pointer">
                            <option value="" disabled selected class="font-bold text-black bg-white">Pilih Job Base...</option>
                            <option value="beginer" class="font-bold text-black bg-white">Beginer</option>
                            <option value="warrior" class="font-bold text-black bg-white">Warrior</option>
                            <option value="knight" class="font-bold text-black bg-white">Knight</option>
                            <option value="clown" class="font-bold text-black bg-white">Clown</option>
                            <option value="hunter" class="font-bold text-black bg-white">Hunter</option>
                            <option value="crafmant" class="font-bold text-black bg-white">Crafmant</option>
                            <option value="priest" class="font-bold text-black bg-white">Priest</option>
                            <option value="cook" class="font-bold text-black bg-white">Cook</option>
                        </select>
                    </div>

                    <!-- Level -->
                    <div>
                        <label for="level" class="block text-sm font-semibold text-purple-200 mb-2">
                            Level
                        </label>
                        <input id="level" name="level" type="number" min="1" max="9999" step="1"
                               placeholder="Masukkan Level (contoh: 150)"
                               class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-purple-500 transition placeholder-gray-500"
                               required>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                            class="w-full px-6 py-4 rounded-xl bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 animate-gradient font-bold text-lg hover:scale-[1.02] transition shadow-xl twitch-glow">
                        🔍 Cari Monster
                    </button>
                </form>
            </div>
        </section>

        <!-- ======================= RESULT TABLE ======================= -->
        <section class="pb-24 px-4">
            <div class="max-w-5xl mx-auto">
                <div id="result-box" class="glass rounded-3xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="font-display text-xl font-bold">HASIL <span class="text-gradient">PENCARIAN</span></h2>
                        <span id="result-summary" class="text-sm text-gray-400"></span>
                    </div>

                    <!-- Placeholder state -->
                    <div id="empty-state" class="text-center py-12">
                        <div class="text-5xl mb-4">🗺️</div>
                        <p class="text-gray-400">Belum ada data monster.<br>Pilih Job Base &amp; Level lalu tekan <span class="text-purple-300 font-semibold">Cari Monster</span>.</p>
                    </div>

                    <!-- Table (hidden until data available) -->
                    <div id="table-state" class="hidden overflow-x-auto">
                        <table class="w-full text-sm text-left border-collapse">
                            <thead>
                                <tr class="text-purple-200 border-b border-white/10">
                                    <th class="py-3 px-4 font-semibold">#</th>
                                    <th class="py-3 px-4 font-semibold">Monster</th>
                                    <th class="py-3 px-4 font-semibold">Level</th>
                                    <th class="py-3 px-4 font-semibold">Lokasi Map</th>
                                    <th class="py-3 px-4 font-semibold">Reward</th>
                                </tr>
                            </thead>
                            <tbody id="monster-table-body">
                                <!-- Data akan diisi di sini (belum tersedia) -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======================= FOOTER ======================= -->
        <footer class="py-8 px-4 border-t border-white/10">
            <div class="max-w-6xl mx-auto text-center text-sm text-gray-500">
                <p class="mb-2">© {{ date('Y') }} Hansa Fab. All rights reserved.</p>
                <div class="flex justify-center items-center gap-3 text-xs text-purple-400/70">
                    <span>🗡️ Tutorial</span>
                    <span>•</span>
                    <span>🐉 Momon</span>
                    <span>•</span>
                    <span>💜 #HansaFam</span>
                </div>
            </div>
        </footer>

        <!-- Page Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.getElementById('monster-form');
                const emptyState = document.getElementById('empty-state');
                const tableState = document.getElementById('table-state');
                const summary = document.getElementById('result-summary');

                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    const jobBase = document.getElementById('job_base').value;
                    const level = document.getElementById('level').value;

                    if (!jobBase || !level) {
                        window.showToast && window.showToast('Lengkapi Job Base & Level dulu ya!');
                        return;
                    }

                    // Data monster masih dikosongkan, nanti dilengkapi.
                    // Untuk sekarang tampilkan placeholder hasil.
                    emptyState.classList.add('hidden');
                    tableState.classList.remove('hidden');
                    summary.textContent = 'Job Base: ' + jobBase + ' | Level: ' + level + ' | Lokasi Map: -';

                    const tbody = document.getElementById('monster-table-body');
                    tbody.innerHTML = '';
                    const row = document.createElement('tr');
                    row.className = 'border-b border-white/5';
                    row.innerHTML = `
                        <td colspan="5" class="py-6 px-4 text-center text-gray-400">
                            Data monster masih kosong — akan dilengkapi nanti. 🐾
                        </td>`;
                    tbody.appendChild(row);

                    window.showToast && window.showToast('Pencarian berhasil!');
                });
            });
        </script>
    </body>
</html>
