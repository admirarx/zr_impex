@extends('layouts.app')

@section('title', 'ZR IMPEX — Heavy-Duty CNC Routers & Industrial Laser Systems')
@section('meta_description', 'Direct manufacturer and turnkey supplier of multi-axis CNC routers, industrial fiber laser marking, and sheet metal cutting systems across India.')

@section('content')
<div class="w-full bg-transparent min-h-screen"><div class="flex flex-col w-full">
<!-- HERO SECTION -->
<section class="relative w-full overflow-hidden bg-transparent">
<div class="absolute -top-40 right-1/4 w-96 h-96 rounded-full bg-primary/10 blur-3xl pointer-events-none"></div>
<div class="relative max-w-max-width-content mx-auto px-gutter-desktop py-space-3xl lg:py-space-4xl">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-2xl items-center">
<!-- Left Column: Copy & Value Proposition -->
<div class="lg:col-span-7 flex flex-col gap-space-lg">
<!-- System Status Bar -->
<div class="flex flex-wrap items-center gap-space-xs">
<span class="inline-flex items-center gap-space-xs bg-surface-container px-space-sm py-space-2xs rounded">
<span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
<span class="font-label-badge text-label-badge uppercase tracking-widest text-primary">Heavy Machinery Grade</span>
</span>
<span class="inline-flex items-center gap-space-xs bg-surface-container-high px-space-sm py-space-2xs rounded">
<span class="material-symbols-outlined text-secondary text-[14px]">precision_manufacturing</span>
<span class="font-label-caps text-label-caps text-secondary uppercase tracking-wider">ZR IMPEX Industrial Systems</span>
</span>
<span class="inline-flex items-center gap-space-xs bg-surface-container-low px-space-sm py-space-2xs rounded font-label-caps text-label-caps text-outline">
<span>ISO 9001:2015 CERTIFIED</span>
</span>
</div>
<!-- Headline -->
<h1 class="font-display-hero text-display-hero text-on-surface tracking-tight leading-tight">
            Heavy-Duty CNC Routers &amp; High-Precision Fiber Laser Systems Engineered for <span class="text-primary underline decoration-primary/40 decoration-4 underline-offset-8">24/7 Factory Production</span>
</h1>
<!-- Lead Body Copy -->
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
            Direct manufacturer and turnkey supplier of multi-axis CNC routers, industrial fiber laser marking, and sheet metal cutting systems. Tested to ISO 9001 standards with Pan-India dispatch, on-site commissioning, and guaranteed spare parts availability.
          </p>
