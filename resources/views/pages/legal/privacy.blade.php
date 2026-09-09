@extends('layouts.app')

@section('title', 'Privacy Policy — ZR IMPEX Industrial Machinery')
@section('meta_description', 'Learn how ZR IMPEX collects, protects, and handles personal and technical data for industrial CNC machine inquiries and WhatsApp sales processes.')

@section('content')
<div class="relative z-10">
    <!-- Breadcrumb & Industrial Header -->
    <div class="border-b border-surface-container-high bg-surface-dim/80 backdrop-blur-sm">
        <div class="max-w-max-width-content mx-auto px-gutter-desktop py-space-3xl lg:py-space-4xl">
            <div class="flex items-center gap-space-xs text-outline font-tech-spec text-tech-spec mb-space-sm">
                <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a>
                <span class="text-surface-container-highest">/</span>
                <span class="text-primary">Legal &amp; Compliance</span>
                <span class="text-surface-container-highest">/</span>
                <span class="text-on-surface">Privacy Policy</span>
            </div>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div>
                    <div class="inline-flex items-center gap-space-xs bg-surface-container border border-surface-container-highest px-space-sm py-space-2xs rounded text-primary font-tech-spec text-tech-spec uppercase tracking-wider mb-space-sm">
                        <span class="material-symbols-outlined text-[16px]">shield</span>
                        Data Protection &amp; Industrial Privacy
                    </div>
                    <h1 class="font-headline-xl text-headline-xl sm:text-display-md text-on-surface font-bold uppercase tracking-tight">
                        Privacy Policy
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-space-xs">
                        Transparency regarding the collection, processing, and protection of customer contact details and technical specifications during CNC machine quotations.
                    </p>
                </div>
                <div class="text-right font-tech-spec text-tech-spec text-outline shrink-0">
                    <div>Effective: {{ date('F Y') }}</div>
                    <div>Version: 2.4 (Enterprise)</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Body -->
    <div class="max-w-max-width-content mx-auto px-gutter-desktop py-space-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-space-2xl">
            <!-- Sidebar Index Navigation -->
            <div class="lg:col-span-1">
                <div class="sticky top-28 bg-surface-container/50 border border-surface-container-high rounded-xl p-space-lg">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold uppercase tracking-wider block mb-space-md">Contents</span>
                    <nav class="flex flex-col gap-space-sm font-body-sm text-body-sm">
                        <a href="#information-collected" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">1. Information Collected</a>
                        <a href="#whatsapp-usage" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">2. WhatsApp Sales Process</a>
                        <a href="#data-security" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">3. Data Security &amp; Storage</a>
                        <a href="#data-retention" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">4. Retention Periods</a>
                        <a href="#third-party-sharing" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">5. Third-Party Logistics &amp; OEM</a>
                        <a href="#user-rights" class="text-on-surface-variant hover:text-primary transition-colors py-1">6. Your Rights &amp; Contact</a>
                    </nav>

                    <div class="mt-space-xl pt-space-lg border-t border-surface-container-high">
                        <span class="font-tech-spec text-tech-spec text-outline block mb-space-xs">Questions or Data Requests?</span>
                        <a href="mailto:{{ \App\Models\SiteSetting::get('sales_email', 'sales@zrimpex.com') }}" class="font-tech-spec text-tech-spec text-primary hover:underline block break-all">
                            {{ \App\Models\SiteSetting::get('sales_email', 'sales@zrimpex.com') }}
                        </a>
                    </div>
                </div>
            </div>

            <!-- Content Details -->
            <div class="lg:col-span-3 space-y-space-xl">
                <!-- Section 1 -->
                <section id="information-collected" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">01</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Information We Collect</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        When you interact with the ZR IMPEX website, request machine specifications, or submit a quotation inquiry, we collect personal and commercial identification data required to process your industrial machinery inquiry:
                    </p>
                    <ul class="space-y-space-sm font-body-md text-body-md text-on-surface-variant">
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">check</span>
                            <span><strong>Full Name &amp; Company Name:</strong> Used to address you properly and identify your fabrication or industrial business entity.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">check</span>
                            <span><strong>Email Address:</strong> Used to transmit formal Proforma Invoices, technical CAD drawings, catalog PDFs, and warranty certificates.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">check</span>
                            <span><strong>Phone / WhatsApp Number:</strong> Crucial for technical consultation, sharing live machine cutting demonstration videos, and coordinating freight delivery.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">check</span>
                            <span><strong>Technical Material Specifications:</strong> Cutting dimensions, sheet thickness, material types (mild steel, aluminum, acrylic, stone), and electrical voltage setup.</span>
                        </li>
                    </ul>
                </section>

                <!-- Section 2 -->
                <section id="whatsapp-usage" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">02</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">WhatsApp Sales Process &amp; Communications</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Given the technical complexity and high customizability of heavy CNC routers and fiber laser cutters, ZR IMPEX relies on WhatsApp as our primary direct engineering communication channel.
                    </p>
                    <div class="bg-primary/5 border border-primary/20 rounded-lg p-space-md text-on-surface font-body-md leading-relaxed mb-space-md">
                        <strong>Explicit Notice:</strong> By submitting your phone number or clicking any WhatsApp button on this site, you explicitly authorize ZR IMPEX sales engineers to initiate direct WhatsApp messages and voice calls to evaluate your machine requirements, provide instant price quotes, send sample cutting test videos, and coordinate logistical dispatch.
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        We respect your focus. We do not transmit spam or unrelated automated promotional blasts. You may opt out of WhatsApp updates at any time by replying <code class="text-primary font-tech-spec">STOP</code> directly in the chat.
                    </p>
                </section>

                <!-- Section 3 -->
                <section id="data-security" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">03</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Data Protection &amp; Storage Security</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        We implement stringent technical and organizational security measures to protect customer records and CAD files:
                    </p>
                    <ul class="space-y-space-sm font-body-md text-body-md text-on-surface-variant">
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">lock</span>
                            <span><strong>TLS 1.3 Encryption:</strong> All web traffic and inquiry form transmissions are encrypted via high-grade 256-bit SSL/TLS protocols.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">lock</span>
                            <span><strong>Restricted Engineering Access:</strong> Customer contact info and manufacturing requests are accessible solely by certified sales engineers and technical service staff.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">lock</span>
                            <span><strong>No Public Sale of Data:</strong> ZR IMPEX never sells, rents, or trades your personal information or drawing files to third-party marketing companies.</span>
                        </li>
                    </ul>
                </section>

                <!-- Section 4 -->
                <section id="data-retention" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">04</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Data Retention Periods</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Because heavy industrial machinery operates for 10 to 15+ years in high-demand factories, ZR IMPEX maintains technical machine service records, serial numbers, spindle electrical specs, and buyer contact points to facilitate future spare parts dispatch, annual maintenance contracts (AMC), and warranty claims.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md font-tech-spec text-tech-spec">
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary block font-bold mb-1">Active Machine Orders</span>
                            <span class="text-on-surface-variant text-body-sm">Retained for the operational lifecycle of the equipment (minimum 7 years for GST &amp; tax compliance).</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary block font-bold mb-1">Unconverted Inquiries</span>
                            <span class="text-on-surface-variant text-body-sm">Retained for 18 months to assist in re-quotations and seasonal procurement reviews, then archived.</span>
                        </div>
                    </div>
                </section>

                <!-- Section 5 -->
                <section id="third-party-sharing" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">05</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Third-Party Logistics &amp; OEM Partners</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        To fulfill our physical contracts, delivery addresses and phone numbers are shared solely with authorized heavy-freight transport operators, transit insurance providers, and OEM component manufacturers (e.g., Raycus/Maxphotonics for laser source warranty registration).
                    </p>
                </section>

                <!-- Section 6 -->
                <section id="user-rights" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">06</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Your Rights &amp; Contact Desk</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        You have the right to request a copy of the personal information we hold about you, request corrections to inaccurate contact numbers or factory addresses, or request the deletion of your inquiry records (subject to statutory tax retention requirements).
                    </p>
                    <div class="bg-surface-container p-space-lg rounded-xl border border-surface-container-high flex flex-col sm:flex-row items-start sm:items-center justify-between gap-space-md">
                        <div>
                            <span class="font-headline-sm text-headline-sm text-on-surface font-semibold block">Compliance Officer</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant block">ZR IMPEX Machinery, Plot No. 42, Industrial Area Phase-2, New Delhi 110064</span>
                        </div>
                        <a href="mailto:{{ \App\Models\SiteSetting::get('sales_email', 'sales@zrimpex.com') }}" class="px-space-md py-space-sm rounded bg-primary text-on-primary font-tech-spec text-tech-spec font-bold hover:bg-primary-hover transition-colors whitespace-nowrap">
                            Contact Compliance
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
