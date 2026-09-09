@extends('layouts.app')

@section('title', 'How to Buy Guide — Industrial CNC Machinery Procurement | ZR IMPEX')
@section('meta_description', 'Step-by-step buyer guide for purchasing industrial CNC routers, fiber laser cutting machines, and genuine spare parts from ZR IMPEX.')

@section('content')
<div class="relative z-10">
    <!-- Breadcrumb & Industrial Header -->
    <div class="border-b border-surface-container-high bg-surface-dim/80 backdrop-blur-sm">
        <div class="max-w-max-width-content mx-auto px-gutter-desktop py-space-3xl lg:py-space-4xl">
            <div class="flex items-center gap-space-xs text-outline font-tech-spec text-tech-spec mb-space-sm">
                <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a>
                <span class="text-surface-container-highest">/</span>
                <span class="text-primary">Commercial Desk</span>
                <span class="text-surface-container-highest">/</span>
                <span class="text-on-surface">How to Buy Guide</span>
            </div>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div>
                    <div class="inline-flex items-center gap-space-xs bg-surface-container border border-surface-container-highest px-space-sm py-space-2xs rounded text-primary font-tech-spec text-tech-spec uppercase tracking-wider mb-space-sm">
                        <span class="material-symbols-outlined text-[16px]">shopping_cart_checkout</span>
                        Procurement Blueprint
                    </div>
                    <h1 class="font-headline-xl text-headline-xl sm:text-display-md text-on-surface font-bold uppercase tracking-tight">
                        How to Buy Industrial Machinery
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-space-xs">
                        A transparent, 4-step engineering and procurement workflow from initial requirement review to plant-floor installation and operator training.
                    </p>
                </div>
                <div class="flex items-center gap-space-sm shrink-0">
                    <button type="button" 
                            onclick="window.openWhatsApp('{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Hello ZR IMPEX, I want to discuss machine purchasing and get a quotation.') }}')"
                            class="px-space-md py-space-sm rounded bg-[#25D366] hover:bg-[#20ba59] text-white font-tech-spec text-tech-spec font-bold transition-all shadow-lg flex items-center gap-space-xs">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                        </svg>
                        <span>Direct WhatsApp RFQ</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- 4-Step Procurement Timeline -->
    <div class="max-w-max-width-content mx-auto px-gutter-desktop py-space-3xl">
        <div class="text-center max-w-2xl mx-auto mb-space-2xl">
            <span class="font-label-caps text-label-caps text-primary uppercase tracking-wider block mb-space-2xs">Transparent Industrial Procurement</span>
            <h2 class="font-headline-lg text-headline-lg sm:text-headline-xl text-on-surface font-bold uppercase tracking-tight">
                4-Step Machinery Acquisition Process
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
                We make industrial equipment purchasing straightforward, predictable, and technically validated before money changes hands.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg mb-space-3xl">
            <!-- Step 1 -->
            <div class="relative bg-surface-container/40 border border-surface-container-high rounded-xl p-space-xl flex flex-col justify-between hover:border-primary/40 transition-colors">
                <div>
                    <div class="flex items-center justify-between mb-space-md">
                        <span class="w-10 h-10 rounded bg-primary text-on-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold text-lg">01</span>
                        <span class="material-symbols-outlined text-outline text-[28px]">search</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase tracking-wide mb-space-xs">Explore &amp; Select</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-md">
                        Browse our digital machinery catalogue or spares inventory. Compare bed working areas (1325, 1530, 2040), spindle kilowatt ratings, and fiber laser resonator powers (1.5kW to 12kW).
                    </p>
                </div>
                <a href="{{ route('machines.index') }}" class="font-tech-spec text-tech-spec text-primary hover:underline inline-flex items-center gap-1">
                    Browse CNC Catalogue <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
            </div>

            <!-- Step 2 -->
            <div class="relative bg-surface-container/40 border border-surface-container-high rounded-xl p-space-xl flex flex-col justify-between hover:border-primary/40 transition-colors">
                <div>
                    <div class="flex items-center justify-between mb-space-md">
                        <span class="w-10 h-10 rounded bg-primary text-on-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold text-lg">02</span>
                        <span class="material-symbols-outlined text-[#25D366] text-[28px]">chat</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase tracking-wide mb-space-xs">WhatsApp RFQ</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-md">
                        Click the WhatsApp button or submit an RFQ form. Tell our technical engineers what material you cut (wood, acrylic, ACP, brass, MS/SS sheet) and required daily output.
                    </p>
                </div>
                <span class="font-tech-spec text-tech-spec text-[#25D366] inline-flex items-center gap-1">
                    Direct Plant Engineer Chat <span class="material-symbols-outlined text-[16px]">bolt</span>
                </span>
            </div>

            <!-- Step 3 -->
            <div class="relative bg-surface-container/40 border border-surface-container-high rounded-xl p-space-xl flex flex-col justify-between hover:border-primary/40 transition-colors">
                <div>
                    <div class="flex items-center justify-between mb-space-md">
                        <span class="w-10 h-10 rounded bg-primary text-on-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold text-lg">03</span>
                        <span class="material-symbols-outlined text-outline text-[28px]">smart_display</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase tracking-wide mb-space-xs">Live Cut &amp; Proforma</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-md">
                        Watch a live WhatsApp video cutting demonstration with your sample DXF file. We finalize your exact options and issue an official GST Proforma Invoice (PI) freezing the price.
                    </p>
                </div>
                <span class="font-tech-spec text-tech-spec text-primary inline-flex items-center gap-1">
                    Guaranteed Sample Accuracy <span class="material-symbols-outlined text-[16px]">precision_manufacturing</span>
                </span>
            </div>

            <!-- Step 4 -->
            <div class="relative bg-surface-container/40 border border-surface-container-high rounded-xl p-space-xl flex flex-col justify-between hover:border-primary/40 transition-colors">
                <div>
                    <div class="flex items-center justify-between mb-space-md">
                        <span class="w-10 h-10 rounded bg-primary text-on-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold text-lg">04</span>
                        <span class="material-symbols-outlined text-outline text-[28px]">local_shipping</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase tracking-wide mb-space-xs">Dispatch &amp; Setup</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-md">
                        Pay balance via bank RTGS. Your machine is export-crated, insured, and dispatched on dedicated flatbed transport. Our service engineer deploys to your factory for setup and training.
                    </p>
                </div>
                <span class="font-tech-spec text-tech-spec text-emerald-400 inline-flex items-center gap-1">
                    Turnkey Commissioning <span class="material-symbols-outlined text-[16px]">verified</span>
                </span>
            </div>
        </div>

        <!-- Frequently Asked Commercial Questions -->
        <div class="bg-surface-container/30 border border-surface-container-high rounded-2xl p-space-xl sm:p-space-2xl">
            <h3 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide mb-space-lg text-center">
                Frequently Asked Procurement Questions
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg font-body-md text-body-md text-on-surface-variant">
                <div class="bg-surface-container/60 p-space-lg rounded-xl border border-surface-container-high">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold block mb-space-xs">Can I claim GST Input Tax Credit (ITC)?</span>
                    <p class="leading-relaxed text-body-sm">
                        Yes, 100%. ZR IMPEX issues commercial Tax Invoices with standard 18% / 28% GST breakdowns and accurate HSN codes (8465 / 8456) allowing Indian enterprises to fully claim input tax credits.
                    </p>
                </div>

                <div class="bg-surface-container/60 p-space-lg rounded-xl border border-surface-container-high">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold block mb-space-xs">Do you provide machinery loan / financing assistance?</span>
                    <p class="leading-relaxed text-body-sm">
                        Yes. We provide verified Proforma Invoices and machine quotation documentation formatted specifically for Indian nationalized and private banks (SIDBI, SBI, HDFC, Kotak) to assist in machinery hypothecation loans.
                    </p>
                </div>

                <div class="bg-surface-container/60 p-space-lg rounded-xl border border-surface-container-high">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold block mb-space-xs">What training is provided to our machine operators?</span>
                    <p class="leading-relaxed text-body-sm">
                        Our commissioning engineer provides 2 to 3 days of hands-on plant training covering CAM software (ArtCAM, Aspire, CypCut), toolpath generation, origin zeroing, emergency recovery, and routine maintenance oiling.
                    </p>
                </div>

                <div class="bg-surface-container/60 p-space-lg rounded-xl border border-surface-container-high">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold block mb-space-xs">Are Annual Maintenance Contracts (AMC) available?</span>
                    <p class="leading-relaxed text-body-sm">
                        Yes. After the initial 12-month warranty period, customers can enroll in comprehensive or semi-comprehensive AMC packages guaranteeing priority spare parts dispatch and quarterly on-site spindle calibration.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