<!-- Dual CTAs -->
<div class="flex flex-wrap items-center gap-space-md pt-space-xs">
<a class="inline-flex items-center justify-center gap-space-sm bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm font-bold px-space-xl py-space-md rounded shadow-lg hover:shadow-primary/20 transition-all active:translate-y-[1px]" href="#featured-machines">
<span class="material-symbols-outlined text-[20px]">view_in_ar</span>
<span>Explore CNC Catalogue</span>
</a>
<a class="inline-flex items-center justify-center gap-space-sm bg-surface-container-highest hover:bg-surface-container-high text-primary font-headline-sm text-headline-sm px-space-lg py-space-md rounded transition-all active:translate-y-[1px] shadow-sm" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Hello ZR IMPEX, I would like an instant quotation for CNC and Laser systems.') }}" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span>
<span>Quick WhatsApp Enquiry</span>
<span class="w-2 h-2 rounded-full bg-primary animate-pulse ml-space-2xs"></span>
</a>
</div>
<!-- Quick Technical Spec Badges Bar -->
<div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm pt-space-md">
<div class="flex flex-col bg-surface-container-low p-space-sm rounded">
<span class="font-tech-spec text-tech-spec text-primary">±0.002 mm</span>
<span class="font-label-badge text-label-badge uppercase text-outline mt-space-2xs">Galvo Repeatability</span>
</div>
<div class="flex flex-col bg-surface-container-low p-space-sm rounded">
<span class="font-tech-spec text-tech-spec text-primary">Up to 12kW</span>
<span class="font-label-badge text-label-badge uppercase text-outline mt-space-2xs">Fiber Cut Power</span>
</div>
<div class="flex flex-col bg-surface-container-low p-space-sm rounded">
<span class="font-tech-spec text-tech-spec text-primary">600°C Annealed</span>
<span class="font-label-badge text-label-badge uppercase text-outline mt-space-2xs">Stress-Relieved Bed</span>
</div>
<div class="flex flex-col bg-surface-container-low p-space-sm rounded">
<span class="font-tech-spec text-tech-spec text-primary">&lt; 24h</span>
<span class="font-label-badge text-label-badge uppercase text-outline mt-space-2xs">Field Support</span>
</div>
</div>
</div>
<!-- Right Column: Workshop Image Showcase with Live Telemetry Overlay -->
<div class="lg:col-span-5 relative">
<div class="relative bg-surface-container rounded-xl overflow-hidden shadow-2xl">
<!-- Machine Image -->
<img class="w-full h-[460px] object-cover" data-alt="Heavy industrial CNC router machining a thick aerospace aluminum billet inside a dark factory workshop with sharp metallic sparks flying, coolant mist, high-precision gantry system, and gold glowing indicator lights reflected on oiled steel rails, 8k crisp industrial photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSCpoO8IMWjQxUnZ28OW6CDwzb6ZvRD9S0wxZA_wLn5HqM-1NHQhobKNyg1IkW0lSpohy5gtUyPNbXBiQRu-8DdPGn3lAjsnQInrePIci31xbQcAPg5MykfhQBbnwDNrzFNd_6oPFPySjO9bHR1vUsfUKE9UTBNk8sGwhU5hlqtlwrVuUldTmtfFedQII6Ui_F5Fu6cSstaDMyJ35qGdh-hk6D5FmoG6ERkZt0nEOpvLnHtakwfaa5"/>
<!-- Gradient Scrim -->
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest via-surface-container-lowest/30 to-transparent"></div>
<!-- Integrated Brand Seal Over Machine -->
<div class="absolute top-space-md left-space-md bg-surface-dim/90 backdrop-blur-md px-space-md py-space-xs rounded flex items-center gap-space-sm shadow-md">
<span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
<span class="font-headline-sm text-headline-sm font-bold text-on-surface tracking-wider">ZR IMPEX 1325 ATC</span>
<span class="font-label-badge text-label-badge bg-primary/20 text-primary px-space-xs py-space-2xs rounded">ONLINE</span>
</div>
<!-- Live CNC Digital Readout Box -->
<div class="absolute bottom-space-md left-space-md right-space-md bg-surface-container-highest/95 backdrop-blur-md p-space-md rounded shadow-xl">
<div class="flex items-center justify-between pb-space-xs mb-space-xs bg-surface-container-low/50 px-space-xs rounded">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[16px]">tune</span>
<span class="font-label-caps text-label-caps text-primary uppercase">Axis Telemetry Monitor</span>
</div>
<span class="font-tech-spec text-tech-spec text-secondary">FEED: 35.0 m/min</span>
</div>
<div class="grid grid-cols-3 gap-space-sm text-center">
<div class="bg-surface-container p-space-xs rounded">
<span class="font-label-badge text-label-badge text-outline uppercase block">X-Axis</span>
<span class="font-tech-spec text-tech-spec text-on-surface font-bold">1,300.00 mm</span>
</div>
<div class="bg-surface-container p-space-xs rounded">
<span class="font-label-badge text-label-badge text-outline uppercase block">Y-Axis</span>
<span class="font-tech-spec text-tech-spec text-on-surface font-bold">2,500.00 mm</span>
</div>
<div class="bg-surface-container p-space-xs rounded">
<span class="font-label-badge text-label-badge text-outline uppercase block">Spindle</span>
<span class="font-tech-spec text-tech-spec text-primary font-bold">24,000 RPM</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- SOCIAL PROOF & HARD METRICS TRUST STRIP -->
<section class="w-full bg-surface-dim/60 backdrop-blur-xs py-space-xl border-y border-surface-container/60">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg mb-space-xl">
<div class="flex items-center gap-space-md bg-surface-container p-space-md rounded shadow-sm">
<div class="w-12 h-12 rounded bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[28px]">precision_manufacturing</span>
</div>
<div class="flex flex-col">
<span class="font-headline-lg text-headline-lg font-bold text-on-surface">1,450+</span>
<span class="font-label-caps text-label-caps uppercase text-outline">Machines Installed Pan-India</span>
</div>
</div>
<div class="flex items-center gap-space-md bg-surface-container p-space-md rounded shadow-sm">
<div class="w-12 h-12 rounded bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[28px]">bolt</span>
</div>
<div class="flex flex-col">
<span class="font-headline-lg text-headline-lg font-bold text-on-surface">99.4%</span>
<span class="font-label-caps text-label-caps uppercase text-outline">Verified Uptime Rate</span>
</div>
</div>
<div class="flex items-center gap-space-md bg-surface-container p-space-md rounded shadow-sm">
<div class="w-12 h-12 rounded bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[28px]">local_shipping</span>
</div>
<div class="flex flex-col">
<span class="font-headline-lg text-headline-lg font-bold text-on-surface">&lt; 24h</span>
<span class="font-label-caps text-label-caps uppercase text-outline">Emergency Spares Dispatch</span>
</div>
</div>
<div class="flex items-center gap-space-md bg-surface-container p-space-md rounded shadow-sm">
<div class="w-12 h-12 rounded bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[28px]">verified</span>
</div>
<div class="flex flex-col">
<span class="font-headline-lg text-headline-lg font-bold text-on-surface">15+ Yrs</span>
<span class="font-label-caps text-label-caps uppercase text-outline">Precision CNC Excellence</span>
</div>
</div>
</div>
<!-- Sector Badges -->
<div class="flex flex-col md:flex-row items-center justify-between gap-space-md bg-surface-container-lowest p-space-md rounded">
<span class="font-label-caps text-label-caps text-outline uppercase tracking-wider text-center md:text-left">
          Trusted by 1,200+ Manufacturing Units Across Key Industrial Sectors:
        </span>
<div class="flex flex-wrap items-center justify-center gap-space-sm">
<span class="px-space-sm py-space-2xs bg-surface-container text-on-surface-variant font-label-caps text-label-caps uppercase rounded">Automotive Components</span>
<span class="px-space-sm py-space-2xs bg-surface-container text-on-surface-variant font-label-caps text-label-caps uppercase rounded">Aerospace Tooling</span>
<span class="px-space-sm py-space-2xs bg-surface-container text-on-surface-variant font-label-caps text-label-caps uppercase rounded">Architectural Cladding</span>
<span class="px-space-sm py-space-2xs bg-surface-container text-on-surface-variant font-label-caps text-label-caps uppercase rounded">Signage &amp; Acrylic Works</span>
<span class="px-space-sm py-space-2xs bg-surface-container text-on-surface-variant font-label-caps text-label-caps uppercase rounded">Fine Jewellery</span>
</div>
</div>
</div>
</section>
<!-- THE PROBLEM STATEMENT: DOWNTIME & SUB-STANDARD MACHINERY -->
<section class="w-full py-space-3xl bg-transparent">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col items-center text-center max-w-3xl mx-auto mb-space-2xl">
<div class="flex items-center gap-space-xs bg-error-container/40 px-space-sm py-space-2xs rounded mb-space-sm">
<span class="material-symbols-outlined text-error text-[16px]">warning</span>
<span class="font-label-caps text-label-caps text-error uppercase tracking-wider">Industrial Reality Check</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
          The Real Cost of Factory Downtime &amp; Sub-Standard Machinery
        </h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-sm">
          A machine tool that fails mid-shift doesn’t just halt cutting—it destroys delivery contracts, wastes expensive sheet metal, and burns customer trust.
        </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-xl">
