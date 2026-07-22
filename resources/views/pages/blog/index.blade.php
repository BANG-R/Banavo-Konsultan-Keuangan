@extends('layouts.app')

@section('title', 'Wawasan CFO | Banavo Financial Advisory')

@section('content')
    <section class="max-w-[1280px] mx-auto px-6 py-20 reveal">
        <div class="text-center mb-16">
            <span class="text-secondary text-label-md uppercase tracking-[0.2em] block mb-4 font-bold">Wawasan CFO</span>
            <h1 class="font-headline text-headline-lg text-text-primary">Intelijen Finansial Terkini</h1>
            <p class="text-body-lg text-text-secondary mt-6 max-w-2xl mx-auto">Analisis mendalam, tren regulasi, dan strategi korporasi yang dikurasi khusus untuk para pemimpin keuangan (C-Level).</p>
        </div>

        {{-- Featured Article --}}
        <a href="{{ route('blog.show', 'strategi-mitigasi-risiko-2027') }}" class="block mb-16 group">
            <div class="bg-surface-card rounded-2xl border border-outline-variant/10 overflow-hidden flex flex-col md:flex-row group-hover:border-primary/50 transition-all duration-300">
                <div class="w-full md:w-1/2 aspect-video md:aspect-auto relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=1470&auto=format&fit=crop" alt="Featured Article" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                    <div class="flex items-center gap-4 mb-4 text-label-sm">
                        <span class="text-secondary font-bold uppercase tracking-widest">Macroeconomics</span>
                        <span class="text-text-secondary">22 Jul 2026</span>
                    </div>
                    <h2 class="font-headline text-headline-md text-text-primary mb-6 group-hover:text-primary transition-colors">Strategi Mitigasi Risiko Menghadapi Volatilitas Pasar Global 2027</h2>
                    <p class="text-text-secondary text-body-md mb-8 line-clamp-3">Analisis komprehensif mengenai pergeseran makroekonomi yang diproyeksikan terjadi pada tahun mendatang dan bagaimana CFO dapat memposisikan struktur permodalan perusahaan untuk mengantisipasi disrupsi.</p>
                    <div class="flex items-center gap-2 text-primary font-bold text-label-md">
                        Baca Selengkapnya <span class="material-symbols-outlined text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </div>
                </div>
            </div>
        </a>

        {{-- Article Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Article 1 --}}
            <a href="{{ route('blog.show', 'dampak-ifrs-terbaru') }}" class="group block bg-surface-card rounded-xl border border-outline-variant/10 overflow-hidden hover:border-primary/50 transition-all duration-300">
                <div class="aspect-video relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1470&auto=format&fit=crop" alt="Article 1" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-3 text-[10px]">
                        <span class="text-secondary font-bold uppercase tracking-widest">Regulasi</span>
                        <span class="text-text-secondary">15 Jul 2026</span>
                    </div>
                    <h3 class="font-headline text-text-primary text-xl font-semibold mb-3 group-hover:text-primary transition-colors line-clamp-2">Dampak Standar IFRS Terbaru Terhadap Valuasi Perusahaan Publik</h3>
                    <p class="text-text-secondary text-sm line-clamp-3">Panduan praktis untuk mengukur dampak perubahan standar pelaporan keuangan terhadap rasio utang dan nilai pasar.</p>
                </div>
            </a>

            {{-- Article 2 --}}
            <a href="{{ route('blog.show', 'optimalisasi-pajak-m-a') }}" class="group block bg-surface-card rounded-xl border border-outline-variant/10 overflow-hidden hover:border-primary/50 transition-all duration-300">
                <div class="aspect-video relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1554469384-e58fac16e23a?q=80&w=1374&auto=format&fit=crop" alt="Article 2" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-3 text-[10px]">
                        <span class="text-secondary font-bold uppercase tracking-widest">Tax Strategy</span>
                        <span class="text-text-secondary">08 Jul 2026</span>
                    </div>
                    <h3 class="font-headline text-text-primary text-xl font-semibold mb-3 group-hover:text-primary transition-colors line-clamp-2">Optimalisasi Struktur Pajak dalam Transaksi M&A Lintas Negara</h3>
                    <p class="text-text-secondary text-sm line-clamp-3">Studi kasus bagaimana penataan struktur pajak yang tepat sejak fase due diligence dapat meningkatkan nilai transaksi M&A hingga 15%.</p>
                </div>
            </a>

            {{-- Article 3 --}}
            <a href="{{ route('blog.show', 'esg-cost-of-capital') }}" class="group block bg-surface-card rounded-xl border border-outline-variant/10 overflow-hidden hover:border-primary/50 transition-all duration-300">
                <div class="aspect-video relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1469&auto=format&fit=crop" alt="Article 3" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-3 text-[10px]">
                        <span class="text-secondary font-bold uppercase tracking-widest">ESG & Governance</span>
                        <span class="text-text-secondary">01 Jul 2026</span>
                    </div>
                    <h3 class="font-headline text-text-primary text-xl font-semibold mb-3 group-hover:text-primary transition-colors line-clamp-2">Korelasi Langsung Kepatuhan ESG dengan Penurunan Cost of Capital</h3>
                    <p class="text-text-secondary text-sm line-clamp-3">Analisis data empiris yang menunjukkan bagaimana perusahaan dengan peringkat ESG superior mendapatkan akses dana yang lebih murah.</p>
                </div>
            </a>
        </div>
    </section>
@endsection
