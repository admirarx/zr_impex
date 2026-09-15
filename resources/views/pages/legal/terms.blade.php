@extends('layouts.app')

@section('title', 'Terms & Conditions — ZR IMPEX Industrial Machinery')
@section('meta_description', 'Official terms and conditions for industrial CNC router machines, laser cutters, spare parts sales, quotation procedures, and liability transfer.')

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
                <span class="text-on-surface">Terms &amp; Conditions</span>
            </div>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div>
                    <div class="inline-flex items-center gap-space-xs bg-surface-container border border-surface-container-highest px-space-sm py-space-2xs rounded text-primary font-tech-spec text-tech-spec uppercase tracking-wider mb-space-sm">
                        <span class="material-symbols-outlined text-[16px]">gavel</span>
                        Commercial Sale &amp; Supply Terms
                    </div>
                    <h1 class="font-headline-xl text-headline-xl sm:text-display-md text-on-surface font-bold uppercase tracking-tight">
                        Terms &amp; Conditions
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-space-xs">
                        Standard contractual terms governing digital catalog usage, quotation issuance, physical equipment sales, plant gate dispatch, and site readiness.
                    </p>
                </div>
                <div class="text-right font-tech-spec text-tech-spec text-outline shrink-0">
                    <div>Jurisdiction: New Delhi, India</div>
                    <div>Standard: Heavy Machinery Ex-Works</div>
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
                        <a href="#digital-catalog" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">1. Online Catalog Status</a>
                        <a href="#quotation-proforma" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">2. WhatsApp Quotes &amp; Proforma</a>
                        <a href="#liability-transfer" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">3. Transfer of Liability &amp; Risk</a>
                        <a href="#site-readiness" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">4. Electrical &amp; Site Readiness</a>
                        <a href="#payment-terms" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">5. Commercial Payment Terms</a>
                        <a href="#disputes" class="text-on-surface-variant hover:text-primary transition-colors py-1">6. Disputes &amp; Jurisdiction</a>
                    </nav>

                    <div class="mt-space-xl pt-space-lg border-t border-surface-container-high">
                        <span class="font-tech-spec text-tech-spec text-outline block mb-space-xs">Official Inquiries:</span>
                        <span class="font-tech-spec text-tech-spec text-on-surface block">ZR IMPEX Machinery</span>
                        <span class="font-tech-spec text-tech-spec text-primary block mt-1">{{ \App\Models\SiteSetting::get('primary_phone', '+91 9899639380') }}</span>
                    </div>
                </div>
            </div>

            <!-- Content Details -->
            <div class="lg:col-span-3 space-y-space-xl">
                <!-- Section 1 -->
                <section id="digital-catalog" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">01</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Digital Catalog &amp; Showcase Status</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        This website (<code class="text-primary font-tech-spec">zrimpex.com</code>) serves as an <strong>online technical catalog and industrial equipment showcase</strong>. Due to fluctuating raw steel prices, exchange rates for imported Italian/Japanese high-frequency spindles, servo motor options, and custom bed sizing (e.g., 1325, 1530, 2040 formats), listings on this website do not constitute an instantaneous binding unilateral contract of sale.
                    </p>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Specifications, speeds, weights, and pictures shown are indicative of standard builds and may vary based on customized gantry heights, vacuum zoning configurations, and customer tooling requirements.
                    </p>
                </section>

                <!-- Section 2 -->
                <section id="quotation-proforma" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">02</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Quotation Finalization &amp; WhatsApp Agreements</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Formal pricing, delivery timelines, and machine accessories are finalized directly between the buyer and our technical sales engineers via WhatsApp messaging, phone consultation, and authorized signed <strong>Proforma Invoices (PI)</strong> bearing ZR IMPEX GSTIN registration.
                    </p>
                    <div class="bg-primary/5 border border-primary/20 rounded-lg p-space-md text-on-surface font-body-md leading-relaxed">
                        A legally binding purchase agreement is only executed when the buyer signs the Proforma Invoice and transfers the stipulated advance fabrication deposit to our authorized corporate bank account.
                    </div>
                </section>

                <!-- Section 3 -->
                <section id="liability-transfer" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">03</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Transfer of Ownership, Title &amp; Transit Liability</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Unless expressly agreed otherwise in writing under DDP/CIF terms, all industrial machinery and bulk spare parts shipments are provided on an <strong>Ex-Works (EXW) / FOB Factory Gate</strong> basis from our assembly facility in New Delhi:
                    </p>
                    <ul class="space-y-space-sm font-body-md text-body-md text-on-surface-variant mb-space-md">
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">local_shipping</span>
                            <span><strong>Liability Transfer Point:</strong> Risk of physical loss, transit damage, or delay transfers to the buyer the moment the machine is hoisted and secured onto the commercial transport vehicle at our factory loading dock.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">verified</span>
                            <span><strong>Pre-Dispatch Inspection:</strong> Buyers or their designated engineers are encouraged to inspect the machine in operation (or via live video feed cutting test) prior to dispatch. Handover of the signed Dispatch Clearance Certificate confirms operational compliance.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">security</span>
                            <span><strong>Mandatory Transit Insurance:</strong> All long-haul consignments must carry comprehensive all-risk transit insurance. ZR IMPEX can assist in coordinating policy coverage at the buyer's expense.</span>
                        </li>
                    </ul>
                </section>

                <!-- Section 4 -->
                <section id="site-readiness" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">04</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Plant Electrical &amp; Structural Site Readiness</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        High-precision CNC machine centers and fiber laser systems require stable operating conditions. The buyer warrants that their plant satisfies the following conditions prior to the arrival of the commissioning engineer:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md font-body-md text-body-md">
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-tech-spec text-tech-spec font-bold block mb-1">Electrical Stability</span>
                            <span class="text-on-surface-variant text-body-sm leading-relaxed">Dedicated 3-Phase 415V (±5%) 50Hz power line with high-response servo voltage stabilizer and separate copper earth pit (<2 Ohms resistance).</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-tech-spec text-tech-spec font-bold block mb-1">Floor Foundation</span>
                            <span class="text-on-surface-variant text-body-sm leading-relaxed">Reinforced level concrete floor (minimum 150mm thickness, M25 grade) free from external press/vibration shock waves.</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-tech-spec text-tech-spec font-bold block mb-1">Pneumatic Supply</span>
                            <span class="text-on-surface-variant text-body-sm leading-relaxed">Clean, dry compressed air supply (minimum 6–8 Bar) equipped with refrigerated air dryer and oil-water moisture separators.</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-tech-spec text-tech-spec font-bold block mb-1">Offloading Facility</span>
                            <span class="text-on-surface-variant text-body-sm leading-relaxed">Appropriately rated industrial hydraulic crane or heavy forklift (3-5 Ton capacity) on standby during delivery unloading.</span>
                        </div>
                    </div>
                </section>

                <!-- Section 5 -->
                <section id="payment-terms" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">05</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Commercial Payment Terms</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Unless explicitly stipulated otherwise in the official Proforma Invoice, standard commercial payment structure for machinery fabrication is:
                    </p>
                    <ul class="space-y-space-xs font-tech-spec text-tech-spec text-on-surface-variant">
                        <li class="flex items-center gap-space-xs"><span class="text-primary font-bold">30% to 50%:</span> Advance token upon order confirmation to lock raw materials and CNC components.</li>
                        <li class="flex items-center gap-space-xs"><span class="text-primary font-bold">Balance 50% to 70%:</span> Payable prior to dispatch, following successful factory trial cutting run.</li>
                        <li class="flex items-center gap-space-xs"><span class="text-primary font-bold">Payment Channels:</span> Direct RTGS/NEFT to corporate bank account. Cash payments above statutory limits are not accepted.</li>
                    </ul>
                </section>

                <!-- Section 6 -->
                <section id="disputes" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">06</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Disputes &amp; Legal Jurisdiction</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        These terms and all commercial transactions shall be governed by and construed in accordance with the laws of India. Any legal dispute, arbitration proceedings, or court actions arising out of contracts executed with ZR IMPEX shall be subject to the exclusive jurisdiction of the competent courts in <strong>New Delhi, India</strong>.
                    </p>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
