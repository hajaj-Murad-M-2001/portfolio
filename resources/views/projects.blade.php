<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Murad Hajjaj</title>
    <meta name="description" content="A selection of backend and full-stack projects by Murad Hajjaj, built with Laravel, PHP, and modern web technologies — focused on clean architecture and reliable APIs.">
    <meta property="og:title" content="Projects | Murad Hajjaj">
    <meta property="og:description" content="A selection of backend and full-stack projects built with Laravel, PHP, and modern web technologies.">
    <meta property="og:type" content="website">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>Murad-Mohd💻</text></svg>">

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

        /* FIX: same issue as Home — ".dark span/a" etc. has higher CSS specificity
           than a single Tailwind utility class, so it was silently turning the blue
           "View Case Study" / "GitHub" links and the blue filter badges gray in dark
           mode. Removed; every element already carries its own explicit dark: class. */
        .dark body { background: #0b1220 !important; color: #f3f4f6 !important; }
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
            <a href="mailto:{{ config('portfolio.email') }}" class="w-10 h-10 bg-white dark:bg-slate-900 dark:border-slate-700 shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700 dark:text-slate-200" title="Email" aria-label="Email Murad Hajjaj">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </a>
            <a href="{{ config('portfolio.youtube_url') }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white dark:bg-slate-900 dark:border-slate-700 shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700 dark:text-slate-200" title="YouTube" aria-label="Murad's YouTube Channel">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
            <a href="{{ config('portfolio.github_url') }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white dark:bg-slate-900 dark:border-slate-700 shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700 dark:text-slate-200" title="GitHub" aria-label="Murad's GitHub Profile">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            </a>
            <a href="{{ config('portfolio.mostaql_url') }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white dark:bg-slate-900 dark:border-slate-700 shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700 dark:text-slate-200" title="Mostaql Portfolio" aria-label="Murad's Mostaql Portfolio">
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

    <!-- Main Projects Content -->
    <main class="max-w-6xl mx-auto px-6 space-y-10" x-data="{ activeFilter: 'All' }">

        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 dark:text-slate-400 hover:text-[#4F5BFF] transition-colors">
            &larr; Back to Home
        </a>

        <!-- Page Title & Description -->
        <div class="space-y-3">
            <h1 class="font-heading text-4xl md:text-5xl uppercase tracking-tight text-slate-900 dark:text-white">Projects I&rsquo;ve Built</h1>
            <p class="text-slate-500 dark:text-slate-400 max-w-xl text-sm leading-relaxed">
                A selection of backend and full-stack projects focused on clean architecture, reliable APIs, and practical solutions.
            </p>
        </div>

        <!-- Filters: "Node.js" removed — no project is tagged with it yet, and an
             always-empty filter option looks like a broken feature to a visitor. -->
        <div class="flex flex-wrap items-center gap-2 pt-2" role="group" aria-label="Filter projects by technology">
            <template x-for="filter in ['All', 'Backend', 'Full-Stack', 'Laravel']">
                <button @click="activeFilter = filter"
                        :class="activeFilter === filter ? 'bg-[#4F5BFF] text-white shadow-md shadow-[#4F5BFF]/20' : 'bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800'"
                        :aria-pressed="activeFilter === filter"
                        class="text-xs font-semibold px-4 py-2 rounded-full transition-all"
                        x-text="filter">
                </button>
            </template>
        </div>

        <!-- Featured Project (Clean Blog CMS) -->
        <div
            x-show="activeFilter === 'All' || activeFilter === 'Backend' || activeFilter === 'Laravel'"
            x-transition
            class="bg-gradient-to-br from-white to-[#F8F9FF] dark:from-slate-900 dark:to-slate-900 border-2 border-[#4F5BFF]/30 dark:border-[#4F5BFF]/50 rounded-3xl p-8 md:p-10 shadow-lg relative overflow-hidden flex flex-col justify-between hover:shadow-xl transition-shadow duration-300"
        >
            <div class="absolute top-0 right-0 bg-[#4F5BFF] text-white text-[10px] font-bold px-4 py-1.5 rounded-bl-2xl uppercase tracking-wider">
                Featured Project
            </div>
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <span class="bg-[#4F5BFF]/10 text-[#4F5BFF] text-xs font-bold px-3 py-1 rounded-full">Backend · Laravel</span>
                </div>
                <h2 class="font-heading text-2xl md:text-3xl text-slate-900 dark:text-white">Clean Blog CMS</h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed max-w-2xl">
                    Advanced content management system featuring user role permissions, secure REST API, and complete article control with clean architectural patterns.
                </p>
                <div class="flex flex-wrap gap-2 pt-2">
                    <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-xs px-3 py-1 rounded-lg font-medium">Laravel</span>
                    <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-xs px-3 py-1 rounded-lg font-medium">MySQL</span>
                    <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-xs px-3 py-1 rounded-lg font-medium">REST API</span>
                    <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-xs px-3 py-1 rounded-lg font-medium">Authentication</span>
                </div>
            </div>

           <div class="pt-8 mt-8 border-t border-slate-200/60 dark:border-slate-800 flex flex-wrap items-center justify-between gap-4">
    <div class="flex items-center gap-4">
        <a href="https://mostaql.com/portfolio/3793451-%D8%AA%D8%B7%D9%88%D9%8A%D8%B1-%D9%88%D8%AA%D8%A3%D9%85%D9%8A%D9%86-%D9%86%D8%B8%D8%A7%D9%85-%D8%A5%D8%AF%D8%A7%D8%B1%D8%A9-%D9%85%D8%AD%D8%AA%D9%88%D9%89-%D9%85%D8%AA%D9%83%D8%A7%D9%85%D9%84-clean-blog-cms-%D8%A8%D8%A7%D8%B3%D8%AA%D8%AE%D8%AF%D8%A7%D9%85-laravel" target="_blank" rel="noopener noreferrer" class="text-[#4F5BFF] hover:text-[#3d48e0] text-sm font-bold inline-flex items-center gap-1">
            View Case Study &rarr;
        </a>
        <a href="https://mostaql.com/portfolio/3793451-%D8%AA%D8%B7%D9%88%D9%8A%D8%B1-%D9%88%D8%AA%D8%A3%D9%85%D9%8A%D9%86-%D9%86%D8%B8%D8%A7%D9%85-%D8%A5%D8%AF%D8%A7%D8%B1%D8%A9-%D9%85%D8%AD%D8%AA%D9%88%D9%89-%D9%85%D8%AA%D9%83%D8%A7%D9%85%D9%84-clean-blog-cms-%D8%A8%D8%A7%D8%B3%D8%AA%D8%AE%D8%AF%D8%A7%D9%85-laravel" target="_blank" rel="noopener noreferrer" class="text-slate-700 dark:text-slate-300 hover:text-[#4F5BFF] text-sm font-bold inline-flex items-center gap-1">
            Live Demo ↗
        </a>
    </div>
    <a href="https://github.com/hajaj-Murad-M-2001/clean-blog" target="_blank" rel="noopener noreferrer" class="text-slate-700 dark:text-slate-300 hover:text-[#4F5BFF] text-sm font-bold inline-flex items-center gap-1">
        GitHub ↗
    </a>
</div>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Project 1: E-Restaurant -->
            <div
                x-show="activeFilter === 'All' || activeFilter === 'Full-Stack' || activeFilter === 'Laravel'"
                x-transition
                class="bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between"
            >
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="bg-[#4F5BFF]/10 text-[#4F5BFF] text-xs font-bold px-3 py-1 rounded-full">Full-Stack · UI/UX</span>
                        <span class="w-9 h-9 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-100 dark:border-slate-700 flex items-center justify-center text-[#4F5BFF]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 8l-4 4 4 4"></path></svg>
                        </span>
                    </div>
                    <h3 class="font-heading text-xl text-slate-900 dark:text-white leading-snug">E-Restaurant Platform</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">Integrated food ordering web platform with superior user experience (UI/UX) and full management dashboard for orders and meals.</p>
                    <div class="flex flex-wrap gap-1.5 pt-2">
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">Laravel</span>
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">UI/UX</span>
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">MySQL</span>
                    </div>
                </div>
                <div class="pt-6 mt-6 border-t border-slate-100 dark:border-slate-800 flex flex-wrap items-center justify-between gap-2">
                    <a href="https://mostaql.com/portfolio/3364761-%D8%AA%D8%B7%D9%88%D9%8A%D8%B1-%D9%85%D9%86%D8%B5%D8%A9-e-restaurant-%D9%85%D8%AA%D9%83%D8%A7%D9%85%D9%84%D8%A9-%D8%A8%D8%AA%D8%AC%D8%B1%D8%A8%D8%A9-%D9%85%D8%B3%D8%AA%D8%AE%D8%AF%D9%85-%D9%81%D8%A7%D8%A6%D9%82%D8%A9-uxui-------" target="_blank" class="text-[#4F5BFF] hover:text-[#3d48e0] text-sm font-bold inline-flex items-center gap-1">
                        View Case Study &rarr;
                    </a>
                    <a href="https://mostaql.com/portfolio/3364761-%D8%AA%D8%B7%D9%88%D9%8A%D8%B1-%D9%85%D9%86%D8%B5%D8%A9-e-restaurant-%D9%85%D8%AA%D9%83%D8%A7%D9%85%D9%84%D8%A9-%D8%A8%D8%AA%D8%AC%D8%B1%D8%A8%D8%A9-%D9%85%D8%B3%D8%AA%D8%AE%D8%AF%D9%85-%D9%81%D8%A7%D8%A6%D9%82%D8%A9-uxui-------" target="_blank" class="text-slate-700 dark:text-slate-300 hover:text-[#4F5BFF] text-sm font-bold inline-flex items-center gap-1">
                        Live Demo ↗
                    </a>
                    {{-- TODO: replace with this project's actual repo link --}}
                    <a href="https://github.com/hajaj-Murad-M-2001" target="_blank" class="text-slate-700 dark:text-slate-300 hover:text-[#4F5BFF] text-sm font-bold inline-flex items-center gap-1">
                        GitHub ↗
                    </a>
                </div>
            </div>

            <!-- Project 2: LawTech -->
            <div
                x-show="activeFilter === 'All' || activeFilter === 'Full-Stack'"
                x-transition
                class="bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between"
            >
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="bg-[#4F5BFF]/10 text-[#4F5BFF] text-xs font-bold px-3 py-1 rounded-full">Full-Stack · Corporate</span>
                        <span class="w-9 h-9 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-100 dark:border-slate-700 flex items-center justify-center text-[#4F5BFF]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 8l-4 4 4 4"></path></svg>
                        </span>
                    </div>
                    <h3 class="font-heading text-xl text-slate-900 dark:text-white leading-snug">LawTech Services Website</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">Professional legal services website built with high speed performance, elegant design, and responsive layouts.</p>
                    <div class="flex flex-wrap gap-1.5 pt-2">
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">PHP</span>
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">JavaScript</span>
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">Tailwind CSS</span>
                    </div>
                </div>
                <div class="pt-6 mt-6 border-t border-slate-100 dark:border-slate-800 flex flex-wrap items-center justify-between gap-2">
                    <a href="https://mostaql.com/portfolio/3347152-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D9%88%D8%AA%D8%B7%D9%88%D9%8A%D8%B1-%D9%85%D9%88%D9%82%D8%B9-%D8%B4%D8%B1%D9%83%D8%A9-%D8%AE%D8%AF%D9%85%D8%A7%D8%AA-%D9%82%D8%A7%D9%86%D9%88%D9%86%D9%8A%D8%A9-lawtech-------" target="_blank" class="text-[#4F5BFF] hover:text-[#3d48e0] text-sm font-bold inline-flex items-center gap-1">
                        View Case Study &rarr;
                    </a>
                    <a href="https://mostaql.com/portfolio/3347152-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D9%88%D8%AA%D8%B7%D9%88%D9%8A%D8%B1-%D9%85%D9%88%D9%82%D8%B9-%D8%B4%D8%B1%D9%83%D8%A9-%D8%AE%D8%AF%D9%85%D8%A7%D8%AA-%D9%82%D8%A7%D9%86%D9%88%D9%86%D9%8A%D8%A9-lawtech-------" target="_blank" class="text-slate-700 dark:text-slate-300 hover:text-[#4F5BFF] text-sm font-bold inline-flex items-center gap-1">
                        Live Demo ↗
                    </a>
                    {{-- TODO: replace with this project's actual repo link --}}
                    <a href="https://github.com/hajaj-Murad-M-2001" target="_blank" class="text-slate-700 dark:text-slate-300 hover:text-[#4F5BFF] text-sm font-bold inline-flex items-center gap-1">
                        GitHub ↗
                    </a>
                </div>
            </div>

            <!-- Project 3: Responsive Landing Page -->
            <div
                x-show="activeFilter === 'All'"
                x-transition
                class="bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between"
            >
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="bg-[#4F5BFF]/10 text-[#4F5BFF] text-xs font-bold px-3 py-1 rounded-full">Frontend</span>
                        <span class="w-9 h-9 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-100 dark:border-slate-700 flex items-center justify-center text-[#4F5BFF]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 8l-4 4 4 4"></path></svg>
                        </span>
                    </div>
                    <h3 class="font-heading text-xl text-slate-900 dark:text-white leading-snug">Responsive Landing Page</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">High-performance responsive landing page optimized for conversion rates and smooth cross-device animations.</p>
                    <div class="flex flex-wrap gap-1.5 pt-2">
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">HTML5</span>
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">CSS3</span>
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">JavaScript</span>
                    </div>
                </div>
                <div class="pt-6 mt-6 border-t border-slate-100 dark:border-slate-800 flex flex-wrap items-center justify-between gap-2">
                    <a href="https://mostaql.com/portfolio/3319201-responsive-landing-page-main----" target="_blank" class="text-[#4F5BFF] hover:text-[#3d48e0] text-sm font-bold inline-flex items-center gap-1">
                        View Case Study &rarr;
                    </a>
                    <a href="https://mostaql.com/portfolio/3319201-responsive-landing-page-main----" target="_blank" class="text-slate-700 dark:text-slate-300 hover:text-[#4F5BFF] text-sm font-bold inline-flex items-center gap-1">
                        Live Demo ↗
                    </a>
                    {{-- TODO: replace with this project's actual repo link --}}
                    <a href="https://github.com/hajaj-Murad-M-2001" target="_blank" class="text-slate-700 dark:text-slate-300 hover:text-[#4F5BFF] text-sm font-bold inline-flex items-center gap-1">
                        GitHub ↗
                    </a>
                </div>
            </div>

            <!-- Project 4: Educational Platform -->
            <div
                x-show="activeFilter === 'All' || activeFilter === 'Full-Stack'"
                x-transition
                class="bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between"
            >
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="bg-[#4F5BFF]/10 text-[#4F5BFF] text-xs font-bold px-3 py-1 rounded-full">Full-Stack · EdTech</span>
                        <span class="w-9 h-9 rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-100 dark:border-slate-700 flex items-center justify-center text-[#4F5BFF]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 8l-4 4 4 4"></path></svg>
                        </span>
                    </div>
                    <h3 class="font-heading text-xl text-slate-900 dark:text-white leading-snug">Educational Website UI</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">Interactive user interfaces and backend structures for educational portals, ensuring seamless navigation for students and teachers.</p>
                    <div class="flex flex-wrap gap-1.5 pt-2">
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">PHP</span>
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">Bootstrap</span>
                        <span class="bg-slate-100 dark:bg-slate-800 dark:text-slate-200 text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium">MySQL</span>
                    </div>
                </div>
                <div class="pt-6 mt-6 border-t border-slate-100 dark:border-slate-800 flex flex-wrap items-center justify-between gap-2">
                    <a href="https://mostaql.com/portfolio/3311927-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D9%88%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D9%88%D8%A7%D8%AC%D9%87%D8%A7%D8%AA-%D9%85%D8%B3%D8%AA%D8%AE%D8%AF%D9%85-%D9%84%D9%85%D9%88%D9%82%D8%B9-%D8%AA%D8%B9%D9%84%D9%8A%D9%85%D9%8A-----" target="_blank" class="text-[#4F5BFF] hover:text-[#3d48e0] text-sm font-bold inline-flex items-center gap-1">
                        View Case Study &rarr;
                    </a>
                    <a href="https://mostaql.com/portfolio/3311927-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D9%88%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D9%88%D8%A7%D8%AC%D9%87%D8%A7%D8%AA-%D9%85%D8%B3%D8%AA%D8%AE%D8%AF%D9%85-%D9%84%D9%85%D9%88%D9%82%D8%B9-%D8%AA%D8%B9%D9%84%D9%8a%D9%85%D9%8A-----" target="_blank" class="text-slate-700 dark:text-slate-300 hover:text-[#4F5BFF] text-sm font-bold inline-flex items-center gap-1">
                        Live Demo ↗
                    </a>
                    {{-- TODO: replace with this project's actual repo link --}}
                    <a href="https://github.com/hajaj-Murad-M-2001" target="_blank" class="text-slate-700 dark:text-slate-300 hover:text-[#4F5BFF] text-sm font-bold inline-flex items-center gap-1">
                        GitHub ↗
                    </a>
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div class="max-w-2xl mx-auto text-center bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-10 shadow-sm mt-16">
            <h3 class="font-heading text-xl text-slate-900 dark:text-white mb-2">Have a project in mind?</h3>
            <p class="text-slate-500 dark:text-slate-400 text-sm mb-6">I am open to discussing your technical project details and starting right away.</p>
            <button @click="contactModal = true" class="inline-flex items-center gap-2 bg-[#4F5BFF] hover:bg-[#3d48e0] text-white font-semibold px-8 py-3 rounded-full transition-all shadow-lg shadow-[#4F5BFF]/25">
                Get In Touch
            </button>
        </div>
    </main>

    <!-- Footer -->
    <footer class="max-w-6xl mx-auto px-6 pt-12 pb-28 text-center text-slate-400 dark:text-slate-500 text-xs">
        <p>&copy; 2026 Murad Hajjaj. Built with Laravel 12 &amp; Tailwind CSS.</p>
    </footer>

    <!-- Floating Navigation -->
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
            class="p-2.5 sm:p-3 text-slate-700 dark:text-slate-200 hover:text-[#4F5BFF] hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-all"
            title="About"
            aria-label="Go to About page"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
        </a>

        <a
            href="{{ route('projects') }}"
            class="p-2.5 sm:p-3 text-[#4F5BFF] bg-slate-100 dark:bg-slate-800 rounded-full transition-all"
            title="Projects"
            aria-label="Go to Projects page"
            aria-current="page"
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
                    @foreach($errors->all() as $error)
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