@extends('layouts.app')

@section('title', 'Detail Wawasan | Banavo Financial Advisory')

@section('content')
    <section class="max-w-[1000px] mx-auto px-6 py-20 reveal">
        <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-text-secondary hover:text-primary transition-colors mb-12 font-bold text-label-md">
            <span class="material-symbols-outlined">arrow_back</span> Kembali ke Wawasan CFO
        </a>
        
        <article>
            <div class="mb-12 text-center">
                <div class="flex items-center justify-center gap-4 mb-6 text-label-sm">
                    <span class="text-secondary font-bold uppercase tracking-widest">Macroeconomics</span>
                    <span class="text-text-secondary text-primary mx-2">•</span>
                    <span class="text-text-secondary">22 Jul 2026</span>
                    <span class="text-text-secondary text-primary mx-2">•</span>
                    <span class="text-text-secondary">5 Min Read</span>
                </div>
                <h1 class="font-headline text-headline-lg text-text-primary capitalize leading-tight mb-8">{{ str_replace('-', ' ', $slug) }}</h1>
                
                <div class="flex items-center justify-center gap-4 mt-8">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1374&auto=format&fit=crop" alt="Author" class="w-12 h-12 rounded-full object-cover border border-primary/30">
                    <div class="text-left">
                        <p class="text-text-primary font-bold text-sm">Budi Santoso</p>
                        <p class="text-text-secondary text-xs uppercase tracking-wider">Managing Partner</p>
                    </div>
                </div>
            </div>

            <div class="aspect-video relative overflow-hidden rounded-2xl mb-12 border border-outline-variant/20">
                <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?q=80&w=1470&auto=format&fit=crop" alt="Article Cover" class="w-full h-full object-cover">
            </div>

            <div class="prose prose-invert prose-lg max-w-none text-text-secondary leading-relaxed font-body">
                <p class="lead text-text-primary text-xl font-medium mb-8">
                    Volatilitas pasar tidak lagi menjadi anomali, melainkan standar baru dalam lanskap keuangan global. Bagi Chief Financial Officer (CFO), ini menuntut pergeseran paradigma dari manajemen risiko reaktif menjadi arsitektur ketahanan yang proaktif.
                </p>
                
                <h2 class="font-headline text-text-primary text-2xl font-bold mt-12 mb-6">Mengkalibrasi Ulang Struktur Permodalan</h2>
                <p>Dalam menghadapi ketidakpastian suku bunga dan fluktuasi nilai tukar, perusahaan tidak bisa lagi bergantung pada struktur utang tradisional. Diversifikasi sumber pendanaan, pemanfaatan instrumen lindung nilai (hedging) yang inovatif, dan optimalisasi siklus konversi kas (cash conversion cycle) menjadi krusial.</p>
                
                <p>Data terbaru menunjukkan bahwa korporasi yang mempertahankan rasio likuiditas tinggi (current ratio > 2.0) pada fase pra-resesi memiliki tingkat survival rate 40% lebih tinggi dan mampu mengeksekusi akuisisi strategis saat valuasi pasar sedang rendah.</p>

                <div class="bg-surface-card p-8 rounded-xl border-l-4 border-primary my-10">
                    <p class="text-text-primary font-headline text-xl italic m-0">"Ketahanan finansial sejati tidak diukur dari kemampuan menahan guncangan, tetapi dari kemampuan memanfaatkannya untuk akselerasi pangsa pasar."</p>
                </div>

                <h2 class="font-headline text-text-primary text-2xl font-bold mt-12 mb-6">Peran GRC sebagai Tameng Institusional</h2>
                <p>Governance, Risk, and Compliance (GRC) seringkali dipandang sebagai pusat biaya (cost center). Namun, dalam kondisi pasar yang bergejolak, kerangka GRC yang solid berfungsi sebagai tameng yang melindungi nilai perusahaan (value preservation). Transparansi pelaporan yang mematuhi IFRS dan standar ESG terbukti secara empiris menurunkan biaya modal (cost of capital) karena memberikan premi kepastian bagi investor.</p>

                <h2 class="font-headline text-text-primary text-2xl font-bold mt-12 mb-6">Langkah Aksi untuk Kuartal Berikutnya</h2>
                <ul class="list-disc pl-6 space-y-4 marker:text-primary">
                    <li>Lakukan stress testing komprehensif terhadap portofolio utang saat ini menggunakan minimal 3 skenario makroekonomi ekstrem.</li>
                    <li>Evaluasi kembali efisiensi perpajakan di seluruh rantai pasok global.</li>
                    <li>Pertimbangkan divestasi aset non-inti untuk memperkuat posisi kas (cash buffering).</li>
                </ul>
            </div>
            
            <div class="mt-16 pt-8 border-t border-outline-variant/10">
                <div class="flex items-center justify-between">
                    <span class="text-text-secondary font-bold text-sm uppercase tracking-widest">Bagikan Wawasan Ini</span>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full border border-outline-variant/20 flex items-center justify-center text-text-secondary hover:text-primary hover:border-primary transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full border border-outline-variant/20 flex items-center justify-center text-text-secondary hover:text-primary hover:border-primary transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </article>
    </section>
@endsection