<!-- Risk 1 -->
<div class="bg-surface-container p-space-xl rounded-lg shadow-md flex flex-col justify-between">
<div class="flex flex-col gap-space-sm">
<div class="w-10 h-10 rounded bg-error/10 flex items-center justify-center text-error mb-space-xs">
<span class="material-symbols-outlined text-[24px]">architecture</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">
              Lightweight Welded Frames Flex &amp; Lose Calibration
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              Low-cost imported router beds skip high-temperature thermal stress annealing. Within 6 months of heavy vibration, the gantry warps, destroying positioning accuracy and chewing through linear bearings.
            </p>
</div>
<div class="mt-space-lg pt-space-md bg-surface-container-low p-space-sm rounded font-tech-spec text-tech-spec text-error">
            Loss: Up to 0.45mm deviation in corner contouring
          </div>
</div>
<!-- Risk 2 -->
<div class="bg-surface-container p-space-xl rounded-lg shadow-md flex flex-col justify-between">
<div class="flex flex-col gap-space-sm">
<div class="w-10 h-10 rounded bg-error/10 flex items-center justify-center text-error mb-space-xs">
<span class="material-symbols-outlined text-[24px]">person_off</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">
              Trader Middlemen With Zero Local Field Service
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              Brokers import white-label machines without keeping engineers on staff. When a servo driver throws an alarm code, plant owners wait 3 to 6 weeks for overseas factory emails while jobs sit frozen.
            </p>
</div>
<div class="mt-space-lg pt-space-md bg-surface-container-low p-space-sm rounded font-tech-spec text-tech-spec text-error">
            Loss: &gt; ₹45,000 lost production margin per idle day
          </div>
</div>
<!-- Risk 3 -->
<div class="bg-surface-container p-space-xl rounded-lg shadow-md flex flex-col justify-between">
<div class="flex flex-col gap-space-sm">
<div class="w-10 h-10 rounded bg-error/10 flex items-center justify-center text-error mb-space-xs">
<span class="material-symbols-outlined text-[24px]">extension_off</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">
              Unbranded Inverters &amp; Counterfeit Optical Consumables
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              Generic electrospindles and dubious optical protective glass burn out quickly under heavy 24/7 loads. Sourcing non-standard replacement parts causes catastrophic long-term plant slowdowns.
            </p>
</div>
<div class="mt-space-lg pt-space-md bg-surface-container-low p-space-sm rounded font-tech-spec text-tech-spec text-error">
            Loss: Optical head replacement exceeding ₹1,80,000
          </div>
</div>
</div>
</div>
</section>
<!-- ZR IMPEX 4-PILLAR RIGOR SOLUTION -->
<section class="w-full py-space-3xl bg-surface-dim/60 backdrop-blur-xs border-y border-surface-container/60">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-2xl gap-space-lg">
<div class="flex flex-col max-w-2xl">
<span class="font-label-caps text-label-caps uppercase text-primary tracking-widest mb-space-2xs">The ZR Impex Standard</span>
<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
            Heavy Steel Construction, Calibrated Optical Alignment
          </h2>
</div>
<a class="inline-flex items-center gap-space-xs text-primary hover:text-primary-fixed font-headline-sm text-headline-sm" href="https://wa.me/{{ preg_replace('/[^0-9]/', '', \App\Models\SiteSetting::get('whatsapp_number', '919250630381')) }}?text={{ urlencode('I would like to review ZR Impex machine build specs') }}" rel="noopener noreferrer" target="_blank">
<span>Request Full Engineering Dossier</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg">
<!-- Pillar 1 -->
<div class="bg-surface-container p-space-lg rounded-lg shadow-sm flex flex-col justify-between">
<div>
<div class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary mb-space-sm">01</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
              600°C Annealed Steel Frame
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              Every CNC router bed and laser chassis undergoes a 12-hour high-temperature heat treatment cycle to eliminate internal welding stress, guaranteeing permanent structural rigidity.
            </p>
</div>
<div class="mt-space-md pt-space-sm bg-surface-container-high p-space-xs rounded font-label-caps text-label-caps text-secondary">
            SPEC: 10mm-12mm Heavy Wall Tubular Box Gantry
          </div>
</div>
<!-- Pillar 2 -->
<div class="bg-surface-container p-space-lg rounded-lg shadow-sm flex flex-col justify-between">
<div>
<div class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary mb-space-sm">02</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
              Genuine Tier-1 Global Components
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              No generic clones. We configure exclusively with Raycus / MAX Photonics fiber sources, Yaskawa / Delta AC servo systems, HSD Italy electrospindles, and Taiwan Hiwin linear rails.
            </p>
</div>
<div class="mt-space-md pt-space-sm bg-surface-container-high p-space-xs rounded font-label-caps text-label-caps text-secondary">
            PARTS: 100% Traceable OEM Serial Numbers
          </div>
