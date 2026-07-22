<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'PT Banavo Konsultan Finansial Indonesia — Mitra terpercaya untuk intelijen finansial institusional dan tata kelola korporasi modern.')">
    <meta name="keywords" content="konsultan keuangan, financial advisory, restrukturisasi, tax strategy, audit IFRS, GRC, virtual CFO, Jakarta">
    <meta name="author" content="Banavo Financial Advisory">
    <meta name="robots" content="index, follow">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title', 'Banavo Financial Advisory')">
    <meta property="og:description" content="@yield('meta_description', 'Konsultan Keuangan Enterprise Indonesia')">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">

    <title>@yield('title', 'Banavo Financial Advisory') — Konsultan Keuangan Enterprise</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.jpg') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Material Symbols --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=block" rel="stylesheet">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-background text-text-primary font-body antialiased overflow-x-hidden">

    {{-- Top Compliance Bar --}}
    <aside class="bg-surface-container-lowest py-2 border-b border-outline-variant/10">
        <div class="max-w-[1280px] mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <span class="bg-primary/10 text-primary text-[10px] md:text-label-sm font-bold px-3 py-1 rounded-full uppercase tracking-widest border border-primary/20">
                    OJK & KEMENKEU COMPLIANT
                </span>
            </div>
            <div class="hidden md:flex gap-6 items-center text-label-sm text-text-secondary">
                <span class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">location_on</span>
                    SCBD District 8, Jakarta
                </span>
                <span class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">phone</span>
                    +62 21 555 8899
                </span>
            </div>
        </div>
    </aside>

    {{-- Header Navigation --}}
    <header id="main-nav" class="sticky top-0 z-50 glass-nav border-b border-outline-variant/10 transition-shadow duration-300">
        <nav class="max-w-[1280px] mx-auto px-6 h-20 flex justify-between items-center">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <img alt="Banavo Logo" class="w-10 h-10 rounded-full object-cover border border-primary/30 group-hover:border-primary transition-colors" src="{{ asset('images/logo.jpg') }}">
                <span class="text-headline-md font-headline font-bold tracking-tight text-text-primary">BANAVO</span>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center gap-8">
                <a class="nav-link text-label-md font-semibold transition-colors hover:text-primary pb-1 {{ request()->routeIs('home') ? 'text-primary border-b-2 border-primary font-bold' : 'text-text-secondary' }}" href="{{ route('home') }}" data-section="home">Layanan Korporat</a>
                <a class="nav-link text-label-md font-semibold transition-colors hover:text-primary pb-1 {{ request()->routeIs('services.*') ? 'text-primary border-b-2 border-primary font-bold' : 'text-text-secondary' }}" href="{{ route('services.index') }}">Metodologi</a>
                <a class="nav-link text-label-md font-semibold transition-colors hover:text-primary pb-1 {{ request()->routeIs('case-studies.*') ? 'text-primary border-b-2 border-primary font-bold' : 'text-text-secondary' }}" href="{{ route('case-studies.index') }}">Studi Kasus</a>
                <a class="nav-link text-label-md font-semibold transition-colors hover:text-primary pb-1 {{ request()->routeIs('team') ? 'text-primary border-b-2 border-primary font-bold' : 'text-text-secondary' }}" href="{{ route('team') }}">Tim Eksekutif</a>
                <a class="nav-link text-label-md font-semibold transition-colors hover:text-primary pb-1 {{ request()->routeIs('blog.*') ? 'text-primary border-b-2 border-primary font-bold' : 'text-text-secondary' }}" href="{{ route('blog.index') }}">Wawasan CFO</a>
            </div>

            <div class="flex items-center gap-4">
                {{-- CTA Button --}}
                <a href="{{ route('contact') }}" class="hidden sm:inline-flex bg-primary text-on-primary font-bold px-6 py-3 rounded-lg text-label-md hover:opacity-90 transition-all active:scale-95">
                    JADWALKAN DISCOVERY CALL
                </a>

                {{-- Mobile Menu Toggle --}}
                <button id="mobile-menu-toggle" class="lg:hidden w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant/30 hover:bg-surface-hover transition-colors">
                    <span id="menu-icon" class="material-symbols-outlined text-primary">menu</span>
                </button>
            </div>
        </nav>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="lg:hidden max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out border-t border-outline-variant/10">
            <div class="max-w-[1280px] mx-auto px-6 py-6 space-y-4">
                <a class="block py-3 text-body-lg font-semibold text-text-secondary hover:text-primary transition-colors border-b border-outline-variant/10" href="{{ route('home') }}">Layanan Korporat</a>
                <a class="block py-3 text-body-lg font-semibold text-text-secondary hover:text-primary transition-colors border-b border-outline-variant/10" href="{{ route('about') }}">Tentang Kami</a>
                <a class="block py-3 text-body-lg font-semibold text-text-secondary hover:text-primary transition-colors border-b border-outline-variant/10" href="{{ route('services.index') }}">Layanan</a>
                <a class="block py-3 text-body-lg font-semibold text-text-secondary hover:text-primary transition-colors border-b border-outline-variant/10" href="{{ route('case-studies.index') }}">Studi Kasus</a>
                <a class="block py-3 text-body-lg font-semibold text-text-secondary hover:text-primary transition-colors border-b border-outline-variant/10" href="{{ route('team') }}">Tim Eksekutif</a>
                <a class="block py-3 text-body-lg font-semibold text-text-secondary hover:text-primary transition-colors border-b border-outline-variant/10" href="{{ route('blog.index') }}">Wawasan CFO</a>
                <a class="block py-3 text-body-lg font-semibold text-text-secondary hover:text-primary transition-colors" href="{{ route('contact') }}">Kontak</a>
                <a href="{{ route('contact') }}" class="block w-full bg-primary text-on-primary font-bold px-6 py-4 rounded-lg text-label-md text-center hover:opacity-90 transition-all mt-4">
                    JADWALKAN DISCOVERY CALL
                </a>
            </div>
        </div>
    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    @stack('scripts')
</body>
</html>
