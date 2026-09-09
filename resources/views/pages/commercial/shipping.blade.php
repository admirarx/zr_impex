@extends('layouts.app')

@section('title', 'Shipping & Delivery Policy — ZR IMPEX Heavy Machinery Freight')
@section('meta_description', 'Industrial freight logistics, export wooden crating, transit insurance, and delivery timelines for CNC routers and fiber laser cutting machines across India.')

@section('content')
<div class="relative z-10">
    <!-- Breadcrumb & Industrial Header -->
    <div class="border-b border-surface-container-high bg-surface-dim/80 backdrop-blur-sm">
        <div class="max-w-max-width-content mx-auto px-gutter-desktop py-space-3xl lg:py-space-4xl">
            <div class="flex items-center gap-space-xs text-outline font-tech-spec text-tech-spec mb-space-sm">
                <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a>
                <span class="text-surface-container-highest">/</span>
                <span class="text-primary">Commercial Logistics</span>
                <span class="text-surface-container-highest">/</span>
                <span class="text-on-surface">Shipping &amp; Delivery</span>
            </div>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div>
                    <div class="inline-flex items-center gap-space-xs bg-surface-container border border-surface-container-highest px-space-sm py-space-2xs rounded text-primary font-tech-spec text-tech-spec uppercase tracking-wider mb-space-sm">
                        <span class="material-symbols-outlined text-[16px]">local_shipping</span>
                        Heavy Freight &amp; Plant Logistics
                    </div>
                    <h1 class="font-headline-xl text-headline-xl sm:text-display-md text-on-surface font-bold uppercase tracking-tight">
                        Shipping &amp; Delivery Policy
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-space-xs">
                        Industrial logistics protocols, export-grade rigid crating, transit insurance underwriting, and on-site buyer offloading requirements.
                    </p>
                </div>
                <div class="text-right font-tech-spec text-tech-spec text-outline shrink-0">
                    <div>Coverage: Pan-India &amp; SAARC</div>
                    <div>Carrier Class: Dedicated Heavy Trailers</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Body -->
    <div class="max-w-max-width-content mx-auto px-gutter-desktop py-space-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-space-2xl">
            <!-- Sidebar Navigation -->
            <div class="lg:col-span-1">
                <div class="sticky top-28 bg-surface-container/50 border border-surface-container-high rounded-xl p-space-lg">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold uppercase tracking-wider block mb-space-md">Logistics Index</span>
                    <nav class="flex flex-col gap-space-sm font-body-sm text-body-sm">
                        <a href="#freight-transport" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">1. Dedicated Transport</a>
                        <a href="#crating-packaging" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">2. Anti-Rust Wooden Crating</a>
                        <a href="#lead-times" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">3. Fabrication &amp; Transit Times</a>
                        <a href="#transit-insurance" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">4. Transit Insurance Mandate</a>
                        <a href="#offloading" class="text-on-surface-variant hover:text-primary transition-colors py-1">5. Offloading &amp; E-Way Bills</a>
                    </nav>

                    <div class="mt-space-xl pt-space-lg border-t border-surface-container-high">
                        <span class="font-tech-spec text-tech-spec text-outline block mb-space-xs">Freight Desk Support:</span>
                        <button type="button" 
                                onclick="window.openWhatsApp('{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Hello ZR IMPEX, I need to check freight charges and delivery timelines to my factory location.') }}')"
                                class="w-full text-center px-space-md py-space-sm rounded bg-[#25D366]/20 border border-[#25D366]/40 text-[#25D366] font-tech-spec text-tech-spec hover:bg-[#25D366]/30 transition-colors flex items-center justify-center gap-space-xs">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            Check Shipping Rates
                        </button>
                    </div>
                </div>
            </div>

            <!-- Content Details -->
            <div class="lg:col-span-3 space-y-space-xl">
                <!-- Section 1 -->
                <section id="freight-transport" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">01</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Dedicated Heavy Freight Transport</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Heavy industrial machinery (spanning 1,500 kg to 6,000+ kg) cannot be shipped via parcel couriers. ZR IMPEX coordinates transit through accredited, air-suspension or heavy-duty flatbed fleet carriers experienced in handling precision machine tools.
                    </p>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Spare parts and tooling accessories (collets, servo motors, cutting nozzles, chiller pumps) are dispatched via express priority air couriers (e.g., Blue Dart, DTDC Air, Trackon) with tracking tokens dispatched via WhatsApp within 24 hours of payment.
                    </p>
                </section>

                <!-- Section 2 -->
                <section id="crating-packaging" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">02</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Export-Grade Anti-Rust Packaging</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Precision ground linear rails, helical gear racks, and electrospindles are highly vulnerable to road humidity and rain. All machines undergo rigorous multi-layer packaging before release:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md font-body-sm text-body-sm">
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-bold block mb-1 font-tech-spec">Layer 1: Chemical VCI</span>
                            <span class="text-on-surface-variant">Volatile Corrosion Inhibitor (VCI) oil coating and industrial desiccant moisture packs.</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-bold block mb-1 font-tech-spec">Layer 2: Vacuum Barrier Foil</span>
                            <span class="text-on-surface-variant">Heat-sealed aluminum laminate foil wrap protecting against monsoon humidity.</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-bold block mb-1 font-tech-spec">Layer 3: Reinforced Wooden Crate</span>
                            <span class="text-on-surface-variant">Heavy timber skid base with heavy steel corner braces and forklift entry points.</span>
                        </div>
                    </div>
                </section>

                <!-- Section 3 -->
                <section id="lead-times" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">03</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Fabrication &amp; Delivery Lead Times</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left font-tech-spec text-tech-spec border border-surface-container-high rounded-lg overflow-hidden">
                            <thead class="bg-surface-container-high text-on-surface uppercase">
                                <tr>
                                    <th class="p-space-md">Equipment Category</th>
                                    <th class="p-space-md">Fabrication / Prep Time</th>
                                    <th class="p-space-md">Transit Duration (Pan-India)</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-surface-container-high/60">
                                <tr>
                                    <td class="p-space-md font-bold text-primary">In-Stock Standard CNC (1325/1530)</td>
                                    <td class="p-space-md text-on-surface">3 – 5 Business Days (Testing &amp; Calibration)</td>
                                    <td class="p-space-md text-on-surface-variant">3 – 7 Days (Region Dependent)</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-primary">Custom ATC / Multi-Spindle Routers</td>
                                    <td class="p-space-md text-on-surface">15 – 25 Business Days (Custom Bed &amp; Controls)</td>
                                    <td class="p-space-md text-on-surface-variant">4 – 8 Days via Dedicated Trailer</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-primary">High-Power Fiber Laser (3kW – 12kW)</td>
                                    <td class="p-space-md text-on-surface">20 – 30 Business Days (Optics &amp; Chiller Setup)</td>
                                    <td class="p-space-md text-on-surface-variant">5 – 8 Days via Air-Ride Trailer</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-primary">Spares Depot &amp; Replacement Spindles</td>
                                    <td class="p-space-md text-on-surface">Same-Day Dispatch (If ordered before 2 PM)</td>
                                    <td class="p-space-md text-on-surface-variant">24 – 48 Hours via Express Air</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- Section 4 -->
                <section id="transit-insurance" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">04</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Mandatory Transit Insurance</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Due to the high financial value of industrial machine tools, transit insurance is strictly mandatory for every machine order leaving our factory. The policy covers:
                    </p>
                    <ul class="space-y-space-xs font-body-md text-body-md text-on-surface-variant">
                        <li class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-primary text-[18px]">verified</span> Road vehicular accidents, overturning, and collision.</li>
                        <li class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-primary text-[18px]">verified</span> Fire, explosion, and water ingress during heavy transit storms.</li>
                        <li class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-primary text-[18px]">verified</span> Total loss or severe mechanical shock during transit handling.</li>
                    </ul>
                </section>

                <!-- Section 5 -->
                <section id="offloading" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">05</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Buyer Offloading &amp; E-Way Bill Responsibilities</h2>
                    </div>
                    <div class="bg-primary/5 border border-primary/20 rounded-lg p-space-md mb-space-md text-on-surface font-body-md leading-relaxed">
                        <strong>Important:</strong> Heavy freight vehicle drivers do not offload machines. The buyer must arrange an industrial hydraulic crane (or 3-5 ton forklift) and certified riggers at their plant facility upon the truck's arrival.
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        ZR IMPEX generates the Part-A and Part-B GST E-Way Bills in compliance with Indian taxation laws. Consignee delivery gate entry permissions, local octroi/toll receipts, and factory gate permits must be provided promptly by the buyer to prevent carrier detention charges.
                    </p>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
