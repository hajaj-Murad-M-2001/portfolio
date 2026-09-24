<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Murad Hajjaj | Full-Stack & Laravel Developer</title>
    <meta name="description" content="Murad Hajjaj — Full-Stack & Laravel Developer building scalable backend systems, RESTful APIs, and reliable web applications.">
    <meta property="og:title" content="Murad Hajjaj | Full-Stack & Laravel Developer">
    <meta property="og:description" content="Full-Stack & Laravel Developer building scalable backend systems, RESTful APIs, and reliable web applications.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('Murad1.jpeg') }}">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💻</text></svg>">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Caveat:wght@700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-heading { font-family: 'Archivo Black', sans-serif; }
        .font-casual { font-family: 'Caveat', cursive; }
        .font-mono { font-family: 'JetBrains Mono', monospace; }
    </style>
</head>

<body
    class="bg-[#F4F5FA] text-[#0F1115] antialiased selection:bg-[#4F5BFF] selection:text-white"
    x-data="{ contactModal: false, activeTab: 'whatsapp' }"
    @keydown.escape.window="contactModal = false"
>

    <!-- Header -->
    <header class="max-w-6xl mx-auto px-6 py-6 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <a href="mailto:muradmohhajaj@gmail.com" class="w-10 h-10 bg-white shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700" title="Email" aria-label="Email Murad Hajjaj">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </a>
            <a href="https://www.youtube.com/@muradmhajjaj6511" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700" title="YouTube" aria-label="Murad's YouTube Channel">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
            <a href="https://github.com/hajaj-Murad-M-2001" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700" title="GitHub" aria-label="Murad's GitHub Profile">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            </a>
            <a href="https://mostaql.com/u/MuradMh/portfolio" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white shadow-sm border border-slate-200 rounded-xl flex items-center justify-center hover:scale-105 transition-transform text-slate-700" title="Mostaql Portfolio" aria-label="Murad's Mostaql Portfolio">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </a>
        </div>

        <div class="hidden sm:flex items-center gap-2 bg-white px-4 py-2 rounded-full shadow-sm border border-slate-200 text-xs font-semibold text-slate-600">
            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse" aria-hidden="true"></span>
            Available for new projects
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 pt-6 space-y-20">

        <!-- Hero -->
        <section id="home" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-6 relative">
                <span class="font-casual text-[#4F5BFF] text-3xl block -mb-6 rotate-[-3deg]">This is</span>

                <h1 class="font-heading text-6xl md:text-8xl uppercase tracking-tight leading-none">
                    <span class="text-[#0F1115]">MURAD</span><br>
                    <span class="text-[#0F1115]">HAJJAJ</span>
                </h1>

                <div class="space-y-2 pt-2">
                    <div class="flex items-center gap-3">
                        <span class="font-casual text-[#4F5BFF] text-3xl rotate-[2deg]">
                            The Backend Architect &rarr;
                        </span>
                    </div>

                    <p class="text-slate-600 text-sm md:text-base max-w-lg leading-relaxed">
                        I build reliable full-stack web applications, RESTful APIs, and database-driven systems using Laravel, PHP, Node.js, React.js, and modern databases.
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-4 pt-4">
                    <div class="bg-white px-4 py-2 rounded-full shadow-sm border border-slate-200 flex items-center gap-2 text-sm font-semibold">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse" aria-hidden="true"></span>
                        Open to work
                    </div>

                    <div
                        class="bg-white px-4 py-2 rounded-full shadow-sm border border-slate-200 text-sm font-medium text-slate-600 flex items-center gap-2"
                        x-data="{ time: '' }"
                        x-init="time = new Date().toLocaleTimeString(); setInterval(() => time = new Date().toLocaleTimeString(), 1000)"
                    >
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span x-text="time"></span>
                    </div>

                    <a
                        href="{{ route('projects') }}"
                        class="bg-[#4F5BFF]/10 hover:bg-[#4F5BFF]/20 text-[#4F5BFF] font-semibold px-6 py-2.5 rounded-full transition-all text-sm border border-[#4F5BFF]/20"
                    >
                        View My Projects &rarr;
                    </a>
                </div>
            </div>

            <!-- Profile image -->
            <div class="lg:col-span-5 flex justify-center relative">
                <div class="bg-white p-4 pb-12 rounded-2xl shadow-xl border border-slate-200 rotate-[1.5deg] hover:rotate-0 transition-transform duration-300 max-w-sm w-full relative">
                    <div class="absolute -top-6 -left-6 w-16 h-16 bg-white/85 backdrop-blur border border-slate-200 rounded-2xl shadow-md p-2 flex items-center justify-center text-xs font-bold text-slate-400">
                        4.0
                    </div>

                    <img
                        src="{{ asset('Murad1.jpeg') }}"
                        alt="Murad Hajjaj, Full-Stack and Laravel Developer"
                        loading="lazy"
                        class="w-full h-[28rem] object-cover rounded-xl"
                    >

                    <div class="absolute bottom-4 left-6 text-slate-600 font-casual text-2xl">
                        Murad Hajjaj
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="grid grid-cols-1 sm:grid-cols-[1.4fr_1fr] gap-4">
            <div class="bg-[#4F5BFF] rounded-3xl p-8 text-white shadow-lg shadow-[#4F5BFF]/20 flex flex-col justify-center">
                <span class="text-4xl md:text-5xl font-heading">99%</span>
                <span class="text-sm text-white/85 mt-2">API Uptime &amp; Reliability</span>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-1 gap-4">
                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                    <span class="text-2xl font-heading text-slate-900">2+</span>
                    <p class="text-xs text-slate-500 mt-1">Years of hands-on experience</p>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                    <span class="text-2xl font-heading text-slate-900">6+</span>
                    <p class="text-xs text-slate-500 mt-1">Major projects shipped</p>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="max-w-6xl mx-auto px-6 pt-12 pb-28 text-center text-slate-400 text-xs">
        <p>&copy; 2026 Murad Hajjaj. Built with Laravel 12 &amp; Tailwind CSS.</p>
    </footer>

    <!-- Floating Navigation -->
    <nav class="fixed bottom-6 left-1/2 -translate-x-1/2 z-40 bg-white/80 backdrop-blur-md border border-slate-200/80 px-4 py-3 rounded-full shadow-2xl flex items-center gap-2 sm:gap-4" aria-label="Main navigation">
        <a
            href="{{ url('/') }}"
            class="p-3 text-[#4F5BFF] bg-slate-100 rounded-full transition-all"
            title="Home"
            aria-label="Go to Home page"
            aria-current="page"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
        </a>

        <a
            href="{{ route('experience') }}"
            class="p-3 text-slate-600 hover:text-[#4F5BFF] hover:bg-slate-100 rounded-full transition-all"
            title="Experience"
            aria-label="Go to Experience page"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7h-4V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2H4a2 2 0 00-2 2v9a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2zm-8 5h.01M10 7h4"/>
            </svg>
        </a>

        <a
            href="{{ route('about') }}"
            class="p-3 text-slate-600 hover:text-[#4F5BFF] hover:bg-slate-100 rounded-full transition-all"
            title="About"
            aria-label="Go to About page"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
        </a>

        <a
            href="{{ route('projects') }}"
            class="p-3 text-slate-600 hover:text-[#4F5BFF] hover:bg-slate-100 rounded-full transition-all"
            title="Projects"
            aria-label="Go to Projects page"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
            </svg>
        </a>

        <button
            @click="contactModal = true"
            class="p-3 text-slate-600 hover:text-[#4F5BFF] hover:bg-slate-100 rounded-full transition-all"
            title="Contact"
            aria-label="Open contact form"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
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
        <div
            @click.away="contactModal = false"
            class="bg-white rounded-3xl shadow-2xl border border-slate-200 w-full max-w-lg p-6 md:p-8 relative space-y-6"
            x-data="{
                loading: false,
                responseMessage: '',
                isError: false,
                submitForm() {
                    this.loading = true;
                    this.responseMessage = '';

                    const formData = {
                        name: document.getElementById('cf-name').value,
                        email: document.getElementById('cf-email').value,
                        message: document.getElementById('cf-message').value,
                        website_url: document.getElementById('website_url').value
                    };

                    fetch('/api/contact', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify(formData)
                    })
                    .then(async res => {
                        const data = await res.json();
                        this.loading = false;
                        if (res.ok) {
                            this.isError = false;
                            this.responseMessage = data.message || 'تم إرسال رسالتك بنجاح!';
                            document.getElementById('apiContactForm').reset();
                        } else {
                            this.isError = true;
                            this.responseMessage = data.message || 'حدث خطأ في التحقق من البيانات.';
                        }
                    })
                    .catch(err => {
                        this.loading = false;
                        this.isError = true;
                        this.responseMessage = 'تعذر الاتصال بالخادم، يرجى المحاولة لاحقاً.';
                    });
                }
            }"
        >
            <button
                @click="contactModal = false"
                class="absolute top-6 right-6 w-9 h-9 bg-slate-100 hover:bg-slate-200 rounded-full flex items-center justify-center text-slate-500 transition-colors"
                title="Close"
                aria-label="Close contact form"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <div>
                <h3 id="contact-modal-title" class="text-2xl font-black text-slate-900">Send a Message</h3>
                <p class="text-xs text-slate-500 mt-1">We typically reply within a few hours.</p>
            </div>

            <!-- مكان عرض رسائل النجاح أو الأخطاء الخاصة بالـ API -->
            <template x-if="responseMessage">
                <div :class="isError ? 'bg-red-50 border-red-200 text-red-700' : 'bg-emerald-50 border-emerald-200 text-emerald-700'" class="border text-xs font-medium p-3.5 rounded-2xl flex items-center gap-2">
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="isError ? 'M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z' : 'M5 13l4 4L19 7'"/>
                    </svg>
                    <span x-text="responseMessage"></span>
                </div>
            </template>

            <div class="bg-slate-100 p-1.5 rounded-2xl flex items-center gap-1" role="tablist">
                <button
                    @click="activeTab = 'whatsapp'"
                    :class="activeTab === 'whatsapp' ? 'bg-white text-slate-900 shadow-sm font-bold' : 'text-slate-500 font-medium'"
                    class="flex-1 py-2.5 rounded-xl text-xs flex items-center justify-center gap-2 transition-all"
                    role="tab"
                    :aria-selected="activeTab === 'whatsapp'"
                >
                    <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    <span>WhatsApp</span>
                </button>

                <button
                    @click="activeTab = 'email'"
                    :class="activeTab === 'email' ? 'bg-white text-slate-900 shadow-sm font-bold' : 'text-slate-500 font-medium'"
                    class="flex-1 py-2.5 rounded-xl text-xs flex items-center justify-center gap-2 transition-all"
                    role="tab"
                    :aria-selected="activeTab === 'email'"
                >
                    <svg class="w-4 h-4 text-[#4F5BFF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>Email (API)</span>
                </button>
            </div>

            <form @submit.prevent="submitForm" class="space-y-4" id="apiContactForm">
                
                <!-- حقل Honeypot المخفي لحماية البوتات والسبام -->
                <input type="text" name="website_url" id="website_url" style="display:none;" autocomplete="off">

                <div>
                    <label for="cf-name" class="block text-xs font-bold text-slate-700 mb-1">Name *</label>
                    <input
                        type="text"
                        name="name"
                        id="cf-name"
                        placeholder="Full Name"
                        required
                        class="w-full bg-[#F4F5FA] border border-slate-200 rounded-2xl px-4 py-3 text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#4F5BFF]"
                    >
                </div>

                <div>
                    <label for="cf-email" class="block text-xs font-bold text-slate-700 mb-1">Email Address *</label>
                    <input
                        type="email"
                        name="email"
                        id="cf-email"
                        placeholder="name@example.com"
                        required
                        class="w-full bg-[#F4F5FA] border border-slate-200 rounded-2xl px-4 py-3 text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#4F5BFF]"
                    >
                </div>

                <div>
                    <label for="cf-phone" class="block text-xs font-bold text-slate-700 mb-1">Phone Number (Optional for WhatsApp)</label>
                    <div class="flex items-stretch bg-[#F4F5FA] border border-slate-200 rounded-2xl overflow-hidden focus-within:border-[#4F5BFF]">
                        <span class="px-3 flex items-center text-xs font-bold text-slate-500 bg-slate-100 border-l border-slate-200">
                            +972
                        </span>

                        <input
                            type="tel"
                            name="phone"
                            id="cf-phone"
                            placeholder="59 XXX XXXX"
                            class="flex-1 bg-transparent px-4 py-3 text-xs text-slate-900 placeholder-slate-400 focus:outline-none"
                        >
                    </div>
                </div>

                <div>
                    <label for="cf-message" class="block text-xs font-bold text-slate-700 mb-1">Message * (Min 10 chars)</label>
                    <textarea
                        name="message"
                        id="cf-message"
                        rows="3"
                        placeholder="How can I help you?"
                        required
                        class="w-full bg-[#F4F5FA] border border-slate-200 rounded-2xl px-4 py-3 text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#4F5BFF]"
                    ></textarea>
                </div>

                <div class="pt-2 flex flex-col sm:flex-row items-center gap-3">
                    <button
                        type="button"
                        x-show="activeTab === 'whatsapp'"
                        @click="
                            const name = document.getElementById('cf-name').value || 'there';
                            const phone = document.getElementById('cf-phone').value || '';
                            const message = document.getElementById('cf-message').value || '';
                            const text = encodeURIComponent(`Hi Murad, I'm ${name} (+972${phone}). ${message}`);
                            window.open(`https://wa.me/972595321243?text=${text}`, '_blank');
                        "
                        class="w-full sm:flex-1 bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3.5 px-6 rounded-2xl transition-all shadow-lg shadow-emerald-600/20 text-xs"
                    >
                        Send via WhatsApp
                    </button>

                    <button
                        type="submit"
                        x-show="activeTab === 'email'"
                        :disabled="loading"
                        class="w-full sm:flex-1 bg-[#4F5BFF] hover:bg-[#3d48e0] text-white font-bold py-3.5 px-6 rounded-2xl transition-all shadow-lg shadow-[#4F5BFF]/25 text-xs flex items-center justify-center gap-2"
                    >
                        <span x-show="loading" class="w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
                        <span x-text="loading ? 'Sending...' : 'Send Message'">Send Message</span>
                    </button>

                    <a
                        href="{{ asset('cv/murad-hajjaj-cv.pdf') }}"
                        download
                        class="w-full sm:w-auto bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 font-bold py-3.5 px-6 rounded-2xl transition-all text-xs text-center"
                    >
                        Download CV
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>