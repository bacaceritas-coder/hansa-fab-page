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
                    Halaman untuk memasak / membuat pot dari item-item sampahan kalian.
                    Selamat menikmati. ✨
                </p>
            </div>
        </section>

        <!-- ======================= MASAK POT CONTENT ======================= -->
        <section class="pb-24 px-4">
            <div class="max-w-4xl mx-auto">
                <div class="glass rounded-3xl p-6 sm:p-8">

                    <div class="text-center mb-8">
                        <div class="text-5xl mb-3">🫕</div>
                        <h2 class="font-display text-2xl font-bold mb-2">Kalkulator Masak Pot</h2>
                       
                    </div>

                    <!-- Row: Jumlah + Dropdown Item 1 -->
                    <div class="grid grid-cols-1 sm:grid-cols-[140px_1fr] gap-4 items-start">
                        <div>
                            <label for="jumlah-item" class="block text-sm font-semibold text-orange-200 mb-2">Jumlah Item</label>
                            <input id="jumlah-item" type="number" min="1" step="1" value="300"
                                   onfocus="this.select()"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-orange-500 transition placeholder-gray-500">
                        </div>
                        <div>
                            <label for="item1-search" class="block text-sm font-semibold text-orange-200 mb-2">Item (bahan)</label>
                            <div class="relative">
                                <input id="item1-search" type="text" autocomplete="off"
                                       placeholder="Ketik untuk cari — contoh: Mark of Vampire"
                                       class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-orange-500 transition placeholder-gray-500">
                                <div id="item1-list" class="hidden absolute z-20 left-0 right-0 mt-2 max-h-56 overflow-auto rounded-xl border border-white/10 bg-[#1a1030] shadow-xl"></div>
                            </div>
                            <p class="text-xs text-gray-500 mt-1.5">Bisa diketik untuk search, klik untuk pilih.</p>
                        </div>
                    </div>

                    <!-- Detail Item 1 -->
                    <div id="item1-detail" class="hidden mt-4 rounded-2xl border border-white/10 bg-white/[0.04] p-5">
                        <div class="flex items-center gap-3 flex-wrap">
                            <span id="item1-icon" class="text-2xl">🔵</span>
                            <span id="item1-name" class="font-bold text-white"></span>
                            <span id="item1-cat" class="text-[11px] px-2.5 py-1 rounded-full border font-bold"></span>
                        </div>
                        <div class="grid grid-cols-3 gap-3 mt-4">
                            <div class="rounded-xl bg-black/20 p-3 text-center">
                                <p class="text-[11px] text-gray-400 uppercase tracking-wide">Harga Item</p>
                                <p id="item1-price" class="text-lg font-bold text-white mt-1">-</p>
                            </div>
                            <div class="rounded-xl bg-black/20 p-3 text-center">
                                <p class="text-[11px] text-gray-400 uppercase tracking-wide">Sharat Harga Tumbal</p>
                                <p id="item1-sac" class="text-lg font-bold text-orange-300 mt-1">-</p>
                            </div>
                            <div class="rounded-xl bg-black/20 p-3 text-center">
                                <p class="text-[11px] text-gray-400 uppercase tracking-wide">Slot Masak</p>
                                <p id="item1-slot" class="text-lg font-bold text-white mt-1">-</p>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown 2 : Tumbal -->
                    <div class="mt-8">
                        <label for="item2-search" class="block text-sm font-semibold text-orange-200 mb-2">Tumbal (item ke-2)</label>
                        <div class="relative">
                            <input id="item2-search" type="text" autocomplete="off"
                                   placeholder="Ketik untuk cari tumbal — contoh: Horseshoe"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-orange-500 transition placeholder-gray-500">
                            <div id="item2-list" class="hidden absolute z-20 left-0 right-0 mt-2 max-h-56 overflow-auto rounded-xl border border-white/10 bg-[#1a1030] shadow-xl"></div>
                        </div>
                        
                    </div>

                    <!-- Detail Item 2 -->
                    <div id="item2-detail" class="hidden mt-4 rounded-2xl border border-white/10 bg-white/[0.04] p-5">
                        <div class="flex items-center gap-3 flex-wrap">
                            <span id="item2-icon" class="text-2xl">🗡️</span>
                            <span id="item2-name" class="font-bold text-white"></span>
                            <span id="item2-cat" class="text-[11px] px-2.5 py-1 rounded-full border font-bold"></span>
                        </div>
                        <div class="grid grid-cols-3 gap-3 mt-4">
                            <div class="rounded-xl bg-black/20 p-3 text-center">
                                <p class="text-[11px] text-gray-400 uppercase tracking-wide">Harga Item</p>
                                <p id="item2-price" class="text-lg font-bold text-white mt-1">-</p>
                            </div>
                            <div class="rounded-xl bg-black/20 p-3 text-center">
                                <p class="text-[11px] text-gray-400 uppercase tracking-wide">Sharat Harga Tumbal</p>
                                <p id="item2-sac" class="text-lg font-bold text-white mt-1">-</p>
                            </div>
                            <div class="rounded-xl bg-black/20 p-3 text-center">
                                <p class="text-[11px] text-gray-400 uppercase tracking-wide">Slot Masak</p>
                                <p id="item2-slot" class="text-lg font-bold text-white mt-1">-</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hasil Masak -->
                    <div id="cook-result" class="hidden mt-6 rounded-2xl border border-amber-300/30 bg-amber-500/10 p-5 sm:p-6">
                        <h3 class="font-display font-bold text-white mb-4 flex items-center gap-2">🧮 Rekomendasi Jumlah Tumbal</h3>
                        
                        <!-- Satu tampilan utama: butuh sekian tumbal untuk memasak -->
                        <div class="mt-4 rounded-xl bg-emerald-500/10 border border-emerald-400/30 p-4 text-center">
                            <p id="tumbal-needed-text" class="text-sm sm:text-base font-bold text-white leading-relaxed"></p>
                            <p id="tumbal-needed-sub" class="text-xs text-gray-400 mt-1">Dibulatkan ke atas bila pecahan (butuh item utuh)</p>
                        </div>
                        <br>
                        <br>
                        <div id="cook-grid" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            
                            <div class="rounded-xl bg-black/25 p-4 text-center">
                                <p class="text-xs text-amber-200/80 uppercase tracking-wide">Total Harga Tumbal</p>
                                <p id="total-harga" class="text-xl font-extrabold text-white mt-1">-</p>
                                <p class="text-[11px] text-gray-400 mt-1">sacrifice₁ × jumlah</p>
                            </div>
                            <div class="rounded-xl bg-black/25 p-4 text-center border border-emerald-400/30">
                                <p class="text-xs text-emerald-200/80 uppercase tracking-wide">Jumlah Tumbal Dibutuhkan</p>
                                <p id="hasil-masak" class="text-xl font-extrabold text-emerald-300 mt-1">-</p>
                                <p class="text-[11px] text-gray-400 mt-1">total ÷ price_item₂</p>
                            </div>
                        </div>
                        <div id="cook-formula-row" class="mt-3 flex flex-wrap gap-2 justify-center">
                            <span class="text-xs text-gray-400">Rumus:</span>
                            <span id="cook-formula" class="text-xs font-mono bg-black/30 px-2.5 py-1 rounded-full text-white"></span>
                        </div>
                        <!-- Saran / label slot -->
                        <div id="tumbal-suggest-box" class="hidden mt-4 rounded-xl p-4 text-sm leading-relaxed"></div>
                    </div>

                    <p id="potion-load-status" class="text-xs text-gray-500 mt-4 text-center"></p>
                </div>
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // === Pola sama seperti tutorial.blade.php: fetch file JSON ===
                const POTION_DATA_FILE = '../data/potions-base-data.json';

                let allItems = []; // { item_name, price_item, sacrifice_requirement, slot, source_name, category }
                let selected1 = null;
                let selected2 = null;

                const jumlahEl = document.getElementById('jumlah-item');
                const s1 = document.getElementById('item1-search');
                const s2 = document.getElementById('item2-search');
                const l1 = document.getElementById('item1-list');
                const l2 = document.getElementById('item2-list');
                const d1 = document.getElementById('item1-detail');
                const d2 = document.getElementById('item2-detail');
                const resultBox = document.getElementById('cook-result');
                const statusEl = document.getElementById('potion-load-status');

                function catMeta(cat) {
                    if (cat === 'max_blue_potion') return { icon: '🔵', label: 'max_blue', cls: 'bg-sky-500/15 text-sky-300 border-sky-400/30' };
                    if (cat === 'max_red_potion') return { icon: '🔴', label: 'max_red', cls: 'bg-red-500/15 text-red-300 border-red-400/30' };
                    if (cat === 'junk_items') return { icon: '🗑️', label: 'junk', cls: 'bg-zinc-500/15 text-zinc-300 border-zinc-400/30' };
                    return { icon: '📦', label: cat, cls: 'bg-white/10 text-white border-white/20' };
                }

                function renderList(filter, listEl, onPick) {
                    const q = (filter || '').toLowerCase().trim();
                    let items = allItems;
                    if (q) items = allItems.filter(it => it.item_name.toLowerCase().includes(q));
                    items = items.slice(0, 80);
                    if (!items.length) {
                        listEl.innerHTML = '<div class="px-4 py-3 text-sm text-gray-400">Tidak ada item</div>';
                        listEl.classList.remove('hidden');
                        return;
                    }
                    listEl.innerHTML = items.map(it => {
                        const m = catMeta(it.category);
                        return `<button type="button" data-name="${it.item_name.replace(/"/g, '&quot;')}" class="w-full text-left px-4 py-2.5 hover:bg-white/10 flex items-center gap-3 border-b border-white/[0.06] last:border-0">
                            <span class="text-lg">${m.icon}</span>
                            <span class="flex-1 min-w-0">
                                <span class="block text-sm font-semibold text-white truncate">${it.item_name}</span>
                                <span class="block text-xs text-gray-400">price ${it.price_item ?? '-'} • sac ${it.sacrifice_requirement ?? '-'} • slot ${it.slot ?? '-'}</span>
                            </span>
                            <span class="text-[10px] px-2 py-1 rounded-full border ${m.cls}">${m.label}</span>
                        </button>`;
                    }).join('');
                    listEl.classList.remove('hidden');
                    listEl.querySelectorAll('button[data-name]').forEach(btn => {
                        btn.addEventListener('click', () => {
                            const name = btn.getAttribute('data-name');
                            const found = allItems.find(x => x.item_name === name);
                            onPick(found);
                            listEl.classList.add('hidden');
                        });
                    });
                }

                function showDetail1(it) {
                    if (!it) { d1.classList.add('hidden'); return; }
                    const m = catMeta(it.category);
                    document.getElementById('item1-icon').textContent = m.icon;
                    document.getElementById('item1-name').textContent = it.item_name;
                    const catEl = document.getElementById('item1-cat');
                    catEl.textContent = m.label;
                    catEl.className = 'text-[11px] px-2.5 py-1 rounded-full border font-bold ' + m.cls;
                    document.getElementById('item1-price').textContent = it.price_item ?? '-';
                    document.getElementById('item1-sac').textContent = it.sacrifice_requirement ?? '-';
                    document.getElementById('item1-slot').textContent = it.slot ?? '-';
                    d1.classList.remove('hidden');
                }

                function showDetail2(it) {
                    if (!it) { d2.classList.add('hidden'); return; }
                    const m = catMeta(it.category);
                    document.getElementById('item2-icon').textContent = m.icon;
                    document.getElementById('item2-name').textContent = it.item_name;
                    const catEl = document.getElementById('item2-cat');
                    catEl.textContent = m.label;
                    catEl.className = 'text-[11px] px-2.5 py-1 rounded-full border font-bold ' + m.cls;
                    document.getElementById('item2-price').textContent = it.price_item ?? '-';
                    document.getElementById('item2-sac').textContent = it.sacrifice_requirement ?? '-';
                    document.getElementById('item2-slot').textContent = it.slot ?? '-';
                    d2.classList.remove('hidden');
                }

                function resetTumbal() {
                    selected2 = null;
                    s2.value = '';
                    d2.classList.add('hidden');
                    resultBox.classList.add('hidden');
                    const sb = document.getElementById('tumbal-suggest-box');
                    if (sb) { sb.classList.add('hidden'); sb.innerHTML = ''; }
                }

                function recalc() {
                    if (!selected1 || !selected2) { resultBox.classList.add('hidden'); return; }
                    // Item yang sama tidak bisa dijadikan tumbal — hanya tampilkan warning
                    const sameName = selected1.item_name && selected2.item_name && selected1.item_name.trim().toLowerCase() === selected2.item_name.trim().toLowerCase();
                    const cookGrid = document.getElementById('cook-grid');
                    const cookFormulaRow = document.getElementById('cook-formula-row');
                    const tumbalText = document.getElementById('tumbal-needed-text');
                    const suggestBox = document.getElementById('tumbal-suggest-box');
                    const tumbalSub = document.getElementById('tumbal-needed-sub');
                    if (sameName) {
                        if (tumbalText) tumbalText.innerHTML = '<span class="text-red-300">⚠️ Item yang sama tidak bisa dijadikan tumbal</span><br><span class="text-white">Pilih item tumbal yang berbeda dari <span class="font-bold">' + selected1.item_name + '</span></span>';
                        if (tumbalSub) tumbalSub.classList.add('hidden');
                        if (cookGrid) cookGrid.classList.add('hidden');
                        if (cookFormulaRow) cookFormulaRow.classList.add('hidden');
                        if (suggestBox) { suggestBox.classList.add('hidden'); suggestBox.innerHTML = ''; }
                        resultBox.classList.remove('hidden');
                        return;
                    } else {
                        // tumbalSub akan diatur setelah hitung hasil (hanya tampil jika ada koma)
                        if (cookGrid) cookGrid.classList.remove('hidden');
                        if (cookFormulaRow) cookFormulaRow.classList.remove('hidden');
                    }
                    const sac1 = Number(selected1.sacrifice_requirement);
                    const price2 = Number(selected2.price_item);
                    const qty = Math.max(1, parseInt(jumlahEl.value, 10) || 1);
                    if (isNaN(sac1) || isNaN(price2) || price2 === 0) { resultBox.classList.add('hidden'); return; }
                    // Cara hitung: jumlah × Syarat Harga Tumbal (sacrifice_requirement item 1) = total harga tumbal
                    // total harga tumbal ÷ Harga Item (price_item tumbal item 2) = jumlah tumbal dibutuhkan
                    const total = sac1 * qty;
                    const hasil = total / price2;
                    document.getElementById('total-harga').textContent = total.toLocaleString('id-ID');
                    const hasilFloor = Math.floor(hasil);
                    const hasilCeil = Math.ceil(hasil);
                    // Wording dibulatkan hanya tampil jika hitungan butuh memiliki koma (pecahan)
                    if (tumbalSub) {
                        if (!Number.isInteger(hasil)) tumbalSub.classList.remove('hidden');
                        else tumbalSub.classList.add('hidden');
                    }
                    document.getElementById('hasil-masak').textContent = hasil.toLocaleString('id-ID', { maximumFractionDigits: 4 }) + '  (' + hasilCeil.toLocaleString('id-ID') + ' dibutuhkan)';
                    document.getElementById('cook-formula').textContent = sac1 + ' × ' + qty + ' = ' + total + '  ÷  ' + price2 + ' = ' + hasil;
                    // 1 tampilan utama: butuh sekian tumbal untuk memasak item pertama — saran Dart digabung sekalian
                    // tumbalText, suggestBox, slot1 sudah didefinisikan di atas (cek sameName)
                    // const tumbalText = document.getElementById('tumbal-needed-text');
                    const slot1 = Number(selected1.slot);
                    let extraLine = '';
                    if (slot1 === 1) {
                        const q = qty.toLocaleString('id-ID');
                        extraLine = '<br><span class="text-red-300">⚠️ Harga item terlalu mahal untuk dijadikan tumbal (slot = 1) — jika memaksa, isikan <span class="font-bold text-white">' + q + ' × ' + selected1.item_name + ' : ' + q + ' × ' + selected2.item_name + '</span> (1 banding 1)</span>';
                    } else if (!isNaN(slot1) && slot1 > 1 && hasilCeil < qty) {
                        const dartNeed = qty - hasilCeil;
                        extraLine = '<br><span class="text-sky-300">→ Slot ke-2 bisa diisi <span class="font-bold text-white">Dart × ' + dartNeed.toLocaleString('id-ID') + '</span> (' + qty.toLocaleString('id-ID') + ' − ' + hasilCeil.toLocaleString('id-ID') + ')</span>';
                    } else if (hasilCeil > qty) {
                        extraLine = '<br><span class="text-amber-300">⚠️ Jumlah bahan (' + qty.toLocaleString('id-ID') + ') &lt; tumbal dibutuhkan (' + hasilCeil.toLocaleString('id-ID') + ') — tambah bahan / pilih tumbal price_item lebih kecil</span>';
                    }
                    if (tumbalText) {
                        tumbalText.innerHTML = 'Butuh <span class="text-emerald-300">' + hasilCeil.toLocaleString('id-ID') + ' × ' + selected2.item_name + '</span> untuk memasak <span class="text-amber-200">' + qty.toLocaleString('id-ID') + ' × ' + selected1.item_name + '</span>' + extraLine;
                    }
                    // Saran box lama disembunyikan — sudah digabung ke tampilan utama
                    if (suggestBox) { suggestBox.classList.add('hidden'); suggestBox.innerHTML = ''; }
                    resultBox.classList.remove('hidden');
                }

                // Search handlers (seperti pola filter di tutorial: render list saat input)
                // Saat item bahan dipilih → reset tampilan bawah (tumbal & hasil) agar tidak membingungkan
                s1.addEventListener('input', () => renderList(s1.value, l1, (it) => { selected1 = it; s1.value = it.item_name; showDetail1(it); resetTumbal(); }));
                s1.addEventListener('focus', () => { s1.select(); renderList(s1.value, l1, (it) => { selected1 = it; s1.value = it.item_name; showDetail1(it); resetTumbal(); }); });
                s2.addEventListener('input', () => renderList(s2.value, l2, (it) => { selected2 = it; s2.value = it.item_name; showDetail2(it); recalc(); }));
                s2.addEventListener('focus', () => { s2.select(); renderList(s2.value, l2, (it) => { selected2 = it; s2.value = it.item_name; showDetail2(it); recalc(); }); });

                document.addEventListener('click', (e) => {
                    if (!s1.contains(e.target) && !l1.contains(e.target)) l1.classList.add('hidden');
                    if (!s2.contains(e.target) && !l2.contains(e.target)) l2.classList.add('hidden');
                });

                jumlahEl.addEventListener('input', recalc);
                jumlahEl.addEventListener('change', recalc);

                // === Fetch JSON — pola identik tutorial.blade.php ===
                async function loadPotions() {
                    try {
                        // statusEl.textContent = 'Memuat potions-base-data.json ...';
                        const resp = await fetch(POTION_DATA_FILE);
                        if (!resp.ok) throw new Error('Failed to load ' + POTION_DATA_FILE + ' (' + resp.status + ')');
                        const data = await resp.json();
                        const cats = data.categories || {};
                        allItems = [];
                        for (const [cat, arr] of Object.entries(cats)) {
                            if (!Array.isArray(arr)) continue;
                            for (const it of arr) allItems.push({ ...it, category: cat });
                        }
                        // Sort by name for nicer dropdown
                        allItems.sort((a,b) => (a.item_name||'').localeCompare(b.item_name||''));
                        // statusEl.textContent = 'Loaded ' + allItems.length + ' item dari JSON (' + Object.keys(cats).join(', ') + ').';
                    } catch (err) {
                        console.error(err);
                        statusEl.textContent = 'Gagal memuat JSON: ' + err.message;
                        window.showToast && window.showToast('Gagal memuat potions-base-data.json: ' + err.message);
                    }
                }

                loadPotions();
            });
        </script>

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

                <div class="flex justify-center items-center gap-3 text-xs text-orange-400/70">
                    <span>🍲 Masak Pot</span>
                    <span>•</span>
                    <span>🔥 Crafting</span>
                    <span>•</span>
                    <span>💜 #HansaFab</span>
                </div>
            </div>
        </footer>
    </body>
</html>
