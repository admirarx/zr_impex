@extends('layouts.app')

@section('title', 'Genuine CNC & Fiber Laser Spare Parts Depot — ZR IMPEX')
@section('meta_description', 'Explore ZR IMPEX certified OEM spare parts catalogue: high-speed electrospindles, Raytools laser nozzles, Hiwin linear motion guide rails, DSP controllers, and S&A refrigeration chillers.')

@section('content')
<div class="w-full bg-transparent min-h-screen"><div class="flex flex-col w-full">

<!-- PROPER INDUSTRIAL HERO SECTION -->
<section class="w-full bg-transparent py-space-3xl lg:py-space-4xl relative overflow-hidden border-b border-surface-container">
  <!-- Ambient Accents -->
  <div class="absolute -right-24 -top-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute -left-24 bottom-0 w-80 h-80 bg-secondary/5 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-max-width-content mx-auto px-gutter-desktop relative z-10 flex flex-col gap-space-xl">

    <!-- Main Headline & Telemetry HUD Row -->
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-xl">
      <!-- Left Content Block -->
      <div class="max-w-3xl flex flex-col gap-space-md">
        <div class="flex flex-wrap items-center gap-space-xs">
          <span class="inline-flex items-center gap-space-2xs bg-primary/10 text-primary border border-primary/25 px-space-sm py-space-2xs rounded font-label-badge text-label-badge uppercase tracking-wider font-bold">
            <span class="material-symbols-outlined text-[14px]">precision_manufacturing</span>
            Genuine CNC Spare Parts
          </span>
          <span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-primary border border-primary/30 px-space-sm py-space-2xs rounded font-label-badge text-label-badge uppercase tracking-wider font-semibold">
            OEM Component Depot
          </span>
          <span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-on-surface-variant px-space-sm py-space-2xs rounded font-label-badge text-label-badge uppercase tracking-wider">
            <span class="material-symbols-outlined text-[14px]">local_shipping</span>
            Same-Day Express Dispatch
          </span>
          <span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-on-surface-variant px-space-sm py-space-2xs rounded font-label-badge text-label-badge uppercase tracking-wider">
            <span class="material-symbols-outlined text-[14px]">verified</span>
            100% Factory Certified
          </span>
        </div>

        <h1 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-tight">
          ORIGINAL INDUSTRIAL SPARE PARTS, OPTICS &amp; PRECISION DRIVE COMPONENTS
        </h1>

        <p class="font-body-lg text-body-lg text-on-surface-variant">
          Direct-factory replacement consumables, high-speed ceramic electrospindles, Raytools optical cutting nozzles, Hiwin linear motion guide rails, DSP controllers, and high-efficiency refrigeration chillers calibrated for continuous zero-downtime manufacturing.
        </p>

        <!-- CTAs -->
        <div class="flex flex-wrap items-center gap-space-sm pt-space-xs">
          <button @click="quoteModalOpen = true" class="inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-lg py-space-sm rounded font-bold shadow-lg transition-all hover:scale-[1.01] active:translate-y-[1px] cursor-pointer">
            <span class="material-symbols-outlined text-[18px]">receipt_long</span>
            <span>Request Technical RFQ</span>
          </button>
          <a href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Hello ZR Impex Spares Desk, I am inquiring from the Spare Parts Catalogue. Please assist me with stock availability and pricing.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-space-xs bg-[#25D366] hover:bg-[#20ba59] text-[#071d12] font-headline-sm text-headline-sm px-space-lg py-space-sm rounded font-bold shadow-md transition-all">
            <span class="material-symbols-outlined text-[18px]">chat</span>
            <span>Talk to Spares Engineer</span>
          </a>
        </div>
      </div>

      <!-- Right 4-Point Telemetry HUD -->
      <div class="grid grid-cols-2 gap-space-sm bg-surface-container p-space-md rounded-xl border border-surface-container-highest shadow-xl shrink-0 lg:max-w-md">
        <div class="bg-surface-container-lowest p-space-sm rounded-lg flex flex-col">
          <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider">Stock Buffer</span>
          <span class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary font-bold">1,500+ SKUs</span>
          <span class="font-body-sm text-body-sm text-on-surface-variant">Gujarat Central Depot</span>
        </div>
        <div class="bg-surface-container-lowest p-space-sm rounded-lg flex flex-col">
          <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider">Dispatch SLA</span>
          <span class="font-tech-telemetry-lg text-tech-telemetry-lg text-on-surface font-bold">&lt; 24 Hours</span>
          <span class="font-body-sm text-body-sm text-on-surface-variant">Air Courier Handoff</span>
        </div>
        <div class="bg-surface-container-lowest p-space-sm rounded-lg flex flex-col">
          <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider">Authenticity</span>
          <span class="font-tech-telemetry-lg text-tech-telemetry-lg text-secondary font-bold">100% Genuine</span>
          <span class="font-body-sm text-body-sm text-on-surface-variant">Certified OEM Direct</span>
        </div>
        <div class="bg-surface-container-lowest p-space-sm rounded-lg flex flex-col">
          <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider">Coverage</span>
          <span class="font-tech-telemetry-lg text-tech-telemetry-lg text-tertiary font-bold">Pan-India</span>
          <span class="font-body-sm text-body-sm text-on-surface-variant">Express Hub Delivery</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MULTI-DIMENSIONAL INDUSTRIAL FILTER SECTION -->
<section class="w-full bg-surface-container-low/90 backdrop-blur-md py-space-lg border-b border-surface-container-high shadow-inner">
  <div class="max-w-max-width-content mx-auto px-gutter-desktop flex flex-col gap-space-md">

    <!-- Top Row: Category Headline & Live Counter -->
    <div class="flex items-center justify-between gap-space-md flex-wrap">
      <div class="flex items-center gap-space-xs font-label-caps text-label-caps text-outline uppercase tracking-wider">
        <span class="material-symbols-outlined text-primary text-[16px]">filter_alt</span>
        <span>Component Category Selector</span>
      </div>
      <span class="font-tech-spec text-tech-spec text-primary bg-surface-container border border-surface-container-highest/60 px-space-sm py-space-2xs rounded" id="active-results-badge">
        Showing {{ $spareParts->total() }} Certified Component Assemblies
      </span>
    </div>

    <!-- Interactive Category Selector Chips -->
    <div class="flex flex-wrap gap-space-xs" id="category-filter-group">
      <a href="{{ route('spare-parts.index', request('q') ? ['q' => request('q')] : []) }}" class="cat-pill {{ !request('category') ? 'active bg-primary text-on-primary font-bold shadow-sm' : 'bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface border border-surface-container-highest/60 font-medium' }} font-headline-sm text-headline-sm px-space-md py-space-xs rounded transition-all cursor-pointer" data-cat="all">
        All Components ({{ $spareParts->total() }})
      </a>
      @foreach($categories as $category)
        <a href="{{ route('spare-parts.index', array_filter(['category' => $category->slug, 'q' => request('q')])) }}" class="cat-pill {{ request('category') === $category->slug ? 'active bg-primary text-on-primary font-bold shadow-sm' : 'bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface border border-surface-container-highest/60 font-medium' }} font-headline-sm text-headline-sm px-space-md py-space-xs rounded transition-all cursor-pointer" data-cat="{{ $category->slug }}">
          {{ $category->name }}
        </a>
      @endforeach
    </div>

    <!-- Quick Search Input Bar -->
    <form method="GET" action="{{ route('spare-parts.index') }}" class="relative w-full flex items-center gap-space-xs">
      @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      <div class="relative w-full">
        <span class="material-symbols-outlined absolute left-space-md top-1/2 -translate-y-1/2 text-outline text-[18px]">search</span>
        <input type="text" name="q" value="{{ request('q') }}" id="catalogue-search-input" placeholder="Search by SKU code (e.g. RAY-NOZ, HQD, HIWIN, 3DM883), part name, or machine model..." class="w-full pl-11 pr-space-md py-space-sm bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec rounded border border-surface-container-highest focus:border-primary focus:outline-none placeholder:text-outline/60 transition-colors shadow-inner" />
      </div>
      <button type="submit" class="bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-lg py-space-sm rounded font-bold shadow-md transition-all shrink-0">Search</button>
      @if(request('category') || request('q'))
        <a href="{{ route('spare-parts.index') }}" class="text-primary hover:underline text-xs font-bold uppercase shrink-0 px-space-xs">Reset</a>
      @endif
    </form>

    <!-- Secondary Spec Grids (Platform, OEM Brand, Stock Status) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md pt-space-xs">
      <!-- Target Platform Selector -->
      <div class="bg-surface-container p-space-md rounded-lg border border-surface-container-highest/60 flex flex-col gap-space-xs">
        <label class="font-label-caps text-label-caps text-outline uppercase tracking-wider flex items-center justify-between" for="filter-platform">
          <span>Target Machine Platform</span>
          <span class="material-symbols-outlined text-[14px]">precision_manufacturing</span>
        </label>
        <select class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec p-space-xs rounded border border-surface-container-highest focus:outline-none focus:border-primary cursor-pointer" id="filter-platform">
          <option value="all">All CNC &amp; Laser Platforms</option>
          <option value="fiber-cutter">1kW - 12kW Sheet Metal Fiber Cutters</option>
          <option value="cnc-router">1325 / 1530 ATC Heavy CNC Routers</option>
          <option value="laser-marker">Fiber &amp; MOPA Galvo Laser Markers</option>
          <option value="co2-laser">CO2 Precision Cutting &amp; Engravers</option>
          <option value="multi-axis">Multi-Axis Machining Centers</option>
        </select>
      </div>

      <!-- OEM Brand Selector -->
      <div class="bg-surface-container p-space-md rounded-lg border border-surface-container-highest/60 flex flex-col gap-space-xs">
        <label class="font-label-caps text-label-caps text-outline uppercase tracking-wider flex items-center justify-between" for="filter-brand">
          <span>OEM Brand / Manufacturer</span>
          <span class="material-symbols-outlined text-[14px]">verified</span>
        </label>
        <select class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec p-space-xs rounded border border-surface-container-highest focus:outline-none focus:border-primary cursor-pointer" id="filter-brand">
          <option value="all">All Certified OEM Brands</option>
          <option value="raytools">Raytools Laser Optics</option>
          <option value="hqd">HQD Spindle Systems</option>
          <option value="hiwin">Taiwan Hiwin Motion Systems</option>
          <option value="richauto">RichAuto DSP Controllers</option>
          <option value="sa-chiller">S&amp;A Teyu Industrial Chillers</option>
          <option value="leadshine">Leadshine Digital Drives</option>
          <option value="fuling">Fuling Vector Inverters</option>
          <option value="zr-tooling">ZR Micro-Grain Tooling</option>
        </select>
      </div>

      <!-- Stock Status -->
      <div class="bg-surface-container p-space-md rounded-lg border border-surface-container-highest/60 flex flex-col gap-space-xs">
        <label class="font-label-caps text-label-caps text-outline uppercase tracking-wider flex items-center justify-between" for="filter-stock">
          <span>Stock Availability &amp; Dispatch</span>
          <span class="material-symbols-outlined text-[14px]">inventory_2</span>
        </label>
        <select class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec p-space-xs rounded border border-surface-container-highest focus:outline-none focus:border-primary cursor-pointer" id="filter-stock">
          <option value="all">All Inventory Classifications</option>
          <option value="in-stock">Ready Dispatch Stock (&lt; 24h)</option>
          <option value="emergency">Emergency Breakdown Counter Pickup</option>
          <option value="volume">High-Volume Bulk Packs Available</option>
        </select>
      </div>
    </div>

    <!-- Applied Filters Chips Bar -->
    <div class="flex items-center justify-between flex-wrap gap-space-sm pt-space-2xs text-body-sm">
      <div class="flex items-center gap-space-xs flex-wrap" id="active-parameters-container">
        <span class="font-label-caps text-label-caps text-outline uppercase">Active Parameters:</span>
        <span class="text-on-surface-variant/70 text-body-sm italic">All Assemblies Active (No Filters Applied)</span>
      </div>
      <button class="font-label-caps text-label-caps text-primary hover:text-primary-fixed uppercase tracking-wider transition-colors inline-flex items-center gap-space-2xs cursor-pointer" id="reset-filters-btn">
        <span class="material-symbols-outlined text-[14px]">restart_alt</span> Reset All Parameters
      </button>
    </div>

  </div>
</section>

<!-- PRODUCT SHOWCASE GRID -->
<section class="w-full bg-transparent py-space-2xl">
  <div class="max-w-max-width-content mx-auto px-gutter-desktop">
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-space-lg" id="spare-parts-catalog-grid">
@forelse($spareParts as $sparePart)
<article class="machine-card bg-surface-container rounded-xl overflow-hidden shadow-md border border-surface-container-highest/70 flex flex-col transition-all hover:translate-y-[-2px] hover:shadow-xl hover:border-primary/50" data-category="{{ $sparePart->category?->slug ?? 'all' }}" data-platform="all" data-brand="all" data-stock="in-stock">
  <div class="relative h-64 w-full bg-surface-container-lowest overflow-hidden">
    <a href="{{ route('spare-parts.show', $sparePart->slug) }}" class="block w-full h-full">
      <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" src="{{ $sparePart->primary_image_url ?? asset('images/placeholder-part.jpg') }}" alt="{{ $sparePart->name }}" />
    </a>
    <div class="absolute top-space-sm left-space-sm flex flex-wrap gap-space-xs pointer-events-none">
      <span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">
        GENUINE OEM
      </span>
      @if($sparePart->category)
        <span class="bg-surface-container-highest/90 text-on-surface font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">
          {{ $sparePart->category->name }}
        </span>
      @endif
    </div>
    @if($sparePart->model_number)
      <div class="absolute bottom-space-xs right-space-sm bg-surface-dim/80 backdrop-blur-sm px-space-xs py-space-2xs rounded font-label-caps text-label-caps text-tertiary">
        SKU: {{ $sparePart->model_number }}
      </div>
    @endif
  </div>
  <div class="p-space-lg flex-1 flex flex-col justify-between gap-space-md">
    <div class="flex flex-col gap-space-xs">
      <div class="flex items-center justify-between">
        <span class="font-label-caps text-label-caps text-primary uppercase tracking-widest">{{ $sparePart->category?->name ?? 'Genuine Spares' }}</span>
        <span class="flex items-center gap-space-2xs text-primary font-tech-spec text-tech-spec">
          <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> IN STOCK
        </span>
      </div>
      <h2 class="font-headline-sm text-headline-sm text-on-surface uppercase font-bold tracking-tight">
        <a href="{{ route('spare-parts.show', $sparePart->slug) }}" class="hover:text-primary transition-colors">
          {{ $sparePart->name }}
        </a>
      </h2>
      <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
        {{ $sparePart->short_description }}
      </p>
    </div>

    <!-- Engineering Spec Table -->
    <div class="bg-surface-container-low p-space-sm rounded flex flex-col gap-space-2xs font-tech-spec text-tech-spec">
      @forelse($sparePart->specifications->filter(fn($s) => filled($s->spec_value))->take(5) as $spec)
        <div class="flex justify-between items-center py-space-2xs border-b border-surface-container/30 last:border-0">
          <span class="text-outline truncate max-w-[50%]">{{ $spec->spec_name }}:</span>
          <span class="text-on-surface font-bold text-right ml-2 truncate max-w-[50%]">{{ $spec->spec_value }}</span>
        </div>
      @empty
        <div class="flex justify-between items-center py-space-2xs">
          <span class="text-outline">Authenticity:</span>
          <span class="text-on-surface font-bold">100% Genuine Factory Direct</span>
        </div>
      @endforelse
    </div>

    <!-- Badges & Action -->
    <div class="flex flex-col gap-space-sm">
      <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
        <span class="inline-flex items-center gap-space-2xs">
          <span class="material-symbols-outlined text-primary text-[15px]">verified</span> OEM Certified
        </span>
        <span class="font-tech-spec text-tech-spec text-outline">Same-Day Dispatch</span>
      </div>
      <div class="flex flex-col gap-space-xs">
        <a class="w-full inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-body-md py-space-sm px-space-xs rounded text-center font-semibold transition-colors" href="{{ route('spare-parts.show', $sparePart->slug) }}">
          <span class="material-symbols-outlined text-[16px]">overview</span>
          <span>View Specs</span>
        </a>
        <a class="w-full inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-fixed text-on-primary font-headline-sm text-body-md py-space-sm px-space-xs rounded font-bold shadow-md transition-all" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Inquiry for ' . $sparePart->name . ' (SKU: ' . ($sparePart->model_number ?? $sparePart->name) . ')') }}" rel="noopener noreferrer" target="_blank">
          <span class="material-symbols-outlined text-[16px]">chat</span>
          <span>WhatsApp Quote</span>
        </a>
      </div>
    </div>
  </div>
</article>
@empty
<div class="col-span-full py-space-3xl flex flex-col items-center justify-center text-center bg-surface-container rounded-xl p-space-xl border border-surface-container-highest">
  <span class="material-symbols-outlined text-primary text-[48px] mb-space-sm">settings_suggest</span>
  <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">No Spare Parts Found</h3>
  <p class="font-body-sm text-body-sm text-on-surface-variant max-w-md mt-space-xs">
    No certified components matching your current query or category were found. Contact our spares engineering desk directly for immediate stock inquiries.
  </p>
  <a href="{{ route('spare-parts.index') }}" class="mt-space-md inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-bold transition-all shadow-sm">
    <span class="material-symbols-outlined text-[16px]">refresh</span>
    <span>Reset Filter Parameters</span>
  </a>
</div>
@endforelse

    </div>
@if($spareParts->hasPages())
  <div class="mt-space-xl flex justify-center">
    {{ $spareParts->links() }}
  </div>
@endif

  </div>
</section>

<!-- PROCUREMENT, INSTALLATION & WARRANTY GUARANTEES -->
<section class="w-full bg-surface-dim/60 backdrop-blur-xs py-space-2xl border-t border-surface-container/60">
  <div class="max-w-max-width-content mx-auto px-gutter-desktop">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-lg">
      <!-- Guarantee 1 -->
      <div class="bg-surface-container p-space-lg rounded-xl flex flex-col gap-space-sm shadow-sm">
        <div class="w-10 h-10 rounded bg-primary/10 flex items-center justify-center text-primary">
          <span class="material-symbols-outlined text-[24px]">local_shipping</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">Same-Day Express Air Dispatch</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant">
          Emergency breakdown orders prioritized with 180-minute air courier dispatch from our central Gujarat (GIDC) &amp; Delhi NCR depots.
        </p>
      </div>

      <!-- Guarantee 2 -->
      <div class="bg-surface-container p-space-lg rounded-xl flex flex-col gap-space-sm shadow-sm">
        <div class="w-10 h-10 rounded bg-primary/10 flex items-center justify-center text-primary">
          <span class="material-symbols-outlined text-[24px]">verified</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">100% Genuine OEM Certified</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant">
          Zero refurbished or clone parts. Authentic Raytools, HQD, Hiwin, and S&amp;A units with laser-etched serial verification.
        </p>
      </div>

      <!-- Guarantee 3 -->
      <div class="bg-surface-container p-space-lg rounded-xl flex flex-col gap-space-sm shadow-sm">
        <div class="w-10 h-10 rounded bg-primary/10 flex items-center justify-center text-primary">
          <span class="material-symbols-outlined text-[24px]">history_toggle_off</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">Pre-Dispatch 72hr QC Burn-In</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant">
          Spindle dynamometer run-in, driver pulse integrity checks, and chiller refrigerant leak tests completed before final packaging.
        </p>
      </div>

      <!-- Guarantee 4 -->
      <div class="bg-surface-container p-space-lg rounded-xl flex flex-col gap-space-sm shadow-sm">
        <div class="w-10 h-10 rounded bg-primary/10 flex items-center justify-center text-primary">
          <span class="material-symbols-outlined text-[24px]">support_agent</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">Spares Application Engineers</h3>
        <p class="font-body-sm text-body-sm text-on-surface-variant">
          Direct telephone &amp; WhatsApp consultation with factory machine engineers to verify collet dimensions, focal length, and wiring diagrams.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SCRIPT FOR INTERACTIVE FILTERING & REAL-TIME SEARCH -->
<script>
  (function() {
    const searchInput = document.getElementById('catalogue-search-input');
    const catButtons = document.querySelectorAll('.cat-pill');
    const platformSelect = document.getElementById('filter-platform');
    const brandSelect = document.getElementById('filter-brand');
    const stockSelect = document.getElementById('filter-stock');
    const cards = document.querySelectorAll('.machine-card');
    const resetBtn = document.getElementById('reset-filters-btn');
    const counterBadge = document.getElementById('active-results-badge');
    const activeParamsContainer = document.getElementById('active-parameters-container');

    let currentCategory = 'all';

    function filterCards() {
      const query = (searchInput ? searchInput.value : '').toLowerCase().trim();
      const selectedPlatform = platformSelect ? platformSelect.value : 'all';
      const selectedBrand = brandSelect ? brandSelect.value : 'all';
      const selectedStock = stockSelect ? stockSelect.value : 'all';
      let visibleCount = 0;

      cards.forEach(card => {
        const cardCat = card.getAttribute('data-category') || '';
        const cardPlatform = (card.getAttribute('data-platform') || '').split(',');
        const cardBrand = card.getAttribute('data-brand') || '';
        const cardStock = (card.getAttribute('data-stock') || '').split(',');
        const textContent = card.innerText.toLowerCase();

        const matchesCat = (currentCategory === 'all' || cardCat === currentCategory);
        const matchesPlatform = (selectedPlatform === 'all' || cardPlatform.includes(selectedPlatform));
        const matchesBrand = (selectedBrand === 'all' || cardBrand === selectedBrand);
        const matchesStock = (selectedStock === 'all' || cardStock.includes(selectedStock));
        const matchesSearch = query === '' || textContent.includes(query);

        if (matchesCat && matchesPlatform && matchesBrand && matchesStock && matchesSearch) {
          card.style.display = 'flex';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });

      if (counterBadge) {
        counterBadge.textContent = 'Showing ' + visibleCount + ' Certified Component Assemblies';
      }

      updateActiveChips();
    }

    function updateActiveChips() {
      if (!activeParamsContainer) return;
      let html = '<span class="font-label-caps text-label-caps text-outline uppercase">Active Parameters:</span>';
      let hasActive = false;

      if (currentCategory !== 'all') {
        hasActive = true;
        const activeBtn = document.querySelector(`.cat-pill[data-cat="${currentCategory}"]`);
        const catLabel = activeBtn ? activeBtn.innerText.replace(/\s*\(\d+\)/, '').trim() : currentCategory;
        html += `<span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-primary font-tech-spec text-tech-spec px-space-xs py-space-2xs rounded">
          Category: ${catLabel}
          <span class="material-symbols-outlined text-[12px] cursor-pointer hover:text-on-surface" data-clear="cat">close</span>
        </span>`;
      }

      if (platformSelect && platformSelect.value !== 'all') {
        hasActive = true;
        const platLabel = platformSelect.options[platformSelect.selectedIndex].text.split('(')[0].trim();
        html += `<span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-on-surface font-tech-spec text-tech-spec px-space-xs py-space-2xs rounded">
          Platform: ${platLabel}
          <span class="material-symbols-outlined text-[12px] cursor-pointer hover:text-primary" data-clear="plat">close</span>
        </span>`;
      }

      if (brandSelect && brandSelect.value !== 'all') {
        hasActive = true;
        const brandLabel = brandSelect.options[brandSelect.selectedIndex].text;
        html += `<span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-on-surface font-tech-spec text-tech-spec px-space-xs py-space-2xs rounded">
          Brand: ${brandLabel}
          <span class="material-symbols-outlined text-[12px] cursor-pointer hover:text-primary" data-clear="brand">close</span>
        </span>`;
      }

      if (stockSelect && stockSelect.value !== 'all') {
        hasActive = true;
        const stockLabel = stockSelect.options[stockSelect.selectedIndex].text.split('(')[0].trim();
        html += `<span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-on-surface font-tech-spec text-tech-spec px-space-xs py-space-2xs rounded">
          Stock: ${stockLabel}
          <span class="material-symbols-outlined text-[12px] cursor-pointer hover:text-primary" data-clear="stock">close</span>
        </span>`;
      }

      if (!hasActive) {
        html += `<span class="text-on-surface-variant/70 text-body-sm italic">All Assemblies Active (No Filters Applied)</span>`;
      }

      activeParamsContainer.innerHTML = html;

      activeParamsContainer.querySelectorAll('[data-clear]').forEach(el => {
        el.addEventListener('click', (e) => {
          const type = e.currentTarget.getAttribute('data-clear');
          if (type === 'cat') {
            currentCategory = 'all';
            catButtons.forEach((b, idx) => {
              if (idx === 0) {
                b.classList.add('bg-primary', 'text-on-primary', 'font-bold');
                b.classList.remove('bg-surface-container', 'text-on-surface-variant', 'font-medium');
              } else {
                b.classList.remove('bg-primary', 'text-on-primary', 'font-bold');
                b.classList.add('bg-surface-container', 'text-on-surface-variant', 'font-medium');
              }
            });
          } else if (type === 'plat' && platformSelect) {
            platformSelect.value = 'all';
          } else if (type === 'brand' && brandSelect) {
            brandSelect.value = 'all';
          } else if (type === 'stock' && stockSelect) {
            stockSelect.value = 'all';
          }
          filterCards();
        });
      });
    }

    catButtons.forEach(btn => {
      btn.addEventListener('click', (e) => {
        if (btn.tagName === 'A' && btn.getAttribute('href') && btn.getAttribute('href') !== '#') {
          return;
        }
        catButtons.forEach(b => {
          b.classList.remove('bg-primary', 'text-on-primary', 'font-bold');
          b.classList.add('bg-surface-container', 'text-on-surface-variant', 'font-medium');
        });
        btn.classList.remove('bg-surface-container', 'text-on-surface-variant', 'font-medium');
        btn.classList.add('bg-primary', 'text-on-primary', 'font-bold');

        currentCategory = btn.getAttribute('data-cat');
        filterCards();
      });
    });

    if (searchInput) {
      searchInput.addEventListener('input', filterCards);
    }
    if (platformSelect) {
      platformSelect.addEventListener('change', filterCards);
    }
    if (brandSelect) {
      brandSelect.addEventListener('change', filterCards);
    }
    if (stockSelect) {
      stockSelect.addEventListener('change', filterCards);
    }

    if (resetBtn) {
      resetBtn.addEventListener('click', () => {
        if (window.location.search) {
          window.location.href = "{{ route('spare-parts.index') }}";
          return;
        }
        if (searchInput) searchInput.value = '';
        if (platformSelect) platformSelect.value = 'all';
        if (brandSelect) brandSelect.value = 'all';
        if (stockSelect) stockSelect.value = 'all';

        currentCategory = 'all';
        catButtons.forEach((b, idx) => {
          if (idx === 0) {
            b.classList.add('bg-primary', 'text-on-primary', 'font-bold');
            b.classList.remove('bg-surface-container', 'text-on-surface-variant', 'font-medium');
          } else {
            b.classList.remove('bg-primary', 'text-on-primary', 'font-bold');
            b.classList.add('bg-surface-container', 'text-on-surface-variant', 'font-medium');
          }
        });
        filterCards();
      });
    }

    // Initial run
    filterCards();
  })();
</script>
</div></div>
@endsection
