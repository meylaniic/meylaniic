<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portofolio Meylani Cahya Ilahi — Information Technology, Quality Assurance & Software Testing.">
    <title>Portofolio — Meylani Cahya Ilahi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

    <header class="fixed inset-x-0 top-0 z-40 border-b border-sky bg-white/85 backdrop-blur">
        <nav class="mx-auto flex h-[72px] max-w-6xl items-center justify-between px-5">
            <a href="#home" class="text-2xl font-bold tracking-wide text-azure">
                Meylani's<span class="text-line">.</span>
            </a>

            <div id="nav-menu" class="hidden absolute top-[72px] left-0 right-0 flex-col gap-1 border-b border-sky bg-white/95 p-4 backdrop-blur md:static md:flex md:flex-row md:items-center md:gap-6 md:border-0 md:bg-transparent md:p-0">
                @foreach ([
                    'Home' => '#home',
                    'About' => '#about',
                    'Education' => '#education',
                    'Experience' => '#experience',
                    'Organization' => '#organization',
                    'Projects' => '#projects',
                    'Contact' => '#contact',
                ] as $label => $href)
                    <a href="{{ $href }}"
                       class="rounded-full px-3 py-2 text-sm font-bold tracking-wide text-ink-deep transition hover:bg-sky hover:text-azure md:px-2 md:py-1">
                        {{ $label }}
                    </a>
                @endforeach
            </div>

            <button id="menu-btn" aria-label="Buka menu" aria-expanded="false"
                    class="grid h-10 w-10 place-items-center rounded-full bg-sky text-azure md:hidden">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                    <path d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
            </button>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-paper py-8 text-center">
        <p class="text-sm font-bold tracking-widest text-azure uppercase">Designed &amp; Developed by Meylani Cahya Ilahi</p>
        <p class="mt-1 text-xs text-ink/70">&copy; {{ date('Y') }} All Rights Reserved</p>
    </footer>

    {{-- Lightbox --}}
    <div id="lightbox" class="hidden-box invisible fixed inset-0 z-50 grid place-items-center bg-[#27465e]/80 p-6 backdrop-blur-sm">
        <button id="lightbox-close" aria-label="Tutup"
                class="absolute right-5 top-5 grid h-11 w-11 place-items-center rounded-full bg-white text-ink-deep shadow-lg transition hover:scale-110">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 5l14 14M19 5L5 19"/></svg>
        </button>
        <figure class="max-h-full max-w-5xl overflow-auto">
            <img id="lightbox-img" src="" alt="" class="mx-auto max-h-[80vh] w-auto rounded-2xl shadow-2xl">
            <figcaption id="lightbox-caption" class="mt-3 text-center font-body text-sm font-bold text-white/90"></figcaption>
        </figure>
    </div>

    {{-- Back to top --}}
    <button id="back-to-top" aria-label="Kembali ke atas"
            class="is-hidden fixed bottom-6 right-6 z-40 grid h-12 w-12 place-items-center rounded-full bg-azure text-white shadow-lg transition hover:-translate-y-1 hover:bg-ink-deep">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
    </button>

</body>
</html>
