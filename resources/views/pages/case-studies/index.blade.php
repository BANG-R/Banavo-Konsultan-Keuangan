@extends('layouts.app')

@section('title', 'Studi Kasus | Banavo Financial Advisory')

@section('content')
    <section class="max-w-[1280px] mx-auto px-6 py-20 reveal">
        <div class="text-center mb-16">
            <span class="text-secondary text-label-md uppercase tracking-[0.2em] block mb-4 font-bold">Studi Kasus</span>
            <h1 class="font-headline text-headline-lg text-text-primary">Dampak Terukur Secara Riil</h1>
            <p class="text-body-lg text-text-secondary mt-6 max-w-2xl mx-auto">Lihat bagaimana kami mentransformasi tantangan finansial kompleks menjadi pertumbuhan berkelanjutan bagi klien enterprise kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- Reusing case study card from home --}}
            <a href="{{ route('case-studies.show', 'pt-logistik') }}" class="group block cursor-pointer bg-surface-card rounded-xl border border-outline-variant/10 hover:border-primary/50 transition-all duration-300 overflow-hidden">
                <div class="relative aspect-video">
                    <img alt="Logistics Analysis" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://images.unsplash.com/photo-1553413077-190dd305871c?q=80&w=1470&auto=format&fit=crop">
                    <div class="absolute top-4 left-4 bg-secondary text-on-secondary text-[10px] font-bold px-3 py-1 rounded uppercase tracking-widest">
                        MANUFAKTUR & LOGISTIK
                    </div>
                </div>
                <div class="p-8">
                    <h4 class="text-text-secondary mb-2 font-headline uppercase tracking-widest text-[10px] font-bold">PT Logistik Nusa Bangsa</h4>
                    <h3 class="font-headline text-headline-md text-text-primary mb-6 group-hover:text-primary transition-colors">Restrukturisasi Utang & Optimasi Modal Kerja</h3>
                    <div class="flex items-center gap-2 text-primary font-bold text-label-md">
                        Baca Selengkapnya <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('case-studies.show', 'pt-megah') }}" class="group block cursor-pointer bg-surface-card rounded-xl border border-outline-variant/10 hover:border-primary/50 transition-all duration-300 overflow-hidden">
                <div class="relative aspect-video">
                    <img alt="Retail" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1470&auto=format&fit=crop">
                    <div class="absolute top-4 left-4 bg-secondary text-on-secondary text-[10px] font-bold px-3 py-1 rounded uppercase tracking-widest">
                        HOLDING RETAIL
                    </div>
                </div>
                <div class="p-8">
                    <h4 class="text-text-secondary mb-2 font-headline uppercase tracking-widest text-[10px] font-bold">PT Megah Retailindo</h4>
                    <h3 class="font-headline text-headline-md text-text-primary mb-6 group-hover:text-primary transition-colors">Transformasi Perpajakan & Kepatuhan GRC</h3>
                    <div class="flex items-center gap-2 text-primary font-bold text-label-md">
                        Baca Selengkapnya <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </div>
                </div>
            </a>
        </div>
    </section>
@endsection
