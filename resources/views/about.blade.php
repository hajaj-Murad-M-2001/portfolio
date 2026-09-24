<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Murad Hajjaj</title>
    <meta name="description" content="Murad Hajjaj — a software and computer engineer based in Nablus, specializing in backend systems, RESTful APIs, and full-stack web apps using Laravel, Node.js, and Express.js.">
    <meta property="og:title" content="About Me | Murad Hajjaj">
    <meta property="og:description" content="Backend engineer specializing in scalable systems, RESTful APIs, and full-stack web apps.">
    <meta property="og:type" content="website">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💻</text></svg>">

    <script>
        // Persist dark mode and respect the visitor's system preference on first load.
        tailwind = window.tailwind || {};
        tailwind.config = { darkMode: 'class' };
        (() => {
            const saved = localStorage.getItem('murad-theme');
            const dark = saved ? saved === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (dark) document.documentElement.classList.add('dark');
        })();
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Caveat:wght@700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-heading { font-family: 'Archivo Black', sans-serif; }
        .font-casual { font-family: 'Caveat', cursive; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
        .theme-toggle { transition: transform .2s ease, background-color .25s ease, color .25s ease; }
        .theme-toggle:active { transform: scale(.94); }
        
        /* Dark Mode Global Overrides for Crisp White Text */
        .dark body { background: #0b1220 !important; color: #f3f4f6 !important; }
        .dark h1, .dark h2, .dark h3, .dark h4, .dark h5, .dark h6 { color: #ffffff !important; }
        .dark p, .dark span, .dark li, .dark a { color: #d1d5db; }
        .dark .dark-card { background: #111827 !important; border-color: #243244 !important; }
        .dark .dark-soft { background: #0f172a !important; border-color: #243244 !important; }
        .dark .dark-text { color: #ffffff !important; }
        .dark .dark-muted { color: #94a3b8 !important; }
        .dark input, .dark textarea { color: #ffffff !important; background: #1e293b !important; border-color: #334155 !important; }
        .dark input::placeholder, .dark textarea::placeholder { color: #64748b !important; }
        [x-cloak] { display: none !important; }
    </style>
</head>

<body
    class="bg-[#F4F5FA] text-[#0F1115] antialiased selection:bg-[#4F5BFF] selection:text-white transition-colors duration-300"
    x-data="{ contactModal: false, activeTab: 'whatsapp' }"
    @keydown.escape.window="contactModal = false"
>

    <!-- Header -->
    <header class="max-w-6xl mx-auto px-6 py-6 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <a href="mailto:muradmohhajaj@gmail.com" class="w-10 h-10 bg-white dark:bg-slate-900 dark:border-slate-700 shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700 dark:text-slate-200" title="Email" aria-label="Email Murad Hajjaj">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </a>
            <a href="https://www.youtube.com/@muradmhajjaj6511" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white dark:bg-slate-900 dark:border-slate-700 shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700 dark:text-slate-200" title="YouTube" aria-label="Murad's YouTube Channel">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
            <a href="https://github.com/hajaj-Murad-M-2001" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white dark:bg-slate-900 dark:border-slate-700 shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700 dark:text-slate-200" title="GitHub" aria-label="Murad's GitHub Profile">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            </a>
            <a href="https://mostaql.com/u/MuradMh/portfolio" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white dark:bg-slate-900 dark:border-slate-700 shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700 dark:text-slate-200" title="Mostaql Portfolio" aria-label="Murad's Mostaql Portfolio">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </a>
        </div>

        <div class="flex items-center gap-2 sm:gap-3">
            <div class="hidden sm:flex items-center gap-2 bg-white dark:bg-slate-900 dark:border-slate-700 px-4 py-2 rounded-full shadow-sm border border-slate-200 text-xs font-semibold text-slate-600 dark:text-slate-300">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse" aria-hidden="true"></span>
                Available for new projects
            </div>

            <!-- زر تبديل الدارك مود -->
            <button
                type="button"
                x-data="{ dark: document.documentElement.classList.contains('dark') }"
                @click="dark = !dark; document.documentElement.classList.toggle('dark', dark); localStorage.setItem('murad-theme', dark ? 'dark' : 'light')"
                class="theme-toggle w-10 h-10 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 shadow-sm flex items-center justify-center text-slate-700 dark:text-amber-300 hover:scale-105"
                title="Toggle dark mode"
                aria-label="Toggle dark mode"
            >
                <svg x-show="!dark" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 16a4 4 0 100-8 4 4 0 000 8z"/>
                </svg>
                <svg x-show="dark" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/>
                </svg>
            </button>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 pt-2 pb-28 space-y-8">

        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 dark:text-slate-400 hover:text-[#4F5BFF] transition-colors">
            &larr; Back to Home
        </a>

        <!-- Page Title -->
        <div class="text-center space-y-1">
            <span class="font-casual text-[#4F5BFF] text-3xl">Get to know</span>
            <h1 class="font-heading text-4xl md:text-5xl uppercase tracking-tight text-slate-900 dark:text-white">About Me</h1>
        </div>

        <!-- 1. Positioning Statement Card -->
        <div class="bg-[#0F1115] dark:bg-slate-900 dark:border dark:border-slate-800 text-white p-8 md:p-10 rounded-3xl shadow-xl space-y-2 relative overflow-hidden max-w-4xl mx-auto">
            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-[#4F5BFF]/20 rounded-full blur-2xl" aria-hidden="true"></div>
            <span class="text-[#4F5BFF] font-mono text-xs uppercase tracking-widest block font-semibold">The Backend Engineer</span>
            <p class="font-heading text-2xl md:text-3xl tracking-wide leading-snug text-white">
                I build scalable backend systems and RESTful APIs that just <span class="text-[#4F5BFF]">work.</span>
            </p>
        </div>

        <!-- 2. Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 max-w-4xl mx-auto">
            <div class="md:col-span-7 bg-[#4F5BFF] text-white p-8 rounded-3xl shadow-lg flex flex-col justify-center relative overflow-hidden">
                <div class="absolute right-[-20px] bottom-[-20px] text-white/10 font-heading text-9xl pointer-events-none" aria-hidden="true">99%</div>
                <span class="font-heading text-5xl md:text-6xl tracking-tight mb-1">99%</span>
                <span class="text-white/90 text-sm md:text-base font-medium">API Uptime & reliability</span>
            </div>

            <div class="md:col-span-5 grid grid-cols-1 gap-6">
                <div class="bg-white dark:bg-slate-900 dark:border dark:border-slate-800 p-6 rounded-3xl shadow-sm border border-slate-200 flex flex-col justify-center">
                    <span class="font-heading text-3xl text-slate-900 dark:text-white mb-1">2+</span>
                    <span class="text-xs md:text-sm text-slate-500 dark:text-slate-400 font-medium">Years experience</span>
                </div>
                <div class="bg-white dark:bg-slate-900 dark:border dark:border-slate-800 p-6 rounded-3xl shadow-sm border border-slate-200 flex flex-col justify-center">
                    <span class="font-heading text-3xl text-slate-900 dark:text-white mb-1">6+</span>
                    <span class="text-xs md:text-sm text-slate-500 dark:text-slate-400 font-medium">Projects shipped</span>
                </div>
            </div>
        </div>

        <!-- 3. WHO AM I? Card -->
        <section class="bg-white dark:bg-slate-900 dark:border dark:border-slate-800 border border-slate-200 p-8 md:p-10 rounded-3xl shadow-sm space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed max-w-4xl mx-auto">
            <h2 class="font-heading text-xl text-slate-900 dark:text-white uppercase tracking-wide">Who Am I?</h2>
            <p class="text-sm md:text-base">
                I am Murad Hajjaj, a software and computer engineer based in GAZA--GAZA...CITY., specializing in backend systems, RESTful APIs, and full-stack web apps using Laravel, Node.js, and Express.js.
            </p>
            <p class="text-sm md:text-base">
                I focus on clean architecture, secure authentication, and database optimization across MySQL, PostgreSQL, and MongoDB.
            </p>
        </section>

        <!-- 4. Live Code Preview Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-stretch max-w-4xl mx-auto">
            <div class="bg-white dark:bg-slate-900 dark:border dark:border-slate-800 border border-slate-200 p-8 rounded-3xl shadow-sm flex flex-col justify-between space-y-4">
                <div>
                    <span class="text-[#4F5BFF] font-mono text-xs uppercase tracking-widest font-semibold block mb-2">&bull; Live Code Preview</span>
                    <h3 class="font-heading text-xl text-slate-900 dark:text-white mb-4">Code that speaks for itself</h3>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-300">
                        <li class="flex items-center gap-2">✓ SOLID Principles</li>
                        <li class="flex items-center gap-2">✓ Clean Architecture</li>
                        <li class="flex items-center gap-2">✓ Scalable RESTful APIs</li>
                    </ul>
                </div>
            </div>
            <div class="bg-[#0F1115] dark:bg-slate-900 dark:border dark:border-slate-800 border border-slate-800 p-6 rounded-3xl shadow-lg font-mono text-xs md:text-sm text-slate-300 flex flex-col justify-center overflow-x-auto">
                <div class="text-slate-500 dark:text-slate-400 mb-3 pb-2 border-b border-slate-800 dark:border-slate-800 flex items-center justify-between">
                    <span>// backend.php</span>
                    <div class="flex gap-1.5" aria-hidden="true">
                        <span class="w-2.5 h-2.5 rounded-full bg-red-500/80 inline-block"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-yellow-500/80 inline-block"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500/80 inline-block"></span>
                    </div>
                </div>
                <pre class="leading-relaxed"><code><span class="text-purple-400">class</span> <span class="text-yellow-300">Api</span> {
    <span class="text-blue-400">stack</span> = [<span class="text-emerald-300">'Laravel'</span>];
    <span class="text-purple-400">public function</span> <span class="text-blue-300">deploy</span>() {
        <span class="text-purple-400">return</span> <span class="text-emerald-300">'shipped'</span>;
    }
}</code></pre>
            </div>
        </div>

        <!-- 5. Toolkit Section -->
        <section class="bg-white dark:bg-slate-900 dark:border dark:border-slate-800 border border-slate-200 p-8 rounded-3xl shadow-sm space-y-4 max-w-4xl mx-auto">
            <h2 class="font-heading text-xl text-slate-900 dark:text-white uppercase tracking-wide">Toolkit</h2>
            <div class="flex flex-wrap items-center gap-3">
                <span class="bg-[#4F5BFF]/10 text-[#4F5BFF] px-4 py-2 rounded-xl text-sm font-semibold">PHP / Laravel</span>
                <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 px-4 py-2 rounded-xl text-sm font-medium">Node.js</span>
                <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 px-4 py-2 rounded-xl text-sm font-medium">MySQL / PostgreSQL</span>
                <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 px-4 py-2 rounded-xl text-sm font-medium">MongoDB</span>
                <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 px-4 py-2 rounded-xl text-sm font-medium">Docker</span>
                <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 px-4 py-2 rounded-xl text-sm font-medium">Git & GitHub</span>
            </div>
        </section>

    </main>

    <!-- Floating Dock Navigation -->
    <nav class="fixed bottom-4 sm:bottom-6 left-1/2 -translate-x-1/2 z-40 bg-white/90 dark:bg-slate-900/95 backdrop-blur-md border border-slate-200 dark:border-slate-800 px-2.5 sm:px-4 py-2.5 sm:py-3 rounded-full shadow-2xl flex items-center gap-1 sm:gap-4 max-w-[calc(100vw-24px)]" aria-label="Main navigation">
        <a
            href="{{ url('/') }}"
            class="p-2.5 sm:p-3 text-slate-700 dark:text-slate-200 hover:text-[#4F5BFF] hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-all"
            title="Home"
            aria-label="Go to Home page"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
        </a>

        <a
            href="{{ route('experience') }}"
            class="p-2.5 sm:p-3 text-slate-700 dark:text-slate-200 hover:text-[#4F5BFF] hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-all"
            title="Experience"
            aria-label="Go to Experience page"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20 7h-4V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2H4a2 2 0 00-2 2v9a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zm-8 5h.01M10 7h4"/>
            </svg>
        </a>

        <a
            href="{{ route('about') }}"
            class="p-2.5 sm:p-3 text-[#4F5BFF] bg-slate-100 dark:bg-slate-800 rounded-full transition-all"
            title="About"
            aria-label="Go to About page"
            aria-current="page"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
        </a>

        <a
            href="{{ route('projects') }}"
            class="p-2.5 sm:p-3 text-slate-700 dark:text-slate-200 hover:text-[#4F5BFF] hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-all"
            title="Projects"
            aria-label="Go to Projects page"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
            </svg>
        </a>

        <button
            @click="contactModal = true"
            class="p-2.5 sm:p-3 text-slate-700 dark:text-slate-200 hover:text-[#4F5BFF] hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-all"
            title="Contact"
            aria-label="Open contact form"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
        </button>
    </nav>

    <!-- Contact Modal -->
    <div
        x-show="contactModal"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/40 backdrop-blur-sm"
        style="display: none;"
        role="dialog"
        aria-modal="true"
        aria-labelledby="contact-modal-title"
    >
        <div @click.away="contactModal = false" class="bg-white dark:bg-slate-900 rounded-3xl shadow-2xl border border-slate-200 dark:border-slate-700 w-full max-w-lg p-6 md:p-8 relative space-y-6">
            <button @click="contactModal = false" class="absolute top-6 right-6 w-9 h-9 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-full flex items-center justify-center text-slate-500 dark:text-slate-300 transition-colors" title="Close" aria-label="Close contact form">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <div>
                <h3 id="contact-modal-title" class="text-2xl font-black text-slate-900 dark:text-white">Send a Message</h3>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">We typically reply within a few hours.</p>
            </div>

            @if(session('success'))
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-medium p-3.5 rounded-2xl flex items-center gap-2">
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 text-xs font-medium p-3.5 rounded-2xl space-y-1">
                    @foreach($errors->all() as$error)
                        <p class="flex items-center gap-2">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            {{ $error }}
                        </p>
                    @endforeach
                </div>
            @endif

            <div class="bg-slate-100 dark:bg-slate-800 p-1.5 rounded-2xl flex items-center gap-1" role="tablist">
                <button @click="activeTab = 'whatsapp'" :class="activeTab === 'whatsapp' ? 'bg-white dark:bg-slate-700 text-slate-900 dark:text-white shadow-sm font-bold' : 'text-slate-500 dark:text-slate-400 font-medium'" class="flex-1 py-2.5 rounded-xl text-xs flex items-center justify-center gap-2 transition-all" role="tab" :aria-selected="activeTab === 'whatsapp'">
                    <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    <span>WhatsApp</span>
                </button>
                <button @click="activeTab = 'email'" :class="activeTab === 'email' ? 'bg-white dark:bg-slate-700 text-slate-900 dark:text-white shadow-sm font-bold' : 'text-slate-500 dark:text-slate-400 font-medium'" class="flex-1 py-2.5 rounded-xl text-xs flex items-center justify-center gap-2 transition-all" role="tab" :aria-selected="activeTab === 'email'">
                    <svg class="w-4 h-4 text-[#4F5BFF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>Email</span>
                </button>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4" id="contactForm">
                @csrf
                <div>
                    <label for="cf-name" class="block text-xs font-bold text-slate-700 dark:text-slate-300 mb-1">Name *</label>
                    <input type="text" name="name" id="cf-name" placeholder="Full Name" required value="{{ old('name') }}" class="w-full bg-[#F4F5FA] dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl px-4 py-3 text-xs text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-[#4F5BFF]">
                </div>
                <div>
                    <label for="cf-phone" class="block text-xs font-bold text-slate-700 dark:text-slate-300 mb-1">Phone Number *</label>
                    <div class="flex items-stretch bg-[#F4F5FA] dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl overflow-hidden focus-within:border-[#4F5BFF]">
                        <span class="px-3 flex items-center text-xs font-bold text-slate-500 dark:text-slate-300 bg-slate-100 dark:bg-slate-700 border-l border-slate-200 dark:border-slate-600">+972</span>
                        <input type="tel" name="phone" id="cf-phone" placeholder="59 XXX XXXX" required value="{{ old('phone') }}" class="flex-1 bg-transparent px-4 py-3 text-xs text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none">
                    </div>
                </div>
                <div>
                    <label for="cf-message" class="block text-xs font-bold text-slate-700 dark:text-slate-300 mb-1">Message *</label>
                    <textarea name="message" id="cf-message" rows="3" placeholder="How can I help you?" required class="w-full bg-[#F4F5FA] dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl px-4 py-3 text-xs text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-[#4F5BFF]">{{ old('message') }}</textarea>
                </div>

                <div class="pt-2 flex flex-col sm:flex-row items-center gap-3">
                    <button type="button" x-show="activeTab === 'whatsapp'"
                        @click="
                            const name = document.getElementById('cf-name').value || 'there';
                            const phone = document.getElementById('cf-phone').value || '';
                            const message = document.getElementById('cf-message').value || '';
                            const text = encodeURIComponent(`Hi Murad, I'm ${name} (+972${phone}). ${message}`);
                            window.open(`https://wa.me/972595321243?text=${text}`, '_blank');
                        "
                        class="w-full sm:flex-1 bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3.5 px-6 rounded-2xl transition-all shadow-lg shadow-emerald-600/20 text-xs">
                        Send via WhatsApp
                    </button>

                    <button type="submit" x-show="activeTab === 'email'" class="w-full sm:flex-1 bg-[#4F5BFF] hover:bg-[#3d48e0] text-white font-bold py-3.5 px-6 rounded-2xl transition-all shadow-lg shadow-[#4F5BFF]/25 text-xs">
                        Send Email
                    </button>

                    <a href="{{ asset('cv/murad-hajjaj-cv.pdf') }}" download class="w-full sm:w-auto bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 font-bold py-3.5 px-6 rounded-2xl transition-all text-xs text-center">
                        Download CV
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>