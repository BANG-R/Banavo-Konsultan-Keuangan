@extends('layouts.app')

@section('title', 'Tim Eksekutif | Banavo Financial Advisory')

@section('content')
    <section class="max-w-[1280px] mx-auto px-6 py-20 reveal">
        <div class="text-center mb-16">
            <span class="text-secondary text-label-md uppercase tracking-[0.2em] block mb-4 font-bold">Tim Eksekutif</span>
            <h1 class="font-headline text-headline-lg text-text-primary">Keahlian Tanpa Kompromi</h1>
            <p class="text-body-lg text-text-secondary mt-6 max-w-2xl mx-auto">Dipimpin oleh para veteran industri keuangan dengan rekam jejak puluhan tahun dalam menangani transaksi bernilai tinggi dan tantangan regulasi kompleks.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Team Member 1 --}}
            <div class="bg-surface-card rounded-xl border border-outline-variant/10 overflow-hidden group">
                <div class="aspect-square relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1374&auto=format&fit=crop" alt="CEO" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <h3 class="font-headline text-headline-md text-text-primary mb-1">Budi Santoso</h3>
                    <p class="text-secondary font-bold text-label-sm uppercase tracking-widest mb-4">Managing Partner & CEO</p>
                    <p class="text-text-secondary text-body-md">20+ tahun pengalaman di bidang investment banking dan restrukturisasi utang korporasi.</p>
                </div>
            </div>

            {{-- Team Member 2 --}}
            <div class="bg-surface-card rounded-xl border border-outline-variant/10 overflow-hidden group">
                <div class="aspect-square relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1376&auto=format&fit=crop" alt="CFO" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <h3 class="font-headline text-headline-md text-text-primary mb-1">Sari Indah</h3>
                    <p class="text-secondary font-bold text-label-sm uppercase tracking-widest mb-4">Partner - Tax Strategy</p>
                    <p class="text-text-secondary text-body-md">Mantan direktur pajak di Big 4 dengan spesialisasi litigasi pajak dan transfer pricing.</p>
                </div>
            </div>

            {{-- Team Member 3 --}}
            <div class="bg-surface-card rounded-xl border border-outline-variant/10 overflow-hidden group">
                <div class="aspect-square relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1374&auto=format&fit=crop" alt="Director" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <h3 class="font-headline text-headline-md text-text-primary mb-1">Hendra Wijaya</h3>
                    <p class="text-secondary font-bold text-label-sm uppercase tracking-widest mb-4">Director - GRC</p>
                    <p class="text-text-secondary text-body-md">Ahli tata kelola dan manajemen risiko dengan sertifikasi internasional (CIA, CISA).</p>
                </div>
            </div>
        </div>
    </section>
@endsection
