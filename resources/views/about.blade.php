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
        tailwind.config = {
            darkMode: 'class'
        };

        if (
            localStorage.getItem('theme') === 'dark' ||
            (
                !localStorage.getItem('theme') &&
                window.matchMedia('(prefers-color-scheme: dark)').matches
            )
        ) {
            document.documentElement.classList.add('dark');
        }
    </script>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Caveat:wght@700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet"
    >

    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .font-heading {
            font-family: 'Archivo Black', sans-serif;
        }

        .font-casual {
            font-family: 'Caveat', cursive;
        }

        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        *,
        *::before,
        *::after {
            transition-property: background-color, border-color, color, box-shadow;
            transition-duration: 0.25s;
            transition-timing-function: ease;
        }

        .no-transition *,
        .no-transition *::before,
        .no-transition *::after {
            transition: none !important;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 999px;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #334155;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #4F5BFF;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body
    x-data="{
        contactModal: false,
        activeTab: 'whatsapp',
        darkMode: false,

        init() {
            this.darkMode =
                localStorage.getItem('theme') === 'dark' ||
                (
                    !localStorage.getItem('theme') &&
                    window.matchMedia('(prefers-color-scheme: dark)').matches
                );

            this.applyTheme();

            this.$watch('darkMode', () => {
                this.applyTheme();
            });
        },

        applyTheme() {
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }
        },

        toggleTheme() {
            this.darkMode = !this.darkMode;
        }
    }"
    @keydown.escape.window="contactModal = false"
    class="min-h-screen bg-[#F4F5FA] dark:bg-[#090B10] text-[#0F1115] dark:text-slate-100 antialiased selection:bg-[#4F5BFF] selection:text-white"
