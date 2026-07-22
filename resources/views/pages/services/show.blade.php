@extends('layouts.app')

@section('title', 'Detail Layanan | Banavo Financial Advisory')

@section('content')
    <section class="max-w-[1280px] mx-auto px-6 py-20 reveal">
        <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 text-text-secondary hover:text-primary transition-colors mb-8 font-bold text-label-md">
            <span class="material-symbols-outlined">arrow_back</span> Kembali ke Layanan
        </a>
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-8 space-y-8">
                <h1 class="font-headline text-headline-lg text-text-primary capitalize">{{ str_replace('-', ' ', $slug) }}</h1>
                <div class="prose prose-invert max-w-none text-text-secondary text-body-lg leading-relaxed">
                    <p>Layanan {{ str_replace('-', ' ', $slug) }} kami dirancang untuk memberikan solusi spesifik yang dapat dieksekusi dengan presisi, memastikan bahwa setiap aspek finansial korporasi Anda telah dioptimalkan sesuai standar tertinggi.</p>
                    
                    <h3 class="font-headline text-headline-md text-text-primary mt-12 mb-6">Metodologi Kami</h3>
                    <p>Kami menggunakan pendekatan analitis mendalam yang dipadukan dengan pemahaman regulasi lokal dan internasional. Tim ahli kami akan melakukan assessment komprehensif sebelum merumuskan strategi intervensi.</p>
                </div>
            </div>
            
            <div class="lg:col-span-4">
                <div class="bg-surface-card p-8 rounded-xl border border-outline-variant/20 sticky top-32">
                    <h4 class="font-headline text-headline-md text-text-primary mb-6">Jadwalkan Konsultasi</h4>
                    <p class="text-text-secondary text-body-md mb-8">Diskusikan kebutuhan {{ str_replace('-', ' ', $slug) }} korporasi Anda dengan tim ahli kami.</p>
                    <a href="{{ route('contact') }}" class="w-full bg-primary text-on-primary font-bold py-4 rounded-lg flex items-center justify-center gap-2 hover:brightness-110 transition-all text-label-md">
                        Minta Proposal
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