</div>
<!-- Pillar 3 -->
<div class="bg-surface-container p-space-lg rounded-lg shadow-sm flex flex-col justify-between">
<div>
<div class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary mb-space-sm">03</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
              Laser Interferometer Calibration
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              Before shipping, every axis is laser-measured across full travel stroke to verify dynamic repeatability to ISO 2768-M tolerance. Complete test certificates accompany the machine.
            </p>
</div>
<div class="mt-space-md pt-space-sm bg-surface-container-high p-space-xs rounded font-label-caps text-label-caps text-secondary">
            ACCURACY: Dynamic Pitch Error Compensation
          </div>
</div>
<!-- Pillar 4 -->
<div class="bg-surface-container p-space-lg rounded-lg shadow-sm flex flex-col justify-between">
<div>
<div class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary mb-space-sm">04</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
              Turnkey Commissioning &amp; Training
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              Factory-certified application engineers travel to your plant for anchor leveling, high-precision calibration, and comprehensive hands-on training for your operators in ArtCAM and CypCut.
            </p>
</div>
<div class="mt-space-md pt-space-sm bg-surface-container-high p-space-xs rounded font-label-caps text-label-caps text-secondary">
            FIELD DESK: Pan-India Rapid Deployment Fleet
          </div>
</div>
</div>
</div>
</section>
<!-- FEATURED FLAGSHIP CNC & LASER MACHINERY -->
<section class="w-full py-space-3xl bg-transparent" id="featured-machines">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-lg">
<div class="flex flex-col">
<span class="font-label-caps text-label-caps uppercase text-primary tracking-widest mb-space-2xs">Production-Ready Equipment</span>
<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
            Featured CNC Routers &amp; Laser Machines
          </h2>
</div>
<!-- Filter Bar Navigation & View All Action -->
<div class="flex flex-wrap items-center gap-space-xs">
<div class="flex flex-wrap gap-space-xs bg-surface-container p-space-xs rounded border border-surface-container-highest/60" id="machine-filter-group">
<button class="filter-btn active bg-primary text-on-primary px-space-md py-space-xs rounded font-label-caps text-label-caps uppercase font-bold transition-all cursor-pointer shadow-sm" data-filter="all">All Systems</button>
@foreach($machineCategories as $cat)
<button class="filter-btn bg-surface-container-high hover:bg-surface-container-highest text-on-surface-variant border border-surface-container-highest/40 px-space-md py-space-xs rounded font-label-caps text-label-caps uppercase transition-all cursor-pointer" data-filter="{{ $cat->slug }}">{{ $cat->name }}</button>
@endforeach
</div>
<a href="{{ route('machines.index') }}" class="inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-bold transition-all shadow-sm whitespace-nowrap">
<span>View All CNC Machines</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Machines Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-space-xl">
@forelse($featuredMachines as $machine)
@php
    $machineWaUrl = \App\Services\WhatsAppUrlBuilder::build($machine);
    $topSpecs = $machine->specifications->filter(fn($s) => filled($s->spec_value))->take(3);
@endphp
<div class="machine-card group bg-surface-container rounded-xl overflow-hidden shadow-md border border-surface-container-highest/70 flex flex-col justify-between transition-all hover:translate-y-[-2px] hover:shadow-xl hover:border-primary/50" data-category="{{ $machine->category?->slug ?? 'general' }}">
<div>
<div class="relative h-56 overflow-hidden bg-surface-container-low flex items-center justify-center">
<a href="{{ route('machines.show', $machine->slug) }}" class="block w-full h-full flex items-center justify-center" title="View {{ $machine->name }} details">
@if(!empty($machine->primary_image))
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
     src="{{ $machine->primary_image_url }}" 
     alt="{{ $machine->name }}" 
     loading="lazy" />
@else
<div class="w-full h-full flex flex-col items-center justify-center p-space-sm bg-surface-container-low text-center">
    <img class="max-h-16 max-w-[140px] object-contain opacity-75 mb-space-2xs" src="{{ asset('images/brand/logo.jpeg') }}" alt="ZR IMPEX" />
    <span class="font-label-caps text-label-caps uppercase text-on-surface-variant text-[11px]">ZR IMPEX Machinery</span>
</div>
@endif
</a>
<div class="absolute top-space-sm left-space-sm flex gap-space-xs pointer-events-none">
@if($machine->is_featured)
<span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">FEATURED</span>
@endif
@if($machine->model_number)
<span class="bg-surface-container-lowest/80 text-on-surface backdrop-blur font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">{{ $machine->model_number }}</span>
@endif
</div>
</div>
<div class="p-space-md flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-caps text-label-caps text-outline uppercase truncate max-w-[150px]">{{ $machine->category?->name ?? 'Industrial CNC' }}</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold group-hover:text-primary transition-colors line-clamp-1">
<a href="{{ route('machines.show', $machine->slug) }}" class="hover:text-primary transition-colors">
{{ $machine->name }}
</a>
</h3>
@if($machine->short_description)
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
{{ $machine->short_description }}
</p>
@endif

