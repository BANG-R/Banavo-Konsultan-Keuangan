@extends('layouts.app')

@section('title', 'Banavo Financial Advisory — Akselerasi Pertumbuhan & Ketahanan Finansial')

@section('content')
    {{-- Hero Section --}}
    <section class="max-w-[1280px] mx-auto px-6 pt-20 pb-[80px] grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
        <div class="lg:col-span-7 space-y-8 animate-fade-in-up">
            <div class="inline-flex items-center gap-2 bg-surface-hover/30 px-4 py-2 rounded-full border border-primary/20">
                <span class="text-lg">🛡️</span>
                <span class="text-primary text-label-sm tracking-wider uppercase font-bold">Strategic Financial & Capital Advisory</span>
            </div>
            <h1 class="font-headline text-[48px] lg:text-[64px] leading-[1.1] text-text-primary font-extrabold tracking-tight hero-headline">
                Mengakselerasi Pertumbuhan & <span class="gradient-text">Ketahanan Finansial</span> Korporasi
            </h1>
            <p class="text-body-lg text-text-secondary max-w-xl leading-relaxed">
                Kami menghadirkan kecerdasan institusional untuk restrukturisasi modal, kepatuhan pajak strategis, dan tata kelola GRC untuk perusahaan berskala enterprise di Indonesia.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                <a href="{{ route('contact') }}" class="bg-primary text-on-primary font-bold px-8 py-4 rounded-lg flex items-center justify-center gap-2 hover:brightness-110 transition-all text-label-md">
                    MULAI KONSULTASI STRATEGIS
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
                <a href="#" class="border border-outline-variant/30 text-primary font-bold px-8 py-4 rounded-lg flex items-center justify-center gap-2 hover:bg-primary/5 transition-all text-label-md">
                    UNDUH CORPORATE PROFILE
                    <span class="material-symbols-outlined text-sm">download</span>
                </a>
            </div>
        </div>

        <div class="lg:col-span-5 relative mt-12 lg:mt-0 animate-fade-in reveal-delay-2">
            <div class="glass-milled p-8 rounded-xl relative z-10">
                <div class="flex justify-between items-center mb-10">
                    <div class="flex flex-col">
                        <span class="text-text-secondary text-label-sm uppercase tracking-widest mb-1 font-bold">System Status</span>
                        <span class="text-primary font-bold flex items-center gap-2 text-label-md">
                            <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span> Live Audit Active
                        </span>
                    </div>
                    <span class="material-symbols-outlined text-primary text-4xl">analytics</span>
                </div>
                <div class="grid grid-cols-2 gap-y-10 gap-x-6">
                    <div class="flex flex-col border-l border-primary/20 pl-4">
                        <span class="text-secondary font-headline text-headline-md font-bold" data-count="14.8" data-prefix="Rp " data-suffix=" T+">0</span>
                        <span class="text-text-secondary text-label-sm uppercase tracking-wider font-bold mt-1">Total Aset Kelolaan</span>
                    </div>
                    <div class="flex flex-col border-l border-primary/20 pl-4">
                        <span class="text-primary font-headline text-headline-md font-bold" data-count="18.4" data-suffix="%">0</span>
                        <span class="text-text-secondary text-label-sm uppercase tracking-wider font-bold mt-1">EBITDA Improvement</span>
                    </div>
                    <div class="flex flex-col border-l border-primary/20 pl-4">
                        <span class="text-primary font-headline text-headline-md font-bold" data-count="100" data-suffix="%">0</span>
                        <span class="text-text-secondary text-label-sm uppercase tracking-wider font-bold mt-1">Tax Compliance Rate</span>
                    </div>
                    <div class="flex flex-col border-l border-primary/20 pl-4">
                        <span class="text-primary font-headline text-headline-md font-bold" data-count="98.6" data-suffix="%">0</span>
                        <span class="text-text-secondary text-label-sm uppercase tracking-wider font-bold mt-1">Client Retention</span>
                    </div>
                </div>
            </div>
            {{-- Decorative Glow --}}
            <div class="absolute -top-10 -right-10 w-64 h-64 bg-primary/10 rounded-full blur-[100px] -z-0"></div>
            <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-secondary/10 rounded-full blur-[80px] -z-0"></div>
        </div>
    </section>

    {{-- Stats Ticker --}}
    <section class="border-y border-outline-variant/10 bg-surface-container-low overflow-hidden">
        <div class="max-w-[1280px] mx-auto grid grid-cols-2 lg:grid-cols-4 divide-x divide-outline-variant/20 reveal">
            <div class="py-10 px-8 text-center lg:text-left">
                <span class="block font-headline text-headline-md text-primary font-bold">150+ M&A</span>
                <span class="text-text-secondary text-label-sm uppercase tracking-widest font-bold mt-1">Transactions Closed</span>
            </div>
            <div class="py-10 px-8 text-center lg:text-left">
                <span class="block font-headline text-headline-md text-primary font-bold">Rp 3.2 T</span>
                <span class="text-text-secondary text-label-sm uppercase tracking-widest font-bold mt-1">Tax Efficiency Generated</span>
            </div>
            <div class="py-10 px-8 text-center lg:text-left">
                <span class="block font-headline text-headline-md text-primary font-bold">45+ Consultants</span>
                <span class="text-text-secondary text-label-sm uppercase tracking-widest font-bold mt-1">Sector Specialists</span>
            </div>
            <div class="py-10 px-8 text-center lg:text-left">
                <span class="block font-headline text-headline-md text-primary font-bold">ISO 27001</span>
                <span class="text-text-secondary text-label-sm uppercase tracking-widest font-bold mt-1">Data Security Certified</span>
            </div>
        </div>
    </section>

    {{-- Services Grid --}}
    <section id="services" class="max-w-[1280px] mx-auto px-6 py-[80px]">
        <div class="mb-16 reveal">
            <span class="text-secondary text-label-md uppercase tracking-[0.2em] block mb-4 font-bold">Domain Keahlian</span>
            <h2 class="font-headline text-headline-lg text-text-primary">Solusi Keuangan Terintegrasi</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Service Cards --}}
            <div class="p-8 bg-surface-card rounded-xl border border-outline-variant/10 hover:border-primary/50 transition-all duration-300 group reveal reveal-delay-1">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary">account_balance_wallet</span>
                </div>
                <h3 class="font-headline text-headline-md text-text-primary mb-4">Restrukturisasi</h3>
                <p class="text-text-secondary text-body-md mb-6 leading-relaxed">Optimasi struktur permodalan dan penataan ulang kewajiban untuk likuiditas berkelanjutan.</p>
                <a class="inline-flex items-center gap-2 text-primary font-bold text-label-md group-hover:gap-4 transition-all" href="{{ route('services.show', 'restrukturisasi') }}">Pelajari Detail <span class="material-symbols-outlined text-sm">north_east</span></a>
            </div>
            
            <div class="p-8 bg-surface-card rounded-xl border border-outline-variant/10 hover:border-primary/50 transition-all duration-300 group reveal reveal-delay-2">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary">payments</span>
                </div>
                <h3 class="font-headline text-headline-md text-text-primary mb-4">Tax Strategy</h3>
                <p class="text-text-secondary text-body-md mb-6 leading-relaxed">Mitigasi risiko perpajakan dan optimasi beban pajak sesuai koridor regulasi terbaru.</p>
                <a class="inline-flex items-center gap-2 text-primary font-bold text-label-md group-hover:gap-4 transition-all" href="{{ route('services.show', 'tax-strategy') }}">Pelajari Detail <span class="material-symbols-outlined text-sm">north_east</span></a>
            </div>

            <div class="p-8 bg-surface-card rounded-xl border border-outline-variant/10 hover:border-primary/50 transition-all duration-300 group reveal reveal-delay-3">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary">fact_check</span>
                </div>
                <h3 class="font-headline text-headline-md text-text-primary mb-4">Audit IFRS</h3>
                <p class="text-text-secondary text-body-md mb-6 leading-relaxed">Penyelarasan laporan keuangan dengan standar internasional untuk akses modal global.</p>
                <a class="inline-flex items-center gap-2 text-primary font-bold text-label-md group-hover:gap-4 transition-all" href="{{ route('services.show', 'audit-ifrs') }}">Pelajari Detail <span class="material-symbols-outlined text-sm">north_east</span></a>
            </div>

            <div class="p-8 bg-surface-card rounded-xl border border-outline-variant/10 hover:border-primary/50 transition-all duration-300 group reveal reveal-delay-1">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary">monitoring</span>
                </div>
                <h3 class="font-headline text-headline-md text-text-primary mb-4">Cash Flow</h3>
                <p class="text-text-secondary text-body-md mb-6 leading-relaxed">Manajemen arus kas presisi untuk menjamin operasional dan ekspansi tanpa hambatan.</p>
                <a class="inline-flex items-center gap-2 text-primary font-bold text-label-md group-hover:gap-4 transition-all" href="{{ route('services.show', 'cash-flow') }}">Pelajari Detail <span class="material-symbols-outlined text-sm">north_east</span></a>
            </div>

            <div class="p-8 bg-surface-card rounded-xl border border-outline-variant/10 hover:border-primary/50 transition-all duration-300 group reveal reveal-delay-2">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary">verified_user</span>
                </div>
                <h3 class="font-headline text-headline-md text-text-primary mb-4">GRC</h3>
                <p class="text-text-secondary text-body-md mb-6 leading-relaxed">Governance, Risk, and Compliance untuk membangun fondasi bisnis yang etis dan tangguh.</p>
                <a class="inline-flex items-center gap-2 text-primary font-bold text-label-md group-hover:gap-4 transition-all" href="{{ route('services.show', 'grc') }}">Pelajari Detail <span class="material-symbols-outlined text-sm">north_east</span></a>
            </div>

            <div class="p-8 bg-surface-card rounded-xl border border-outline-variant/10 hover:border-primary/50 transition-all duration-300 group reveal reveal-delay-3">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary">person_search</span>
                </div>
                <h3 class="font-headline text-headline-md text-text-primary mb-4">Virtual CFO</h3>
                <p class="text-text-secondary text-body-md mb-6 leading-relaxed">Pendampingan direksi keuangan tingkat tinggi dengan fleksibilitas operasional penuh.</p>
                <a class="inline-flex items-center gap-2 text-primary font-bold text-label-md group-hover:gap-4 transition-all" href="{{ route('services.show', 'virtual-cfo') }}">Pelajari Detail <span class="material-symbols-outlined text-sm">north_east</span></a>
            </div>
        </div>
    </section>

    {{-- Case Studies --}}
    <section id="case-studies" class="bg-surface-container py-[80px]">
        <div class="max-w-[1280px] mx-auto px-6 reveal">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-4">
                <div>
                    <span class="text-secondary text-label-md uppercase tracking-[0.2em] block mb-4 font-bold">Studi Kasus</span>
                    <h2 class="font-headline text-headline-lg text-text-primary">Dampak Terukur Secara Riil</h2>
                </div>
                <a href="{{ route('case-studies.index') }}" class="flex items-center gap-2 text-primary font-bold text-label-md hover:underline group">
                    LIHAT SEMUA PORTOFOLIO <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_right_alt</span>
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Case 1 --}}
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-xl aspect-video mb-6 border border-outline-variant/10">
                        <img alt="Logistics Analysis" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://images.unsplash.com/photo-1553413077-190dd305871c?q=80&w=1470&auto=format&fit=crop">
                        <div class="absolute top-4 left-4 bg-secondary text-on-secondary text-[10px] font-bold px-3 py-1 rounded uppercase tracking-widest">
                            MANUFAKTUR & LOGISTIK
                        </div>
                    </div>
                    <h4 class="text-text-secondary mb-2 font-headline uppercase tracking-widest text-[10px] font-bold">PT Logistik Nusa Bangsa</h4>
                    <h3 class="font-headline text-headline-md text-text-primary mb-6 group-hover:text-primary transition-colors">Restrukturisasi Utang & Optimasi Modal Kerja</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-surface-card p-5 rounded-lg border border-outline-variant/10">
                            <span class="text-primary font-headline text-headline-md block font-bold">32% Bunga</span>
                            <span class="text-text-secondary text-label-sm font-bold uppercase tracking-wider mt-1 block">Reduksi Beban</span>
                        </div>
                        <div class="bg-surface-card p-5 rounded-lg border border-outline-variant/10">
                            <span class="text-primary font-headline text-headline-md block font-bold">Rp 140 M</span>
                            <span class="text-text-secondary text-label-sm font-bold uppercase tracking-wider mt-1 block">Working Capital</span>
                        </div>
                    </div>
                </div>

                {{-- Case 2 --}}
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-xl aspect-video mb-6 border border-outline-variant/10">
                        <img alt="Corporate Headquarters" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1470&auto=format&fit=crop">
                        <div class="absolute top-4 left-4 bg-secondary text-on-secondary text-[10px] font-bold px-3 py-1 rounded uppercase tracking-widest">
                            HOLDING RETAIL
                        </div>
                    </div>
                    <h4 class="text-text-secondary mb-2 font-headline uppercase tracking-widest text-[10px] font-bold">PT Megah Retailindo</h4>
                    <h3 class="font-headline text-headline-md text-text-primary mb-6 group-hover:text-primary transition-colors">Transformasi Perpajakan & Kepatuhan GRC</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-surface-card p-5 rounded-lg border border-outline-variant/10">
                            <span class="text-primary font-headline text-headline-md block font-bold">21.5% Tax</span>
                            <span class="text-text-secondary text-label-sm font-bold uppercase tracking-wider mt-1 block">Effective Rate</span>
                        </div>
                        <div class="bg-surface-card p-5 rounded-lg border border-outline-variant/10">
                            <span class="text-primary font-headline text-headline-md block font-bold">100% Bebas</span>
                            <span class="text-text-secondary text-label-sm font-bold uppercase tracking-wider mt-1 block">Denda Pajak</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Methodology --}}
    <section id="methodology" class="max-w-[1280px] mx-auto px-6 py-[80px]">
        <div class="text-center mb-20 reveal">
            <span class="text-secondary text-label-md uppercase tracking-[0.2em] block mb-4 font-bold">Framework Kami</span>
            <h2 class="font-headline text-headline-lg text-text-primary">Metodologi Intervensi Strategis</h2>
        </div>
        <div class="relative reveal reveal-delay-2">
            {{-- Timeline Line --}}
            <div class="hidden lg:block absolute top-1/2 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/30 to-transparent"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 relative">
                {{-- Steps --}}
                <div class="text-center space-y-6">
                    <div class="w-16 h-16 rounded-full border-2 border-primary bg-background mx-auto flex items-center justify-center relative z-10 shadow-[0_0_20px_rgba(172,205,200,0.2)]">
                        <span class="font-headline text-primary text-xl font-bold">01</span>
                    </div>
                    <div>
                        <h4 class="font-headline text-headline-md text-text-primary mb-3">Diagnostic Audit</h4>
                        <p class="text-text-secondary text-body-md px-4 leading-relaxed">Identifikasi anomali data dan potensi efisiensi operasional tersembunyi.</p>
                    </div>
                </div>
                <div class="text-center space-y-6">
                    <div class="w-16 h-16 rounded-full border-2 border-primary bg-background mx-auto flex items-center justify-center relative z-10 shadow-[0_0_20px_rgba(172,205,200,0.2)]">
                        <span class="font-headline text-primary text-xl font-bold">02</span>
                    </div>
                    <div>
                        <h4 class="font-headline text-headline-md text-text-primary mb-3">Modeling</h4>
                        <p class="text-text-secondary text-body-md px-4 leading-relaxed">Simulasi skenario finansial untuk mitigasi risiko di masa depan.</p>
                    </div>
                </div>
                <div class="text-center space-y-6">
                    <div class="w-16 h-16 rounded-full border-2 border-primary bg-background mx-auto flex items-center justify-center relative z-10 shadow-[0_0_20px_rgba(172,205,200,0.2)]">
                        <span class="font-headline text-primary text-xl font-bold">03</span>
                    </div>
                    <div>
                        <h4 class="font-headline text-headline-md text-text-primary mb-3">Execution</h4>
                        <p class="text-text-secondary text-body-md px-4 leading-relaxed">Implementasi kebijakan baru dengan pengawasan tim ahli Banavo.</p>
                    </div>
                </div>
                <div class="text-center space-y-6">
                    <div class="w-16 h-16 rounded-full border-2 border-primary bg-background mx-auto flex items-center justify-center relative z-10 shadow-[0_0_20px_rgba(172,205,200,0.2)]">
                        <span class="font-headline text-primary text-xl font-bold">04</span>
                    </div>
                    <div>
                        <h4 class="font-headline text-headline-md text-text-primary mb-3">Governance</h4>
                        <p class="text-text-secondary text-body-md px-4 leading-relaxed">Pemantauan kepatuhan berkelanjutan dan pelaporan transparan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- NDA Security Banner --}}
    <section class="max-w-[1280px] mx-auto px-6 mb-[80px] reveal">
        <div class="bg-surface-card rounded-2xl p-8 lg:p-12 border border-primary/20 flex flex-col lg:flex-row justify-between items-center gap-8 relative overflow-hidden">
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 relative z-10 text-center sm:text-left">
                <div class="w-16 h-16 bg-background rounded-full flex items-center justify-center border border-primary/20 shrink-0">
                    <span class="material-symbols-outlined text-primary text-3xl">lock</span>
                </div>
                <div>
                    <h3 class="font-headline text-headline-md text-text-primary mb-2">Jaminan Kerahasiaan Data Finansial</h3>
                    <p class="text-text-secondary text-body-md">Setiap konsultasi dilindungi oleh Non-Disclosure Agreement (NDA) standar korporasi global.</p>
                </div>
            </div>
            <a href="#" class="bg-text-primary text-background font-bold px-8 py-4 rounded-lg whitespace-nowrap hover:scale-105 transition-transform active:scale-95 text-label-md relative z-10">
                MINTA TEMPLATE NDA BANAVO
            </a>
            <div class="absolute right-0 top-0 w-64 h-full bg-primary/5 blur-[80px] -z-0"></div>
        </div>
    </section>

    {{-- RFP Form Section --}}
    <section id="contact" class="max-w-[1280px] mx-auto px-6 pb-[80px]">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 reveal">
            <div class="lg:col-span-5 space-y-10">
                <div>
                    <span class="text-secondary text-label-md uppercase tracking-[0.2em] block mb-4 font-bold">Mulai Kolaborasi</span>
                    <h2 class="font-headline text-headline-lg text-text-primary">Ajukan RFP Untuk Kebutuhan Korporasi Anda</h2>
                </div>
                
                <div class="space-y-8">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-surface-container border border-outline-variant/30 flex items-center justify-center rounded shrink-0">
                            <span class="material-symbols-outlined text-primary">apartment</span>
                        </div>
                        <div>
                            <h5 class="text-text-primary font-bold text-lg mb-1">Jakarta Headquarters</h5>
                            <p class="text-text-secondary text-body-md leading-relaxed">Prosperity Tower, SCBD District 8, Lt. 12<br>Jakarta Selatan, 12190</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-surface-container border border-outline-variant/30 flex items-center justify-center rounded shrink-0">
                            <span class="material-symbols-outlined text-primary">support_agent</span>
                        </div>
                        <div>
                            <h5 class="text-text-primary font-bold text-lg mb-1">Exclusive Hotline</h5>
                            <p class="text-text-secondary text-body-md leading-relaxed font-semibold">
                                +62 21 555 8899 <span class="font-normal">(Enterprise Support)</span><br>
                                +62 811 2222 333 <span class="font-normal">(WhatsApp Advisory)</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-7 bg-surface-card p-8 lg:p-12 rounded-2xl border border-outline-variant/20 shadow-2xl reveal reveal-delay-2">
                @if(session('success'))
                    <div class="bg-primary/20 border border-primary text-primary px-6 py-4 rounded-lg mb-8">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-label-sm text-text-secondary uppercase tracking-widest font-bold" for="name">Nama Lengkap & Jabatan</label>
                            <input type="text" id="name" name="name" class="w-full bg-background border border-outline-variant/30 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all text-text-primary placeholder:text-outline/50 font-body" placeholder="Bapak/Ibu Nama - CEO" required>
                        </div>
                        <div class="space-y-2">
                            <label class="text-label-sm text-text-secondary uppercase tracking-widest font-bold" for="company">Perusahaan & Industri</label>
                            <input type="text" id="company" name="company" class="w-full bg-background border border-outline-variant/30 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all text-text-primary placeholder:text-outline/50 font-body" placeholder="PT Contoh Nama - Manufaktur" required>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-label-sm text-text-secondary uppercase tracking-widest font-bold" for="email">Email Korporat</label>
                            <input type="email" id="email" name="email" class="w-full bg-background border border-outline-variant/30 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all text-text-primary placeholder:text-outline/50 font-body" placeholder="name@company.com" required>
                        </div>
                        <div class="space-y-2">
                            <label class="text-label-sm text-text-secondary uppercase tracking-widest font-bold" for="service">Fokus Layanan</label>
                            <div class="relative">
                                <select id="service" name="service" class="w-full bg-background border border-outline-variant/30 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all text-text-primary appearance-none font-body" required>
                                    <option value="" disabled selected>Pilih Layanan</option>
                                    <option value="Restrukturisasi">Restrukturisasi & Capital Advisory</option>
                                    <option value="Tax Strategy">Tax Strategic Planning</option>
                                    <option value="Audit IFRS">Internal Audit & IFRS Compliance</option>
                                    <option value="Virtual CFO">CFO Advisory / Virtual CFO</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-text-secondary pointer-events-none">expand_more</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-label-sm text-text-secondary uppercase tracking-widest font-bold" for="message">Ringkasan Kebutuhan</label>
                        <textarea id="message" name="message" class="w-full bg-background border border-outline-variant/30 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/50 focus:border-primary outline-none transition-all text-text-primary placeholder:text-outline/50 resize-none font-body" placeholder="Jelaskan secara singkat urgensi atau tantangan finansial yang sedang dihadapi..." rows="4" required></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-primary text-on-primary font-bold py-4 rounded-lg flex items-center justify-center gap-2 hover:brightness-110 transition-all shadow-lg shadow-primary/10 text-label-md group">
                        SUBMIT REQUEST FOR PROPOSAL
                        <span class="material-symbols-outlined transition-transform group-hover:translate-x-1 group-hover:-translate-y-1">send</span>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
