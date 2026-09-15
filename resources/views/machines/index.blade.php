@extends('layouts.app')

@section('title', 'Heavy CNC Routers & Precision Fiber Laser Systems Catalogue — ZR IMPEX')
@section('meta_description', 'Explore ZR IMPEX industrial CNC machinery catalogue: 1325 ATC routers, 12kW fiber laser sheet cutters, 50W Galvo markers, and 5-axis gantry milling centers.')

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
            Heavy Machinery Grade
          </span>
          <span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-primary border border-primary/30 px-space-sm py-space-2xs rounded font-label-badge text-label-badge uppercase tracking-wider font-semibold">
            Industrial Machinery Catalogue
          </span>
          <span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-on-surface-variant px-space-sm py-space-2xs rounded font-label-badge text-label-badge uppercase tracking-wider">
            <span class="material-symbols-outlined text-[14px]">verified</span>
            Factory Direct Commissioning
          </span>
          <span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-on-surface-variant px-space-sm py-space-2xs rounded font-label-badge text-label-badge uppercase tracking-wider">
            <span class="material-symbols-outlined text-[14px]">verified_user</span>
            ISO 9001:2015 Certified
          </span>
        </div>

        <h1 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-tight">
          HEAVY INDUSTRIAL CNC ROUTERS &amp; HIGH-PRECISION FIBER LASER SYSTEMS
        </h1>

        <p class="font-body-lg text-body-lg text-on-surface-variant">
          Direct-factory engineered manufacturing systems for heavy hardwood furniture, nested sheet cabinetry, granite monument carving, and ultra-high-speed fiber metal fabrication. Stress-relieved steel gantry frames, German helical drive kinematics, and laser-interferometer certified precision.
        </p>

        <!-- CTAs -->
        <div class="flex flex-wrap items-center gap-space-sm pt-space-xs">
          <button @click="quoteModalOpen = true" class="inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-lg py-space-sm rounded font-bold shadow-lg transition-all hover:scale-[1.01] active:translate-y-[1px]">
            <span class="material-symbols-outlined text-[18px]">receipt_long</span>
            <span>Request Technical RFQ</span>
          </button>
          <a href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Hello ZR Impex, I am inquiring from the CNC Machinery Catalogue. Please assist me with pricing and machine selection.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-space-xs bg-[#25D366] hover:bg-[#20ba59] text-[#071d12] font-headline-sm text-headline-sm px-space-lg py-space-sm rounded font-bold shadow-md transition-all">
            <span class="material-symbols-outlined text-[18px]">chat</span>
            <span>Talk to Gantry Engineer</span>
          </a>
        </div>
      </div>

      <!-- Right 4-Point Telemetry HUD -->
      <div class="grid grid-cols-2 gap-space-sm bg-surface-container p-space-md rounded-xl border border-surface-container-highest shadow-xl shrink-0 lg:max-w-md">
        <div class="bg-surface-container-lowest p-space-sm rounded-lg flex flex-col">
          <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider">Rigidity Metric</span>
          <span class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary font-bold">8.5 TON</span>
          <span class="font-body-sm text-body-sm text-on-surface-variant">Annealed Cast Bed</span>
        </div>
        <div class="bg-surface-container-lowest p-space-sm rounded-lg flex flex-col">
          <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider">Spindle Speed</span>
          <span class="font-tech-telemetry-lg text-tech-telemetry-lg text-on-surface font-bold">24,000 RPM</span>
          <span class="font-body-sm text-body-sm text-on-surface-variant">Ceramic Quad Bearings</span>
        </div>
        <div class="bg-surface-container-lowest p-space-sm rounded-lg flex flex-col">
          <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider">Repeatability</span>
          <span class="font-tech-telemetry-lg text-tech-telemetry-lg text-secondary font-bold">±0.015 mm</span>
          <span class="font-body-sm text-body-sm text-on-surface-variant">Interferometer Tested</span>
        </div>
        <div class="bg-surface-container-lowest p-space-sm rounded-lg flex flex-col">
          <span class="font-label-badge text-label-badge text-outline uppercase tracking-wider">Commissioning</span>
          <span class="font-tech-telemetry-lg text-tech-telemetry-lg text-tertiary font-bold">100% Turnkey</span>
          <span class="font-body-sm text-body-sm text-on-surface-variant">On-Site Setup Included</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- MULTI-DIMENSIONAL INDUSTRIAL FILTER SECTION -->
<section class="w-full bg-surface-container-low/90 backdrop-blur-md py-space-lg border-b border-surface-container-high shadow-inner">
<div class="max-w-max-width-content mx-auto px-gutter-desktop flex flex-col gap-space-md">
<!-- Top Row: Primary Category Chips -->
<div class="flex items-center justify-between gap-space-md flex-wrap">
<div class="flex items-center gap-space-xs font-label-caps text-label-caps text-outline uppercase tracking-wider">
<span class="material-symbols-outlined text-primary text-[16px]">filter_alt</span>
<span>Category Selector</span>
</div>
  <div class="flex items-center gap-space-sm flex-wrap">
    <form method="GET" action="{{ route('machines.index') }}" class="flex items-center gap-space-xs">
      @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      <div class="relative">
        <span class="material-symbols-outlined absolute left-space-xs top-1/2 -translate-y-1/2 text-outline text-[16px]">search</span>
        <input type="text" name="q" value="{{ request('q') }}" id="catalogue-search-input" placeholder="Search machines..." class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec pl-7 pr-space-xs py-1.5 rounded border border-surface-container-highest focus:border-primary focus:outline-none w-48 sm:w-64">
      </div>
      <button type="submit" class="bg-primary hover:bg-primary-fixed-dim text-on-primary font-label-badge text-label-badge px-space-sm py-2 rounded font-bold uppercase transition-all shadow-sm">Search</button>
      @if(request('category') || request('q'))
        <a href="{{ route('machines.index') }}" class="text-primary hover:underline text-xs font-bold uppercase px-1">Reset</a>
      @endif
    </form>
    <span class="font-tech-spec text-tech-spec text-primary bg-surface-container border border-surface-container-highest/60 px-space-sm py-space-2xs rounded hidden sm:inline-block" id="active-results-badge">
      Showing {{ $machines->total() }} Industrial Production Systems
    </span>
  </div>
</div>

<!-- Interactive Category Buttons -->
<div class="flex flex-wrap gap-space-xs" id="category-filter-group">
  <a href="{{ route('machines.index', request('q') ? ['q' => request('q')] : []) }}" class="cat-pill {{ !request('category') ? 'active bg-primary text-on-primary font-bold shadow-sm' : 'bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface border border-surface-container-highest/60 font-medium' }} font-headline-sm text-headline-sm px-space-md py-space-xs rounded transition-all" data-cat="all">
    All Systems ({{ $machines->total() }})
  </a>
  @foreach($categories as $category)
    <a href="{{ route('machines.index', array_filter(['category' => $category->slug, 'q' => request('q')])) }}" class="cat-pill {{ request('category') === $category->slug ? 'active bg-primary text-on-primary font-bold shadow-sm' : 'bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface border border-surface-container-highest/60 font-medium' }} font-headline-sm text-headline-sm px-space-md py-space-xs rounded transition-all" data-cat="{{ $category->slug }}">
      {{ $category->name }}
    </a>
  @endforeach
</div>
<!-- Secondary Spec Grids (Material, Power, Bed Size) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md pt-space-xs">
<!-- Target Material Selector -->
<div class="bg-surface-container p-space-md rounded-lg border border-surface-container-highest/60 flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps text-outline uppercase tracking-wider flex items-center justify-between" for="filter-material">
<span>Target Substrate / Material</span>
<span class="material-symbols-outlined text-[14px]">layers</span>
</label>
<select class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec p-space-xs rounded border border-surface-container-highest focus:outline-none focus:border-primary" id="filter-material">
<option value="all">All Compatible Materials</option>
<option value="steel">Mild Steel &amp; Stainless 304/316</option>
<option value="wood">Hardwood, Plywood &amp; MDF Board</option>
<option value="acrylic">Acrylic, Corian &amp; Sign Polymers</option>
<option value="stone">Marble, Granite &amp; Sandstone</option>
<option value="brass">Brass, Copper &amp; Aluminium Billets</option>
</select>
</div>
<!-- Power / Wattage -->
<div class="bg-surface-container p-space-md rounded-lg border border-surface-container-highest/60 flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps text-outline uppercase tracking-wider flex items-center justify-between" for="filter-power">
<span>Spindle / Laser Power Class</span>
<span class="material-symbols-outlined text-[14px]">bolt</span>
</label>
<select class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec p-space-xs rounded border border-surface-container-highest focus:outline-none focus:border-primary" id="filter-power">
<option value="all">All Power Configurations</option>
<option value="standard">6.0 kW / 7.5 kW Heavy Spindle</option>
<option value="atc">9.0 kW - 12 kW Automatic Tool Change</option>
<option value="laser-mid">30W - 150W Laser Source</option>
<option value="laser-heavy">6 kW - 12 kW Fiber Sheet Resonator</option>
</select>
</div>
<!-- Bed Dimensions -->
<div class="bg-surface-container p-space-md rounded-lg border border-surface-container-highest/60 flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps text-outline uppercase tracking-wider flex items-center justify-between" for="filter-bed">
<span>Machine Bed Envelope (X × Y)</span>
<span class="material-symbols-outlined text-[14px]">aspect_ratio</span>
</label>
<select class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec p-space-xs rounded border border-surface-container-highest focus:outline-none focus:border-primary" id="filter-bed">
<option value="all">Standard &amp; Custom Beds</option>
<option value="1325">1300 × 2500 mm (Standard 4 × 8 ft)</option>
<option value="1530">1500 × 3000 mm (Sheet 5 × 10 ft)</option>
<option value="2040">2000 × 4000 mm (Heavy Gantry Table)</option>
<option value="compact">Desktop / 1300 × 900 mm Compact</option>
</select>
</div>
</div>
<!-- Applied Filters Chips Bar -->
<div class="flex items-center justify-between flex-wrap gap-space-sm pt-space-2xs text-body-sm">
<div class="flex items-center gap-space-xs flex-wrap" id="active-parameters-container">
<span class="font-label-caps text-label-caps text-outline uppercase">Active Parameters:</span>
<span class="text-on-surface-variant/70 text-body-sm italic">All Systems Active (No Filters Applied)</span>
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
<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-space-lg" id="machine-catalog-grid">
@forelse($machines as $machine)
<article class="machine-card bg-surface-container rounded-xl overflow-hidden shadow-md border border-surface-container-highest/70 flex flex-col transition-all hover:translate-y-[-2px] hover:shadow-xl hover:border-primary/50" data-category="{{ $machine->category?->slug ?? 'all' }}" data-power="all" data-material="all" data-bed="all">
  <div class="relative h-64 w-full bg-surface-container-lowest overflow-hidden">
    <a href="{{ route('machines.show', $machine->slug) }}" class="block w-full h-full flex items-center justify-center">
      @if(!empty($machine->primary_image))
        <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" src="{{ $machine->primary_image_url }}" alt="{{ $machine->name }}"/>
      @else
        <div class="w-full h-full flex flex-col items-center justify-center p-space-md bg-surface-container-low text-center">
          <img class="max-h-20 max-w-[160px] object-contain opacity-75 mb-space-xs" src="{{ asset('images/brand/logo.jpeg') }}" alt="ZR IMPEX" />
          <span class="font-label-caps text-label-caps uppercase text-on-surface-variant">ZR IMPEX Machinery</span>
        </div>
      @endif
    </a>
    <div class="absolute top-space-sm left-space-sm flex flex-wrap gap-space-xs pointer-events-none">
      @if($machine->is_featured)
        <span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">
          HOT SELLER
        </span>
      @endif
      @if($machine->category)
        <span class="bg-surface-container-highest/90 text-on-surface font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">
          {{ $machine->category->name }}
        </span>
      @endif
    </div>
    @if($machine->model_number)
      <div class="absolute bottom-space-xs right-space-sm bg-surface-dim/80 backdrop-blur-sm px-space-xs py-space-2xs rounded font-label-caps text-label-caps text-tertiary">
        SERIES: {{ $machine->model_number }}
      </div>
    @endif
  </div>
  <div class="p-space-lg flex-1 flex flex-col justify-between gap-space-md">
    <div class="flex flex-col gap-space-xs">
      <div class="flex items-center justify-between">
        <span class="font-label-caps text-label-caps text-primary uppercase tracking-widest">{{ $machine->category?->name ?? 'Heavy CNC' }}</span>
        <span class="flex items-center gap-space-2xs text-primary font-tech-spec text-tech-spec">
          <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> READY STOCK
        </span>
      </div>
      <h2 class="font-headline-sm text-headline-sm text-on-surface uppercase font-bold tracking-tight">
        <a href="{{ route('machines.show', $machine->slug) }}" class="hover:text-primary transition-colors">
          {{ $machine->name }}
        </a>
      </h2>
      <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
        {{ $machine->short_description }}
      </p>
    </div>

    <!-- Engineering Spec Table -->
    <div class="bg-surface-container-low p-space-sm rounded flex flex-col gap-space-2xs font-tech-spec text-tech-spec">
      @forelse($machine->specifications->filter(fn($s) => filled($s->spec_value))->take(5) as $spec)
        <div class="flex justify-between items-center py-space-2xs border-b border-surface-container/30 last:border-0">
          <span class="text-outline truncate max-w-[50%]">{{ $spec->spec_name }}:</span>
          <span class="text-on-surface font-bold text-right ml-2 truncate max-w-[50%]">{{ $spec->spec_value }}</span>
        </div>
      @empty
        <div class="flex justify-between items-center py-space-2xs">
          <span class="text-outline">Rigidity:</span>
          <span class="text-on-surface font-bold">Industrial Heavy Bed</span>
        </div>
      @endforelse
    </div>

    <!-- Badges & Action -->
    <div class="flex flex-col gap-space-sm">
      <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
        <span class="inline-flex items-center gap-space-2xs">
          <span class="material-symbols-outlined text-primary text-[15px]">verified</span> 2-Year Warranty
        </span>
        <span class="font-tech-spec text-tech-spec text-outline">72hr Burn-in Passed</span>
      </div>
      <div class="flex flex-col gap-space-xs">
        <a class="w-full inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-body-md py-space-sm px-space-xs rounded text-center font-semibold transition-colors" href="{{ route('machines.show', $machine->slug) }}">
          <span class="material-symbols-outlined text-[16px]">overview</span>
          <span>View Specs</span>
        </a>
        <a class="w-full inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-fixed text-on-primary font-headline-sm text-body-md py-space-sm px-space-xs rounded font-bold shadow-md transition-all" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Inquiry for ' . $machine->name . ' (' . ($machine->model_number ?? $machine->name) . ')') }}" rel="noopener noreferrer" target="_blank">
          <span class="material-symbols-outlined text-[16px]">chat</span>
          <span>WhatsApp Quote</span>
        </a>
      </div>
    </div>
  </div>
</article>
@empty
<div class="col-span-full py-space-3xl flex flex-col items-center justify-center text-center bg-surface-container rounded-xl p-space-xl border border-surface-container-highest">
  <span class="material-symbols-outlined text-primary text-[48px] mb-space-sm">precision_manufacturing</span>
  <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">No Industrial Machines Found</h3>
  <p class="font-body-sm text-body-sm text-on-surface-variant max-w-md mt-space-xs">
    No CNC machinery matching your active criteria was found. Contact our engineering desk directly for custom gantry sizes and laser specs.
  </p>
  <a href="{{ route('machines.index') }}" class="mt-space-md inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-bold transition-all shadow-sm">
    <span class="material-symbols-outlined text-[16px]">refresh</span>
    <span>Reset Filter Parameters</span>
  </a>
</div>
@endforelse
</div>

@if($machines->hasPages())
  <div class="mt-space-xl flex justify-center">
    {{ $machines->links() }}
  </div>
@endif
<!-- Quick Request CIF / Export Quote Trigger -->
<div class="mt-space-xl p-space-lg bg-surface-container-low rounded-xl flex flex-col md:flex-row items-center justify-between gap-space-md shadow-sm">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded bg-primary/10 flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[28px]">local_shipping</span>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">Export Packaging &amp; CIF Global Freight</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">All machines crated in fumigated anti-corrosive vacuum foil crates for moisture protection across sea-transit.</span>
</div>
</div>
<a class="inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-lg py-space-sm rounded font-bold shadow-md transition-all shrink-0" data-path="request-quote" href="#">
<span class="material-symbols-outlined text-[18px]">receipt_long</span>
<span>Request Formal CIF/FOB Quote</span>
</a>
</div>
</div>
</section>
<!-- HEAD-TO-HEAD SPECIFICATION COMPARISON MATRIX -->
<section class="w-full bg-surface-dim/60 backdrop-blur-xs py-space-3xl border-y border-surface-container/60">
<div class="max-w-max-width-content mx-auto px-gutter-desktop flex flex-col gap-space-xl">
<div class="flex flex-col gap-space-xs max-w-2xl">
<div class="inline-flex items-center gap-space-xs text-primary font-label-caps text-label-caps uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">compare_arrows</span>
<span>Engineering Benchmark</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold uppercase tracking-tight">
          Direct Head-to-Head Specification Comparison
        </h2>
<p class="font-body-md text-body-md text-on-surface-variant">
          Analyze core mechanical differences between general entry-level workshop units and heavy production-grade factory setups to match your plant's exact electrical &amp; air demands.
        </p>
</div>
<!-- Comparison Matrix Table -->
<div class="w-full overflow-x-auto rounded-xl bg-surface-container shadow-md">
<table class="w-full text-left font-tech-spec text-tech-spec border-collapse">
<thead>
<tr class="bg-surface-container-high text-on-surface border-b-0">
<th class="p-space-md font-headline-sm text-headline-sm text-primary uppercase">Parameter \ Series</th>
<th class="p-space-md font-headline-sm text-headline-sm text-on-surface uppercase">ZR-1325 Entry CNC</th>
<th class="p-space-md font-headline-sm text-headline-sm text-on-surface uppercase">ZR-1325 Heavy ATC</th>
<th class="p-space-md font-headline-sm text-headline-sm text-on-surface uppercase">ZR-FLM-50W Marker</th>
<th class="p-space-md font-headline-sm text-headline-sm text-tertiary uppercase">ZR-FSC-6000 Fiber</th>
</tr>
</thead>
<tbody class="divide-y-0">
<tr class="bg-surface-container hover:bg-surface-container-high transition-colors">
<td class="p-space-md font-bold text-on-surface">Target Duty Cycle</td>
<td class="p-space-md text-on-surface-variant">8 - 10 hrs / Shift</td>
<td class="p-space-md text-primary font-semibold">24 / 7 Continuous Duty</td>
<td class="p-space-md text-on-surface-variant">24 / 7 High Volume DPM</td>
<td class="p-space-md text-tertiary font-semibold">24 / 7 Automated Heavy</td>
</tr>
<tr class="bg-surface-container-low hover:bg-surface-container-high transition-colors">
<td class="p-space-md font-bold text-on-surface">Max Material Thickness</td>
<td class="p-space-md text-on-surface-variant">50 mm (Wood / Acrylic)</td>
<td class="p-space-md text-on-surface">120 mm (Solid Core / Brass)</td>
<td class="p-space-md text-on-surface-variant">1.5 mm Deep Engraving</td>
<td class="p-space-md text-on-surface font-semibold">25 mm Mild / 16 mm SS</td>
</tr>
<tr class="bg-surface-container hover:bg-surface-container-high transition-colors">
<td class="p-space-md font-bold text-on-surface">Electrical Power Feed</td>
<td class="p-space-md text-on-surface-variant">220V 1-Ph / 415V 3-Ph (6 kW)</td>
<td class="p-space-md text-on-surface">415V ±5% 3-Ph 50Hz (18 kW)</td>
<td class="p-space-md text-on-surface-variant">220V 1-Ph 500W Standard Socket</td>
<td class="p-space-md text-on-surface font-semibold">415V 3-Ph 50Hz (35 kW Peak)</td>
</tr>
<tr class="bg-surface-container-low hover:bg-surface-container-high transition-colors">
<td class="p-space-md font-bold text-on-surface">Air / Gas Assist Required</td>
<td class="p-space-md text-on-surface-variant">Optional Mist (6 bar)</td>
<td class="p-space-md text-on-surface">Clean Dry Air (8 bar, 0.8 m³/min)</td>
<td class="p-space-md text-on-surface-variant">None (Air Cooled)</td>
<td class="p-space-md text-tertiary font-semibold">O2 (0.5-5 bar) / N2 (15-28 bar)</td>
</tr>
<tr class="bg-surface-container hover:bg-surface-container-high transition-colors">
<td class="p-space-md font-bold text-on-surface">Chassis Annealing Heat-Treatment</td>
<td class="p-space-md text-on-surface-variant">Vibratory Stress Relieved</td>
<td class="p-space-md text-primary font-semibold">600°C Furnace Annealed 8h</td>
<td class="p-space-md text-on-surface-variant">Extruded Aviation Aluminium</td>
<td class="p-space-md text-tertiary font-semibold">High-Temp Gantry Stress Free</td>
</tr>
<tr class="bg-surface-container-low hover:bg-surface-container-high transition-colors">
<td class="p-space-md font-bold text-on-surface">Lead Time &amp; Dispatch</td>
<td class="p-space-md text-primary font-bold">Ready Stock (48h)</td>
<td class="p-space-md text-primary font-bold">Ready Stock (72h)</td>
<td class="p-space-md text-primary font-bold">Ready Stock (24h)</td>
<td class="p-space-md text-on-surface">15 - 20 Work Days</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
<!-- CUSTOM GANTRY & TURNKEY AUTOMATION BANNER -->
<section class="w-full bg-transparent py-space-3xl relative overflow-hidden">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="bg-gradient-to-r from-surface-container via-surface-container-high to-surface-container p-space-2xl rounded-2xl shadow-xl flex flex-col lg:flex-row items-center justify-between gap-space-2xl relative">
<div class="max-w-2xl flex flex-col gap-space-md z-10">
<div class="inline-flex items-center gap-space-xs bg-surface-container-lowest px-space-sm py-space-2xs rounded w-fit">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="font-label-badge text-label-badge text-primary uppercase tracking-widest">BESPOKE INDUSTRIAL FABRICATION</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold uppercase tracking-tight">
            Need Non-Standard Dimensions, 3000×6000mm Beds, or Multi-Spindle Automation?
          </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
            ZR IMPEX engineers custom heavy machines on demand: 4-spindle synchronised furniture carvers, 12000mm tube laser loaders, dual-gantry tandem tables, and automated roll-feed CNCs. Speak directly to our machine architects for engineering schematics within 24 hours.
          </p>
<div class="flex flex-wrap items-center gap-space-md pt-space-xs">
<a class="inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-xl py-space-sm rounded font-bold shadow-[0_0_20px_rgba(229,169,16,0.35)] transition-all hover:scale-[1.01]" href="{{ route('contact') }}">
<span class="material-symbols-outlined text-[20px]">engineering</span>
<span>Consult Chief Machine Architect</span>
</a>
<a class="inline-flex items-center gap-space-xs bg-surface-container-lowest hover:bg-surface-container text-on-surface font-headline-sm text-headline-sm px-space-lg py-space-sm rounded font-semibold transition-all" href="https://wa.me/{{ preg_replace('/[^0-9]/', '', \App\Models\SiteSetting::get('whatsapp_number', '919250630381')) }}?text=I%20need%20custom%20machine%20dimensions" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-primary text-[18px]">chat</span>
<span>Direct WhatsApp Desk</span>
</a>
</div>
</div>
<!-- Visual Architecture Badge / Diagram Graphic -->
<div class="w-full lg:w-96 bg-surface-container-lowest p-space-lg rounded-xl shadow-inner flex flex-col gap-space-md shrink-0">
<span class="font-label-caps text-label-caps text-outline uppercase tracking-wider">Custom Modular Possibilities</span>
<div class="space-y-space-sm font-tech-spec text-tech-spec">
<div class="flex items-center gap-space-sm p-space-xs bg-surface-container rounded">
<span class="material-symbols-outlined text-primary text-[18px]">straighten</span>
<span class="text-on-surface">Bed Sizes up to 3.2m × 12.0m</span>
</div>
<div class="flex items-center gap-space-sm p-space-xs bg-surface-container rounded">
<span class="material-symbols-outlined text-primary text-[18px]">motion_sensor_active</span>
<span class="text-on-surface">Dual Rotary Chucks (300mm dia)</span>
</div>
<div class="flex items-center gap-space-sm p-space-xs bg-surface-container rounded">
<span class="material-symbols-outlined text-primary text-[18px]">conveyor_belt</span>
<span class="text-on-surface">Automatic Hydraulic Infeed Tables</span>
</div>
<div class="flex items-center gap-space-sm p-space-xs bg-surface-container rounded">
<span class="material-symbols-outlined text-primary text-[18px]">sync_alt</span>
<span class="text-on-surface">Oscillating Tangential Knife Add-on</span>
</div>
</div>
<div class="pt-space-xs flex justify-between items-center text-body-sm text-outline font-tech-spec">
<span>ISO 9001:2015 Approved</span>
<span class="text-primary">100% In-House Welded</span>
</div>
</div>
</div>
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
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">Doorstep Delivery Pan-India &amp; Export</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
            Insured hydraulic truck transport pan-India and containerized sea-freight packaging worldwide with customs clearance documentation.
          </p>
</div>
<!-- Guarantee 2 -->
<div class="bg-surface-container p-space-lg rounded-xl flex flex-col gap-space-sm shadow-sm">
<div class="w-10 h-10 rounded bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[24px]">school</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">3 Days On-Site CAM Training Included</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
            Our plant technician travels to your facility to anchor, level, calibrate, and train your operators on Artcam, Aspire, CypCut, or PowerMill.
          </p>
</div>
<!-- Guarantee 3 -->
<div class="bg-surface-container p-space-lg rounded-xl flex flex-col gap-space-sm shadow-sm">
<div class="w-10 h-10 rounded bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[24px]">verified</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">Genuine Tier-1 Motors &amp; Rails</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
            No refurbished parts. 100% genuine Yaskawa servos, Hiwin Taiwan linear rails, Schneider electrics, and Raytools optical cutting heads.
          </p>
</div>
<!-- Guarantee 4 -->
<div class="bg-surface-container p-space-lg rounded-xl flex flex-col gap-space-sm shadow-sm">
<div class="w-10 h-10 rounded bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[24px]">inventory</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">Immediate Spares Dispatch 24h</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
            Over ₹1.5 Cr spares buffer maintained at Gujarat central warehouse: spindles, lenses, ceramic rings, drivers, and nozzles air-couriered same-day.
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
      const materialSelect = document.getElementById('filter-material');
      const powerSelect = document.getElementById('filter-power');
      const bedSelect = document.getElementById('filter-bed');
      const cards = document.querySelectorAll('.machine-card');
      const resetBtn = document.getElementById('reset-filters-btn');
      const counterBadge = document.getElementById('active-results-badge');
      const activeParamsContainer = document.getElementById('active-parameters-container');

      let currentCategory = 'all';

      function filterCards() {
        const query = (searchInput ? searchInput.value : '').toLowerCase().trim();
        const selectedMaterial = materialSelect ? materialSelect.value : 'all';
        const selectedPower = powerSelect ? powerSelect.value : 'all';
        const selectedBed = bedSelect ? bedSelect.value : 'all';
        let visibleCount = 0;

        cards.forEach(card => {
          const cardCat = card.getAttribute('data-category') || '';
          const cardPower = card.getAttribute('data-power') || '';
          const cardMat = (card.getAttribute('data-material') || '').split(',');
          const cardBed = card.getAttribute('data-bed') || '';
          const textContent = card.innerText.toLowerCase();

          const matchesCat = (currentCategory === 'all' || cardCat === currentCategory);
          const matchesPower = (selectedPower === 'all' || cardPower === selectedPower);
          const matchesMat = (selectedMaterial === 'all' || cardMat.includes(selectedMaterial));
          const matchesBed = (selectedBed === 'all' || cardBed === selectedBed);
          const matchesSearch = query === '' || textContent.includes(query);

          if (matchesCat && matchesPower && matchesMat && matchesBed && matchesSearch) {
            card.style.display = 'flex';
            visibleCount++;
          } else {
            card.style.display = 'none';
          }
        });

        if (counterBadge) {
          counterBadge.textContent = 'Showing ' + visibleCount + ' Industrial Production Systems';
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

        if (materialSelect && materialSelect.value !== 'all') {
          hasActive = true;
          const matLabel = materialSelect.options[materialSelect.selectedIndex].text.split('&')[0].trim();
          html += `<span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-on-surface font-tech-spec text-tech-spec px-space-xs py-space-2xs rounded">
            Material: ${matLabel}
            <span class="material-symbols-outlined text-[12px] cursor-pointer hover:text-primary" data-clear="mat">close</span>
          </span>`;
        }

        if (powerSelect && powerSelect.value !== 'all') {
          hasActive = true;
          const pwrLabel = powerSelect.options[powerSelect.selectedIndex].text;
          html += `<span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-on-surface font-tech-spec text-tech-spec px-space-xs py-space-2xs rounded">
            Power: ${pwrLabel}
            <span class="material-symbols-outlined text-[12px] cursor-pointer hover:text-primary" data-clear="pwr">close</span>
          </span>`;
        }

        if (bedSelect && bedSelect.value !== 'all') {
          hasActive = true;
          const bedLabel = bedSelect.options[bedSelect.selectedIndex].text.split('(')[0].trim();
          html += `<span class="inline-flex items-center gap-space-2xs bg-surface-container-high text-on-surface font-tech-spec text-tech-spec px-space-xs py-space-2xs rounded">
            Bed: ${bedLabel}
            <span class="material-symbols-outlined text-[12px] cursor-pointer hover:text-primary" data-clear="bed">close</span>
          </span>`;
        }

        if (!hasActive) {
          html += `<span class="text-on-surface-variant/70 text-body-sm italic">All Systems Active (No Filters Applied)</span>`;
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
            } else if (type === 'mat' && materialSelect) {
              materialSelect.value = 'all';
            } else if (type === 'pwr' && powerSelect) {
              powerSelect.value = 'all';
            } else if (type === 'bed' && bedSelect) {
              bedSelect.value = 'all';
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
      if (powerSelect) {
        powerSelect.addEventListener('change', filterCards);
      }
      if (materialSelect) {
        materialSelect.addEventListener('change', filterCards);
      }
      if (bedSelect) {
        bedSelect.addEventListener('change', filterCards);
      }

      if (resetBtn) {
        resetBtn.addEventListener('click', () => {
          if (window.location.search) {
            window.location.href = "{{ route('machines.index') }}";
            return;
          }
          if (searchInput) searchInput.value = '';
          if (powerSelect) powerSelect.value = 'all';
          if (materialSelect) materialSelect.value = 'all';
          if (bedSelect) bedSelect.value = 'all';

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
