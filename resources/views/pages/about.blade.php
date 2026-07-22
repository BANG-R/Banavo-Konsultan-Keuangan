@extends('layouts.app')

@section('title', 'Tentang Kami | Banavo Financial Advisory')

@section('content')
    <section class="max-w-[1280px] mx-auto px-6 py-20 reveal">
        <div class="text-center mb-16">
            <span class="text-secondary text-label-md uppercase tracking-[0.2em] block mb-4 font-bold">Tentang Banavo</span>
            <h1 class="font-headline text-headline-lg text-text-primary">Kecerdasan Institusional untuk Korporasi Modern</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <p class="text-body-lg text-text-secondary leading-relaxed">
                    PT Banavo Konsultan Finansial Indonesia didirikan dengan satu tujuan: memberikan advisory keuangan kelas dunia yang memadukan keahlian teknis dengan pemahaman mendalam tentang lanskap bisnis Indonesia.
                </p>
                <p class="text-body-md text-text-secondary leading-relaxed">
                    Kami tidak sekadar memberikan saran; kami menjadi mitra strategis Anda dalam merancang restrukturisasi modal, mengoptimalkan pajak, dan membangun kerangka kepatuhan yang kuat.
                </p>
            </div>
            <div class="relative rounded-2xl overflow-hidden aspect-video border border-outline-variant/20">
                <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?q=80&w=1374&auto=format&fit=crop" alt="Tim Banavo" class="w-full h-full object-cover">
            </div>
        </div>
    </section>
@endsection
