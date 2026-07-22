@extends('layouts.app')

@section('title', 'Kontak Kami | Banavo Financial Advisory')

@section('content')
    <section class="max-w-[1280px] mx-auto px-6 py-20 reveal">
        <div class="text-center mb-16">
            <span class="text-secondary text-label-md uppercase tracking-[0.2em] block mb-4 font-bold">Hubungi Kami</span>
            <h1 class="font-headline text-headline-lg text-text-primary">Mari Diskusikan Strategi Anda</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-5 space-y-10">
                <div class="space-y-8">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-surface-container border border-outline-variant/30 flex items-center justify-center rounded shrink-0">
                            <span class="material-symbols-outlined text-primary">apartment</span>
                        </div>
                        <div>
                            <h5 class="text-text-primary font-bold text-lg mb-2">Jakarta Headquarters</h5>
                            <p class="text-text-secondary text-body-md leading-relaxed">Prosperity Tower, SCBD District 8, Lt. 12<br>Jakarta Selatan, 12190</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-surface-container border border-outline-variant/30 flex items-center justify-center rounded shrink-0">
                            <span class="material-symbols-outlined text-primary">support_agent</span>
                        </div>
                        <div>
                            <h5 class="text-text-primary font-bold text-lg mb-2">Exclusive Hotline</h5>
                            <p class="text-text-secondary text-body-md leading-relaxed font-semibold">
                                +62 21 555 8899 <span class="font-normal">(Enterprise Support)</span><br>
                                +62 811 2222 333 <span class="font-normal">(WhatsApp Advisory)</span>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-surface-container border border-outline-variant/30 flex items-center justify-center rounded shrink-0">
                            <span class="material-symbols-outlined text-primary">mail</span>
                        </div>
                        <div>
                            <h5 class="text-text-primary font-bold text-lg mb-2">Email Inquiries</h5>
                            <p class="text-text-secondary text-body-md leading-relaxed">
                                advisory@banavo.co.id<br>
                                careers@banavo.co.id
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="lg:col-span-7 bg-surface-card p-8 lg:p-12 rounded-2xl border border-outline-variant/20 shadow-2xl">
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
