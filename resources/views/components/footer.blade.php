<footer class="bg-[#050A0A] border-t border-outline-variant/10 pt-[80px] pb-10">
    <div class="max-w-[1280px] mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-20 reveal">
        <div class="space-y-6">
            <div class="flex items-center gap-3">
                <img alt="Banavo Logo" class="w-8 h-8 rounded-full border border-primary/30" src="{{ asset('images/logo.jpg') }}">
                <span class="text-headline-md font-headline font-bold tracking-tight text-primary">BANAVO</span>
            </div>
            <p class="text-text-secondary text-body-md leading-relaxed">
                PT Banavo Konsultan Finansial Indonesia.<br>
                Mitra terpercaya untuk intelijen finansial institusional dan tata kelola korporasi modern.
            </p>
            <div class="flex gap-4">
                <a href="#" class="w-10 h-10 border border-outline-variant/20 rounded flex items-center justify-center hover:bg-primary/10 hover:border-primary transition-all text-text-secondary hover:text-primary">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
                </a>
            </div>
        </div>

        <div>
            <h4 class="text-text-primary font-bold mb-8 uppercase tracking-widest text-label-md">Layanan Korporat</h4>
            <ul class="space-y-4 text-text-secondary text-body-md font-semibold">
                <li><a href="#" class="hover:text-primary transition-colors">Debt Advisory & Restructuring</a></li>
                <li><a href="#" class="hover:text-primary transition-colors">M&A Strategy</a></li>
                <li><a href="#" class="hover:text-primary transition-colors">Tax Audit Defense</a></li>
                <li><a href="#" class="hover:text-primary transition-colors">Internal Audit Management</a></li>
                <li><a href="#" class="hover:text-primary transition-colors">Transfer Pricing</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-text-primary font-bold mb-8 uppercase tracking-widest text-label-md">Governance & ESG</h4>
            <ul class="space-y-4 text-text-secondary text-body-md font-semibold">
                <li><a href="#" class="hover:text-primary transition-colors">ESG Reporting Strategy</a></li>
                <li><a href="#" class="hover:text-primary transition-colors">Fraud Risk Assessment</a></li>
                <li><a href="#" class="hover:text-primary transition-colors">IFRS Integration</a></li>
                <li><a href="#" class="hover:text-primary transition-colors">Enterprise Risk Mgmt</a></li>
                <li><a href="#" class="hover:text-primary transition-colors">Ethics & Compliance</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-text-primary font-bold mb-8 uppercase tracking-widest text-label-md">Locations</h4>
            <ul class="space-y-4 text-text-secondary text-body-md font-semibold">
                <li><a href="#" class="hover:text-primary transition-colors">Jakarta, Indonesia</a></li>
                <li><a href="#" class="hover:text-primary transition-colors">Singapore Hub</a></li>
                <li class="pt-4 border-t border-outline-variant/10">
                    <span class="block text-primary font-bold mb-2 text-label-sm uppercase tracking-widest">CFO Newsletter</span>
                    <form class="flex" action="#" method="POST">
                        @csrf
                        <input type="email" placeholder="Email Korporat" class="w-full bg-background border border-outline-variant/30 rounded-l-lg px-3 py-2 text-sm outline-none focus:border-primary transition-colors font-body text-text-primary" required>
                        <button type="submit" class="bg-primary text-on-primary px-4 rounded-r-lg hover:brightness-110 transition-all flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm font-bold">send</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="max-w-[1280px] mx-auto px-6 pt-10 border-t border-outline-variant/10 flex flex-col md:flex-row justify-between items-center gap-6">
        <p class="text-text-secondary text-[10px] uppercase tracking-widest font-bold">
            © {{ date('Y') }} BANAVO FINANCIAL ADVISORY. ALL RIGHTS RESERVED. OJK & KEMENKEU COMPLIANT.
        </p>
        <div class="flex flex-wrap justify-center gap-8 text-text-secondary text-[10px] uppercase tracking-widest font-bold">
            <a href="#" class="hover:text-primary transition-colors">Syarat & Ketentuan</a>
            <a href="#" class="hover:text-primary transition-colors">Kebijakan Privasi</a>
            <a href="#" class="hover:text-primary transition-colors">Site Map</a>
        </div>
    </div>
</footer>