@if($topSpecs->isNotEmpty())
<div class="grid grid-cols-3 gap-space-xs bg-surface-container-low border border-surface-container-highest/40 p-space-xs rounded my-space-xs text-center font-tech-spec text-tech-spec">
@foreach($topSpecs as $spec)
<div class="overflow-hidden">
<span class="font-label-badge text-label-badge uppercase text-outline block truncate" title="{{ $spec->spec_name }}">{{ \Illuminate\Support\Str::limit($spec->spec_name, 10) }}</span>
<span class="text-on-surface text-body-sm font-semibold truncate block" title="{{ $spec->spec_value }}">{{ \Illuminate\Support\Str::limit($spec->spec_value, 12) }}</span>
</div>
@endforeach
</div>
@endif
</div>
</div>
<div class="p-space-md pt-0 flex flex-col gap-space-xs">
<a href="{{ route('machines.show', $machine->slug) }}" class="w-full inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-body-md font-semibold py-space-sm rounded transition-colors text-center border border-surface-container-highest/60">
<span>Specs</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
<button type="button" 
        onclick="window.openWhatsApp('{{ $machineWaUrl }}', {{ $machine->id }})"
        class="w-full inline-flex items-center justify-center gap-space-xs bg-primary/10 hover:bg-primary/20 text-primary border border-primary/30 font-headline-sm text-body-md font-semibold py-space-sm rounded transition-colors cursor-pointer">
<span class="material-symbols-outlined text-[18px]">chat</span>
<span>WhatsApp Price</span>
</button>
</div>
</div>
@empty
<div class="col-span-full py-space-3xl flex flex-col items-center justify-center text-center bg-surface-container rounded-xl p-space-xl border border-surface-container-highest">
  <span class="material-symbols-outlined text-primary text-[48px] mb-space-sm">precision_manufacturing</span>
  <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">No Featured Machines Available</h3>
  <p class="font-body-sm text-body-sm text-on-surface-variant max-w-md mt-space-xs">
    We are updating our featured machinery catalogue. Please explore our complete inventory of industrial CNC systems to find what you need.
  </p>
  <a href="{{ route('machines.index') }}" class="mt-space-md inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-bold transition-all shadow-sm">
    <span>View All CNC Machines</span>
    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
  </a>
</div>
@endforelse
</div>
<!-- Catalogue Bottom Bar -->
<div class="mt-space-xl p-space-lg bg-surface-container-low rounded-xl flex flex-col sm:flex-row items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<span class="material-symbols-outlined text-primary text-[28px]">inventory</span>
<div>
<h4 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Custom CNC Gantry or Multi-Head Needs?</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">We build custom 4-axis, 5-axis, and 2000×4000mm oversized CNC routers engineered to your workpiece specifications.</p>
</div>
</div>
<a class="inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-lg py-space-sm rounded font-bold transition-all whitespace-nowrap" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'I need a custom specification CNC machine') }}" rel="noopener noreferrer" target="_blank">
<span>Consult Factory Engineer</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</div>
</section>
<!-- ORIGINAL SPARE PARTS & OPTICAL CONSUMABLES SECTION -->
<section class="w-full py-space-3xl bg-surface-dim/60 backdrop-blur-xs border-y border-surface-container/60" id="featured-spares">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-lg">
<div class="flex flex-col max-w-2xl">
<div class="flex items-center gap-space-xs bg-surface-container px-space-sm py-space-2xs rounded w-fit mb-space-2xs">
<span class="material-symbols-outlined text-primary text-[16px]">verified</span>
<span class="font-label-caps text-label-caps text-primary uppercase">Guaranteed OEM Readiness</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
            Original Spare Parts &amp; Optical Consumables in Stock
          </h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-2xs">
            Direct replacement components dispatched within 24 hours. Keep your spindles spinning and laser beams focused without costly factory lead times.
          </p>
</div>
<!-- Header Right: View All Spare Parts Action -->
<div class="flex flex-wrap items-center gap-space-xs">
<a class="inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-bold transition-all shadow-sm whitespace-nowrap" href="{{ route('spare-parts.index') }}">
<span>View All Spare Parts</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Spare Parts 4-Column Grid matching CNC Machines Section Layout -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-xl">
@forelse($spareParts as $sparePart)
@php
    $spareWaUrl = \App\Services\WhatsAppUrlBuilder::build($sparePart);
    $topSpecs = $sparePart->specifications->filter(fn($s) => filled($s->spec_value))->take(3);
@endphp
<div class="spare-card group bg-surface-container rounded-xl overflow-hidden shadow-md border border-surface-container-highest/70 flex flex-col justify-between transition-all hover:translate-y-[-2px] hover:shadow-xl hover:border-primary/50">
<div>
<div class="relative h-56 overflow-hidden bg-surface-container-low flex items-center justify-center">
<a href="{{ route('spare-parts.show', $sparePart->slug) }}" class="block w-full h-full flex items-center justify-center" title="View {{ $sparePart->name }} details">
@if(!empty($sparePart->primary_image))
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
     src="{{ $sparePart->primary_image_url }}" 
     alt="{{ $sparePart->name }}" 
     loading="lazy" />
@else
<div class="w-full h-full flex flex-col items-center justify-center p-space-sm bg-surface-container-low text-center">
    <img class="max-h-16 max-w-[140px] object-contain opacity-75 mb-space-2xs" src="{{ asset('images/brand/logo.jpeg') }}" alt="ZR IMPEX" />
    <span class="font-label-caps text-label-caps uppercase text-on-surface-variant text-[11px]">ZR IMPEX Genuine Spares</span>
</div>
@endif
</a>
<div class="absolute top-space-sm left-space-sm flex gap-space-xs pointer-events-none">
<span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">READY STOCK</span>
@if($sparePart->model_number)
<span class="bg-surface-container-lowest/80 text-on-surface backdrop-blur font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">{{ $sparePart->model_number }}</span>
@endif
</div>
</div>
<div class="p-space-md flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-caps text-label-caps text-outline uppercase truncate max-w-[150px]">{{ $sparePart->category?->name ?? 'Spare Part' }}</span>
<span class="font-tech-spec text-tech-spec text-primary font-semibold">100% Genuine</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold group-hover:text-primary transition-colors line-clamp-1">
<a href="{{ route('spare-parts.show', $sparePart->slug) }}" class="hover:text-primary transition-colors">
{{ $sparePart->name }}
</a>
</h3>
@if($sparePart->short_description)
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
{{ $sparePart->short_description }}
</p>
@endif

