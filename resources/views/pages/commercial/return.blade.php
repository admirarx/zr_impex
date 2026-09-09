@extends('layouts.app')

@section('title', 'Return & Refund Policy — ZR IMPEX Industrial Machinery')
@section('meta_description', 'Official return, cancellation, and refund guidelines for custom-manufactured CNC machinery and genuine replacement spare parts.')

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
                <span class="text-on-surface">Return &amp; Refund Policy</span>
            </div>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div>
                    <div class="inline-flex items-center gap-space-xs bg-surface-container border border-surface-container-highest px-space-sm py-space-2xs rounded text-primary font-tech-spec text-tech-spec uppercase tracking-wider mb-space-sm">
                        <span class="material-symbols-outlined text-[16px]">assignment_return</span>
                        Commercial Equipment Terms
                    </div>
                    <h1 class="font-headline-xl text-headline-xl sm:text-display-md text-on-surface font-bold uppercase tracking-tight">
                        Return &amp; Refund Policy
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-space-xs">
                        Clear policies regarding capital equipment custom orders, spare part return windows, restocking inspections, and cancellation rules.
                    </p>
                </div>
                <div class="text-right font-tech-spec text-tech-spec text-outline shrink-0">
                    <div>Capital Goods: Non-Returnable Post-Dispatch</div>
                    <div>Spares Window: 14 Days (Unopened)</div>
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
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold uppercase tracking-wider block mb-space-md">Policy Index</span>
                    <nav class="flex flex-col gap-space-sm font-body-sm text-body-sm">
                        <a href="#custom-machinery" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">1. Capital CNC Machinery</a>
                        <a href="#spare-parts" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">2. Spare Parts (14 Days)</a>
                        <a href="#order-cancellations" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">3. Order Cancellations</a>
                        <a href="#transit-damage" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">4. Transit Damage Claims</a>
                        <a href="#refund-processing" class="text-on-surface-variant hover:text-primary transition-colors py-1">5. Refund Processing</a>
                    </nav>

                    <div class="mt-space-xl pt-space-lg border-t border-surface-container-high">
                        <span class="font-tech-spec text-tech-spec text-outline block mb-space-xs">Returns Department:</span>
                        <a href="mailto:support@zrimpex.com" class="font-tech-spec text-tech-spec text-primary font-bold block mb-1">
                            support@zrimpex.com
                        </a>
                        <span class="text-on-surface-variant text-body-sm">Subject: RMA - [Invoice Number]</span>
                    </div>
                </div>
            </div>

            <!-- Content Details -->
            <div class="lg:col-span-3 space-y-space-xl">
                <!-- Section 1 -->
                <section id="custom-machinery" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">01</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Capital Equipment &amp; Custom Machinery</h2>
                    </div>
                    <div class="bg-amber-500/10 border border-amber-500/30 rounded-lg p-space-md mb-space-md text-on-surface font-body-md leading-relaxed">
                        <strong>Heavy Machinery Non-Returnable Policy:</strong> CNC routers, fiber laser systems, and plasma cutting tables are heavy capital goods engineered, wired, and calibrated to custom customer specifications (bed sizing, gantry clearance, spindle power, controller firmware).
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Once a machine has completed pre-dispatch factory testing, received the buyer's signed clearance (or approved video trial cutting sign-off), and been loaded onto transport vehicles, <strong>it is strictly non-returnable and non-refundable</strong>. Any operational or component discrepancies are addressed exclusively under our 12-Month Industrial Warranty.
                    </p>
                </section>

                <!-- Section 2 -->
                <section id="spare-parts" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">02</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Standard Spare Parts (14-Day Return Window)</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Standard off-the-shelf spare parts (servo drives, motors, linear bearings, cutting nozzles, chiller accessories) may be returned within <strong>14 calendar days</strong> of physical delivery, subject to strict verification:
                    </p>
                    <ul class="space-y-space-sm font-body-md text-body-md text-on-surface-variant mb-space-md">
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span>
                            <span>The item must remain in 100% brand-new condition, completely uninstalled, with zero mounting scratches or terminal wiring marks.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span>
                            <span>Must be returned inside original manufacturer electrostatic anti-static pouches and sealed cartons with undamaged serial barcodes.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span>
                            <span>A standard <strong>15% restocking and testing fee</strong> applies to cover precision bench recalibration and re-sealing. Buyer is responsible for prepaid insured return courier shipping to our New Delhi warehouse.</span>
                        </li>
                    </ul>
                </section>

                <!-- Section 3 -->
                <section id="order-cancellations" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">03</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Order Cancellations During Fabrication</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Advance deposits immediately trigger allocation of structural steel beds, precision linear guides, and custom servo drive orders with foreign manufacturers. If an order cancellation request is submitted:
                    </p>
                    <ul class="space-y-space-xs font-tech-spec text-tech-spec text-on-surface-variant">
                        <li class="flex items-center gap-space-xs"><span class="text-primary font-bold">Within 48 Hours of PI:</span> Full refund less 5% banking and administrative processing fees.</li>
                        <li class="flex items-center gap-space-xs"><span class="text-primary font-bold">After 48 Hours:</span> The advance deposit is non-refundable as customized steel bed fabrication and laser source procurement cannot be reversed.</li>
                    </ul>
                </section>

                <!-- Section 4 -->
                <section id="transit-damage" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">04</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Transit Damage Claims Protocol</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        If wooden crating shows signs of crushing, puncture, or water staining upon delivery:
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md font-body-sm text-body-sm">
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-bold block mb-1 font-tech-spec">Immediate Action: Sign POD as "Damaged"</span>
                            <span class="text-on-surface-variant">You MUST write a remark of physical crate damage on the carrier's Lorry Receipt (LR) / Proof of Delivery (POD) before the driver leaves your premises.</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-primary font-bold block mb-1 font-tech-spec">Photo &amp; Video Documentation</span>
                            <span class="text-on-surface-variant">Take immediate 360-degree photos and video of the crate exterior and notify ZR IMPEX within 24 hours to initiate insurance survey and zero-cost component replacement.</span>
                        </div>
                    </div>
                </section>

                <!-- Section 5 -->
                <section id="refund-processing" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">05</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Refund Method &amp; Timelines</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Approved refunds for returned spare parts are processed within <strong>5 to 7 business days</strong> following our warehouse technical inspection. Refunds are remitted directly via bank RTGS / NEFT transfer back to the originating commercial account. Cash refunds are strictly prohibited under Indian financial compliance rules.
                    </p>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
