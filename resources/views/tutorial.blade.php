<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z3PX7R0YN1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-Z3PX7R0YN1');
        </script>

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
                            <option value="" disabled selected class="font-bold text-black bg-white">Pilih Job Base...</option>
                        </select>
                    </div>

                    <!-- Level -->
                    <div>
                        <label for="level" class="block text-sm font-semibold text-purple-200 mb-2">
                            Level Karakter
                        </label>
<input id="level" name="level" type="number" min="1" max="371" step="1" value="1"
                                placeholder="Masukkan Level (contoh: 150, max 371)"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-purple-500 transition placeholder-gray-500"
                                onfocus="this.select()"
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
            <div id="result-box" class="max-w-7xl mx-auto hidden">

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
                                            <span id="detail-max-level-warning" class="hidden mt-2 text-[11px] px-2.5 py-1 rounded-full bg-amber-100 text-amber-800 border border-amber-300 font-bold whitespace-nowrap">
                                                ⚠️ Level melebihi batas maksimal server
                                            </span>
                                        </div>

                                        <!-- Type / Attribute -->
                                        <div>
                                            <p class="text-sm font-bold text-[#4b4d5a] mb-2">Type</p>
                                            <div id="detail-type" class="flex flex-wrap gap-2"></div>
                                        </div>

                                        <!-- Daya Serang Karakter Terhadap Monster (dibawah value type) -->
                                        <div>
                                            <p class="text-sm font-bold text-[#4b4d5a] mb-2">Demage Karakter Terhadap Monster</p>
                                            <div id="detail-basic-damage" class="text-lg font-bold"></div>
                                            <div id="detail-basic-damage-note" class="text-xs text-[#8a8068] mt-1 leading-relaxed"></div>
                                        </div>

                                        <!-- Damage Senjata dengan Element -->
                                        <div>
                                            <p class="text-sm font-bold text-[#4b4d5a] mb-2">Damage Senjata dengan Element</p>
                                            <div id="detail-weapon-element" class="text-sm"></div>
                                            <div id="detail-weapon-element-note" class="text-xs text-[#8a8068] mt-1 leading-relaxed"></div>
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
                const PENALTY_DATA_FILE = '../data/penalty.json';
                const MAX_LEVEL_DATA_FILE = '../data/max-level.json';
                const BASE_JOB_TYPE_DATA_FILE = '../data/base-job-type.json';
                const RULE_ELEMENT_DATA_FILE = '../data/rule-element.json';

                // ===== Penalty Matrix (per server, dimuat dari JSON) =====
                // Struktur: { "v1": { exp_penalty: [...], drop_penalty: [...] }, ... }
                let penaltyData = {};

                // ===== Batas Level Maksimal per server (dari JSON) =====
                // Struktur: { "v1": 371, "v2": 371, ... }
                let maxLevelData = {};

                // ===== Job Base + Type per server (dari JSON) =====
                // Struktur: { "default": { Job: "type", ... }, "servers": { "v1": { ... }, ... } }
                let baseJobTypeData = null;

                // ===== Rule Element (matrix damage) =====
                // Struktur: { elements: [...], display_names: {...}, damage_matrix: {...} }
                let ruleElementData = null;

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

                    // Ambil matrix penalty sesuai server yang dipilih.
                    // Fallback ke server pertama (v1) & matrix kosong jika data belum ada.
                    const matrix = (penaltyData && penaltyData[server]) || penaltyData['v5'] || { exp_penalty: [], drop_penalty: [] };

                    const expRate = getPenaltyPercentage(matrix.exp_penalty, levelDiff);
                    let dropRate;

                    // Crafmant: drop rate tetap 100%
                    if (jobBase && jobBase.toLowerCase() === 'crafmant') {
                        dropRate = 100;
                    } else {
                        dropRate = getPenaltyPercentage(matrix.drop_penalty, levelDiff);
                    }

                    return { expRate, dropRate, levelDiff };
                }

                /**
                 * Ambil matrix penalty untuk server yang sedang dipilih
                 * @returns {object} { exp_penalty: [], drop_penalty: [] }
                 */
                function getServerMatrix() {
                    return (penaltyData && penaltyData[server]) || penaltyData['v5'] || { exp_penalty: [], drop_penalty: [] };
                }

                /**
                 * Ambil batas level maksimal untuk server yang sedang dipilih
                 * @returns {number} max level player
                 */
                function getServerMaxLevel() {
                    const val = (maxLevelData && maxLevelData[server]) !== undefined ? maxLevelData[server] : (maxLevelData && maxLevelData['v5']);
                    return typeof val === 'number' ? val : 371;
                }

                /**
                 * Ambil daftar Job Base (+ tipe) untuk server yang sedang dipilih.
                 * Gabungkan "default" dengan override per server.
                 * @returns {object} { JobName: "type", ... } dalam urutan insertion
                 */
                function getServerJobTypes() {
                    const jobObj = {};
                    if (baseJobTypeData && baseJobTypeData.default) {
                        for (const k of Object.keys(baseJobTypeData.default)) jobObj[k] = baseJobTypeData.default[k];
                    }
                    if (baseJobTypeData && baseJobTypeData.servers && baseJobTypeData.servers[server]) {
                        for (const k of Object.keys(baseJobTypeData.servers[server])) jobObj[k] = baseJobTypeData.servers[server][k];
                    }
                    return jobObj;
                }

                /**
                 * Rendering ulang dropdown Job Base berdasarkan server yang dipilih
                 */
                function populateJobBaseDropdown() {
                    const sel = document.getElementById('job_base');
                    if (!sel) return;
                    const selected = sel.value; // simpan pilihan saat ini jika masih valid
                    const jobs = getServerJobTypes();
                    const keys = Object.keys(jobs);

                    sel.innerHTML = '';

                    // Placeholder
                    if (keys.length) {
                        const ph = document.createElement('option');
                        ph.value = '';
                        ph.disabled = true;
                        ph.textContent = 'Pilih Job Base...';
                        ph.className = 'font-bold text-black bg-white';
                        sel.appendChild(ph);
                    }

                    // Opsi job sesuai server
                    keys.forEach((job, i) => {
                        const opt = document.createElement('option');
                        opt.value = job;
                        opt.textContent = job;
                        opt.className = 'font-bold text-black bg-white';
                        if (i === 0) opt.selected = true;
                        sel.appendChild(opt);
                    });

                    // Jika pilihan sebelumnya masih ada di daftar, pertahankan
                    if (selected && keys.includes(selected)) {
                        sel.value = selected;
                    }
                }

                /**
                 * Normalisasi type monster menjadi kunci elemen di rule-element.json
                 * @param {string} type - type/elemen monster (mis. "Water", "Metal", "Tree", "None")
                 * @returns {string|null} kunci elemen lowercase, atau null jika tak dikenal
                 */
                function normalizeElement(type) {
                    if (!type) return null;
                    const map = {
                        'fire': 'fire',
                        'steel': 'steel',
                        'metal': 'steel',       // alias iron/steel
                        'wood': 'wood',
                        'tree': 'wood',         // alias wood
                        'earth': 'earth',
                        'water': 'water',
                        'darkness': 'darkness',
                        'light': 'light',
                        'physical': 'physical',
                        'magical': 'magical'
                    };
                    const key = String(type).toLowerCase().trim();
                    return map[key] || null;
                }

                /**
                 * Ambil nilai Basic Damage dari rule-element.json
                 * @param {string} weaponElement - elemen senjata/job (physical / magical / dll)
                 * @param {string|null} monsterElement - elemen monster (kunci lowercase)
                 * @returns {number|null} persentase damage, atau null jika tidak tersedia
                 */
                function getBasicDamage(weaponElement, monsterElement) {
                    if (!ruleElementData || !ruleElementData.damage_matrix) return null;
                    const row = ruleElementData.damage_matrix[weaponElement];
                    if (!row) return null;
                    if (!monsterElement) {
                        // Elemen tidak dikenal / "None" -> damage standar
                        const std = ruleElementData.standard_damage;
                        const num = parseInt(std, 10);
                        return isNaN(num) ? null : num;
                    }
                    const val = row[monsterElement];
                    return typeof val === 'number' ? val : null;
                }

                /**
                 * Ambil type job base yang sedang dipilih (physical / magical / hybrid)
                 * @param {string} [job] - nama job, default jobBase saat ini
                 * @returns {string|null} type job
                 */
                function getJobType(job) {
                    const j = job || jobBase;
                    if (!j) return null;
                    const jobs = getServerJobTypes();
                    return jobs[j] || null;
                }

                /**
                 * Tentukan kategori elemen monster untuk perhitungan Daya Serang.
                 *  - 'none'   : None / tak dikenal -> selalu 100%
                 *  - 'other'  : elemen selain physical/magical (fire, water, dll) -> selalu 100%
                 *  - 'physical' / 'magical' : pakai matrix
                 * @param {string|null} el - kunci elemen lowercase dari normalizeElement
                 * @returns {string} kategori
                 */
                function monsterDamageCategory(el) {
                    if (!el) return 'none';
                    if (el === 'physical' || el === 'magical') return el;
                    return 'other';
                }

                /**
                 * Hitung nilai Daya Serang (0-...) untuk suatu weapon element terhadap monster.
                 * @param {string} weapon - 'physical' | 'magical'
                 * @param {string|null} el - kunci elemen monster (lowercase)
                 * @returns {number} persentase (None/other -> 100)
                 */
                function getMonsterDamageValue(weapon, el) {
                    const cat = monsterDamageCategory(el);
                    if (cat === 'none' || cat === 'other') return 100;
                    const val = getBasicDamage(weapon, cat);
                    return val !== null ? val : 100;
                }

                /**
                 * Pilih class warna untuk badge nilai Daya Serang berdasarkan %
                 * @param {number} val
                 * @returns {object} { cls }
                 */
                function damageColor(val) {
                    if (val >= 150) return { cls: 'bg-green-100 text-green-700 border-green-300' };
                    if (val === 100) return { cls: 'bg-sky-100 text-sky-700 border-sky-300' };
                    if (val >= 50) return { cls: 'bg-amber-100 text-amber-700 border-amber-300' };
                    return { cls: 'bg-red-100 text-red-700 border-red-300' };
                }

                /**
                 * Buat span badge berwarna untuk sebuah nilai Daya Serang
                 * @param {string} label
                 * @param {number|null} val
                 * @returns {string} HTML string
                 */
                function damageBadge(label, val) {
                    const c = damageColor(val);
                    return `<span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-md border ${c.cls} font-bold text-sm"><span class="opacity-90 font-semibold">${label}</span> ${val}%</span>`;
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
                let server = 'v5';
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
                        const expRate = getPenaltyPercentage(getServerMatrix().exp_penalty, diff);
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
                        const expRate = getPenaltyPercentage(getServerMatrix().exp_penalty, diff);

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
                    // Tandai SEMUA monster yang levelnya sama dengan level player (param).
                    // Jika tidak ada monster dengan level persis, fallback ke level monster rekomendasi.
                    const hasExactMatch = sortedMonsters.some((m) => m.level === playerLevel);
                    const recommendedLevel = hasExactMatch ? playerLevel : (recommended ? recommended.level : null);

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

                        const isRecommended = recommendedLevel !== null && monster.level === recommendedLevel;

                        card.innerHTML = `
                            <div class="w-12 h-12 rounded-lg bg-blue-50 border border-blue-200 flex items-center justify-center text-xl shrink-0">
                                👾
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2">
                                    <span class="font-semibold text-sm text-[#2b2b27] truncate">${monster.name}</span>
                                    ${isRecommended ? '<span class="text-[10px] px-2 py-0.5 rounded-full bg-green-100 text-green-700 border border-green-300 whitespace-nowrap">Rekomendasi</span>' : ''}
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

                    const expRate = getPenaltyPercentage(getServerMatrix().exp_penalty, Math.abs(monster.level - playerLevel));
                    let dropRate;
                    if (jobBase && jobBase.toLowerCase() === 'crafmant') {
                        dropRate = 100;
                    } else {
                        dropRate = getPenaltyPercentage(getServerMatrix().drop_penalty, Math.abs(monster.level - playerLevel));
                    }

                    // Type: bisa string tunggal atau array
                    let types = [];
                    if (Array.isArray(monster.type)) {
                        types = monster.type;
                    } else if (monster.type) {
                        types = [monster.type];
                    }

                    const maps = monster.map_location && monster.map_location.length
                        ? monster.map_location.map(loc => `<span class="block text-sm text-[#4b4d5a]">📍 ${loc}</span>`).join('')
                        : '<span class="text-[#8a8068] text-sm">-</span>';

                    // ===== Type value hanya menampilkan info type monster =====
                    const typeBadgesHtml = types.length
                        ? types.map(t => `<span class="px-3 py-1 rounded-md text-xs font-bold bg-blue-100 text-blue-800 border border-blue-300">${t}</span>`).join(' ')
                        : '<span class="text-[#8a8068] text-sm">-</span>';
                    document.getElementById('detail-type').innerHTML = typeBadgesHtml;

                    // ===== Daya Serang Karakter Terhadap Monster (dibawah value type) =====
                    const basicDamageEl = document.getElementById('detail-basic-damage');
                    const basicDamageNoteEl = document.getElementById('detail-basic-damage-note');
                    const jobTypeValue = getJobType();

                    // Label tampilan untuk elemen (dari rule-element.json display_names)
                    const elementLabel = (el) => {
                        if (!el) return 'None';
                        if (ruleElementData && ruleElementData.display_names && ruleElementData.display_names[el]) {
                            return ruleElementData.display_names[el];
                        }
                        return el.charAt(0).toUpperCase() + el.slice(1);
                    };

                    const monsterElements = types.map(normalizeElement);

                    if (monsterElements.length === 0) {
                        basicDamageEl.textContent = '-';
                        basicDamageNoteEl.textContent = '';
                    } else if (!jobTypeValue) {
                        // Belum pilih job -> tampilkan '-' saja
                        basicDamageEl.textContent = '-';
                        basicDamageNoteEl.textContent = '';
                    } else if (jobTypeValue === 'hybrid') {
                        // Hybrid: tampilkan 2 nilai [STR] (physical) & [INT] (magical)
                        const parts = monsterElements.map((el) => {
                            const strVal = getMonsterDamageValue('physical', el);
                            const intVal = getMonsterDamageValue('magical', el);
                            return `
                                <div class="my-1">
                                    <div class="flex flex-wrap items-center gap-2">
                                        ${damageBadge('[STR]', strVal)}
                                        ${damageBadge('[INT]', intVal)}
                                    </div>
                                </div>
                            `;
                        }).join('');
                        basicDamageEl.innerHTML = parts;
                        basicDamageNoteEl.textContent = 'Type hybrid ditentukan oleh status: STR atau INT.';
                    } else {
                        // physical / magical: satu nilai sesuai weapon elemen job
                        const weaponElement = jobTypeValue; // "physical" / "magical"
                        const parts = monsterElements.map((el) => {
                            const val = getMonsterDamageValue(weaponElement, el);
                            return `
                                <div class="my-1">
                                    <div class="flex flex-wrap items-center gap-2">
                                        ${damageBadge('', val)}
                                    </div>
                                </div>
                            `;
                        }).join('');
                        basicDamageEl.innerHTML = parts;
                        basicDamageNoteEl.textContent = '';
                    }

                    // ===== Damage Senjata dengan Element =====
                    const weaponElementEl = document.getElementById('detail-weapon-element');
                    const weaponElementNoteEl = document.getElementById('detail-weapon-element-note');

                    if (!ruleElementData || !ruleElementData.damage_matrix || monsterElements.length === 0 || monsterElements.every(e => e === null)) {
                        // Monster None / tak dikenal -> semua element 100%
                        weaponElementEl.innerHTML = '<span class="inline-block px-3 py-1 rounded-md text-xs font-bold bg-blue-100 text-blue-800 border border-blue-300">Semua Element 100%</span>';
                        weaponElementNoteEl.textContent = '';
                    } else {
                        const rows = ruleElementData.damage_matrix;
                        const dNames = ruleElementData.display_names || {};
                        const blocks = [];
                        let anyElem = false;

                        for (const ment of monsterElements) {
                            if (!ment || ment === 'physical' || ment === 'magical') continue;
                            anyElem = true;

                            // Kumpulkan nilai senjata(element) TERHADAP monster ini, tanpa physical & magical
                            const values = [];
                            for (const weapon of Object.keys(rows)) {
                                if (weapon === 'physical' || weapon === 'magical') continue;
                                const v = rows[weapon][ment];
                                if (typeof v === 'number') values.push({ weapon, v });
                            }

                            const maxVal = values.length ? Math.max(...values.map(x => x.v)) : 0;

                            const badges = values.map(({ weapon, v }) => {
                                const label = dNames[weapon] || weapon;
                                const col = damageColor(v).cls;
                                const isMax = v === maxVal;
                                const maxCls = isMax
                                    ? ' ring-2 ring-offset-1 ring-yellow-400 scale-105 font-bold'
                                    : '';
                                return `<span class="inline-flex items-center px-2 py-0.5 rounded-md border ${col}${maxCls} text-xs">${label} ${v}%</span>`;
                            }).join(' ') || '<span class="text-[#8a8068] text-sm">-</span>';

                            blocks.push(`
                                <div class="my-1">
                                    <div class="flex flex-wrap gap-2 mt-1">${badges}</div>
                                </div>
                            `);
                        }

                        if (!anyElem) {
                            weaponElementEl.innerHTML = '<span class="inline-block px-3 py-1 rounded-md text-xs font-bold bg-blue-100 text-blue-800 border border-blue-300">Semua Element 100%</span>';
                            weaponElementNoteEl.textContent = '';
                        } else {
                            weaponElementEl.innerHTML = blocks.join('');
                            weaponElementNoteEl.textContent = '';
                        }
                    }

                    document.getElementById('detail-name').textContent = monster.name;
                    document.getElementById('detail-level').textContent = `Level: ${monster.level}`;
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

                    // Label peringatan bila LEVEL MONSTER ini melebihi batas maksimal server
                    // (per-monster, mirip label disable — hanya saat monster ini dipilih)
                    const maxLevelWarning = document.getElementById('detail-max-level-warning');
                    if (monster.level > getServerMaxLevel()) {
                        maxLevelWarning.classList.remove('hidden');
                    } else {
                        maxLevelWarning.classList.add('hidden');
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

                        // Load matrix penalty per server (opsional, non-blocking)
                        try {
                            const pResp = await fetch(PENALTY_DATA_FILE);
                            if (pResp.ok) penaltyData = await pResp.json();
                        } catch (e) { /* abaikan jika file belum ada */ }

                        // Load batas level maksimal per server (opsional, non-blocking)
                        try {
                            const mResp = await fetch(MAX_LEVEL_DATA_FILE);
                            if (mResp.ok) maxLevelData = await mResp.json();
                        } catch (e) { /* abaikan jika file belum ada */ }

                        // Load job base + type per server (opsional, non-blocking)
                        try {
                            const jResp = await fetch(BASE_JOB_TYPE_DATA_FILE);
                            if (jResp.ok) baseJobTypeData = await jResp.json();
                        } catch (e) { /* abaikan jika file belum ada */ }

                        // Load rule element / matrix damage (opsional, non-blocking)
                        try {
                            const rResp = await fetch(RULE_ELEMENT_DATA_FILE);
                            if (rResp.ok) ruleElementData = await rResp.json();
                        } catch (e) { /* abaikan jika file belum ada */ }

                        // Isi dropdown Job Base sesuai server yang sedang dipilih
                        populateJobBaseDropdown();

                        const response = await fetch(MONSTER_DATA_FILE);
                        if (!response.ok) throw new Error('Failed to load ' + MONSTER_DATA_FILE);
                        allMonsters = await response.json();

                        // Urutkan berdasarkan level (ascending) sesuai monster order spec
                        sortedMonsters = [...allMonsters].sort((a, b) => (a.level || 0) - (b.level || 0));

                        // Jangan render list/detail di sini — hasil baru tampil saat tombol "Cari Monster" ditekan.

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

                    // Pastikan data sudah dimuat
                    if (sortedMonsters.length === 0) {
                        await loadMonsters();
                    }

                    // Tampilkan hasil pencarian (list & detail)
                    document.getElementById('result-box').classList.remove('hidden');

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

                // ===== Server change: perbarui job base dropdown sesuai server =====
                document.getElementById('server').addEventListener('change', function () {
                    server = this.value;
                    populateJobBaseDropdown();
                    // Perbarui detail monster terpilih (Basic Damage & rate) bila ada
                    if (selectedMonster) renderDetail(selectedMonster);
                });

                // ===== Job Base change: perbarui Basic Damage di detail terpilih =====
                document.getElementById('job_base').addEventListener('change', function () {
                    jobBase = this.value;
                    if (selectedMonster) renderDetail(selectedMonster);
                });

                // ===== Init =====
                // Sinkronkan variabel server dengan nilai dropdown saat ini
                server = document.getElementById('server').value || server;
                loadMonsters();
            });
        </script>
    </body>
</html>
