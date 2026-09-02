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
                    <span>Tutorial Seal Online</span>
                </div>
                <h1 class="font-display text-3xl sm:text-4xl font-extrabold mb-4">
                    Rekomendasi <span class="text-gradient">MONSTER</span>
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
                        🗡️ Rekomendasi Monster
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

                    <!-- Server -->
                    <div>
                        <label for="server" class="block text-sm font-semibold text-purple-200 mb-2">
                            Server Private
                        </label>
                        <select id="server" name="server" required
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm text-[#e9e9ff] focus:outline-none focus:border-purple-500 transition placeholder-gray-500 appearance-none cursor-pointer">
                            <option value="" disabled class="font-bold text-black bg-white">Pilih Server...</option>
                            <option value="v5" class="font-bold text-black bg-white">Return v5</option>
                        </select>
                    </div>

                    <!-- Job Base -->
                    <div>
                        <label for="job_base" class="block text-sm font-semibold text-purple-200 mb-2">
                            Job Base
                        </label>
                        <select id="job_base" name="job_base" required
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm text-[#e9e9ff] focus:outline-none focus:border-purple-500 transition placeholder-gray-500 appearance-none cursor-pointer">
                            <option value="" disabled class="font-bold text-black bg-white">Pilih Job Base...</option>
                            <option value="Beginner" selected class="font-bold text-black bg-white">Beginner</option>
                            <option value="Knight" class="font-bold text-black bg-white">Knight</option>
                            <option value="Warrior" class="font-bold text-black bg-white">Warrior</option>
                            <option value="Priest" class="font-bold text-black bg-white">Priest</option>
                            <option value="Mage" class="font-bold text-black bg-white">Mage</option>
                            <option value="Crafmant" class="font-bold text-black bg-white">Crafmant</option>
                            <option value="Jester" class="font-bold text-black bg-white">Jester</option>
                            <option value="Hunter" class="font-bold text-black bg-white">Hunter</option>
                            <option value="Cook" class="font-bold text-black bg-white">Cook</option>
                        </select>
                    </div>

                    <!-- Level -->
                    <div>
                        <label for="level" class="block text-sm font-semibold text-purple-200 mb-2">
                            Level
                        </label>
<input id="level" name="level" type="number" min="1" max="371" step="1" value="1"
                                placeholder="Masukkan Level (contoh: 150, max 371)"
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

<!-- ======================= RESULT COMPONENT ======================= -->
        <section class="pb-24 px-4">
            <div id="result-box" class="max-w-7xl mx-auto">

                <!-- Two-column layout (game-style panel) -->
                <div class="grid lg:grid-cols-3 gap-6 items-start">

                    <!-- LEFT COLUMN: Monster List -->
                    <div class="lg:col-span-1">
                        <div class="rounded-2xl border border-[#d9d0bd] bg-[#fbf7ec] shadow-[0_10px_36px_rgba(0,0,0,0.15)] overflow-hidden">
                            <!-- Blue header -->
                            <div class="bg-gradient-to-r from-blue-700 to-sky-500 px-5 py-4">
                                <h3 class="font-display text-lg font-bold text-white tracking-wide">Monster Rekomendasi</h3>
                            </div>
                            <div class="p-4">
                                <div id="monster-list" class="space-y-2.5 pr-1">
                                    <!-- Monster cards inserted here -->
                                </div>

                                <!-- Pagination -->
                                <div class="mt-5 flex items-center justify-between gap-2 border-t border-[#e7dfcb] pt-4">
                                    <button id="prev-page"
                                            class="px-3 py-2 rounded-lg bg-white border border-blue-400 text-blue-600 text-xs font-semibold shadow-sm transition enabled:hover:bg-blue-600 enabled:hover:text-white disabled:opacity-40 disabled:cursor-not-allowed">
                                        ← Monster Level Lebih Rendah
                                    </button>
                                    <span id="page-info" class="text-xs text-[#8a8068] font-medium whitespace-nowrap">Page 1</span>
                                    <button id="next-page"
                                            class="px-4 py-2 rounded-lg bg-white border border-blue-400 text-blue-600 text-xs font-semibold shadow-sm transition enabled:hover:bg-blue-600 enabled:hover:text-white disabled:opacity-40 disabled:cursor-not-allowed">
                                        Next →
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: Monster Detail -->
                    <div class="lg:col-span-2">
                        <div id="monster-detail" class="hidden rounded-2xl border border-[#d9d0bd] bg-[#fbf7ec] shadow-[0_10px_36px_rgba(0,0,0,0.15)] overflow-hidden">
                            <!-- Blue header -->
                            <div class="bg-gradient-to-r from-blue-700 to-sky-500 px-5 py-4">
                                <h3 class="font-display text-xl font-bold text-white tracking-wide">Detail Monster</h3>
                            </div>
                            <div class="p-6">
                                <!-- Two-side layout: info left, image right -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-start">

                                    <!-- LEFT: monster info -->
                                    <div class="space-y-5">

                                        <!-- Monster name and level -->
                                        <div>
                                            <div class="flex items-center gap-2 flex-wrap">
                                                <p id="detail-name" class="font-display text-2xl font-bold text-[#2b2b27]"></p>
                                                <span id="detail-disable-badge" class="hidden text-[11px] px-2.5 py-1 rounded-full bg-red-100 text-red-700 border border-red-300 font-bold">Disable</span>
                                            </div>
                                            <p id="detail-level" class="text-sm text-[#8a8068] mt-1"></p>
                                        </div>

                                        <!-- Type / Attribute -->
                                        <div>
                                            <p class="text-sm font-bold text-[#4b4d5a] mb-2">Type</p>
                                            <div id="detail-type" class="flex flex-wrap gap-2"></div>
                                        </div>

                                        <!-- Map / Location -->
                                        <div>
                                            <p class="text-sm font-bold text-[#4b4d5a] mb-2">Map</p>
                                            <div id="detail-map" class="space-y-1"></div>
                                        </div>

                                        <!-- Drop Rate -->
                                        <div>
                                            <p class="text-sm font-bold text-[#4b4d5a] mb-2">Drop Rate</p>
                                            <p id="detail-drop-rate" class="text-lg font-bold"></p>
                                        </div>

                                        <!-- EXP Rate -->
                                        <div>
                                            <p class="text-sm font-bold text-[#4b4d5a] mb-2">EXP Rate</p>
                                            <p id="detail-exp-rate" class="text-lg font-bold"></p>
                                        </div>

                                    </div>

                                    <!-- RIGHT: monster image + wiki button -->
                                    <div class="flex flex-col items-center justify-start sm:justify-center gap-4">
                                        <div class="border-2 border-[#cbbf9e] rounded-xl p-2 bg-white shadow-inner">
                                            <img id="detail-image" src=""
                                                 alt="Monster Image"
                                                 class="w-48 h-48 object-contain rounded-lg bg-[#f2ead6]"
                                                 onerror="this.classList.add('hidden'); document.getElementById('detail-image-fallback').classList.remove('hidden');">
                                            <div id="detail-image-fallback" class="hidden w-48 h-48 rounded-lg bg-[#f2ead6] flex flex-col items-center justify-center text-center">
                                                <span class="text-4xl">🗡️</span>
                                                <span class="text-xs text-[#8a8068] mt-2">Belum ada gambar</span>
                                            </div>
                                        </div>

                                        <!-- Go to Wiki -->
                                        <a id="detail-wiki-link" href="#" target="_blank" rel="noopener noreferrer"
                                           class="inline-block px-6 py-2.5 rounded-lg bg-gradient-to-r from-blue-700 to-sky-500 text-white font-semibold text-sm shadow-md transition enabled:hover:opacity-90 disabled:opacity-40 disabled:cursor-not-allowed">
                                            Go to Wiki ↗
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- No monster selected message -->
                        <div id="no-selection" class="hidden rounded-2xl border border-[#d9d0bd] bg-[#fbf7ec] shadow-[0_10px_36px_rgba(0,0,0,0.15)] overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-700 to-sky-500 px-5 py-4">
                                <h3 class="font-display text-xl font-bold text-white tracking-wide">Detail Monster</h3>
                            </div>
                            <div class="p-6 text-center">
                                <div class="text-4xl mb-3">📋</div>
                                <p class="text-[#8a8068]">Pilih monster dari kiri untuk melihat detail</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- ======================= FOOTER ======================= -->
        <footer class="py-8 px-4 border-t border-white/10">
            <div class="max-w-6xl mx-auto text-center text-sm text-gray-500">
                <p class="mb-2">© {{ date('Y') }} Hansa Fab.</p>

                <div class="rounded-xl border border-amber-300/30 bg-amber-500/5 px-5 py-4 mb-5 text-left mx-auto max-w-3xl">
                    <p class="font-semibold text-[#f0dca8] mb-1 text-sm text-center">⚠️ Disclaimer</p>
                    <p class="text-[#c9c9dd] text-xs leading-relaxed">
                        Seal Online, Playwith, serta ikon, gambar, karakter, dan resource terkait merupakan hak milik pemegang hak masing-masing. Situs ini adalah proyek fan-made dan tidak berafiliasi dengan, tidak disponsori oleh, dan tidak secara resmi didukung oleh pihak pemilik/penerbit Seal Online.
                    </p>
                    <p class="text-[#c9c9dd] text-xs leading-relaxed mt-2">
                        Situs ini hanya melakukan pengumpulan, pengolahan, dan penyusunan informasi untuk keperluan referensi dan tutorial komunitas. Kami tidak mengklaim kepemilikan atas konten game tersebut.
                    </p>
                </div>

                <div class="flex justify-center items-center gap-3 text-xs text-purple-400/70">
                    <span>🗡️ Tutorial</span>
                    <span>•</span>
                    <span>🐉 Momon</span>
                    <span>•</span>
                    <span>💜 #HansaFab</span>
                </div>
            </div>
        </footer>

<!-- Page Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.getElementById('monster-form');

                // Single file path - all monster data in one file
                const MONSTER_DATA_FILE = '../data/monster/all.json';
                const DISABLE_DATA_FILE = '../data/disable.json';

                // ===== Penalty Matrix =====
                const PENALTY_MATRIX = {
                    exp_penalty: [
                        { min_level_difference: 1, max_level_difference: 29, percentage: 100 },
                        { min_level_difference: 30, max_level_difference: 34, percentage: 95 },
                        { min_level_difference: 35, max_level_difference: 39, percentage: 85 },
                        { min_level_difference: 40, max_level_difference: 44, percentage: 75 },
                        { min_level_difference: 45, max_level_difference: 54, percentage: 65 },
                        { min_level_difference: 55, max_level_difference: 59, percentage: 35 },
                        { min_level_difference: 60, max_level_difference: null, percentage: 5 }
                    ],
                    drop_penalty: [
                        { min_level_difference: 1, max_level_difference: 30, percentage: 100 },
                        { min_level_difference: 31, max_level_difference: 34, percentage: 85 },
                        { min_level_difference: 35, max_level_difference: 39, percentage: 65 },
                        { min_level_difference: 40, max_level_difference: 49, percentage: 45 },
                        { min_level_difference: 50, max_level_difference: 54, percentage: 25 },
                        { min_level_difference: 55, max_level_difference: null, percentage: 5 }
                    ]
                };

                /**
                 * Cari persentase penalty dari matrix berdasarkan level difference
                 * @param {Array} matrix - array penalty
                 * @param {number} levelDiff - absolute level difference
                 * @returns {number} percentage
                 */
                function getPenaltyPercentage(matrix, levelDiff) {
                    // Level monster sama dengan level player (diff 0) -> full rate tanpa penalty
                    if (levelDiff < 1) return 100;
                    for (const entry of matrix) {
                        const min = entry.min_level_difference;
                        const max = entry.max_level_difference;
                        if (levelDiff >= min && (max === null || levelDiff <= max)) {
                            return entry.percentage;
                        }
                    }
                    return 0;
                }

                /**
                 * Hitung penalty berdasarkan server, level input, dan job base
                 * @param {string} server - server pilihan
                 * @param {number} inputLevel - level input user
                 * @param {number} monsterLevel - level monster
                 * @param {string} jobBase - job base monster
                 * @returns {object} { expRate, dropRate }
                 */
                function calculatePenalty(server, inputLevel, monsterLevel, jobBase) {
                    const levelDiff = Math.abs(monsterLevel - inputLevel);
                    const expRate = getPenaltyPercentage(PENALTY_MATRIX.exp_penalty, levelDiff);
                    let dropRate;

                    // Crafmant: drop rate tetap 100%
                    if (jobBase && jobBase.toLowerCase() === 'crafmant') {
                        dropRate = 100;
                    } else {
                        dropRate = getPenaltyPercentage(PENALTY_MATRIX.drop_penalty, levelDiff);
                    }

                    return { expRate, dropRate, levelDiff };
                }

                /**
                 * Cek apakah monster disable di server yang sedang dipilih
                 * @param {object} monster
                 * @returns {boolean}
                 */
                function isMonsterDisabled(monster) {
                    if (!monster || !server || !disableData[server]) return false;
                    const list = disableData[server] || [];
                    return list.includes(monster.name);
                }

                // ===== Monster Recommendation State =====
                let allMonsters = [];
                let sortedMonsters = [];
                let currentPage = 1;
                let playerLevel = 1;
                let selectedMonster = null;
                let server = 'v1';
                let jobBase = 'Beginner';
                const PER_PAGE = 5;
                let disableData = {};

                // DOM references
                const monsterListEl = document.getElementById('monster-list');
                const detailPanel = document.getElementById('monster-detail');
                const noSelection = document.getElementById('no-selection');
                const prevBtn = document.getElementById('prev-page');
                const nextBtn = document.getElementById('next-page');
                const pageInfo = document.getElementById('page-info');

                /**
                 * Rekomendasi: monster dengan EXP rate tertinggi & difference terdekat
                 */
                function findRecommended() {
                    if (!sortedMonsters.length) return null;
                    if (!playerLevel || playerLevel < 1) {
                        return sortedMonsters[0];
                    }
                    let best = null;
                    let bestScore = Infinity;
                    for (const monster of sortedMonsters) {
                        const diff = Math.abs(monster.level - playerLevel);
                        const expRate = getPenaltyPercentage(PENALTY_MATRIX.exp_penalty, diff);
                        if (diff === 0) { best = monster; break; }
                        const score = diff * 100 - expRate * 1;
                        if (score < bestScore) {
                            bestScore = score;
                            best = monster;
                        }
                    }
                    return best;
                }

                /**
                 * Cari monster dengan level paling dekat ke player level
                 */
                function findClosestToPlayer() {
                    if (!sortedMonsters.length) return null;
                    let closest = sortedMonsters[0];
                    let minDiff = Infinity;
                    for (const monster of sortedMonsters) {
                        const diff = Math.abs(monster.level - playerLevel);
                        if (diff < minDiff) {
                            minDiff = diff;
                            closest = monster;
                        }
                    }
                    return closest;
                }

                /**
                 * Tentukan monster yang direkomendasikan
                 * Prioritaskan: 1) diff 0 (exact), 2) diff paling kecil, 3) expRate tertinggi
                 */
                function getRecommendedMonster() {
                    if (!sortedMonsters.length) return null;
                    if (!playerLevel || playerLevel < 1) return sortedMonsters[0];

                    let recommended = null;
                    let bestDiff = Infinity;
                    let bestExp = -1;

                    for (const monster of sortedMonsters) {
                        const diff = Math.abs(monster.level - playerLevel);
                        const expRate = getPenaltyPercentage(PENALTY_MATRIX.exp_penalty, diff);

                        if (diff < bestDiff) {
                            bestDiff = diff;
                            bestExp = expRate;
                            recommended = monster;
                        } else if (diff === bestDiff && expRate > bestExp) {
                            bestExp = expRate;
                            recommended = monster;
                        }
                    }

                    return recommended;
                }

                /**
                 * Render list monster di kolom kiri berdasarkan halaman saat ini
                 */
                function renderMonsterList() {
                    if (!sortedMonsters.length) {
                        monsterListEl.innerHTML = `
                            <div class="text-center py-12">
                                <div class="text-4xl mb-3">🗺️</div>
                                <p class="text-[#8a8068]">Tidak ada monster ditemukan</p>
                            </div>
                        `;
                        return;
                    }

                    const start = (currentPage - 1) * PER_PAGE;
                    const end = start + PER_PAGE;
                    const pageMonsters = sortedMonsters.slice(start, end);
                    const recommended = getRecommendedMonster();

                    monsterListEl.innerHTML = '';

                    pageMonsters.forEach((monster) => {
                        const card = document.createElement('button');
                        card.type = 'button';
                        card.className =
                            'w-full text-left flex items-center gap-3 p-3 rounded-xl border transition cursor-pointer ' +
                            (selectedMonster && selectedMonster.name === monster.name
                                ? 'bg-blue-50 border-blue-500 shadow-sm ring-1 ring-blue-400'
                                : 'bg-white border-[#e2dac6] hover:border-blue-400 hover:shadow-sm');

                        const locations = monster.map_location ? monster.map_location.join(', ') : '-';

                        card.innerHTML = `
                            <div class="w-12 h-12 rounded-lg bg-blue-50 border border-blue-200 flex items-center justify-center text-xl shrink-0">
                                👾
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2">
                                    <span class="font-semibold text-sm text-[#2b2b27] truncate">${monster.name}</span>
                                    ${recommended && recommended.name === monster.name ? '<span class="text-[10px] px-2 py-0.5 rounded-full bg-green-100 text-green-700 border border-green-300 whitespace-nowrap">Rekomendasi</span>' : ''}
                                </div>
                                <p class="text-xs text-[#8a8068] mt-0.5">Level: ${monster.level}</p>
                            </div>
                        `;

                        card.addEventListener('click', () => selectMonster(monster));
                        monsterListEl.appendChild(card);
                    });

                    // Update pagination info & button states
                    renderPagination();
                }

                /**
                 * Update status pagination
                 */
                function renderPagination() {
                    const totalPages = Math.max(1, Math.ceil(sortedMonsters.length / PER_PAGE));
                    pageInfo.textContent = `Page ${currentPage} / ${totalPages}`;
                    prevBtn.disabled = currentPage <= 1;
                    nextBtn.disabled = currentPage >= totalPages;
                }

                /**
                 * Render detail monster yang dipilih
                 */
                function renderDetail(monster) {
                    if (!monster) {
                        detailPanel.classList.add('hidden');
                        noSelection.classList.remove('hidden');
                        return;
                    }

                    detailPanel.classList.remove('hidden');
                    noSelection.classList.add('hidden');

                    const expRate = getPenaltyPercentage(PENALTY_MATRIX.exp_penalty, Math.abs(monster.level - playerLevel));
                    let dropRate;
                    if (jobBase && jobBase.toLowerCase() === 'crafmant') {
                        dropRate = 100;
                    } else {
                        dropRate = getPenaltyPercentage(PENALTY_MATRIX.drop_penalty, Math.abs(monster.level - playerLevel));
                    }

                    // Type: bisa string tunggal atau array
                    let types = [];
                    if (Array.isArray(monster.type)) {
                        types = monster.type;
                    } else if (monster.type) {
                        types = [monster.type];
                    }

                    const typeBadgesHtml = types.length
                        ? types.map(t => `<span class="px-3 py-1 rounded-md text-xs font-bold bg-blue-100 text-blue-800 border border-blue-300">${t}</span>`).join(' ')
                        : '<span class="text-[#8a8068] text-sm">-</span>';

                    const maps = monster.map_location && monster.map_location.length
                        ? monster.map_location.map(loc => `<span class="block text-sm text-[#4b4d5a]">📍 ${loc}</span>`).join('')
                        : '<span class="text-[#8a8068] text-sm">-</span>';

                    document.getElementById('detail-name').textContent = monster.name;
                    document.getElementById('detail-level').textContent = `Level: ${monster.level}`;
                    document.getElementById('detail-type').innerHTML = typeBadgesHtml;
                    document.getElementById('detail-map').innerHTML = maps;
                    document.getElementById('detail-exp-rate').textContent = `${expRate}%`;
                    document.getElementById('detail-drop-rate').textContent = `${dropRate}%`;

                    // Disable badge berdasarkan server yang dipilih
                    const disableBadge = document.getElementById('detail-disable-badge');
                    if (isMonsterDisabled(monster)) {
                        disableBadge.classList.remove('hidden');
                    } else {
                        disableBadge.classList.add('hidden');
                    }

                    // Monster image (ambil dari field image, jika kosong tampilkan fallback)
                    const detailImg = document.getElementById('detail-image');
                    const detailImgFallback = document.getElementById('detail-image-fallback');
                    if (monster.image) {
                        detailImg.src = monster.image;
                        detailImg.classList.remove('hidden');
                        detailImgFallback.classList.add('hidden');
                    } else {
                        detailImg.removeAttribute('src');
                        detailImg.classList.add('hidden');
                        detailImgFallback.classList.remove('hidden');
                    }

                    // Link ke wiki
                    const wikiLink = document.getElementById('detail-wiki-link');
                    if (monster.link_wiki) {
                        wikiLink.href = monster.link_wiki;
                        wikiLink.removeAttribute('disabled');
                    } else {
                        wikiLink.removeAttribute('href');
                        wikiLink.setAttribute('disabled', 'disabled');
                    }

                    // Highlight recommended color
                    document.getElementById('detail-exp-rate').className = 'text-lg font-bold ' + (expRate >= 85 ? 'text-green-600' : expRate >= 50 ? 'text-amber-500' : 'text-red-500');
                    document.getElementById('detail-drop-rate').className = 'text-lg font-bold ' + (dropRate >= 85 ? 'text-green-600' : dropRate >= 50 ? 'text-amber-500' : 'text-red-500');
                }

                /**
                 * Pilih monster & update panel detail
                 */
                function selectMonster(monster) {
                    selectedMonster = monster;
                    renderMonsterList();
                    renderDetail(monster);
                }

                /**
                 * Pindah ke halaman tertentu (tanpa refresh)
                 */
                function goToPage(page) {
                    const totalPages = Math.max(1, Math.ceil(sortedMonsters.length / PER_PAGE));
                    if (page < 1) page = 1;
                    if (page > totalPages) page = totalPages;
                    currentPage = page;
                    const start = (currentPage - 1) * PER_PAGE;
                    selectedMonster = sortedMonsters[start] || null;
                    renderMonsterList();
                    renderDetail(selectedMonster);
                }

                /**
                 * Muat & inisialisasi semua data monster
                 */
                async function loadMonsters() {
                    try {
                        // Load daftar monster disable per server (opsional, non-blocking)
                        try {
                            const dResp = await fetch(DISABLE_DATA_FILE);
                            if (dResp.ok) disableData = await dResp.json();
                        } catch (e) { /* abaikan jika file belum ada */ }

                        const response = await fetch(MONSTER_DATA_FILE);
                        if (!response.ok) throw new Error('Failed to load ' + MONSTER_DATA_FILE);
                        allMonsters = await response.json();

                        // Urutkan berdasarkan level (ascending) sesuai monster order spec
                        sortedMonsters = [...allMonsters].sort((a, b) => (a.level || 0) - (b.level || 0));

                        // Reset to first page & auto-select
                        currentPage = 1;
                        renderMonsterList();
                        renderDetail(null);

                        const totalPages = Math.max(1, Math.ceil(sortedMonsters.length / PER_PAGE));
                        selectedMonster = sortedMonsters[0] || null;
                        renderMonsterList();
                        renderDetail(selectedMonster);

                    } catch (error) {
                        console.error('Gagal load data monster:', error);
                        monsterListEl.innerHTML = `
                            <div class="text-center py-12">
                                <div class="text-4xl mb-3">😢</div>
                                <p class="text-gray-400">Gagal memuat data monster</p>
                            </div>
                        `;
                        window.showToast && window.showToast('Gagal memuat data monster: ' + error.message);
                    }
                }

                // ===== Form submit =====
                form.addEventListener('submit', async function (e) {
                    e.preventDefault();
                    playerLevel = parseInt(document.getElementById('level').value, 10);
                    jobBase = document.getElementById('job_base').value;
                    server = document.getElementById('server').value;

                    if (!jobBase || !playerLevel) {
                        window.showToast && window.showToast('Lengkapi Job Base & Level dulu ya!');
                        return;
                    }

                    // Validasi max level 371
                    if (playerLevel > 371) {
                        window.showToast && window.showToast('Level maksimal adalah 371!');
                        return;
                    }

                    // Pastikan data sudah dimuat
                    if (sortedMonsters.length === 0) {
                        await loadMonsters();
                    }

                    // Re-render dengan player level baru & lompat ke halaman berisi monster rekomendasi
                    const recommended = getRecommendedMonster();
                    if (recommended) {
                        const idx = sortedMonsters.indexOf(recommended);
                        currentPage = Math.floor(idx / PER_PAGE) + 1;
                        selectedMonster = recommended;
                        renderMonsterList();
                        renderDetail(selectedMonster);
                        renderPagination();
                    } else {
                        currentPage = 1;
                        selectedMonster = sortedMonsters[0] || null;
                        renderMonsterList();
                        renderDetail(selectedMonster);
                    }

                    // Auto scroll to results
                    document.getElementById('result-box').scrollIntoView({ behavior: 'smooth', block: 'start' });
                    window.showToast && window.showToast('Pencarian berhasil!');
                });

                // ===== Pagination handlers (tanpa reload halaman) =====
                prevBtn.addEventListener('click', () => goToPage(currentPage - 1));
                nextBtn.addEventListener('click', () => goToPage(currentPage + 1));

                // ===== Init =====
                loadMonsters();
            });
        </script>
    </body>
</html>
