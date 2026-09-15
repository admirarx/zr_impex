@extends('layouts.app')

@section('title', 'Warranty & Disclaimers — ZR IMPEX Industrial Machinery')
@section('meta_description', 'Industrial equipment warranty coverage, laser source guarantees, genuine spare parts fitment standards, and technical operational disclaimers.')

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
                <span class="text-on-surface">Warranty &amp; Disclaimers</span>
            </div>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div>
                    <div class="inline-flex items-center gap-space-xs bg-surface-container border border-surface-container-highest px-space-sm py-space-2xs rounded text-primary font-tech-spec text-tech-spec uppercase tracking-wider mb-space-sm">
                        <span class="material-symbols-outlined text-[16px]">verified_user</span>
                        Factory Performance Assurance
                    </div>
                    <h1 class="font-headline-xl text-headline-xl sm:text-display-md text-on-surface font-bold uppercase tracking-tight">
                        Warranty &amp; Disclaimers
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-space-xs">
                        Industrial engineering warranties, laser resonator coverage, genuine OEM component fitment, and critical maintenance exclusions.
                    </p>
                </div>
                <div class="text-right font-tech-spec text-tech-spec text-outline shrink-0">
                    <div>Chassis Standard: 12-Month Structural</div>
                    <div>Laser Source: Up to 24 Months OEM</div>
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
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold uppercase tracking-wider block mb-space-md">Warranty Index</span>
                    <nav class="flex flex-col gap-space-sm font-body-sm text-body-sm">
                        <a href="#chassis-warranty" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">1. Machine Chassis (12M)</a>
                        <a href="#laser-source" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">2. Laser Sources (24M)</a>
                        <a href="#genuine-spares" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">3. 100% Genuine Spares</a>
                        <a href="#exclusions" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">4. Exclusions &amp; Void Terms</a>
                        <a href="#claim-procedure" class="text-on-surface-variant hover:text-primary transition-colors py-1">5. Technical Claim Workflow</a>
                    </nav>

                    <div class="mt-space-xl pt-space-lg border-t border-surface-container-high">
                        <span class="font-tech-spec text-tech-spec text-outline block mb-space-xs">Service Engineering Desk:</span>
                        <a href="tel:{{ \App\Models\SiteSetting::get('support_phone', '+91 9899639380') }}" class="font-tech-spec text-tech-spec text-primary font-bold block mb-1">
                            {{ \App\Models\SiteSetting::get('support_phone', '+91 9899639380') }}
                        </a>
                        <span class="text-on-surface-variant text-body-sm">Available Mon-Sat: 9:00 AM - 7:00 PM</span>
                    </div>
                </div>
            </div>

            <!-- Content Details -->
            <div class="lg:col-span-3 space-y-space-xl">
                <!-- Section 1 -->
                <section id="chassis-warranty" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">01</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">12-Month Industrial Machine Structural Warranty</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        All newly commissioned ZR IMPEX CNC Routers, Plasma Tables, and Fiber Laser Cutting systems carry a comprehensive <strong>12-Month Structural &amp; Core Mechanical Warranty</strong> starting from the official date of on-site commissioning or 30 days from dispatch (whichever occurs first).
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md font-body-sm text-body-sm">
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-bold block font-tech-spec mb-1">Covered Assemblies</span>
                            <span class="text-on-surface-variant">Stress-relieved welded steel machine frame, heavy gantry uprights, precision helical rack and pinion drive systems, and ballscrew assemblies.</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-bold block font-tech-spec mb-1">Electronic Controls</span>
                            <span class="text-on-surface-variant">Industrial CNC DSP / NC Studio / Weihong motion controllers and factory-fitted breakout boards against manufacturing defects.</span>
                        </div>
                    </div>
                </section>

                <!-- Section 2 -->
                <section id="laser-source" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">02</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">24-Month OEM Fiber Laser Source Guarantee</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Fiber laser sources integrated into our sheet metal and tube cutting machines (including Raycus, Maxphotonics, and IPG Photonics resonators) are backed by a direct <strong>24-Month Manufacturer Warranty</strong> covering beam output power stability, optical diode modules, and QBH output cables.
                    </p>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        ZR IMPEX liaises directly with authorized national service centers to coordinate rapid module replacement or depot service to eliminate workshop downtime.
                    </p>
                </section>

                <!-- Section 3 -->
                <section id="genuine-spares" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">03</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">100% Genuine Spare Fitment Standards</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Every replacement component supplied through our Spares Depot—including Italian HSD and Chinese HQD electrospindles, Yaskawa/Delta AC servo drives, Hiwin linear guideways, and Raytools cutting heads—is certified brand-new and 100% original OEM spec.
                    </p>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        We provide a <strong>6-Month Fitment &amp; Functional Guarantee</strong> on all critical electrical and pneumatic replacement spares when installed by certified industrial technicians.
                    </p>
                </section>

                <!-- Section 4 -->
                <section id="exclusions" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">04</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Critical Warranty Exclusions &amp; Void Conditions</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Industrial equipment operates under extreme cutting forces. The following events and operational failures strictly void warranty coverage:
                    </p>
                    <ul class="space-y-space-sm font-body-md text-body-md text-on-surface-variant">
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-rose-400 text-[20px] shrink-0">cancel</span>
                            <span><strong>Voltage Fluctuations / Phase Loss:</strong> Operating machinery without a dedicated servo voltage stabilizer or running with improper grounding (>2 Ohms earth resistance).</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-rose-400 text-[20px] shrink-0">cancel</span>
                            <span><strong>Pneumatic Contamination:</strong> Spindle or laser head damage caused by moisture/water droplets due to the lack of a refrigerated air dryer.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-rose-400 text-[20px] shrink-0">cancel</span>
                            <span><strong>Gantry Collisions &amp; Operator Crashes:</strong> Physical mechanical damage resulting from erroneous G-code programming, incorrect tool offsets, or workpiece crashes.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-rose-400 text-[20px] shrink-0">cancel</span>
                            <span><strong>Consumables:</strong> Cutting nozzles, protective windows, ceramic rings, collets, and cutting tool bits are standard operational consumables and are not covered under warranty.</span>
                        </li>
                    </ul>
                </section>

                <!-- Section 5 -->
                <section id="claim-procedure" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">05</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Technical Warranty Claim Protocol</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        In the event of an abnormal electrical error code or mechanical malfunction, follow this swift 3-step escalation protocol:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md font-body-sm text-body-sm">
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-bold block mb-1 font-tech-spec">Step 1: WhatsApp Video</span>
                            <span class="text-on-surface-variant">Record a clear video of the controller alarm code, spindle sound, and machine serial number plate.</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-bold block mb-1 font-tech-spec">Step 2: Remote Diagnostics</span>
                            <span class="text-on-surface-variant">Our senior engineers connect via video call or remote software (AnyDesk) to diagnose the inverter or driver parameters.</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-bold block mb-1 font-tech-spec">Step 3: Component Dispatch</span>
                            <span class="text-on-surface-variant">If hardware failure is verified, a replacement module is dispatched via priority courier or engineer dispatched on-site.</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