>

    <header class="border-b border-black/5 dark:border-white/10 bg-white/70 dark:bg-[#0D1017]/80 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-5 flex items-center justify-between">

            <a
                href="{{ url('/') }}"
                class="font-heading text-xl tracking-tight hover:text-[#4F5BFF]"
            >
                MH.
            </a>

            <div class="hidden md:flex items-center gap-5 text-sm font-medium text-slate-600 dark:text-slate-300">
                <a
                    href="mailto:hello@muradhajjaj.dev"
                    class="hover:text-[#4F5BFF]"
                >
                    Email
                </a>

                <a
                    href="#"
                    class="hover:text-[#4F5BFF]"
                >
                    YouTube
                </a>

                <a
                    href="#"
                    class="hover:text-[#4F5BFF]"
                >
                    GitHub
                </a>

                <a
                    href="#"
                    class="hover:text-[#4F5BFF]"
                >
                    Mostaql
                </a>
            </div>

            <div class="flex items-center gap-3">
                <span class="hidden sm:flex items-center gap-2 text-xs font-semibold text-emerald-600 dark:text-emerald-400">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Available for new projects
                </span>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 lg:px-10 py-12 lg:py-20">

        <a
            href="{{ url('/') }}"
            class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 dark:text-slate-400 hover:text-[#4F5BFF] mb-12"
        >
            <svg
                class="w-4 h-4"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"
                />
            </svg>
            Back to Home
        </a>

        <section class="grid lg:grid-cols-[1.1fr_0.9fr] gap-12 lg:gap-20 items-start">

            <div>
                <p class="font-casual text-3xl text-[#4F5BFF] mb-3">
                    Get to know
                </p>

                <h1 class="font-heading text-5xl md:text-7xl leading-[0.95] tracking-tight mb-8">
                    About<br>
                    <span class="text-[#4F5BFF]">Me.</span>
                </h1>

                <p class="text-lg md:text-xl leading-relaxed text-slate-600 dark:text-slate-300 max-w-2xl">
                    I'm Murad Hajjaj, a Software & Computer Engineer focused on
                    building reliable backend systems, RESTful APIs, and modern
                    full-stack web applications.
                </p>

                <div class="mt-10 grid sm:grid-cols-3 gap-4">

                    <div class="rounded-2xl border border-black/5 dark:border-white/10 bg-white dark:bg-[#11151D] p-6">
                        <div class="font-heading text-4xl">
                            99<span class="text-[#4F5BFF]">%</span>
                        </div>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mt-2">
                            Data accuracy
                        </p>
                    </div>

                    <div class="rounded-2xl border border-black/5 dark:border-white/10 bg-white dark:bg-[#11151D] p-6">
                        <div class="font-heading text-4xl">
                            2<span class="text-[#4F5BFF]">+</span>
                        </div>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mt-2">
                            Years experience
                        </p>
                    </div>

                    <div class="rounded-2xl border border-black/5 dark:border-white/10 bg-white dark:bg-[#11151D] p-6">
                        <div class="font-heading text-4xl">
                            6<span class="text-[#4F5BFF]">+</span>
                        </div>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mt-2">
                            Projects
                        </p>
                    </div>

                </div>
            </div>

            <div class="space-y-6">

                <div class="rounded-3xl border border-black/5 dark:border-white/10 bg-white dark:bg-[#11151D] p-8 shadow-sm">

                    <p class="text-xs uppercase tracking-[0.2em] font-bold text-[#4F5BFF] mb-4">
                        Positioning
                    </p>

                    <h2 class="font-heading text-2xl mb-4">
                        Backend-focused developer
                    </h2>

                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">
                        I enjoy designing clean application architecture,
                        connecting services through APIs, working with databases,
                        and turning complex requirements into maintainable systems.
                    </p>

                </div>

                <div class="rounded-3xl bg-[#0F1115] dark:bg-[#151A24] text-white p-8 overflow-hidden">

                    <div class="flex items-center gap-2 mb-6">
                        <span class="w-3 h-3 rounded-full bg-red-400"></span>
                        <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                        <span class="w-3 h-3 rounded-full bg-green-400"></span>
                    </div>

                    <div class="font-mono text-sm leading-7 text-slate-300">
                        <div>
                            <span class="text-purple-400">const</span>
                            developer =
                            <span class="text-emerald-400">{</span>
                        </div>

                        <div class="pl-5">
                            name:
                            <span class="text-amber-300">'Murad Hajjaj'</span>,
                        </div>

                        <div class="pl-5">
                            focus:
                            <span class="text-amber-300">'Backend & APIs'</span>,
                        </div>

                        <div class="pl-5">
                            stack:
                            <span class="text-amber-300">'Laravel + Node.js'</span>,
                        </div>

                        <div class="pl-5">
                            mindset:
                            <span class="text-amber-300">'Build. Learn. Improve.'</span>
                        </div>

                        <div>
                            <span class="text-emerald-400">}</span>;
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section class="mt-24">

            <div class="max-w-2xl mb-10">
                <p class="font-casual text-3xl text-[#4F5BFF]">
                    Who I am
                </p>

                <h2 class="font-heading text-4xl md:text-5xl mt-2">
                    Engineering with purpose.
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8">

                <div class="rounded-3xl border border-black/5 dark:border-white/10 bg-white dark:bg-[#11151D] p-8">
                    <p class="text-slate-600 dark:text-slate-300 leading-8">
                        My background combines software engineering, information
                        technology, data management, and field data collection.
                        This combination helps me understand both the technical
                        side of systems and the real-world problems they need to solve.
                    </p>
                </div>

                <div class="rounded-3xl border border-black/5 dark:border-white/10 bg-white dark:bg-[#11151D] p-8">
                    <p class="text-slate-600 dark:text-slate-300 leading-8">
                        I care about clean code, structured data, security,
                        performance, and creating products that are simple to use
                        while remaining reliable and scalable.
                    </p>
                </div>

            </div>

        </section>

        <section class="mt-24">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-5 mb-10">

                <div>
                    <p class="font-casual text-3xl text-[#4F5BFF]">
                        Toolkit
                    </p>

                    <h2 class="font-heading text-4xl md:text-5xl mt-2">
                        Tools I work with.
                    </h2>
                </div>

                <p class="text-sm text-slate-500 dark:text-slate-400 max-w-md">
                    A practical stack focused on backend development,
                    databases, APIs, and modern web applications.
                </p>

            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

                @foreach([
                    ['Laravel', 'Backend framework'],
                    ['PHP', 'Programming language'],
                    ['Node.js', 'Runtime'],
                    ['Express.js', 'API framework'],
                    ['MongoDB', 'Database'],
                    ['MySQL', 'Database'],
                    ['REST APIs', 'Architecture'],
                    ['Git', 'Version control']
                ] as $tool)

                    <div class="rounded-2xl border border-black/5 dark:border-white/10 bg-white dark:bg-[#11151D] p-6 hover:-translate-y-1 hover:shadow-lg">
                        <div class="font-bold text-lg">
                            {{ $tool[0] }}
                        </div>

                        <div class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                            {{ $tool[1] }}
                        </div>
                    </div>

                @endforeach

            </div>

        </section>

    </main>

    <nav class="fixed bottom-6 left-1/2 -translate-x-1/2 z-40">

        <div class="flex items-center gap-1 p-2 rounded-2xl border border-black/5 dark:border-white/10 bg-white/90 dark:bg-[#11151D]/95 backdrop-blur-xl shadow-xl">

            <a
                href="{{ url('/') }}"
                class="p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-white/5 hover:text-[#4F5BFF]"
                title="Home"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10h14V10"/>
                </svg>
            </a>

            <a
                href="{{ url('/experience') }}"
                class="p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-white/5 hover:text-[#4F5BFF]"
                title="Experience"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7h-4V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"/>
                </svg>
            </a>

            <a
                href="{{ url('/about') }}"
                class="p-3 rounded-xl bg-[#4F5BFF] text-white shadow-lg shadow-[#4F5BFF]/20"
                title="About"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0"/>
                </svg>
            </a>

            <a
                href="{{ url('/projects') }}"
                class="p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-white/5 hover:text-[#4F5BFF]"
                title="Projects"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
            </a>

            <button
                type="button"
                @click="darkMode = !darkMode"
                class="p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-white/5 hover:text-[#4F5BFF]"
                title="Toggle dark mode"
                aria-label="Toggle dark mode"
            >
                <svg
                    x-show="!darkMode"
                    x-cloak
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 3v2m0 14v2M4.22 4.22l1.42 1.42m12.72 12.72l1.42 1.42M3 12h2m14 0h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                    />
                </svg>

                <svg
                    x-show="darkMode"
                    x-cloak
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"
                    />
                </svg>
            </button>

            <button
                type="button"
                @click="contactModal = true"
                class="ml-1 px-4 py-3 rounded-xl bg-[#0F1115] dark:bg-white text-white dark:text-[#0F1115] text-sm font-bold hover:bg-[#4F5BFF] dark:hover:bg-[#4F5BFF] dark:hover:text-white"
            >
                Contact
            </button>

        </div>

    </nav>

    <div
        x-show="contactModal"
        x-cloak
        x-transition.opacity
        class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm flex items-center justify-center p-5"
        @click.self="contactModal = false"
    >

        <div
            x-show="contactModal"
            x-transition
            class="w-full max-w-lg rounded-3xl bg-white dark:bg-[#11151D] border border-black/5 dark:border-white/10 shadow-2xl overflow-hidden"
        >

            <div class="p-6 border-b border-black/5 dark:border-white/10 flex items-center justify-between">

                <div>
                    <h3 class="font-heading text-xl">
                        Let's work together
                    </h3>

                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                        Send me a message and I'll get back to you.
                    </p>
                </div>

                <button
                    type="button"
                    @click="contactModal = false"
                    class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/5 text-slate-500 dark:text-slate-400 hover:text-red-500"
                >
                    <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

            </div>

            <div class="p-6">

                @if(session('success'))
                    <div class="mb-5 rounded-2xl bg-emerald-50 dark:bg-emerald-500/10 border border-emerald-200 dark:border-emerald-500/20 p-4 text-sm text-emerald-700 dark:text-emerald-400">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-5 rounded-2xl bg-red-50 dark:bg-red-500/10 border border-red-200 dark:border-red-500/20 p-4 text-sm text-red-700 dark:text-red-400">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="grid grid-cols-2 gap-2 mb-6 p-1 bg-slate-100 dark:bg-white/5 rounded-xl">

                    <button
                        type="button"
                        @click="activeTab = 'whatsapp'"
                        :class="activeTab === 'whatsapp'
                            ? 'bg-white dark:bg-[#1A202C] shadow-sm text-[#0F1115] dark:text-white'
                            : 'text-slate-500 dark:text-slate-400'"
                        class="py-3 rounded-lg text-sm font-bold"
                    >
                        WhatsApp
                    </button>

                    <button
                        type="button"
                        @click="activeTab = 'email'"
                        :class="activeTab === 'email'
                            ? 'bg-white dark:bg-[#1A202C] shadow-sm text-[#0F1115] dark:text-white'
                            : 'text-slate-500 dark:text-slate-400'"
                        class="py-3 rounded-lg text-sm font-bold"
                    >
                        Email
                    </button>

                </div>

                <div x-show="activeTab === 'whatsapp'">

                    <form
                        onsubmit="sendWhatsApp(event)"
                        class="space-y-4"
                    >
                        @csrf

                        <input
                            type="text"
                            id="wa-name"
                            placeholder="Your name"
                            required
                            class="w-full rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-[#0D1017] px-4 py-3 outline-none focus:border-[#4F5BFF]"
                        >

                        <input
                            type="tel"
                            id="wa-phone"
                            placeholder="Your phone number"
                            required
                            class="w-full rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-[#0D1017] px-4 py-3 outline-none focus:border-[#4F5BFF]"
                        >

                        <textarea
                            id="wa-message"
                            rows="5"
                            placeholder="Tell me about your project..."
                            required
                            class="w-full rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-[#0D1017] px-4 py-3 outline-none focus:border-[#4F5BFF] resize-none"
                        ></textarea>

                        <button
                            type="submit"
                            class="w-full rounded-xl bg-[#25D366] text-white py-3.5 font-bold hover:opacity-90"
                        >
                            Send via WhatsApp
                        </button>

                    </form>

                </div>

                <div
                    x-show="activeTab === 'email'"
                    x-cloak
                >

                    <form
                        method="POST"
                        action="{{ route('contact.store') }}"
                        class="space-y-4"
                    >
                        @csrf

                        <input
                            type="text"
                            name="name"
                            placeholder="Your name"
                            required
                            class="w-full rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-[#0D1017] px-4 py-3 outline-none focus:border-[#4F5BFF]"
                        >

                        <input
                            type="text"
                            name="phone"
                            placeholder="Phone number"
                            class="w-full rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-[#0D1017] px-4 py-3 outline-none focus:border-[#4F5BFF]"
                        >

                        <textarea
                            name="message"
                            rows="5"
                            placeholder="Tell me about your project..."
                            required
                            class="w-full rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-[#0D1017] px-4 py-3 outline-none focus:border-[#4F5BFF] resize-none"
                        ></textarea>

                        <button
                            type="submit"
                            class="w-full rounded-xl bg-[#4F5BFF] text-white py-3.5 font-bold hover:opacity-90"
                        >
                            Send Message
                        </button>

                    </form>

                </div>

                <a
                    href="{{ asset('cv/murad-hajjaj-cv.pdf') }}"
                    download
                    class="mt-4 flex items-center justify-center gap-2 w-full rounded-xl border border-slate-200 dark:border-white/10 py-3.5 text-sm font-bold hover:bg-slate-50 dark:hover:bg-white/5"
                >
                    Download CV
                </a>

            </div>

        </div>

    </div>

    <script>
        function sendWhatsApp(event) {
            event.preventDefault();

            const name = document.getElementById('wa-name').value.trim();
            const phone = document.getElementById('wa-phone').value.trim();
            const message = document.getElementById('wa-message').value.trim();

            const text =
                `Hello Murad,%0A%0A` +
                `Name: ${encodeURIComponent(name)}%0A` +
                `Phone: ${encodeURIComponent(phone)}%0A%0A` +
                `${encodeURIComponent(message)}`;

            const whatsappNumber = '970XXXXXXXXX';

            window.open(
                `https://wa.me/${whatsappNumber}?text=${text}`,
                '_blank'
            );
        }
    </script>

</body>
</html>