@if($topSpecs->isNotEmpty())
<div class="grid grid-cols-3 gap-space-xs bg-surface-container-low border border-surface-container-highest/40 p-space-xs rounded my-space-xs text-center font-tech-spec text-tech-spec">
@foreach($topSpecs as $spec)
<div class="overflow-hidden">
<span class="font-label-badge text-label-badge uppercase text-outline block truncate" title="{{ $spec->spec_name }}">{{ \Illuminate\Support\Str::limit($spec->spec_name, 10) }}</span>
<span class="text-on-surface text-body-sm font-semibold truncate block" title="{{ $spec->spec_value }}">{{ \Illuminate\Support\Str::limit($spec->spec_value, 12) }}</span>
</div>
@endforeach
</div>
@endif
</div>
</div>
<div class="p-space-md pt-0 flex flex-col gap-space-xs">
<a href="{{ route('spare-parts.show', $sparePart->slug) }}" class="w-full inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-body-md font-semibold py-space-sm rounded transition-colors text-center border border-surface-container-highest/60">
<span>Specs</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
<button type="button" 
        onclick="window.openWhatsApp('{{ $spareWaUrl }}', {{ $sparePart->id }})"
        class="w-full inline-flex items-center justify-center gap-space-xs bg-primary/10 hover:bg-primary/20 text-primary border border-primary/30 font-headline-sm text-body-md font-semibold py-space-sm rounded transition-colors cursor-pointer">
<span class="material-symbols-outlined text-[18px]">chat</span>
<span>WhatsApp Price</span>
</button>
</div>
</div>
@empty
<div class="col-span-full py-space-3xl flex flex-col items-center justify-center text-center bg-surface-container rounded-xl p-space-xl border border-surface-container-highest">
  <span class="material-symbols-outlined text-primary text-[48px] mb-space-sm">settings_suggest</span>
  <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">No Featured Spare Parts Available</h3>
  <p class="font-body-sm text-body-sm text-on-surface-variant max-w-md mt-space-xs">
    We are currently updating our featured spare parts and consumables list. Check our complete inventory for immediate stock availability.
  </p>
  <a href="{{ route('spare-parts.index') }}" class="mt-space-md inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-bold transition-all shadow-sm">
    <span>View All Spare Parts</span>
    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
  </a>
</div>
@endforelse
</div>
</div>
</section>
<!-- HOW IT WORKS: 4-STEP COMMISSIONING PROTOCOL -->
<section class="w-full py-space-3xl bg-surface">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col items-center text-center max-w-3xl mx-auto mb-space-2xl">
<span class="font-label-caps text-label-caps uppercase text-primary tracking-widest mb-space-2xs">Zero Guesswork Onboarding</span>
<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
          How We Deploy Your Machine: From Raw Material to Full Output
        </h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-2xs">
          Our factory engineers handle the heavy lifting, alignment, and software training so your production floor begins generating revenue on Day One.
        </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-space-lg relative">
<!-- Step 1 -->
<div class="bg-surface-container p-space-lg rounded-lg shadow-sm flex flex-col justify-between relative">
<div>
<div class="w-10 h-10 rounded bg-primary text-on-primary font-headline-sm text-headline-sm font-bold flex items-center justify-center mb-space-md">1</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
              Sample Cut &amp; Feasibility
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              Send your raw material or CAD blueprint to our Gujarat demo facility. We run trial cuts, measure tolerances, and record cycle times before you commit.
            </p>
</div>
<div class="mt-space-md font-label-caps text-label-caps text-primary uppercase">
            Step 1: Free Trial Testing
          </div>
</div>
<!-- Step 2 -->
<div class="bg-surface-container p-space-lg rounded-lg shadow-sm flex flex-col justify-between relative">
<div>
<div class="w-10 h-10 rounded bg-primary text-on-primary font-headline-sm text-headline-sm font-bold flex items-center justify-center mb-space-md">2</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
              Factory Build &amp; Alignment
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              Your gantry frame is machined, stress-relieved, and fitted with certified Yaskawa/Raytools parts, followed by a continuous 72-hour burn-in stress test.
            </p>
</div>
<div class="mt-space-md font-label-caps text-label-caps text-primary uppercase">
            Step 2: 72hr Stress Test
          </div>
</div>
<!-- Step 3 -->
<div class="bg-surface-container p-space-lg rounded-lg shadow-sm flex flex-col justify-between relative">
<div>
<div class="w-10 h-10 rounded bg-primary text-on-primary font-headline-sm text-headline-sm font-bold flex items-center justify-center mb-space-md">3</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
              On-Site Setup &amp; Training
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              Our field service technician arrives at your plant for gantry leveling, optical focus calibration, and thorough operator training in G-code and nesting.
            </p>
</div>
<div class="mt-space-md font-label-caps text-label-caps text-primary uppercase">
            Step 3: Pan-India Techs
          </div>
</div>
<!-- Step 4 -->
<div class="bg-surface-container p-space-lg rounded-lg shadow-sm flex flex-col justify-between relative">
<div>
<div class="w-10 h-10 rounded bg-primary text-on-primary font-headline-sm text-headline-sm font-bold flex items-center justify-center mb-space-md">4</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
              Warranty &amp; Rapid Support
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              Enjoy complete 2-year warranty coverage on core components, instant WhatsApp telemetry triage, and priority spare parts dispatch across India.
            </p>
