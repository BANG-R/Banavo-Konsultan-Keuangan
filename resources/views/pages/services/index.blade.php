@extends('layouts.app')

@section('title', 'Layanan Kami | Banavo Financial Advisory')

@section('content')
    <section class="max-w-[1280px] mx-auto px-6 py-20 reveal">
        <div class="text-center mb-16">
            <span class="text-secondary text-label-md uppercase tracking-[0.2em] block mb-4 font-bold">Layanan Korporat</span>
            <h1 class="font-headline text-headline-lg text-text-primary">Solusi Keuangan Terintegrasi</h1>
            <p class="text-body-lg text-text-secondary mt-6 max-w-2xl mx-auto">Kami menyediakan spektrum penuh layanan advisory keuangan untuk memastikan pertumbuhan berkelanjutan dan kepatuhan absolut bagi enterprise Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Just reusing the same grid from homepage for now --}}
            <div class="p-8 bg-surface-card rounded-xl border border-outline-variant/10 hover:border-primary/50 transition-all duration-300 group">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary">account_balance_wallet</span>
                </div>
                <h3 class="font-headline text-headline-md text-text-primary mb-4">Restrukturisasi</h3>
                <p class="text-text-secondary text-body-md mb-6 leading-relaxed">Optimasi struktur permodalan dan penataan ulang kewajiban untuk likuiditas berkelanjutan.</p>
                <a class="inline-flex items-center gap-2 text-primary font-bold text-label-md group-hover:gap-4 transition-all" href="{{ route('services.show', 'restrukturisasi') }}">Pelajari Detail <span class="material-symbols-outlined text-sm">north_east</span></a>
            </div>
            
            <div class="p-8 bg-surface-card rounded-xl border border-outline-variant/10 hover:border-primary/50 transition-all duration-300 group">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary">payments</span>
                </div>
                <h3 class="font-headline text-headline-md text-text-primary mb-4">Tax Strategy</h3>
                <p class="text-text-secondary text-body-md mb-6 leading-relaxed">Mitigasi risiko perpajakan dan optimasi beban pajak sesuai koridor regulasi terbaru.</p>
                <a class="inline-flex items-center gap-2 text-primary font-bold text-label-md group-hover:gap-4 transition-all" href="{{ route('services.show', 'tax-strategy') }}">Pelajari Detail <span class="material-symbols-outlined text-sm">north_east</span></a>
            </div>

            <div class="p-8 bg-surface-card rounded-xl border border-outline-variant/10 hover:border-primary/50 transition-all duration-300 group">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary">fact_check</span>
                </div>
                <h3 class="font-headline text-headline-md text-text-primary mb-4">Audit IFRS</h3>
                <p class="text-text-secondary text-body-md mb-6 leading-relaxed">Penyelarasan laporan keuangan dengan standar internasional untuk akses modal global.</p>
                <a class="inline-flex items-center gap-2 text-primary font-bold text-label-md group-hover:gap-4 transition-all" href="{{ route('services.show', 'audit-ifrs') }}">Pelajari Detail <span class="material-symbols-outlined text-sm">north_east</span></a>
            </div>
        </div>
    </section>
@endsection
