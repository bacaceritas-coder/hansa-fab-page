<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Hansa Fab - Indonesian Gaming & Variety Streamer. Join the community for epic gaming moments, chill vibes, and great times!" />
        <meta name="keywords" content="Hansa Fab, streamer, gaming, indonesian streamer, twitch, variety" />
        <meta name="author" content="Hansa Fab" />

        <title>Hansa Fab | Gaming &amp; Variety Streamer</title>

        <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🎮</text></svg>">

        <!-- Custom Styles -->
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

        <!-- Tailwind via Vite (falls back to inline if not built) -->
        @vite(['resources/css/app.css'])
    </head>
    <body class="bg-[#0a0612] text-[#e9e9ff] min-h-screen overflow-x-hidden relative">

        <!-- Cursor glow trail -->
        <div class="glow-trail"></div>

        <!-- Animated background orbs -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none -z-10">
            <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] rounded-full bg-purple-600/20 blur-[100px] animate-float-slow"></div>
            <div class="absolute top-[30%] right-[-15%] w-[600px] h-[600px] rounded-full bg-indigo-600/20 blur-[120px] animate-float"></div>
            <div class="absolute bottom-[-20%] left-[20%] w-[500px] h-[500px] rounded-full bg-pink-600/15 blur-[100px] animate-float-slow"></div>
            <div class="absolute top-[60%] left-[-10%] w-[400px] h-[400px] rounded-full bg-cyan-500/10 blur-[90px] animate-float"></div>
        </div>

        <!-- ======================= NAVBAR ======================= -->
        <nav class="fixed top-0 inset-x-0 z-50 glass">
            <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
                <a href="#" class="flex items-center gap-2">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-500 to-indigo-500 flex items-center justify-center font-display font-bold text-xl shadow-lg twitch-glow">
                        H
                    </div>
                    <span class="font-display font-bold text-lg">HANSA<span class="text-gradient">FAB</span></span>
                </a>

                <div class="hidden md:flex items-center gap-6 text-sm font-medium">
                    <a href="#home" class="hover:text-purple-300 transition">Home</a>
                    <a href="#about" class="hover:text-purple-300 transition">About</a>
                    <a href="#schedule" class="hover:text-purple-300 transition">Schedule</a>
                    <a href="#highlights" class="hover:text-purple-300 transition">Highlights</a>
                    <a href="#community" class="hover:text-purple-300 transition">Community</a>
                    <a href="#contact" class="hover:text-purple-300 transition">Contact</a>
                    <a href="#support" class="hover:text-purple-300 transition">Support</a>
                    <a href="/tutorial" class="text-purple-300 hover:text-purple-200 transition font-semibold">Tutorial</a>
                </div>
                <!-- Mobile menu toggle -->
                <button id="mobile-menu-btn" class="md:hidden text-2xl text-purple-200 hover:text-purple-100 transition" aria-label="Toggle menu">
                    ☰
                </button>
                <!-- Mobile menu dropdown -->
                <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 right-0 glass border-t border-white/10">
                    <div class="flex flex-col p-4 gap-3 text-sm font-medium">
                        <a href="#home" class="hover:text-purple-300 transition py-1">Home</a>
                        <a href="#about" class="hover:text-purple-300 transition py-1">About</a>
                        <a href="#schedule" class="hover:text-purple-300 transition py-1">Schedule</a>
                        <a href="#highlights" class="hover:text-purple-300 transition py-1">Highlights</a>
                        <a href="#community" class="hover:text-purple-300 transition py-1">Community</a>
                        <a href="#contact" class="hover:text-purple-300 transition py-1">Contact</a>
                        <a href="#support" class="hover:text-purple-300 transition py-1">Support</a>
                        <a href="/tutorial" class="text-purple-300 font-semibold py-1">Tutorial</a>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <span class="hidden sm:flex items-center gap-2 px-3 py-1.5 rounded-full live-badge text-xs font-bold uppercase tracking-wide">
                        <span class="w-2 h-2 rounded-full bg-white animate-blink"></span>
                        Live
                    </span>
                    <a href="https://www.youtube.com/channel/UC1NCWPp2NqsVxFYUfqAdPPQ" target="_blank"
                       class="px-4 py-2 rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 font-semibold text-sm transition hover:scale-105 shadow-lg twitch-glow">
                        Follow Me
                    </a>
                </div>
            </div>
        </nav>

        <!-- ======================= HERO ======================= -->
        <section id="home" class="min-h-screen flex items-center justify-center pt-24 px-4">
            <div class="max-w-6xl w-full grid lg:grid-cols-2 gap-12 items-center">
                <!-- Hero text -->
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-purple-500/10 border border-purple-500/30 text-sm text-purple-200 mb-6 animate-fade-in-up">
                        <span class="w-2 h-2 rounded-full bg-green-400 animate-blink"></span>
                        <span>Streaming on YouTube</span>
                    </div>

                    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight mb-4 animate-fade-in-up delay-1">
                        HI, I'M<br>
                        <span class="text-gradient">HANSA FAB</span> 👋
                    </h1>

                    <p class="text-xl sm:text-2xl text-purple-300 font-medium mb-6 min-h-[2.5rem] animate-fade-in-up delay-2">
                        Your favorite <span id="hero-typed" class="text-gradient font-bold">Gaming Streamer</span>
                    </p>

                    <p class="text-gray-400 mb-8 max-w-xl mx-auto lg:mx-0 animate-fade-in-up delay-3">
                        Welcome to my corner of the internet! I stream Enjoyable games, chill RPGs,
                        and everything in between. Pull up a chair, grab some snacks, and let's have
                        a great time together! 🎮✨
                    </p>

                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start animate-fade-in-up delay-4">
                        <a href="https://www.youtube.com/channel/UC1NCWPp2NqsVxFYUfqAdPPQ" target="_blank"
                           class="px-6 py-3 rounded-xl bg-gradient-to-r from-purple-600 via-indigo-600 to-purple-600 animate-gradient font-semibold hover:scale-105 transition shadow-lg twitch-glow">
                            ▶ Watch Live on Youtube
                        </a>
                        <a href="#schedule"
                           class="px-6 py-3 rounded-xl glass hover:bg-white/10 font-semibold hover:scale-105 transition">
                            📅 View Schedule
                        </a>
                    </div>
                </div>

                <!-- Hero avatar with floating elements -->
                <div class="relative flex items-center justify-center animate-fade-in-up delay-2">
                    <div class="relative w-72 h-72 sm:w-80 sm:h-80">
                        <!-- Rotating ring -->
                        <div class="absolute inset-0 rounded-full border-2 border-dashed border-purple-500/40 animate-spin-slow"></div>
                        <div class="absolute inset-4 rounded-full border border-indigo-400/30"></div>

                        <!-- Avatar -->
                        <div class="absolute inset-10 rounded-full bg-gradient-to-br from-purple-500 via-indigo-500 to-pink-500 flex items-center justify-center text-7xl shadow-2xl animate-pulse-glow overflow-hidden">
                            <span>🎮</span>
                        </div>

                        <!-- Floating stats -->
                        <div class="absolute -bottom-4 -left-4 glass rounded-2xl px-4 py-3 text-center animate-float-slow shadow-xl">
                            <div class="font-display text-2xl font-bold text-cyan-300 count-number" data-count="300671 " data-suffix="">0</div>
                            <div class="text-xs text-gray-400">Ditonton 🔥</div>
                        </div>

                        <div class="absolute top-1/2 -left-10 glass rounded-xl px-3 py-2 animate-float shadow-lg">
                            <div class="text-sm font-semibold">😄 <span class="text-purple-200">Chill Vibes</span></div>
                        </div>

                        <div class="absolute top-1/3 -right-8 glass rounded-xl px-3 py-2 animate-float-slow shadow-lg">
                            <div class="text-sm font-semibold">🔥 <span class="text-orange-300">Enjoyable</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll indicator -->
            {{-- <div class="absolute bottom-8 left-1/2 -translate-x-1/2 text-center text-gray-500 animate-bounce-soft">
                <div class="text-xs mb-1">Scroll down</div>
                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div> --}}
        </section>

        <!-- ======================= STATS BAR ======================= -->
        <section class="py-10 px-4">
            <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="reveal glass rounded-2xl p-6 text-center hover-lift">
                    <div class="font-display text-3xl font-bold text-gradient count-number" data-count="1000" data-suffix="h">0</div>
                    <div class="text-sm text-gray-400 mt-1">Hours Streamed</div>
                </div>
                <div class="reveal delay-1 glass rounded-2xl p-6 text-center hover-lift">
                    <div class="font-display text-3xl font-bold text-gradient count-number" data-count="1020" data-suffix="+">0</div>
                    <div class="text-sm text-gray-400 mt-1">Subscribers</div>
                </div>
                <div class="reveal delay-2 glass rounded-2xl p-6 text-center hover-lift">
                    <div class="font-display text-3xl font-bold text-gradient count-number" data-count="100" data-suffix="">0</div>
                    <div class="text-sm text-gray-400 mt-1">Peak Viewers</div>
                </div>
                <div class="reveal delay-3 glass rounded-2xl p-6 text-center hover-lift">
                    <div class="font-display text-3xl font-bold text-gradient count-number" data-count="34" data-suffix="+">0</div>
                    <div class="text-sm text-gray-400 mt-1">Clips Created</div>
                </div>
            </div>
        </section>

        <!-- ======================= ABOUT ======================= -->
        <section id="about" class="py-24 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-display text-3xl sm:text-4xl font-bold mb-4 reveal">ABOUT <span class="text-gradient">ME</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto rounded-full mb-8 reveal"></div>

                <p class="text-gray-300 leading-relaxed mb-8 reveal delay-1">
                    Hey everyone! I'm <span class="font-semibold text-purple-300">Hansa Fab</span>, an Indonesian
                    gaming &amp; variety streamer. My mission is simple: create a welcoming, fun space where
                    everyone can hang out, chat, and enjoy great gaming content together. Whether it's intense
                    ranked matches, long RPG adventures, or just chatting about life, there's always a seat
                    for you here! 💜
                </p>

                <!-- Features -->
                <div class="grid sm:grid-cols-3 gap-6 mt-12">
                    <div class="reveal glass rounded-2xl p-6 hover-lift">
                        <div class="text-4xl mb-3">🎮</div>
                        <h3 class="font-semibold mb-2 text-purple-200">Game Variety</h3>
                        <p class="text-sm text-gray-400">FPS, RPGs, Souls-likes, Indie gems, &amp; horror nights</p>
                    </div>
                    <div class="reveal delay-1 glass rounded-2xl p-6 hover-lift">
                        <div class="text-4xl mb-3">💬</div>
                        <h3 class="font-semibold mb-2 text-purple-200">Active Chat</h3>
                        <p class="text-sm text-gray-400">I read chat, respond, and value every single viewer</p>
                    </div>
                    <div class="reveal delay-2 glass rounded-2xl p-6 hover-lift">
                        <div class="text-4xl mb-3">💜</div>
                        <h3 class="font-semibold mb-2 text-purple-200">Community First</h3>
                        <p class="text-sm text-gray-400">A safe, welcoming space for gamers of all backgrounds</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======================= SCHEDULE ======================= -->
        <section id="schedule" class="py-24 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl sm:text-4xl font-bold mb-4 reveal">STREAM <span class="text-gradient">SCHEDULE</span></h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto rounded-full mb-4 reveal"></div>
                    <p class="text-gray-400 reveal">All times in WIB (UTC+7)</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    @php
                        $schedule = [
                            ['day' => 'Monday', 'title' => 'Seal Online', 'game' => 'Seal Online', 'time' => '-', 'icon' => '🎯'],
                            ['day' => 'Tuesday', 'title' => 'Seal Online', 'game' => 'Seal Online', 'time' => '-', 'icon' => '🆕'],
                            ['day' => 'Wednesday', 'title' => 'Seal Online', 'game' => 'Seal Online', 'time' => '-', 'icon' => '⚔️'],
                            ['day' => 'Thursday', 'title' => 'Seal Online', 'game' => 'Seal Online', 'time' => '-', 'icon' => '🎉'],
                            ['day' => 'Friday', 'title' => 'Seal Online', 'game' => 'Seal Online', 'time' => '-', 'icon' => '🔫'],
                            ['day' => 'Saturday', 'title' => 'Seal Online', 'game' => 'Seal Online', 'time' => '-', 'icon' => '⛏️'],
                            ['day' => 'Sunday', 'title' => 'Seal Online', 'game' => 'Seal Online', 'time' => '-', 'icon' => '☕'],
                            ['day' => 'All Week', 'title' => 'Seal Online', 'game' => 'Seal Online', 'time' => 'Anytime', 'icon' => '📺'],
                        ];
                    @endphp

                    @foreach($schedule as $item)
                        <div class="reveal glass rounded-2xl p-5 hover-lift">
                            <div class="text-3xl mb-3">{{ $item['icon'] }}</div>
                            <div class="text-xs uppercase tracking-wider text-purple-400 mb-1">{{ $item['day'] }}</div>
                            <div class="font-semibold mb-2">{{ $item['title'] }}</div>
                            <div class="flex flex-col gap-1 text-sm text-gray-400">
                                <span>🎮 {{ $item['game'] }}</span>
                                <span>🕐 {{ $item['time'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ======================= HIGHLIGHTS / GAMES ======================= -->
        <section id="highlights" class="py-24 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl sm:text-4xl font-bold mb-4 reveal">FAVORITE <span class="text-gradient">GAMES</span></h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto rounded-full mb-4 reveal"></div>
                    <p class="text-gray-400 reveal">What I've been playing lately</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                        $games = [
                            ['name' => 'Seal Online', 'genre' => 'MMO RPG', 'hours' => 1000, 'icon' => '🎯', 'desc' => 'Ranked grind, clutches, and Enjoyable energy'],
                            ['name' => 'Ragnarok', 'genre' => 'RPG', 'hours' => 380, 'icon' => '⚔️', 'desc' => 'Boss battles, lore dives, and co-op adventures'],
                            // ['name' => 'Minecraft', 'genre' => 'Sandbox Survival', 'hours' => 340, 'icon' => '⛏️', 'desc' => 'Hardcore modes, building, and chill sessions'],
                            // ['name' => 'Cyberpunk 2077', 'genre' => 'Open World RPG', 'hours' => 150, 'icon' => '🌆', 'desc' => 'Night City adventures and deep storytelling'],
                            // ['name' => 'Baldur\'s Gate 3', 'genre' => 'CRPG', 'hours' => 120, 'icon' => '🐉', 'desc' => 'Multiplayer chaos and epic D&D-style quests'],
                            // ['name' => 'Phasmophobia', 'genre' => 'Horror Co-op', 'hours' => 95, 'icon' => '👻', 'desc' => 'Jump scares, ghost hunting, and screams'],
                        ];
                    @endphp

                    @foreach($games as $game)
                        <div class="reveal glass rounded-2xl p-6 hover-lift">
                            <div class="flex items-center justify-between mb-3">
                                <div class="text-5xl">{{ $game['icon'] }}</div>
                                <span class="px-3 py-1 rounded-full bg-purple-500/10 border border-purple-500/30 text-xs text-purple-200 font-medium">
                                    {{ $game['hours'] }}h
                                </span>
                            </div>
                            <h3 class="font-display text-lg font-bold mb-1">{{ $game['name'] }}</h3>
                            <div class="text-xs text-purple-300 uppercase tracking-wider mb-3">{{ $game['genre'] }}</div>
                            <p class="text-sm text-gray-400">{{ $game['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ======================= COMMUNITY / CHAT SIMULATION ======================= -->
        <section id="community" class="py-24 px-4">
            <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
                <!-- Chat simulation -->
                {{-- <div class="reveal">
                    <h2 class="font-display text-3xl font-bold mb-2">JOIN THE <span class="text-gradient">COMMUNITY</span></h2>
                    <p class="text-gray-400 mb-6">Try our chat! This is a demo, but the real chat is even better 😉</p>

                    <div id="chat-box" class="glass rounded-2xl p-4 h-72 overflow-y-auto mb-4">
                        <div class="chat-message flex items-start gap-2 mb-3">
                            <div class="text-left max-w-[75%]">
                                <div class="text-xs mb-1" style="color:#a78bfa">Viewer_X</div>
                                <div class="px-3 py-2 rounded-xl bg-white/5 border border-white/10 text-sm">hansaPog 🔥 Welcome to the stream!</div>
                            </div>
                        </div>
                        <div class="chat-message flex items-start gap-2 mb-3">
                            <div class="text-left max-w-[75%]">
                                <div class="text-xs mb-1" style="color:#818cf8">RPG_Fan</div>
                                <div class="px-3 py-2 rounded-xl bg-white/5 border border-white/10 text-sm">GG on that clutch earlier!! 🎮</div>
                            </div>
                        </div>
                        <div class="chat-message flex items-start gap-2 mb-3">
                            <div class="text-left max-w-[75%]">
                                <div class="text-xs mb-1" style="color:#f472b6">Korean_Noob</div>
                                <div class="px-3 py-2 rounded-xl bg-white/5 border border-white/10 text-sm">hansaLove 💜 community is the best</div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <input id="msg-input" type="text" placeholder="Type a message..." 
                               class="flex-1 bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-purple-500 transition placeholder-gray-500">
                        <button id="send-msg" class="px-4 py-3 rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 font-semibold text-sm hover:scale-105 transition">
                            Send
                        </button>
                    </div>
                </div> --}}

                <!-- Social links -->
                <div class="reveal delay-1">
                    <h2 class="font-display text-2xl font-bold mb-6">FOLLOW <span class="text-gradient">EVERYWHERE</span></h2>
                    <div class="grid grid-cols-2 gap-4">
                        @php
                            $socials = [
                                // ['name' => 'Twitch', 'icon' => '🟣', 'color' => 'from-purple-600 to-purple-800', 'url' => 'https://twitch.tv/hansafab', 'handle' => '@hansafab'],
                                ['name' => 'YouTube', 'icon' => '🔴', 'color' => 'from-red-600 to-red-800', 'url' => 'https://www.youtube.com/@hansafab7665', 'handle' => '@HansaFab'],
                                // ['name' => 'X (Twitter)', 'icon' => '🐦', 'color' => 'from-sky-600 to-sky-800', 'url' => 'https://x.com/hansafab', 'handle' => '@hansafab'],
                                // ['name' => 'Instagram', 'icon' => '📸', 'color' => 'from-pink-600 to-rose-800', 'url' => 'https://instagram.com/hansafab', 'handle' => '@hansafab'],
                                // ['name' => 'TikTok', 'icon' => '🎵', 'color' => 'from-slate-700 to-slate-900', 'url' => 'https://tiktok.com/@hansafab', 'handle' => '@hansafab'],
                                ['name' => 'Discord', 'icon' => '💬', 'color' => 'from-indigo-600 to-indigo-800', 'url' => 'https://discord.com/invite/VSKHQr9yk', 'handle' => 'Community', 'copy' => true],
                            ];
                        @endphp

                        @foreach($socials as $social)
                            <a href="{{ $social['url'] }}" target="_blank"
                               id="{{ $social['name'] === 'Discord' ? 'discord-btn' : '' }}"
                               class="group glass rounded-2xl p-4 hover-lift flex items-center gap-3">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br {{ $social['color'] }} flex items-center justify-center text-xl group-hover:scale-110 transition">
                                    {{ $social['icon'] }}
                                </div>
                                <div>
                                    <div class="font-semibold text-sm">{{ $social['name'] }}</div>
                                    <div class="text-xs text-gray-400">{{ $social['handle'] }}</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- ======================= SUBSCRIBE CTA ======================= -->
        <section class="py-24 px-4">
            <div class="max-w-4xl mx-auto gradient-border rounded-3xl p-10 sm:p-14 text-center reveal">
                <div class="text-5xl mb-4">💜</div>
                <h2 class="font-display text-3xl sm:text-4xl font-bold mb-4">READY TO JOIN THE <span class="text-gradient">HYPE?</span></h2>
                <p class="text-gray-300 mb-8 max-w-xl mx-auto">
                    Subscribe to never miss a stream, unlock exclusive emotes, and support the channel.
                    Your support keeps the content flowing and the community thriving!
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <button id="subscribe-btn" 
                            class="px-8 py-4 rounded-xl bg-gradient-to-r from-purple-600 via-pink-600 to-purple-600 animate-gradient font-bold text-lg hover:scale-105 transition shadow-xl twitch-glow">
                        🔔 Subscribe Now
                    </button>
                    <a href="https://discord.com/invite/VSKHQr9yk" target="_blank"
                       class="px-8 py-4 rounded-xl glass hover:bg-white/10 font-semibold hover:scale-105 transition">
                        💬 Join the Chat
                    </a>
                </div>
            </div>
        </section>

        <!-- ======================= SAWERIA SUPPORT ======================= -->
        <section id="support" class="py-24 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-display text-3xl sm:text-4xl font-bold mb-4 reveal">DUKUNG <span class="text-gradient">HANSA FAB</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto rounded-full mb-6 reveal"></div>
                <p class="text-gray-400 mb-8 max-w-xl mx-auto reveal delay-1">
                    Suka konten &amp; streaming-nya? Kamu bisa <strong class="text-purple-300">nyawer</strong>
                    untuk mendukung channel ini agar tetap bisa bikin konten seru!
                    Setiap dukungan sangat berarti. 💜
                </p>

                <a href="https://saweria.co/Hansafab" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-3 px-8 py-4 rounded-2xl bg-gradient-to-r from-orange-500 via-red-500 to-pink-500 animate-gradient font-bold text-lg text-white hover:scale-105 transition shadow-xl reveal delay-2"
                   style="box-shadow: 0 0 30px rgba(255, 90, 0, 0.3);">
                    <span class="text-2xl">💸</span>
                    Nyawer via Saweria
                </a>
            </br></br>
                <div class="mt-8 flex flex-wrap justify-center gap-4 text-sm text-gray-500 reveal delay-3">
                    <span class="glass rounded-xl px-4 py-2">🙏 Semua dukungan diterima</span>
                    <span class="glass rounded-xl px-4 py-2">🔥 Debug &amp; terima kasih di stream</span>
                    <span class="glass rounded-xl px-4 py-2">💜 #HansaFab</span>
                </div>
            </div>
        </section>

        <!-- ======================= CONTACT ======================= -->
        <section id="contact" class="py-24 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-display text-3xl font-bold mb-4 reveal">GET IN <span class="text-gradient">TOUCH</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto rounded-full mb-8 reveal"></div>

                <div class="glass rounded-2xl p-8 mb-8 reveal delay-1">
                    <p class="text-sm text-gray-400 mb-4">
                        For business inquiries, sponsorships, or collaborations:
                    </p>
                    <a href="mailto:hansafabinfo@gmail.com" class="font-display text-xl text-purple-300 hover:text-purple-200 transition hover:underline">
                        📧 hansafabinfo@gmail.com
                    </a>
                </div>

                <!-- Marquee banner -->
                <div class="overflow-hidden glass rounded-2xl py-3 reveal delay-2">
                    <div class="flex whitespace-nowrap animate-marquee font-semibold text-purple-200">
                        <span class="mx-4">🎮 HANSA FAB</span>
                        <span class="mx-4">🔥 GAMING &amp; VARIETY</span>
                        <span class="mx-4">💜 COMMUNITY FIRST</span>
                        <span class="mx-4">🎯 SANTUY </span>
                        <span class="mx-4">⛏️ SEAL ONLINE</span>
                        {{-- <span class="mx-4">⚔️ ELDEN RING</span> --}}
                        <span class="mx-4">🎉 FUN &amp; CHILL</span>
                        <span class="mx-4">#HANSAFAB</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======================= MOBILE BOTTOM NAV ======================= -->
        <div id="mobile-bottom-nav" class="md:hidden fixed bottom-0 inset-x-0 z-50 glass border-t border-white/10">
            <div class="flex items-center justify-around py-2 px-2">
                <a href="#home" class="flex flex-col items-center gap-0.5 text-xs text-purple-200 hover:text-purple-100 transition">
                    <span class="text-lg">🏠</span>
                    <span>Home</span>
                </a>
                <a href="/tutorial" class="flex flex-col items-center gap-0.5 text-xs text-purple-200 hover:text-purple-100 transition">
                    <span class="text-lg">🗡️</span>
                    <span>Tutorial</span>
                </a>
                <a href="#schedule" class="flex flex-col items-center gap-0.5 text-xs text-purple-200 hover:text-purple-100 transition">
                    <span class="text-lg">📅</span>
                    <span>Schedule</span>
                </a>
                <a href="#support" class="flex flex-col items-center gap-0.5 text-xs text-purple-200 hover:text-purple-100 transition">
                    <span class="text-lg">💜</span>
                    <span>Support</span>
                </a>
                <a href="#contact" class="flex flex-col items-center gap-0.5 text-xs text-purple-200 hover:text-purple-100 transition">
                    <span class="text-lg">📧</span>
                    <span>Contact</span>
                </a>
            </div>
        </div>

        <!-- ======================= FOOTER ======================= -->
        <footer class="py-8 px-4 border-t border-white/10">
            <div class="max-w-6xl mx-auto text-center text-sm text-gray-500">
                <p class="mb-2">
                    © {{ date('Y') }} Hansa Fab.
                    Made with 💜 by the Hansa Fab community.
                </p>
                <div class="flex justify-center items-center gap-3 text-xs text-purple-400/70">
                    <span>🎮 Streamer</span>
                    <span>•</span>
                    <span>🌍 Indonesia</span>
                    <span>•</span>
                    <span>💜 #HansaFab</span>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="/js/welcome.js"></script>
    </body>
</html>