</div>
<div class="mt-space-md font-label-caps text-label-caps text-primary uppercase">
            Step 4: 24/7 Hotline Access
          </div>
</div>
</div>
</div>
</section>
<!-- INTERACTIVE APPLICATION EXPLORER -->
<section class="w-full py-space-3xl bg-surface-dim/60 backdrop-blur-xs border-y border-surface-container/60">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-2xl">
<div class="lg:col-span-5 flex flex-col gap-space-md">
<span class="font-label-caps text-label-caps uppercase text-primary tracking-widest">Clear Engineering Answers</span>
<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
            Frequently Asked Technical Questions
          </h2>
<p class="font-body-md text-body-md text-on-surface-variant">
            Have questions about electrical power supply, Raycus source warranties, or custom cutting bed dimensions? Our engineering team has documented the critical details below.
          </p>
<div class="mt-space-md p-space-md bg-surface-container rounded-lg">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold block mb-space-xs">Need Direct Consultation?</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">Speak directly with our senior CNC systems application specialist.</p>
<a class="inline-flex items-center gap-space-xs text-primary font-headline-sm text-headline-sm" href="tel:{{ preg_replace('/[^0-9+]/', '', \App\Models\SiteSetting::get('primary_phone', '+91 9899639380')) }}">
<span class="material-symbols-outlined text-[18px]">call</span>
<span>{{ \App\Models\SiteSetting::get('primary_phone', '+91 9899639380') }}</span>
</a>
</div>
</div>
<div class="lg:col-span-7 flex flex-col gap-space-sm" id="faq-accordion">
<!-- Question 1 -->
<div class="faq-item bg-surface-container rounded-lg overflow-hidden">
<button class="faq-toggle w-full p-space-md flex items-center justify-between text-left hover:bg-surface-container-high transition-colors">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">What are the factory power requirements for 3kW-12kW fiber lasers and heavy CNC routers?</span>
<span class="material-symbols-outlined text-primary text-[20px] transition-transform duration-300">expand_more</span>
</button>
<div class="faq-content px-space-md pb-space-md text-on-surface-variant font-body-md text-body-md">
              CNC Routers typically run on 3-Phase 415V ±10%, 50Hz AC power (approx 10-15 kW with vacuum bed blowers active). Fiber lasers from 3kW to 12kW require 3-Phase 415V with dedicated earth grounding (&lt; 4 Ohms resistance) and an industrial servo voltage stabilizer to ensure beam consistency.
            </div>
</div>
<!-- Question 2 -->
<div class="faq-item bg-surface-container rounded-lg overflow-hidden">
<button class="faq-toggle w-full p-space-md flex items-center justify-between text-left hover:bg-surface-container-high transition-colors">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">What is the warranty coverage on Raycus and MAX fiber laser sources?</span>
<span class="material-symbols-outlined text-primary text-[20px] transition-transform duration-300">expand_more</span>
</button>
<div class="faq-content hidden px-space-md pb-space-md text-on-surface-variant font-body-md text-body-md">
              All Raycus and MAX Photonics fiber laser sources provided by ZR IMPEX include a full 2-year manufacturer warranty. Because we maintain authorized testing instruments at our Gujarat plant, minor module or diode replacements can be performed domestically without shipping the source back overseas.
            </div>
</div>
<!-- Question 3 -->
<div class="faq-item bg-surface-container rounded-lg overflow-hidden">
<button class="faq-toggle w-full p-space-md flex items-center justify-between text-left hover:bg-surface-container-high transition-colors">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Which CAM and nesting software packages do your machines support?</span>
<span class="material-symbols-outlined text-primary text-[20px] transition-transform duration-300">expand_more</span>
</button>
<div class="faq-content hidden px-space-md pb-space-md text-on-surface-variant font-body-md text-body-md">
              Our CNC routers support standard industry G-code output generated from Vectric Aspire, ArtCAM, AutoCAD, SolidWorks, and Fusion 360 through DSP or NC-Studio / Syntec controllers. Fiber laser cutting systems use CypCut / Friendess CNC with integrated automated nesting and edge-seeking algorithms.
            </div>
</div>
<!-- Question 4 -->
<div class="faq-item bg-surface-container rounded-lg overflow-hidden">
<button class="faq-toggle w-full p-space-md flex items-center justify-between text-left hover:bg-surface-container-high transition-colors">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">What is the typical delivery timeline and dispatch protocol across India?</span>
<span class="material-symbols-outlined text-primary text-[20px] transition-transform duration-300">expand_more</span>
</button>
<div class="faq-content hidden px-space-md pb-space-md text-on-surface-variant font-body-md text-body-md">
              Standard format machines (1325 CNC Routers and 30W/50W Fiber Marking units) are maintained in ready stock for dispatch within 48 to 72 hours. High-power sheet lasers and custom gantry formats typically require 15 to 25 business days for precision assembly, stress testing, and packaging in fumigated export-grade wooden crates.
            </div>
</div>
</div>
</div>
</div>
</section>
<!-- HIGH CONVERSION LEAD RFQ & QUICK ACTION -->
<section class="w-full py-space-3xl bg-transparent relative overflow-hidden">
<div class="absolute -bottom-20 -right-20 w-96 h-96 rounded-full bg-primary/5 blur-3xl pointer-events-none"></div>
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="bg-surface-container p-space-xl lg:p-space-2xl rounded-2xl shadow-2xl">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-2xl items-center">
<div class="lg:col-span-6 flex flex-col gap-space-md">
<span class="font-label-caps text-label-caps uppercase text-primary tracking-widest">Accelerate Shop-Floor ROI</span>
<h2 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
              Ready to Upgrade Your Factory’s Production Capacity?
            </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
              Request a comprehensive technical quotation, schedule a live cutting demonstration with your sample material, or speak directly with our Chief CNC Engineer.
            </p>
