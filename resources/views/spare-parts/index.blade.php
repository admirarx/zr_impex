@extends('layouts.app')

@section('title', 'Genuine CNC & Fiber Laser Spare Parts Depot — ZR IMPEX')
@section('meta_description', 'Explore ZR IMPEX certified OEM spare parts catalogue: high-speed electrospindles, Raytools laser nozzles, Hiwin linear motion guide rails, DSP controllers, and S&A refrigeration chillers.')

@section('content')
<div class="w-full bg-transparent min-h-screen"><div class="flex flex-col w-full">

<!-- PROPER INDUSTRIAL HERO SECTION -->
<section class="w-full bg-transparent py-space-xl lg:py-space-2xl relative overflow-hidden border-b border-surface-container">
  <!-- Subtle Industrial Grid & Ambient Accents -->
  <div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(rgba(229,169,16,0.18)_1px,transparent_1px)] [background-size:32px_32px]"></div>
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
<section class="w-full bg-[#101419]/60 backdrop-blur-xs py-space-lg border-b border-surface-container/60">
  <div class="max-w-max-width-content mx-auto px-gutter-desktop flex flex-col gap-space-md">

    <!-- Top Row: Category Headline & Live Counter -->
    <div class="flex items-center justify-between gap-space-md flex-wrap">
      <div class="flex items-center gap-space-xs font-label-caps text-label-caps text-outline uppercase tracking-wider">
        <span class="material-symbols-outlined text-primary text-[16px]">filter_alt</span>
        <span>Component Category Selector</span>
      </div>
      <span class="font-tech-spec text-tech-spec text-primary bg-surface-container px-space-sm py-space-2xs rounded" id="active-results-badge">
        Showing 8 Certified Component Assemblies
      </span>
    </div>

    <!-- Interactive Category Selector Chips -->
    <div class="flex flex-wrap gap-space-xs" id="category-filter-group">
      <button class="cat-pill active bg-primary text-on-primary font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-bold transition-all shadow-sm cursor-pointer" data-cat="all">
        All Components (8)
      </button>
      <button class="cat-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-medium transition-all cursor-pointer" data-cat="optics">
        Laser Optics &amp; Consumables (1)
      </button>
      <button class="cat-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-medium transition-all cursor-pointer" data-cat="spindles">
        Spindles &amp; Motors (1)
      </button>
      <button class="cat-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-medium transition-all cursor-pointer" data-cat="motion">
        Motion &amp; Linear Rails (1)
      </button>
      <button class="cat-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-medium transition-all cursor-pointer" data-cat="controllers">
        Controllers &amp; Electronics (2)
      </button>
      <button class="cat-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-medium transition-all cursor-pointer" data-cat="chillers">
        Refrigeration Chillers (1)
      </button>
      <button class="cat-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-medium transition-all cursor-pointer" data-cat="tooling">
        Carbide Tooling &amp; Bits (1)
      </button>
      <button class="cat-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface font-headline-sm text-headline-sm px-space-md py-space-xs rounded font-medium transition-all cursor-pointer" data-cat="inverters">
        Inverters &amp; VFDs (1)
      </button>
    </div>

    <!-- Quick Search Input Bar -->
    <div class="relative w-full">
      <span class="material-symbols-outlined absolute left-space-md top-1/2 -translate-y-1/2 text-outline text-[18px]">search</span>
      <input type="text" id="catalogue-search-input" placeholder="Search by SKU code (e.g. RAY-NOZ, HQD, HIWIN, 3DM883), part name, or machine model..." class="w-full pl-11 pr-space-md py-space-sm bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec rounded border border-surface-container-highest focus:border-primary focus:outline-none placeholder:text-outline/60 transition-colors shadow-inner" />
    </div>

    <!-- Secondary Spec Grids (Platform, OEM Brand, Stock Status) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md pt-space-xs">
      <!-- Target Platform Selector -->
      <div class="bg-surface-container p-space-md rounded flex flex-col gap-space-xs">
        <label class="font-label-caps text-label-caps text-outline uppercase tracking-wider flex items-center justify-between" for="filter-platform">
          <span>Target Machine Platform</span>
          <span class="material-symbols-outlined text-[14px]">precision_manufacturing</span>
        </label>
        <select class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec p-space-xs rounded focus:outline-none focus:bg-surface-container-high cursor-pointer" id="filter-platform">
          <option value="all">All CNC &amp; Laser Platforms</option>
          <option value="fiber-cutter">1kW - 12kW Sheet Metal Fiber Cutters</option>
          <option value="cnc-router">1325 / 1530 ATC Heavy CNC Routers</option>
          <option value="laser-marker">Fiber &amp; MOPA Galvo Laser Markers</option>
          <option value="co2-laser">CO2 Precision Cutting &amp; Engravers</option>
          <option value="multi-axis">Multi-Axis Machining Centers</option>
        </select>
      </div>

      <!-- OEM Brand Selector -->
      <div class="bg-surface-container p-space-md rounded flex flex-col gap-space-xs">
        <label class="font-label-caps text-label-caps text-outline uppercase tracking-wider flex items-center justify-between" for="filter-brand">
          <span>OEM Brand / Manufacturer</span>
          <span class="material-symbols-outlined text-[14px]">verified</span>
        </label>
        <select class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec p-space-xs rounded focus:outline-none focus:bg-surface-container-high cursor-pointer" id="filter-brand">
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
      <div class="bg-surface-container p-space-md rounded flex flex-col gap-space-xs">
        <label class="font-label-caps text-label-caps text-outline uppercase tracking-wider flex items-center justify-between" for="filter-stock">
          <span>Stock Availability &amp; Dispatch</span>
          <span class="material-symbols-outlined text-[14px]">inventory_2</span>
        </label>
        <select class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec p-space-xs rounded focus:outline-none focus:bg-surface-container-high cursor-pointer" id="filter-stock">
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

      <!-- CARD 1: Raytools Dual-Layer Laser Nozzle -->
      <article class="machine-card bg-surface-container rounded-xl overflow-hidden shadow-lg flex flex-col transition-all hover:translate-y-[-2px] hover:shadow-2xl" data-category="optics" data-platform="fiber-cutter" data-brand="raytools" data-stock="in-stock,emergency,volume">
        <div class="relative h-64 w-full bg-surface-container-lowest overflow-hidden">
          <a href="{{ route('spare-parts.show', 'raytools-dual-layer-fiber-laser-nozzle') }}" class="block w-full h-full">
            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="High precision copper Raytools double layer chrome plated fiber laser cutting nozzle resting on a dark milled metallic workbench with specular golden machine reflections, clean industrial lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBG9prkoW0M5g0BAfYmee02cX6ty6TQ34tdAjhSG9riWgATusrYaQEBwa_0sQqa08os7jRk35h5m9zIVix2LM-drulA-2-8e4MAymCXPPYwzkyFbQDUOAb0SBhp_dzCXbWUt7OsvA1siM4gyB3UdJGyIpG1My6diPeoDSqz8z-DStmqdTk85QHq5LFSxr0eHGG0seV0-z4GQF0jkPL49hAEmNWq5y846qL-YSlh-73Knp_Ss4JzF3nP" />
          </a>
          <div class="absolute top-space-sm left-space-sm flex flex-wrap gap-space-xs pointer-events-none">
            <span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">
              GENUINE OEM
            </span>
            <span class="bg-surface-container-highest/90 text-on-surface font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">
              T2 COPPER
            </span>
          </div>
          <div class="absolute bottom-space-xs right-space-sm bg-surface-dim/80 backdrop-blur-sm px-space-xs py-space-2xs rounded font-label-caps text-label-caps text-tertiary">
            SKU: RAY-NOZ-D1.5
          </div>
        </div>
        <div class="p-space-lg flex-1 flex flex-col justify-between gap-space-md">
          <div class="flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
              <span class="font-label-caps text-label-caps text-primary uppercase tracking-widest">Laser Optics &amp; Nozzles</span>
              <span class="flex items-center gap-space-2xs text-primary font-tech-spec text-tech-spec">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> IN STOCK: 54 UNITS
              </span>
            </div>
            <h2 class="font-headline-sm text-headline-sm text-on-surface uppercase font-bold tracking-tight">
              <a href="{{ route('spare-parts.show', 'raytools-dual-layer-fiber-laser-nozzle') }}" class="hover:text-primary transition-colors">
                Raytools Dual-Layer Laser Cutting Nozzle Ø1.5mm
              </a>
            </h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">
              High-pressure oxygen and nitrogen cutting nozzle built with pure T2 electrolytic copper body and wear-resistant chrome electroplating.
            </p>
          </div>
          <!-- Engineering Spec Table -->
          <div class="bg-surface-container-low p-space-sm rounded flex flex-col gap-space-2xs font-tech-spec text-tech-spec">
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Orifice Spec:</span>
              <span class="text-on-surface font-bold">Ø1.5 mm (Double Layer)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Cutting Head:</span>
              <span class="text-primary font-bold">Raytools BM111 / BM114</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Thread Standard:</span>
              <span class="text-on-surface">M11 / M14 High Precision</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Assist Gas:</span>
              <span class="text-on-surface">N2 / O2 High-Pressure Rated</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">QC Inspection:</span>
              <span class="text-tertiary">100% Micro-Optical Flow Tested</span>
            </div>
          </div>
          <!-- Badges & Action -->
          <div class="flex flex-col gap-space-sm">
            <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
              <span class="inline-flex items-center gap-space-2xs">
                <span class="material-symbols-outlined text-primary text-[15px]">verified</span> 100% Factory Certified OEM
              </span>
              <span class="font-tech-spec text-tech-spec text-outline">Same-Day Express Air</span>
            </div>
            <div class="grid grid-cols-2 gap-space-xs">
              <a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-headline-sm py-space-sm px-space-xs rounded text-center transition-colors" href="{{ route('spare-parts.show', 'raytools-dual-layer-fiber-laser-nozzle') }}">
                <span class="material-symbols-outlined text-[16px]">overview</span>
                <span>View Specs</span>
              </a>
              <a class="inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-fixed text-on-primary font-headline-sm text-headline-sm py-space-sm px-space-xs rounded font-bold shadow-md transition-all" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Inquiry for Raytools Dual-Layer Laser Nozzle Ø1.5mm (SKU: RAY-NOZ-D1.5)') }}" rel="noopener noreferrer" target="_blank">
                <span class="material-symbols-outlined text-[16px]">chat</span>
                <span>WhatsApp Quote</span>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- CARD 2: HQD 3.5kW High-Speed Air-Cooled Spindle -->
      <article class="machine-card bg-surface-container rounded-xl overflow-hidden shadow-lg flex flex-col transition-all hover:translate-y-[-2px] hover:shadow-2xl" data-category="spindles" data-platform="cnc-router,multi-axis" data-brand="hqd" data-stock="in-stock,emergency">
        <div class="relative h-64 w-full bg-surface-container-lowest overflow-hidden">
          <a href="{{ route('spare-parts.show', '3-5kw-hqd-air-cooled-spindle-motor') }}" class="block w-full h-full">
            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Heavy duty cylindrical metal HQD 3.5kW ER25 air cooled electrospindle motor for CNC routers, dark graphite finish, ceramic bearings label, industrial machine workshop background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZemjI9_gZJBjKyHn-b_gaQKooPyvrYYD34Wcj-DSXHau2WcyrEtoaO2XJKTmoMqzXCPjQ2vW7eV-jymtnV1J4PhyOKlKxH6yXGby1wYsEo0GDNCdGpmkyH9tMpDeerO08_xpDICurw_ZUETbqkCtKoAzX3aZw8j8FzJpXhN2Pzt6dcxUFHPTa0JNBK4gYtMh777IfNkPwXk-W_i2FQlwT9gMwAkF-dS_-a6mTfw8pEmHIgGHc8K1e" />
          </a>
          <div class="absolute top-space-sm left-space-sm flex flex-wrap gap-space-xs pointer-events-none">
            <span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">
              HOT SELLER
            </span>
            <span class="bg-surface-container-highest/90 text-on-surface font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">
              P4 CERAMIC
            </span>
          </div>
          <div class="absolute bottom-space-xs right-space-sm bg-surface-dim/80 backdrop-blur-sm px-space-xs py-space-2xs rounded font-label-caps text-label-caps text-tertiary">
            SKU: HQD-GDZ-105
          </div>
        </div>
        <div class="p-space-lg flex-1 flex flex-col justify-between gap-space-md">
          <div class="flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
              <span class="font-label-caps text-label-caps text-primary uppercase tracking-widest">Spindles &amp; Motors</span>
              <span class="flex items-center gap-space-2xs text-primary font-tech-spec text-tech-spec">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> IN STOCK: 12 UNITS
              </span>
            </div>
            <h2 class="font-headline-sm text-headline-sm text-on-surface uppercase font-bold tracking-tight">
              <a href="{{ route('spare-parts.show', '3-5kw-hqd-air-cooled-spindle-motor') }}" class="hover:text-primary transition-colors">
                3.5KW HQD High-Speed Air-Cooled Spindle Motor
              </a>
            </h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">
              18,000 RPM continuous duty electrospindle fitted with German P4 ceramic hybrid angular bearings for woodworking and composite routers.
            </p>
          </div>
          <!-- Spec Table -->
          <div class="bg-surface-container-low p-space-sm rounded flex flex-col gap-space-2xs font-tech-spec text-tech-spec">
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Rated Output:</span>
              <span class="text-on-surface font-bold">3.5 kW (380V / 220V)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Max Operating Speed:</span>
              <span class="text-primary font-bold">18,000 RPM (300 Hz)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Collet Interface:</span>
              <span class="text-on-surface">ER25 (Clamps 3-16mm)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Cooling System:</span>
              <span class="text-on-surface">Forced Air Cooled Built-in Fan</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Radial Runout:</span>
              <span class="text-tertiary">&lt; 0.005 mm Dial Tested</span>
            </div>
          </div>
          <!-- Badges & Action -->
          <div class="flex flex-col gap-space-sm">
            <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
              <span class="inline-flex items-center gap-space-2xs">
                <span class="material-symbols-outlined text-primary text-[15px]">verified</span> 1-Year Spindle Warranty
              </span>
              <span class="font-tech-spec text-tech-spec text-outline">Dynamic Balance VDI</span>
            </div>
            <div class="grid grid-cols-2 gap-space-xs">
              <a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-headline-sm py-space-sm px-space-xs rounded text-center transition-colors" href="{{ route('spare-parts.show', '3-5kw-hqd-air-cooled-spindle-motor') }}">
                <span class="material-symbols-outlined text-[16px]">overview</span>
                <span>View Specs</span>
              </a>
              <a class="inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-fixed text-on-primary font-headline-sm text-headline-sm py-space-sm px-space-xs rounded font-bold shadow-md transition-all" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Inquiry for 3.5KW HQD Spindle Motor (SKU: HQD-GDZ-105)') }}" rel="noopener noreferrer" target="_blank">
                <span class="material-symbols-outlined text-[16px]">chat</span>
                <span>WhatsApp Quote</span>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- CARD 3: Taiwan Hiwin 20mm Linear Guide Rail & Blocks -->
      <article class="machine-card bg-surface-container rounded-xl overflow-hidden shadow-lg flex flex-col transition-all hover:translate-y-[-2px] hover:shadow-2xl" data-category="motion" data-platform="cnc-router,fiber-cutter" data-brand="hiwin" data-stock="in-stock,emergency,volume">
        <div class="relative h-64 w-full bg-surface-container-lowest overflow-hidden">
          <a href="{{ route('spare-parts.show', 'taiwan-hiwin-20mm-linear-guide-rail-blocks') }}" class="block w-full h-full">
            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Genuine Hiwin HGH20CA linear motion slider block on steel guide rail, precision ball bearings visible, crisp engraved serial numbers, industrial machine tool components." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4VjPOJSNePhq2tqE96-rVECtUprwVvVzTTR7ZREnCeysXC66ODNcUpezx5TtqLhNwXkuzh8HM9fS8sR3z5h3ReFkLU9DmX2QeGYUPxN2W4aFwAxBwOd4HZ9UQz8kCyx8rHsuF69Wst8kIEpUDznHBDPkr9ZVpa_xEKIA5EQ5v_xhgOWooIFaZoFZCQqjRQ5YFL2qNUPh6bbME46QWbVLNp7KWC2sb9_Aei4UY4R_K5WKn2PcJZErm" />
          </a>
          <div class="absolute top-space-sm left-space-sm flex flex-wrap gap-space-xs pointer-events-none">
            <span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">
              ORIGINAL TAIWAN
            </span>
            <span class="bg-surface-container-highest/90 text-on-surface font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">
              H-CLASS
            </span>
          </div>
          <div class="absolute bottom-space-xs right-space-sm bg-surface-dim/80 backdrop-blur-sm px-space-xs py-space-2xs rounded font-label-caps text-label-caps text-tertiary">
            SKU: HIWIN-HGH20CA
          </div>
        </div>
        <div class="p-space-lg flex-1 flex flex-col justify-between gap-space-md">
          <div class="flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
              <span class="font-label-caps text-label-caps text-primary uppercase tracking-widest">Linear Motion &amp; Rails</span>
              <span class="flex items-center gap-space-2xs text-primary font-tech-spec text-tech-spec">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> IN STOCK: 140 UNITS
              </span>
            </div>
            <h2 class="font-headline-sm text-headline-sm text-on-surface uppercase font-bold tracking-tight">
              <a href="{{ route('spare-parts.show', 'taiwan-hiwin-20mm-linear-guide-rail-blocks') }}" class="hover:text-primary transition-colors">
                Taiwan Hiwin 20mm Linear Guide Rail &amp; Blocks
              </a>
            </h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">
              High-rigidity 4-row circular arc groove linear guideway with equal load ratings in radial and lateral directions, supplied with factory dust scrapers.
            </p>
          </div>
          <!-- Spec Table -->
          <div class="bg-surface-container-low p-space-sm rounded flex flex-col gap-space-2xs font-tech-spec text-tech-spec">
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Rail Profile:</span>
              <span class="text-on-surface font-bold">20 mm High-Rigidity Steel</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Carriage Block:</span>
              <span class="text-primary font-bold">HGH20CA Square Flange</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Accuracy Class:</span>
              <span class="text-on-surface">H-Grade (High Precision)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Preload Grade:</span>
              <span class="text-on-surface">ZA Medium Preload</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Lubrication:</span>
              <span class="text-tertiary">End-Cap Grease Nipple Ready</span>
            </div>
          </div>
          <!-- Badges & Action -->
          <div class="flex flex-col gap-space-sm">
            <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
              <span class="inline-flex items-center gap-space-2xs">
                <span class="material-symbols-outlined text-primary text-[15px]">verified</span> 100% Genuine Taiwan Hiwin
              </span>
              <span class="font-tech-spec text-tech-spec text-outline">Custom Length Cut</span>
            </div>
            <div class="grid grid-cols-2 gap-space-xs">
              <a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-headline-sm py-space-sm px-space-xs rounded text-center transition-colors" href="{{ route('spare-parts.show', 'taiwan-hiwin-20mm-linear-guide-rail-blocks') }}">
                <span class="material-symbols-outlined text-[16px]">overview</span>
                <span>View Specs</span>
              </a>
              <a class="inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-fixed text-on-primary font-headline-sm text-headline-sm py-space-sm px-space-xs rounded font-bold shadow-md transition-all" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Inquiry for Hiwin 20mm Linear Rail & Blocks (SKU: HIWIN-HGH20CA)') }}" rel="noopener noreferrer" target="_blank">
                <span class="material-symbols-outlined text-[16px]">chat</span>
                <span>WhatsApp Quote</span>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- CARD 4: RichAuto DSP A11 Handheld Controller -->
      <article class="machine-card bg-surface-container rounded-xl overflow-hidden shadow-lg flex flex-col transition-all hover:translate-y-[-2px] hover:shadow-2xl" data-category="controllers" data-platform="cnc-router" data-brand="richauto" data-stock="in-stock,emergency">
        <div class="relative h-64 w-full bg-surface-container-lowest overflow-hidden">
          <a href="{{ route('spare-parts.show', 'richauto-dsp-a11-handheld-controller-system') }}" class="block w-full h-full">
            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Original green and gold DSP motherboard controller card and handheld pendant for CNC routers, with digital ports and optical interfaces." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvzeIcXPa331TguweR53RdB58OCueiWMp0OvuF74jMw2ebu0ZBLJ3ExA3fYfvzuKKw5ZYwY-f33oSAsECeb5pI-M-assWuN7TGsl4D-8r-77B4j9vYfGJkjWQWgUioBYgjbsoInvfW4SrvzGxTe0MWKz_Y-oqTscpHwA6hYUwXBnmV6oZYw3qRdLGxO6QXOUtetGeg6-JCqYA6_0t87GKbU0P5XyAvYGCiEYz80WBl73L1TNHdXxM8" />
          </a>
          <div class="absolute top-space-sm left-space-sm flex flex-wrap gap-space-xs pointer-events-none">
            <span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">
              OFFLINE DSP
            </span>
            <span class="bg-surface-container-highest/90 text-on-surface font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">
              3-AXIS
            </span>
          </div>
          <div class="absolute bottom-space-xs right-space-sm bg-surface-dim/80 backdrop-blur-sm px-space-xs py-space-2xs rounded font-label-caps text-label-caps text-tertiary">
            SKU: DSP-A11E
          </div>
        </div>
        <div class="p-space-lg flex-1 flex flex-col justify-between gap-space-md">
          <div class="flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
              <span class="font-label-caps text-label-caps text-primary uppercase tracking-widest">DSP Controllers</span>
              <span class="flex items-center gap-space-2xs text-primary font-tech-spec text-tech-spec">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> IN STOCK: 18 UNITS
              </span>
            </div>
            <h2 class="font-headline-sm text-headline-sm text-on-surface uppercase font-bold tracking-tight">
              <a href="{{ route('spare-parts.show', 'richauto-dsp-a11-handheld-controller-system') }}" class="hover:text-primary transition-colors">
                RichAuto DSP A11 Handheld Controller System
              </a>
            </h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">
              Standalone handheld CNC pendant with breakout board, 50-pin shielded interface cable, USB drive execution, and power-loss recovery.
            </p>
          </div>
          <!-- Spec Table -->
          <div class="bg-surface-container-low p-space-sm rounded flex flex-col gap-space-2xs font-tech-spec text-tech-spec">
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Controlled Axes:</span>
              <span class="text-on-surface font-bold">3 Axes (X, Y, Z Simultaneous)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Interface Type:</span>
              <span class="text-primary font-bold">Monochrome LCD + 512MB Flash</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Execution Media:</span>
              <span class="text-on-surface">USB Flash Disk Offline Read</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Power Supply:</span>
              <span class="text-on-surface">24V DC Industrial Opto-Isolated</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Special Functions:</span>
              <span class="text-tertiary">Breakpoint Resume &amp; Tool Memory</span>
            </div>
          </div>
          <!-- Badges & Action -->
          <div class="flex flex-col gap-space-sm">
            <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
              <span class="inline-flex items-center gap-space-2xs">
                <span class="material-symbols-outlined text-primary text-[15px]">verified</span> 100% Genuine RichAuto
              </span>
              <span class="font-tech-spec text-tech-spec text-outline">Immune to PC Crashes</span>
            </div>
            <div class="grid grid-cols-2 gap-space-xs">
              <a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-headline-sm py-space-sm px-space-xs rounded text-center transition-colors" href="{{ route('spare-parts.show', 'richauto-dsp-a11-handheld-controller-system') }}">
                <span class="material-symbols-outlined text-[16px]">overview</span>
                <span>View Specs</span>
              </a>
              <a class="inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-fixed text-on-primary font-headline-sm text-headline-sm py-space-sm px-space-xs rounded font-bold shadow-md transition-all" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Inquiry for RichAuto DSP A11 Controller (SKU: DSP-A11E)') }}" rel="noopener noreferrer" target="_blank">
                <span class="material-symbols-outlined text-[16px]">chat</span>
                <span>WhatsApp Quote</span>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- CARD 5: S&A CW-5200 Dual-Inlet Industrial Chiller -->
      <article class="machine-card bg-surface-container rounded-xl overflow-hidden shadow-lg flex flex-col transition-all hover:translate-y-[-2px] hover:shadow-2xl" data-category="chillers" data-platform="fiber-cutter,co2-laser,cnc-router" data-brand="sa-chiller" data-stock="in-stock,emergency">
        <div class="relative h-64 w-full bg-surface-container-lowest overflow-hidden">
          <a href="{{ route('spare-parts.show', 'sa-cw5200-dual-inlet-industrial-chiller') }}" class="block w-full h-full">
            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Industrial S&amp;A CW-5200 water chiller unit, beige and dark grey chassis with digital temperature display and pressure gauges for CO2 and fiber laser tube cooling." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVK3bZLRZ4xmWLhlKsxfN8gZ3R6jIaDvEn340lZYTg5A61JRcKGG62Nd0-ocRhs-4AaCP__izprS21MBGIuoEvqIcxzYpCZAvqVMR6yNwrpveLWNFrAEjWKQ_ilfySK1P0MqXSzb-hiVI-lmW1sgdzi9js4gKB03CY9glMJMfglFwNt5kw29ZqouYzj9w3tJbZOcC0bEeX-jLuEwGUdmkBJ1U6in2yLSHbLIF4sm4aCPypVWmVpVzG" />
          </a>
          <div class="absolute top-space-sm left-space-sm flex flex-wrap gap-space-xs pointer-events-none">
            <span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">
              GENUINE S&amp;A
            </span>
            <span class="bg-surface-container-highest/90 text-on-surface font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">
              ±0.3°C PRECISION
            </span>
          </div>
          <div class="absolute bottom-space-xs right-space-sm bg-surface-dim/80 backdrop-blur-sm px-space-xs py-space-2xs rounded font-label-caps text-label-caps text-tertiary">
            SKU: SA-CW5200
          </div>
        </div>
        <div class="p-space-lg flex-1 flex flex-col justify-between gap-space-md">
          <div class="flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
              <span class="font-label-caps text-label-caps text-primary uppercase tracking-widest">Cooling Systems &amp; Chillers</span>
              <span class="flex items-center gap-space-2xs text-primary font-tech-spec text-tech-spec">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> IN STOCK: 16 UNITS
              </span>
            </div>
            <h2 class="font-headline-sm text-headline-sm text-on-surface uppercase font-bold tracking-tight">
              <a href="{{ route('spare-parts.show', 'sa-cw5200-dual-inlet-industrial-chiller') }}" class="hover:text-primary transition-colors">
                S&amp;A CW-5200 Dual-Inlet Industrial Chiller 1400W
              </a>
            </h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">
              Refrigeration closed-loop water chiller featuring ±0.3°C thermal stability and dual inlet/outlet ports for laser sources and optical heads.
            </p>
          </div>
          <!-- Spec Table -->
          <div class="bg-surface-container-low p-space-sm rounded flex flex-col gap-space-2xs font-tech-spec text-tech-spec">
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Cooling Capacity:</span>
              <span class="text-on-surface font-bold">1.43 kW (4,879 Btu/h)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Thermal Stability:</span>
              <span class="text-primary font-bold">±0.3 °C Intelligent Mode</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Refrigerant Spec:</span>
              <span class="text-on-surface">R-410a Eco (360g Charge)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Reservoir &amp; Flow:</span>
              <span class="text-on-surface">6L Tank | 13 L/min Max Flow</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Alarm Interlocks:</span>
              <span class="text-tertiary">Flow &amp; Over-Temp Signal Relay</span>
            </div>
          </div>
          <!-- Badges & Action -->
          <div class="flex flex-col gap-space-sm">
            <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
              <span class="inline-flex items-center gap-space-2xs">
                <span class="material-symbols-outlined text-primary text-[15px]">verified</span> Factory Anti-Fake Barcode
              </span>
              <span class="font-tech-spec text-tech-spec text-outline">Tested 100% Pre-Pack</span>
            </div>
            <div class="grid grid-cols-2 gap-space-xs">
              <a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-headline-sm py-space-sm px-space-xs rounded text-center transition-colors" href="{{ route('spare-parts.show', 'sa-cw5200-dual-inlet-industrial-chiller') }}">
                <span class="material-symbols-outlined text-[16px]">overview</span>
                <span>View Specs</span>
              </a>
              <a class="inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-fixed text-on-primary font-headline-sm text-headline-sm py-space-sm px-space-xs rounded font-bold shadow-md transition-all" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Inquiry for S&A CW-5200 Chiller (SKU: SA-CW5200)') }}" rel="noopener noreferrer" target="_blank">
                <span class="material-symbols-outlined text-[16px]">chat</span>
                <span>WhatsApp Quote</span>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- CARD 6: Leadshine 3DM883 Digital Stepper Driver -->
      <article class="machine-card bg-surface-container rounded-xl overflow-hidden shadow-lg flex flex-col transition-all hover:translate-y-[-2px] hover:shadow-2xl" data-category="controllers" data-platform="cnc-router" data-brand="leadshine" data-stock="in-stock,emergency,volume">
        <div class="relative h-64 w-full bg-surface-container-lowest overflow-hidden">
          <a href="{{ route('spare-parts.show', 'leadshine-3dm883-digital-stepper-driver') }}" class="block w-full h-full">
            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Leadshine 3DM883 digital 3-phase stepper driver unit with heat sinks and DIP switch selector on workbench." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIft9q481bwXl1XL2hITZNkSpOdIblbdw54QNmldchLAybZrTW010CH5evR_NldgJLGFI7EFK8tV_ev-FUW3fLZ54sQifQXnFY_GJLpZdAIernUdFMg7e7t_8CGLlvvLM-r-8tkm_Z2ApE1FVN6w7umyhdmwMam7GSuMESqM7QFLYW2DLcMaC9qpnXLcdY5pDBsWUhlce08sS8olL-36cJxtAJeU36933SQY6La43Zp3Y7oydyy0PU" />
          </a>
          <div class="absolute top-space-sm left-space-sm flex flex-wrap gap-space-xs pointer-events-none">
            <span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">
              DIGITAL DSP
            </span>
            <span class="bg-surface-container-highest/90 text-on-surface font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">
              3-PHASE 8.3A
            </span>
          </div>
          <div class="absolute bottom-space-xs right-space-sm bg-surface-dim/80 backdrop-blur-sm px-space-xs py-space-2xs rounded font-label-caps text-label-caps text-tertiary">
            SKU: 3DM883
          </div>
        </div>
        <div class="p-space-lg flex-1 flex flex-col justify-between gap-space-md">
          <div class="flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
              <span class="font-label-caps text-label-caps text-primary uppercase tracking-widest">Drivers &amp; Electronics</span>
              <span class="flex items-center gap-space-2xs text-primary font-tech-spec text-tech-spec">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> IN STOCK: 28 UNITS
              </span>
            </div>
            <h2 class="font-headline-sm text-headline-sm text-on-surface uppercase font-bold tracking-tight">
              <a href="{{ route('spare-parts.show', 'leadshine-3dm883-digital-stepper-driver') }}" class="hover:text-primary transition-colors">
                Leadshine 3DM883 Digital 3-Phase Stepper Driver
              </a>
            </h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">
              DSP-based microstepping drive designed to eliminate low-speed resonance, providing quiet and smooth motion on heavy gantry axes.
            </p>
          </div>
          <!-- Spec Table -->
          <div class="bg-surface-container-low p-space-sm rounded flex flex-col gap-space-2xs font-tech-spec text-tech-spec">
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Input Voltage:</span>
              <span class="text-on-surface font-bold">30 - 80 VAC / 40 - 110 VDC</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Peak Output Current:</span>
              <span class="text-primary font-bold">2.1A - 8.3A (8 DIP Settings)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Pulse Input Rate:</span>
              <span class="text-on-surface">Up to 200 KHz High-Speed</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Microstep Modes:</span>
              <span class="text-on-surface">16 Selectable Resolutions</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Built-in Protections:</span>
              <span class="text-tertiary">Over-Voltage, Current &amp; Phase</span>
            </div>
          </div>
          <!-- Badges & Action -->
          <div class="flex flex-col gap-space-sm">
            <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
              <span class="inline-flex items-center gap-space-2xs">
                <span class="material-symbols-outlined text-primary text-[15px]">verified</span> 100% Genuine Leadshine
              </span>
              <span class="font-tech-spec text-tech-spec text-outline">Low Heat Dissipation</span>
            </div>
            <div class="grid grid-cols-2 gap-space-xs">
              <a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-headline-sm py-space-sm px-space-xs rounded text-center transition-colors" href="{{ route('spare-parts.show', 'leadshine-3dm883-digital-stepper-driver') }}">
                <span class="material-symbols-outlined text-[16px]">overview</span>
                <span>View Specs</span>
              </a>
              <a class="inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-fixed text-on-primary font-headline-sm text-headline-sm py-space-sm px-space-xs rounded font-bold shadow-md transition-all" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Inquiry for Leadshine 3DM883 Stepper Driver (SKU: 3DM883)') }}" rel="noopener noreferrer" target="_blank">
                <span class="material-symbols-outlined text-[16px]">chat</span>
                <span>WhatsApp Quote</span>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- CARD 7: Fuling 3.7KW Vector Frequency Inverter (VFD) -->
      <article class="machine-card bg-surface-container rounded-xl overflow-hidden shadow-lg flex flex-col transition-all hover:translate-y-[-2px] hover:shadow-2xl" data-category="inverters" data-platform="cnc-router" data-brand="fuling" data-stock="in-stock,emergency">
        <div class="relative h-64 w-full bg-surface-container-lowest overflow-hidden">
          <a href="{{ route('spare-parts.show', 'fuling-3-7kw-vector-frequency-inverter-vfd') }}" class="block w-full h-full">
            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Fuling vector frequency inverter drive unit with digital keypad and heavy duty terminal block for CNC spindle motor control." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDL1j6ZNAxLYPobve2yUphO2G_mYkuAkQt7c-PcS5XK7j-dCUXbYswQ-xRB9RJT-QetwfnOKF1XXd95ugIpKFOE-fvn9Z1VdCbnYmvqOIYGvW4fZB7gg-AGk8Q8L67HX5bq2dGWsI_A15XjRIfl7_wWeYMlBLE8KW4j0s7IllYKLS3PIzV3reb2O5T3m2_bzZwZ-tuYJmHFRQTR2S1ApC9o2ymvhBnSyvBeyKg2UOegvAV3I30N0Gab" />
          </a>
          <div class="absolute top-space-sm left-space-sm flex flex-wrap gap-space-xs pointer-events-none">
            <span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">
              VECTOR CONTROL
            </span>
            <span class="bg-surface-container-highest/90 text-on-surface font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">
              0 - 1000 Hz
            </span>
          </div>
          <div class="absolute bottom-space-xs right-space-sm bg-surface-dim/80 backdrop-blur-sm px-space-xs py-space-2xs rounded font-label-caps text-label-caps text-tertiary">
            SKU: DZB300B0037L4A
          </div>
        </div>
        <div class="p-space-lg flex-1 flex flex-col justify-between gap-space-md">
          <div class="flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
              <span class="font-label-caps text-label-caps text-primary uppercase tracking-widest">Inverters &amp; VFDs</span>
              <span class="flex items-center gap-space-2xs text-primary font-tech-spec text-tech-spec">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> IN STOCK: 15 UNITS
              </span>
            </div>
            <h2 class="font-headline-sm text-headline-sm text-on-surface uppercase font-bold tracking-tight">
              <a href="{{ route('spare-parts.show', 'fuling-3-7kw-vector-frequency-inverter-vfd') }}" class="hover:text-primary transition-colors">
                Fuling 3.7KW Vector Frequency Inverter (VFD)
              </a>
            </h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">
              Heavy-duty sensorless vector VFD engineered for Indian industrial voltage conditions with high low-RPM torque holding.
            </p>
          </div>
          <!-- Spec Table -->
          <div class="bg-surface-container-low p-space-sm rounded flex flex-col gap-space-2xs font-tech-spec text-tech-spec">
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Rated Capacity:</span>
              <span class="text-on-surface font-bold">3.7 kW / 5.0 HP Spindle</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Input Voltage:</span>
              <span class="text-primary font-bold">3-Phase 380V (±15% Fluctuation)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Output Frequency:</span>
              <span class="text-on-surface">0 - 1000 Hz Wide Range</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Control Topology:</span>
              <span class="text-on-surface">Sensorless Vector (SVC) + V/F</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Spindle Matching:</span>
              <span class="text-tertiary">Pre-Configured Parameters</span>
            </div>
          </div>
          <!-- Badges & Action -->
          <div class="flex flex-col gap-space-sm">
            <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
              <span class="inline-flex items-center gap-space-2xs">
                <span class="material-symbols-outlined text-primary text-[15px]">verified</span> 100% Genuine Fuling DZB
              </span>
              <span class="font-tech-spec text-tech-spec text-outline">Thermal Overload Safe</span>
            </div>
            <div class="grid grid-cols-2 gap-space-xs">
              <a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-headline-sm py-space-sm px-space-xs rounded text-center transition-colors" href="{{ route('spare-parts.show', 'fuling-3-7kw-vector-frequency-inverter-vfd') }}">
                <span class="material-symbols-outlined text-[16px]">overview</span>
                <span>View Specs</span>
              </a>
              <a class="inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-fixed text-on-primary font-headline-sm text-headline-sm py-space-sm px-space-xs rounded font-bold shadow-md transition-all" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Inquiry for Fuling 3.7KW Vector VFD (SKU: DZB300B0037L4A)') }}" rel="noopener noreferrer" target="_blank">
                <span class="material-symbols-outlined text-[16px]">chat</span>
                <span>WhatsApp Quote</span>
              </a>
            </div>
          </div>
        </div>
      </article>

      <!-- CARD 8: Solid Carbide 2-Flute Spiral Upcut CNC Router Bit -->
      <article class="machine-card bg-surface-container rounded-xl overflow-hidden shadow-lg flex flex-col transition-all hover:translate-y-[-2px] hover:shadow-2xl" data-category="tooling" data-platform="cnc-router" data-brand="zr-tooling" data-stock="in-stock,volume">
        <div class="relative h-64 w-full bg-surface-container-lowest overflow-hidden">
          <a href="{{ route('spare-parts.show', 'solid-carbide-2-flute-spiral-upcut-bit-6mm') }}" class="block w-full h-full">
            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Micro-grain solid carbide 6mm spiral upcut CNC router bits with mirror finish flute resting on clean workshop surface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBU6v-g60q0w9Gg1BC2WnUynRSIThjeS2EVo1VpntyYc213une_M_E9E2OR0tmIbSAph4v0cwmfrERkMmuhTMBvH0hlHdaywxPgXcmBGUIeU5FGCMbqta2EWAtTT_Y4oowCDFB5iRrJMq4SgjYu0sd-hqSaF9zZC9PSmSKJmkE1AfehQiT_Gjtbug2Lrjb4mlwTc-krQT8cZPDmHtASJEwqXbV-VQpOJct-3S5W0dcsmE_Z511aWyQy" />
          </a>
          <div class="absolute top-space-sm left-space-sm flex flex-wrap gap-space-xs pointer-events-none">
            <span class="bg-primary text-on-primary font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded font-bold">
              MICRO-GRAIN
            </span>
            <span class="bg-surface-container-highest/90 text-on-surface font-label-badge text-label-badge uppercase px-space-xs py-space-2xs rounded">
              K10/K20 CARBIDE
            </span>
          </div>
          <div class="absolute bottom-space-xs right-space-sm bg-surface-dim/80 backdrop-blur-sm px-space-xs py-space-2xs rounded font-label-caps text-label-caps text-tertiary">
            SKU: ZR-SC-6MM-UP
          </div>
        </div>
        <div class="p-space-lg flex-1 flex flex-col justify-between gap-space-md">
          <div class="flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
              <span class="font-label-caps text-label-caps text-primary uppercase tracking-widest">CNC Bits &amp; Tooling</span>
              <span class="flex items-center gap-space-2xs text-primary font-tech-spec text-tech-spec">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span> IN STOCK: 240 PACKS
              </span>
            </div>
            <h2 class="font-headline-sm text-headline-sm text-on-surface uppercase font-bold tracking-tight">
              <a href="{{ route('spare-parts.show', 'solid-carbide-2-flute-spiral-upcut-bit-6mm') }}" class="hover:text-primary transition-colors">
                Solid Carbide 2-Flute Spiral Upcut Router Bit (6mm)
              </a>
            </h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">
              Mirror-polished spiral flutes for rapid upward chip evacuation, delivering splinter-free finishes on solid wood, MDF, and acrylic.
            </p>
          </div>
          <!-- Spec Table -->
          <div class="bg-surface-container-low p-space-sm rounded flex flex-col gap-space-2xs font-tech-spec text-tech-spec">
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Shank Diameter:</span>
              <span class="text-on-surface font-bold">6.0 mm (1/4&quot; Precision)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Cutting Diameter:</span>
              <span class="text-primary font-bold">6.0 mm Upcut Spiral</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Flute Length:</span>
              <span class="text-on-surface">22 mm (Overall 50 mm)</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Material Grade:</span>
              <span class="text-on-surface">K10/K20 Tungsten Carbide</span>
            </div>
            <div class="flex justify-between items-center py-space-2xs">
              <span class="text-outline">Pack Quantities:</span>
              <span class="text-tertiary">Single / Box of 10 / Bulk 50</span>
            </div>
          </div>
          <!-- Badges & Action -->
          <div class="flex flex-col gap-space-sm">
            <div class="flex items-center justify-between text-body-sm text-on-surface-variant">
              <span class="inline-flex items-center gap-space-2xs">
                <span class="material-symbols-outlined text-primary text-[15px]">verified</span> High Wear-Resistance
              </span>
              <span class="font-tech-spec text-tech-spec text-outline">Mirror Flute Finish</span>
            </div>
            <div class="grid grid-cols-2 gap-space-xs">
              <a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-headline-sm py-space-sm px-space-xs rounded text-center transition-colors" href="{{ route('spare-parts.show', 'solid-carbide-2-flute-spiral-upcut-bit-6mm') }}">
                <span class="material-symbols-outlined text-[16px]">overview</span>
                <span>View Specs</span>
              </a>
              <a class="inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-fixed text-on-primary font-headline-sm text-headline-sm py-space-sm px-space-xs rounded font-bold shadow-md transition-all" href="{{ \App\Services\WhatsAppUrlBuilder::build(null, 'Inquiry for Solid Carbide 6mm Bit (SKU: ZR-SC-6MM-UP)') }}" rel="noopener noreferrer" target="_blank">
                <span class="material-symbols-outlined text-[16px]">chat</span>
                <span>WhatsApp Quote</span>
              </a>
            </div>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- PROCUREMENT, INSTALLATION & WARRANTY GUARANTEES -->
<section class="w-full bg-[#101419]/60 backdrop-blur-xs py-space-2xl border-t border-surface-container/60">
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
      btn.addEventListener('click', () => {
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