<div class="flex flex-col gap-space-xs mt-space-sm font-tech-spec text-tech-spec text-on-surface-variant">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[18px]">verified</span>
<span>Immediate commercial proposal including GST &amp; freight estimates</span>
</div>
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[18px]">verified</span>
<span>Factory direct pricing with guaranteed spare part support</span>
</div>
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[18px]">verified</span>
<span>On-site operator training and leveling included</span>
</div>
</div>
<div class="pt-space-md">
<a class="inline-flex items-center gap-space-sm bg-surface-container-highest hover:bg-surface-container-high text-primary font-headline-sm text-headline-sm px-space-lg py-space-md rounded transition-all shadow-md active:translate-y-[1px]" href="https://wa.me/{{ preg_replace('/[^0-9]/', '', \App\Models\SiteSetting::get('whatsapp_number', '919250630381')) }}?text={{ urlencode('Hello ZR Impex, I would like an instant quotation with commercial terms.') }}" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[22px]">chat</span>
<span>Instant WhatsApp Quotation Desk</span>
</a>
</div>
</div>
<!-- Quick Quote Form Preview -->
<div class="lg:col-span-6 bg-surface-container-low p-space-lg lg:p-space-xl rounded-xl shadow-lg">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-sm">
              Quick Technical RFQ Form
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Fill out your factory specifications below for a guaranteed response within 2 business hours.
            </p>
<form class="flex flex-col gap-space-md" id="rfq-form" onsubmit="event.preventDefault(); alert('Thank you! Your quotation request has been transmitted to our engineering team. A technician will contact you shortly.');">
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-2xs">
<label class="font-label-caps text-label-caps uppercase text-outline">Full Name</label>
<input class="bg-surface-container px-space-sm py-space-xs rounded text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high transition-colors" placeholder="Enter your full name" required="" type="text"/>
</div>
<div class="flex flex-col gap-space-2xs">
<label class="font-label-caps text-label-caps uppercase text-outline">Mobile / WhatsApp Number</label>
<input class="bg-surface-container px-space-sm py-space-xs rounded text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high transition-colors" placeholder="Enter your phone number" required="" type="tel"/>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-2xs">
<label class="font-label-caps text-label-caps uppercase text-outline">Factory City / State</label>
<input class="bg-surface-container px-space-sm py-space-xs rounded text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high transition-colors" placeholder="Enter your city / state" required="" type="text"/>
</div>
<div class="flex flex-col gap-space-2xs">
<label class="font-label-caps text-label-caps uppercase text-outline">Machine Requirement</label>
<select class="bg-surface-container px-space-sm py-space-xs rounded text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high transition-colors">
<option value="cnc-router">Heavy CNC Router 1325 / 1530</option>
<option value="fiber-marking">Fiber Laser Marking 30W / 50W</option>
<option value="sheet-metal-laser">Sheet Metal Fiber Laser 3kW-12kW</option>
<option value="co2-acrylic">CO2 Acrylic &amp; Wood Engraver</option>
<option value="custom-multi-axis">Multi-Axis 4D / 5D Custom CNC</option>
<option value="spare-parts">Spindle / OEM Spare Part Inquiry</option>
</select>
</div>
</div>
<div class="flex flex-col gap-space-2xs">
<label class="font-label-caps text-label-caps uppercase text-outline">Material &amp; Cutting Thickness Details</label>
<textarea class="bg-surface-container px-space-sm py-space-xs rounded text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-high transition-colors" placeholder="Describe your material and cutting thickness requirements" rows="2"></textarea>
</div>
<button class="w-full bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm font-bold py-space-md rounded transition-all active:translate-y-[1px] shadow-lg" type="submit">
                Submit RFQ for Instant Technical Quotation
              </button>
</form>
</div>
</div>
</div>
</div>
</section>
</div>
<script>
  // Filter tabs behavior for Machine Showcase
  document.querySelectorAll('#machine-filter-group .filter-btn').forEach(button => {
    button.addEventListener('click', () => {
      // Toggle active states
      document.querySelectorAll('#machine-filter-group .filter-btn').forEach(b => {
        b.classList.remove('active', 'bg-primary', 'text-on-primary', 'font-bold');
        b.classList.add('bg-surface-container-high', 'text-on-surface-variant');
      });
      button.classList.add('active', 'bg-primary', 'text-on-primary', 'font-bold');
      button.classList.remove('bg-surface-container-high', 'text-on-surface-variant');

      const filter = button.getAttribute('data-filter');
      document.querySelectorAll('.machine-card').forEach(card => {
        if (filter === 'all' || card.getAttribute('data-category') === filter) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Accordion toggle behavior
  document.querySelectorAll('#faq-accordion .faq-toggle').forEach(header => {
    header.addEventListener('click', () => {
      const content = header.nextElementSibling;
      const icon = header.querySelector('.material-symbols-outlined');
      const isHidden = content.classList.contains('hidden');

      // Close all
      document.querySelectorAll('#faq-accordion .faq-content').forEach(c => c.classList.add('hidden'));
      document.querySelectorAll('#faq-accordion .material-symbols-outlined').forEach(i => {
        i.style.transform = 'rotate(0deg)';
      });

      if (isHidden) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
      }
    });
  });
</script></div>
@endsection
