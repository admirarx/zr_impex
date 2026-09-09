@extends('layouts.app')

@section('title', 'Genuine CNC & Fiber Laser Spare Parts Depot — ZR IMPEX')
@section('meta_description', 'Certified OEM electrospindles, Raytools laser nozzles, Hiwin linear rails, EzCAD controllers, and S&A chillers. Same-day express dispatch across India.')

@section('content')
<main class="w-full pt-[7.5rem] bg-surface min-h-screen"><div class="flex flex-col w-full">
<!-- BREADCRUMB & REAL-TIME DISPATCH TELEMETRY BANNER -->
<section class="w-full bg-surface-container-lowest py-space-sm px-gutter-mobile md:px-gutter-desktop shadow-sm">
<div class="max-w-max-width-content mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-space-sm">
<nav aria-label="Breadcrumb" class="flex items-center gap-space-xs text-body-sm font-body-sm">
<a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('home') }}">Home</a>
<span class="text-outline font-tech-spec text-tech-spec">/</span>
<span class="text-on-surface font-semibold font-tech-spec text-tech-spec">Original Spare Parts &amp; Optical Consumables Depot</span>
</nav>
<div class="flex flex-wrap items-center gap-space-md font-label-badge text-label-badge uppercase tracking-wider">
<div class="flex items-center gap-space-xs bg-surface-container px-space-sm py-space-2xs rounded">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="text-primary">DEPOT DISPATCH: AHMEDABAD &amp; PUNE HUB 100% OPERATIONAL</span>
</div>
<div class="flex items-center gap-space-xs bg-surface-container-high px-space-sm py-space-2xs rounded text-secondary">
<span class="material-symbols-outlined text-[14px]">bolt</span>
<span>SLA: &lt;24HR SAME-DAY COURIER FOR ALL CRITICAL SKUS</span>
</div>
</div>
</div>
</section>
<!-- DEPOT HEADER & QUICK SEARCH BAR -->
<section class="w-full bg-surface py-space-2xl px-gutter-mobile md:px-gutter-desktop relative overflow-hidden">
<div class="absolute -right-24 -top-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
<div class="max-w-max-width-content mx-auto relative z-10 flex flex-col gap-space-lg">
<div class="flex flex-col gap-space-xs max-w-4xl">
<div class="inline-flex items-center gap-space-xs text-primary font-label-caps text-label-caps uppercase tracking-wider">
<span class="material-symbols-outlined text-[15px]">verified_user</span>
<span>Certified OEM Spares Division • Genuine CNC Spare Parts • ZR IMPEX Factory Direct</span>
</div>
<h1 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-tight">
          Original Industrial Spare Parts, Optics &amp; Drive Components
        </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
          Factory-direct genuine replacement consumables, ceramic rings, collimating lenses, electrospindles, CNC controllers, and linear motion bearings calibrated for uninterrupted production shifts.
        </p>
</div>
<!-- Action & Search Toolbar -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-md p-space-md bg-surface-container rounded-xl shadow-md">
<div class="lg:col-span-6 relative flex items-center">
<span class="material-symbols-outlined absolute left-space-md text-outline text-[20px]">search</span>
<input class="w-full pl-12 pr-space-md py-space-md bg-surface-container-lowest text-on-surface placeholder:text-outline font-tech-spec text-tech-spec rounded focus:outline-none focus:ring-1 focus:ring-primary shadow-inner" id="sparesSearchInput" placeholder="Search by SKU code (e.g. RAY-NOZ, HQD-SPD), part name, or CNC model..." type="text"/>
</div>
<div class="lg:col-span-3 flex items-center">
<a class="w-full inline-flex items-center justify-center gap-space-xs bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-headline-sm py-space-md px-space-md rounded transition-all" href="#">
<span class="material-symbols-outlined text-primary text-[20px]">download_for_offline</span>
<span>Download Spares PDF (42MB)</span>
</a>
</div>
<div class="lg:col-span-3 flex items-center">
<a class="w-full inline-flex items-center justify-center gap-space-xs bg-[#25D366] hover:bg-[#20bd5a] text-[#090C10] font-headline-sm text-headline-sm py-space-md px-space-md rounded font-bold transition-all shadow-[0_0_16px_rgba(37,211,102,0.3)]" href="https://wa.me/919876543219?text=Hello%20ZR%20IMPEX%20Spares%20Desk,%20I%20need%20urgent%20OEM%20parts%20support." rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span>
<span>WhatsApp Desk: +91 98765 43219</span>
</a>
</div>
</div>
</div>
</section>
<!-- CATEGORY QUICK FILTER TABS -->
<section class="w-full bg-surface-container-low py-space-md px-gutter-mobile md:px-gutter-desktop shadow-sm">
<div class="max-w-max-width-content mx-auto flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<span class="font-label-caps text-label-caps uppercase text-outline">Filter By Component Category</span>
<span class="font-tech-spec text-body-sm text-primary" id="activeCategoryCount">Showing 8 of 8 Primary SKU Lines</span>
</div>
<div class="flex items-center gap-space-xs overflow-x-auto pb-space-xs scrollbar-none" id="categoryTabContainer">
<button class="category-pill active bg-primary text-on-primary px-space-md py-space-xs rounded font-headline-sm text-body-md font-semibold whitespace-nowrap transition-colors flex items-center gap-space-xs" data-cat="all">
<span class="material-symbols-outlined text-[16px]">apps</span>
<span>All Components</span>
</button>
<button class="category-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface px-space-md py-space-xs rounded font-headline-sm text-body-md font-semibold whitespace-nowrap transition-colors flex items-center gap-space-xs" data-cat="laser-optics">
<span class="material-symbols-outlined text-[16px]">flare</span>
<span>Laser Optics &amp; Nozzles</span>
</button>
<button class="category-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface px-space-md py-space-xs rounded font-headline-sm text-body-md font-semibold whitespace-nowrap transition-colors flex items-center gap-space-xs" data-cat="spindles">
<span class="material-symbols-outlined text-[16px]">rotate_right</span>
<span>High-Speed Spindles &amp; VFDs</span>
</button>
<button class="category-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface px-space-md py-space-xs rounded font-headline-sm text-body-md font-semibold whitespace-nowrap transition-colors flex items-center gap-space-xs" data-cat="motion">
<span class="material-symbols-outlined text-[16px]">linear_scale</span>
<span>Guide Rails &amp; Ball Screws</span>
</button>
<button class="category-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface px-space-md py-space-xs rounded font-headline-sm text-body-md font-semibold whitespace-nowrap transition-colors flex items-center gap-space-xs" data-cat="electronics">
<span class="material-symbols-outlined text-[16px]">memory</span>
<span>Electronics &amp; Servo Packs</span>
</button>
<button class="category-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface px-space-md py-space-xs rounded font-headline-sm text-body-md font-semibold whitespace-nowrap transition-colors flex items-center gap-space-xs" data-cat="controllers">
<span class="material-symbols-outlined text-[16px]">developer_board</span>
<span>Control Boards (CypCut / DSP)</span>
</button>
<button class="category-pill bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface px-space-md py-space-xs rounded font-headline-sm text-body-md font-semibold whitespace-nowrap transition-colors flex items-center gap-space-xs" data-cat="chillers">
<span class="material-symbols-outlined text-[16px]">ac_unit</span>
<span>Industrial Chillers &amp; Valves</span>
</button>
</div>
</div>
</section>
<!-- STOCK INDICATOR & COMPATIBILITY FILTER BAR -->
<section class="w-full bg-surface-container py-space-sm px-gutter-mobile md:px-gutter-desktop shadow-sm">
<div class="max-w-max-width-content mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between gap-space-md text-body-sm">
<div class="flex flex-wrap items-center gap-space-lg">
<!-- Machine Filter Dropdown -->
<div class="flex items-center gap-space-xs">
<label class="font-label-caps text-label-caps text-outline uppercase" for="machineSelect">Machine Spec:</label>
<select class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec py-space-2xs px-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="machineSelect">
<option value="all">All CNC &amp; Laser Platforms</option>
<option value="fiber-cutter">1kW - 12kW Sheet Metal Fiber Cutters</option>
<option value="cnc-router">1325 / 1530 ATC Heavy Duty CNC Routers</option>
<option value="laser-marker">Fiber / MOPA Galvo Laser Markers</option>
<option value="co2-engraver">CO2 Precision Acrylic &amp; Wood Engravers</option>
</select>
</div>
<!-- In-Stock Toggle -->
<label class="flex items-center gap-space-xs cursor-pointer select-none">
<input checked="" class="w-4 h-4 rounded bg-surface-container-lowest accent-primary focus:ring-0" id="stockToggle" type="checkbox"/>
<span class="font-tech-spec text-tech-spec text-on-surface">Ready Dispatch Stock Only</span>
</label>
</div>
<!-- Emergency breakdown banner pill -->
<div class="flex items-center gap-space-xs bg-surface-container-lowest px-space-md py-space-xs rounded text-primary">
<span class="material-symbols-outlined text-[18px] animate-bounce">local_shipping</span>
<span class="font-tech-spec text-tech-spec font-semibold">Emergency Breakdown? Same-day counter pickup ready at Ahmedabad (GIDC) &amp; Manesar hubs.</span>
</div>
</div>
</section>
<!-- HIGH-DENSITY PRODUCT SHOWCASE GRID -->
<section class="w-full bg-surface py-space-2xl px-gutter-mobile md:px-gutter-desktop">
<div class="max-w-max-width-content mx-auto">
<!-- Component Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-space-lg" id="partsGrid">
<!-- CARD 1: Raytools Laser Nozzle -->
<div class="part-card flex flex-col bg-surface-container-low rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all" data-category="laser-optics" data-machine="fiber-cutter" data-sku="RAY-NOZ-D1.5">
<div class="relative w-full h-48 bg-surface-container-lowest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="High precision copper Raytools double layer chrome plated fiber laser cutting nozzle resting on a dark milled metallic workbench with specular golden machine reflections, clean industrial lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBG9prkoW0M5g0BAfYmee02cX6ty6TQ34tdAjhSG9riWgATusrYaQEBwa_0sQqa08os7jRk35h5m9zIVix2LM-drulA-2-8e4MAymCXPPYwzkyFbQDUOAb0SBhp_dzCXbWUt7OsvA1siM4gyB3UdJGyIpG1My6diPeoDSqz8z-DStmqdTk85QHq5LFSxr0eHGG0seV0-z4GQF0jkPL49hAEmNWq5y846qL-YSlh-73Knp_Ss4JzF3nP"/>
<div class="absolute top-space-xs left-space-xs flex flex-col gap-space-2xs">
<span class="font-label-badge text-label-badge bg-surface-container-lowest/90 text-primary px-space-xs py-space-2xs rounded uppercase tracking-wider backdrop-blur-sm">FIBER OPTICS</span>
<span class="font-tech-spec text-[10px] bg-surface-container/90 text-on-surface px-space-xs py-space-2xs rounded">RAYTOOLS SPEC</span>
</div>
<div class="absolute top-space-xs right-space-xs">
<span class="flex items-center gap-1 font-label-badge text-label-badge bg-emerald-950/80 text-emerald-400 px-space-xs py-space-2xs rounded uppercase">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>54 Units Ready
              </span>
</div>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<div class="font-tech-spec text-tech-spec text-primary font-bold">SKU: RAY-NOZ-D1.5</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold mt-space-2xs">Raytools Dual-Layer Laser Nozzle Ø1.5mm</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Oxygen/Nitrogen cutting nozzle with pure T2 copper body and high wear-resistant chrome plating.</p>
<!-- Telemetry matrix -->
<div class="grid grid-cols-2 gap-space-xs bg-surface-container p-space-xs rounded mt-space-sm font-tech-spec text-[11px] text-on-surface">
<div><span class="text-outline">Thread:</span> M11/M14</div>
<div><span class="text-outline">Orifice:</span> 1.5mm Double</div>
<div><span class="text-outline">Head:</span> BM111 / BM114</div>
<div><span class="text-outline">Material:</span> Copper Chrome</div>
</div>
</div>
<div class="flex flex-col gap-space-sm pt-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-caps text-label-caps uppercase text-outline">Price Level</span>
<span class="font-tech-spec text-body-sm font-bold text-on-surface">Factory Direct OEM Rate</span>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-[#25D366] hover:bg-[#20bd5a] text-[#090C10] py-space-xs px-space-sm rounded font-headline-sm text-body-md font-bold transition-all shadow-sm" href="https://wa.me/919876543219?text=Hello%20ZR%20IMPEX,%20I%20would%20like%20to%20order%20SKU:%20RAY-NOZ-D1.5%20(Raytools%20Dual-Layer%20Laser%20Nozzle%20%C3%981.5mm).%20Required%20Qty:%20" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span>Order on WhatsApp</span>
</a>
<button class="rfq-btn inline-flex items-center justify-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface py-space-xs px-space-sm rounded font-tech-spec text-tech-spec transition-colors" data-name="Raytools Dual-Layer Nozzle Ø1.5mm" data-sku="RAY-NOZ-D1.5">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
<span>Add to Spares RFQ List</span>
</button>
</div>
</div>
</div>
<!-- CARD 2: HQD 6.0kW Electrospindle -->
<div class="part-card flex flex-col bg-surface-container-low rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all" data-category="spindles" data-machine="cnc-router" data-sku="HQD-SPD-6KW">
<div class="relative w-full h-48 bg-surface-container-lowest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Heavy duty cylindrical metal HQD 6.0kW ER32 air cooled electrospindle motor for CNC routers, dark graphite finish, ceramic bearings label, industrial machine workshop background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZemjI9_gZJBjKyHn-b_gaQKooPyvrYYD34Wcj-DSXHau2WcyrEtoaO2XJKTmoMqzXCPjQ2vW7eV-jymtnV1J4PhyOKlKxH6yXGby1wYsEo0GDNCdGpmkyH9tMpDeerO08_xpDICurw_ZUETbqkCtKoAzX3aZw8j8FzJpXhN2Pzt6dcxUFHPTa0JNBK4gYtMh777IfNkPwXk-W_i2FQlwT9gMwAkF-dS_-a6mTfw8pEmHIgGHc8K1e"/>
<div class="absolute top-space-xs left-space-xs flex flex-col gap-space-2xs">
<span class="font-label-badge text-label-badge bg-surface-container-lowest/90 text-primary px-space-xs py-space-2xs rounded uppercase tracking-wider backdrop-blur-sm">SPINDLE MOTOR</span>
<span class="font-tech-spec text-[10px] bg-surface-container/90 text-on-surface px-space-xs py-space-2xs rounded">HQD GENUINE</span>
</div>
<div class="absolute top-space-xs right-space-xs">
<span class="flex items-center gap-1 font-label-badge text-label-badge bg-emerald-950/80 text-emerald-400 px-space-xs py-space-2xs rounded uppercase">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>12 Units Ready
              </span>
</div>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<div class="font-tech-spec text-tech-spec text-primary font-bold">SKU: HQD-SPD-6KW</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold mt-space-2xs">HQD 6.0kW ER32 Air-Cooled Electrospindle</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">18,000 RPM continuous duty spindle equipped with German ceramic hybrid bearings for stone and wood carving.</p>
<div class="grid grid-cols-2 gap-space-xs bg-surface-container p-space-xs rounded mt-space-sm font-tech-spec text-[11px] text-on-surface">
<div><span class="text-outline">Power:</span> 6.0 kW (380V)</div>
<div><span class="text-outline">Collet:</span> ER32 (3-20mm)</div>
<div><span class="text-outline">Max RPM:</span> 18,000 RPM</div>
<div><span class="text-outline">Cooling:</span> Fan Forced Air</div>
</div>
</div>
<div class="flex flex-col gap-space-sm pt-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-caps text-label-caps uppercase text-outline">Price Level</span>
<span class="font-tech-spec text-body-sm font-bold text-on-surface">Volume Tier Available</span>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-[#25D366] hover:bg-[#20bd5a] text-[#090C10] py-space-xs px-space-sm rounded font-headline-sm text-body-md font-bold transition-all shadow-sm" href="https://wa.me/919876543219?text=Hello%20ZR%20IMPEX,%20I%20would%20like%20to%20order%20SKU:%20HQD-SPD-6KW%20(HQD%206.0kW%20ER32%20Air-Cooled%20Spindle).%20Required%20Qty:%20" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span>Order on WhatsApp</span>
</a>
<button class="rfq-btn inline-flex items-center justify-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface py-space-xs px-space-sm rounded font-tech-spec text-tech-spec transition-colors" data-name="HQD 6.0kW ER32 Air-Cooled Spindle" data-sku="HQD-SPD-6KW">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
<span>Add to Spares RFQ List</span>
</button>
</div>
</div>
</div>
<!-- CARD 3: Hiwin 25mm Linear Flange Block -->
<div class="part-card flex flex-col bg-surface-container-low rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all" data-category="motion" data-machine="cnc-router" data-sku="HWN-HGH25-CA">
<div class="relative w-full h-48 bg-surface-container-lowest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Genuine Hiwin HGH25CA linear motion slider block on steel guide rail, precision ball bearings visible, crisp engraved serial numbers, industrial machine tool components." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4VjPOJSNePhq2tqE96-rVECtUprwVvVzTTR7ZREnCeysXC66ODNcUpezx5TtqLhNwXkuzh8HM9fS8sR3z5h3ReFkLU9DmX2QeGYUPxN2W4aFwAxBwOd4HZ9UQz8kCyx8rHsuF69Wst8kIEpUDznHBDPkr9ZVpa_xEKIA5EQ5v_xhgOWooIFaZoFZCQqjRQ5YFL2qNUPh6bbME46QWbVLNp7KWC2sb9_Aei4UY4R_K5WKn2PcJZErm"/>
<div class="absolute top-space-xs left-space-xs flex flex-col gap-space-2xs">
<span class="font-label-badge text-label-badge bg-surface-container-lowest/90 text-primary px-space-xs py-space-2xs rounded uppercase tracking-wider backdrop-blur-sm">MOTION &amp; RAILS</span>
<span class="font-tech-spec text-[10px] bg-surface-container/90 text-on-surface px-space-xs py-space-2xs rounded">HIWIN TAIWAN</span>
</div>
<div class="absolute top-space-xs right-space-xs">
<span class="flex items-center gap-1 font-label-badge text-label-badge bg-emerald-950/80 text-emerald-400 px-space-xs py-space-2xs rounded uppercase">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>140 Units Ready
              </span>
</div>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<div class="font-tech-spec text-tech-spec text-primary font-bold">SKU: HWN-HGH25-CA</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold mt-space-2xs">Genuine Hiwin 25mm Heavy Load Block</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Four-row circular-arc groove design with self-aligning capability and high rigidity across all axes.</p>
<div class="grid grid-cols-2 gap-space-xs bg-surface-container p-space-xs rounded mt-space-sm font-tech-spec text-[11px] text-on-surface">
<div><span class="text-outline">Size:</span> 25mm Rail Type</div>
<div><span class="text-outline">Class:</span> High (H) Precision</div>
<div><span class="text-outline">Preload:</span> ZA Medium</div>
<div><span class="text-outline">Lube:</span> Factory Sealed</div>
</div>
</div>
<div class="flex flex-col gap-space-sm pt-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-caps text-label-caps uppercase text-outline">Price Level</span>
<span class="font-tech-spec text-body-sm font-bold text-on-surface">Verified OEM Rates</span>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-[#25D366] hover:bg-[#20bd5a] text-[#090C10] py-space-xs px-space-sm rounded font-headline-sm text-body-md font-bold transition-all shadow-sm" href="https://wa.me/919876543219?text=Hello%20ZR%20IMPEX,%20I%20would%20like%20to%20order%20SKU:%20HWN-HGH25-CA%20(Hiwin%2025mm%20Block).%20Required%20Qty:%20" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span>Order on WhatsApp</span>
</a>
<button class="rfq-btn inline-flex items-center justify-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface py-space-xs px-space-sm rounded font-tech-spec text-tech-spec transition-colors" data-name="Hiwin 25mm Heavy Load Block" data-sku="HWN-HGH25-CA">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
<span>Add to Spares RFQ List</span>
</button>
</div>
</div>
</div>
<!-- CARD 4: EzCAD3 Motherboard -->
<div class="part-card flex flex-col bg-surface-container-low rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all" data-category="controllers" data-machine="laser-marker" data-sku="BJJCZ-EZCAD3">
<div class="relative w-full h-48 bg-surface-container-lowest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Original green and gold BJJCZ EzCAD3 DSP motherboard controller card for fiber laser marking machines, with digital ports and optical fiber interfaces." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvzeIcXPa331TguweR53RdB58OCueiWMp0OvuF74jMw2ebu0ZBLJ3ExA3fYfvzuKKw5ZYwY-f33oSAsECeb5pI-M-assWuN7TGsl4D-8r-77B4j9vYfGJkjWQWgUioBYgjbsoInvfW4SrvzGxTe0MWKz_Y-oqTscpHwA6hYUwXBnmV6oZYw3qRdLGxO6QXOUtetGeg6-JCqYA6_0t87GKbU0P5XyAvYGCiEYz80WBl73L1TNHdXxM8"/>
<div class="absolute top-space-xs left-space-xs flex flex-col gap-space-2xs">
<span class="font-label-badge text-label-badge bg-surface-container-lowest/90 text-primary px-space-xs py-space-2xs rounded uppercase tracking-wider backdrop-blur-sm">DSP CONTROLLER</span>
<span class="font-tech-spec text-[10px] bg-surface-container/90 text-on-surface px-space-xs py-space-2xs rounded">BJJCZ ORIGINAL</span>
</div>
<div class="absolute top-space-xs right-space-xs">
<span class="flex items-center gap-1 font-label-badge text-label-badge bg-amber-950/80 text-primary px-space-xs py-space-2xs rounded uppercase">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>Low Stock (8 Left)
              </span>
</div>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<div class="font-tech-spec text-tech-spec text-primary font-bold">SKU: BJJCZ-EZCAD3</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold mt-space-2xs">Original EzCAD3 64-Bit Marking Controller</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Supports 3D curved surface laser slicing, multi-galvo synchronization, and IPG/Raycus/JPT source control.</p>
<div class="grid grid-cols-2 gap-space-xs bg-surface-container p-space-xs rounded mt-space-sm font-tech-spec text-[11px] text-on-surface">
<div><span class="text-outline">OS:</span> Win10 / Win11 64b</div>
<div><span class="text-outline">Interface:</span> USB 3.0 / SPI</div>
<div><span class="text-outline">Galvo:</span> XY2-100 Protocol</div>
<div><span class="text-outline">Auth:</span> Hardware Encrypted</div>
</div>
</div>
<div class="flex flex-col gap-space-sm pt-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-caps text-label-caps uppercase text-outline">Price Level</span>
<span class="font-tech-spec text-body-sm font-bold text-on-surface">Authentic License Included</span>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-[#25D366] hover:bg-[#20bd5a] text-[#090C10] py-space-xs px-space-sm rounded font-headline-sm text-body-md font-bold transition-all shadow-sm" href="https://wa.me/919876543219?text=Hello%20ZR%20IMPEX,%20I%20would%20like%20to%20order%20SKU:%20BJJCZ-EZCAD3%20(EzCAD3%20Marking%20Controller).%20Required%20Qty:%20" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span>Order on WhatsApp</span>
</a>
<button class="rfq-btn inline-flex items-center justify-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface py-space-xs px-space-sm rounded font-tech-spec text-tech-spec transition-colors" data-name="EzCAD3 64-Bit Marking Controller" data-sku="BJJCZ-EZCAD3">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
<span>Add to Spares RFQ List</span>
</button>
</div>
</div>
</div>
<!-- CARD 5: F-Theta Telecentric Scanning Lens -->
<div class="part-card flex flex-col bg-surface-container-low rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all" data-category="laser-optics" data-machine="laser-marker" data-sku="LNS-FTH-160">
<div class="relative w-full h-48 bg-surface-container-lowest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="High quality F-Theta optical quartz scan lens with amber and violet anti reflective coating for fiber laser marking machines, black anodized threaded barrel." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDL1j6ZNAxLYPobve2yUphO2G_mYkuAkQt7c-PcS5XK7j-dCUXbYswQ-xRB9RJT-QetwfnOKF1XXd95ugIpKFOE-fvn9Z1VdCbnYmvqOIYGvW4fZB7gg-AGk8Q8L67HX5bq2dGWsI_A15XjRIfl7_wWeYMlBLE8KW4j0s7IllYKLS3PIzV3reb2O5T3m2_bzZwZ-tuYJmHFRQTR2S1ApC9o2ymvhBnSyvBeyKg2UOegvAV3I30N0Gab"/>
<div class="absolute top-space-xs left-space-xs flex flex-col gap-space-2xs">
<span class="font-label-badge text-label-badge bg-surface-container-lowest/90 text-primary px-space-xs py-space-2xs rounded uppercase tracking-wider backdrop-blur-sm">SCANNING OPTICS</span>
<span class="font-tech-spec text-[10px] bg-surface-container/90 text-on-surface px-space-xs py-space-2xs rounded">1064nm COATING</span>
</div>
<div class="absolute top-space-xs right-space-xs">
<span class="flex items-center gap-1 font-label-badge text-label-badge bg-emerald-950/80 text-emerald-400 px-space-xs py-space-2xs rounded uppercase">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>29 Units Ready
              </span>
</div>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<div class="font-tech-spec text-tech-spec text-primary font-bold">SKU: LNS-FTH-160</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold mt-space-2xs">F-Theta Scanning Lens 1064nm (110x110mm)</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Telecentric optical configuration with ultra-low thermal drift and uniform spot size across the entire field.</p>
<div class="grid grid-cols-2 gap-space-xs bg-surface-container p-space-xs rounded mt-space-sm font-tech-spec text-[11px] text-on-surface">
<div><span class="text-outline">Wavelength:</span> 1064 nm</div>
<div><span class="text-outline">Scan Field:</span> 110 x 110 mm</div>
<div><span class="text-outline">Focal Length:</span> F=160 mm</div>
<div><span class="text-outline">Mount:</span> M85 x 1 Thread</div>
</div>
</div>
<div class="flex flex-col gap-space-sm pt-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-caps text-label-caps uppercase text-outline">Price Level</span>
<span class="font-tech-spec text-body-sm font-bold text-on-surface">Factory Direct Stock</span>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-[#25D366] hover:bg-[#20bd5a] text-[#090C10] py-space-xs px-space-sm rounded font-headline-sm text-body-md font-bold transition-all shadow-sm" href="https://wa.me/919876543219?text=Hello%20ZR%20IMPEX,%20I%20would%20like%20to%20order%20SKU:%20LNS-FTH-160%20(F-Theta%20Scanning%20Lens).%20Required%20Qty:%20" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span>Order on WhatsApp</span>
</a>
<button class="rfq-btn inline-flex items-center justify-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface py-space-xs px-space-sm rounded font-tech-spec text-tech-spec transition-colors" data-name="F-Theta Scanning Lens 1064nm" data-sku="LNS-FTH-160">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
<span>Add to Spares RFQ List</span>
</button>
</div>
</div>
</div>
<!-- CARD 6: S&A CW-5200 Chiller -->
<div class="part-card flex flex-col bg-surface-container-low rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all" data-category="chillers" data-machine="fiber-cutter" data-sku="SA-CW5200">
<div class="relative w-full h-48 bg-surface-container-lowest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Industrial S&amp;A CW-5200 water chiller unit, beige and dark grey chassis with digital temperature display and pressure gauges for CO2 and fiber laser tube cooling." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVK3bZLRZ4xmWLhlKsxfN8gZ3R6jIaDvEn340lZYTg5A61JRcKGG62Nd0-ocRhs-4AaCP__izprS21MBGIuoEvqIcxzYpCZAvqVMR6yNwrpveLWNFrAEjWKQ_ilfySK1P0MqXSzb-hiVI-lmW1sgdzi9js4gKB03CY9glMJMfglFwNt5kw29ZqouYzj9w3tJbZOcC0bEeX-jLuEwGUdmkBJ1U6in2yLSHbLIF4sm4aCPypVWmVpVzG"/>
<div class="absolute top-space-xs left-space-xs flex flex-col gap-space-2xs">
<span class="font-label-badge text-label-badge bg-surface-container-lowest/90 text-primary px-space-xs py-space-2xs rounded uppercase tracking-wider backdrop-blur-sm">COOLING SYSTEMS</span>
<span class="font-tech-spec text-[10px] bg-surface-container/90 text-on-surface px-space-xs py-space-2xs rounded">S&amp;A TEYU GENUINE</span>
</div>
<div class="absolute top-space-xs right-space-xs">
<span class="flex items-center gap-1 font-label-badge text-label-badge bg-emerald-950/80 text-emerald-400 px-space-xs py-space-2xs rounded uppercase">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>18 Units Ready
              </span>
</div>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<div class="font-tech-spec text-tech-spec text-primary font-bold">SKU: SA-CW5200</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold mt-space-2xs">S&amp;A Dual-Inlet Industrial Chiller 1400W</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Precision ±0.3°C temperature stability with dual cooling circuits for laser source and optical cutting head.</p>
<div class="grid grid-cols-2 gap-space-xs bg-surface-container p-space-xs rounded mt-space-sm font-tech-spec text-[11px] text-on-surface">
<div><span class="text-outline">Capacity:</span> 1.4 kW Cooling</div>
<div><span class="text-outline">Stability:</span> ±0.3 °C</div>
<div><span class="text-outline">Refrigerant:</span> R-410a Eco</div>
<div><span class="text-outline">Voltage:</span> 220V 50Hz</div>
</div>
</div>
<div class="flex flex-col gap-space-sm pt-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-caps text-label-caps uppercase text-outline">Price Level</span>
<span class="font-tech-spec text-body-sm font-bold text-on-surface">Manufacturer Direct</span>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-[#25D366] hover:bg-[#20bd5a] text-[#090C10] py-space-xs px-space-sm rounded font-headline-sm text-body-md font-bold transition-all shadow-sm" href="https://wa.me/919876543219?text=Hello%20ZR%20IMPEX,%20I%20would%20like%20to%20order%20SKU:%20SA-CW5200%20(S%26A%20CW-5200%20Chiller).%20Required%20Qty:%20" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span>Order on WhatsApp</span>
</a>
<button class="rfq-btn inline-flex items-center justify-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface py-space-xs px-space-sm rounded font-tech-spec text-tech-spec transition-colors" data-name="S&amp;A CW-5200 Industrial Chiller" data-sku="SA-CW5200">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
<span>Add to Spares RFQ List</span>
</button>
</div>
</div>
</div>
<!-- CARD 7: Yaskawa Sigma-7 AC Servo Motor -->
<div class="part-card flex flex-col bg-surface-container-low rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all" data-category="electronics" data-machine="fiber-cutter" data-sku="YSK-SGM7J-04A">
<div class="relative w-full h-48 bg-surface-container-lowest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Yaskawa Sigma 7 AC servo motor with encoder cable and heavy-duty shaft, matte metallic finish, blue branded label on dark slate bench." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIft9q481bwXl1XL2hITZNkSpOdIblbdw54QNmldchLAybZrTW010CH5evR_NldgJLGFI7EFK8tV_ev-FUW3fLZ54sQifQXnFY_GJLpZdAIernUdFMg7e7t_8CGLlvvLM-r-8tkm_Z2ApE1FVN6w7umyhdmwMam7GSuMESqM7QFLYW2DLcMaC9qpnXLcdY5pDBsWUhlce08sS8olL-36cJxtAJeU36933SQY6La43Zp3Y7oydyy0PU"/>
<div class="absolute top-space-xs left-space-xs flex flex-col gap-space-2xs">
<span class="font-label-badge text-label-badge bg-surface-container-lowest/90 text-primary px-space-xs py-space-2xs rounded uppercase tracking-wider backdrop-blur-sm">DRIVE ELECTRONICS</span>
<span class="font-tech-spec text-[10px] bg-surface-container/90 text-on-surface px-space-xs py-space-2xs rounded">YASKAWA JAPAN</span>
</div>
<div class="absolute top-space-xs right-space-xs">
<span class="flex items-center gap-1 font-label-badge text-label-badge bg-emerald-950/80 text-emerald-400 px-space-xs py-space-2xs rounded uppercase">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>22 Units Ready
              </span>
</div>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<div class="font-tech-spec text-tech-spec text-primary font-bold">SKU: YSK-SGM7J-04A</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold mt-space-2xs">Yaskawa Sigma-7 AC Servo Motor 400W</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Equipped with 24-bit high-resolution absolute serial encoder for micro-stepping fiber laser gantries.</p>
<div class="grid grid-cols-2 gap-space-xs bg-surface-container p-space-xs rounded mt-space-sm font-tech-spec text-[11px] text-on-surface">
<div><span class="text-outline">Rated Power:</span> 400 Watts</div>
<div><span class="text-outline">Encoder:</span> 24-Bit Absolute</div>
<div><span class="text-outline">Torque:</span> 1.27 N•m</div>
<div><span class="text-outline">Max RPM:</span> 6,000 RPM</div>
</div>
</div>
<div class="flex flex-col gap-space-sm pt-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-caps text-label-caps uppercase text-outline">Price Level</span>
<span class="font-tech-spec text-body-sm font-bold text-on-surface">Tier-1 OEM Direct</span>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-[#25D366] hover:bg-[#20bd5a] text-[#090C10] py-space-xs px-space-sm rounded font-headline-sm text-body-md font-bold transition-all shadow-sm" href="https://wa.me/919876543219?text=Hello%20ZR%20IMPEX,%20I%20would%20like%20to%20order%20SKU:%20YSK-SGM7J-04A%20(Yaskawa%20Sigma-7%20Servo%20Motor).%20Required%20Qty:%20" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span>Order on WhatsApp</span>
</a>
<button class="rfq-btn inline-flex items-center justify-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface py-space-xs px-space-sm rounded font-tech-spec text-tech-spec transition-colors" data-name="Yaskawa Sigma-7 Servo Motor 400W" data-sku="YSK-SGM7J-04A">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
<span>Add to Spares RFQ List</span>
</button>
</div>
</div>
</div>
<!-- CARD 8: Quartz Protective Window -->
<div class="part-card flex flex-col bg-surface-container-low rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all" data-category="laser-optics" data-machine="fiber-cutter" data-sku="QTZ-WIN-30X5">
<div class="relative w-full h-48 bg-surface-container-lowest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Stack of ultra clear fused silica quartz protective laser windows with anti reflective coating and laser engraved purity marks on clean black cloth." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBU6v-g60q0w9Gg1BC2WnUynRSIThjeS2EVo1VpntyYc213une_M_E9E2OR0tmIbSAph4v0cwmfrERkMmuhTMBvH0hlHdaywxPgXcmBGUIeU5FGCMbqta2EWAtTT_Y4oowCDFB5iRrJMq4SgjYu0sd-hqSaF9zZC9PSmSKJmkE1AfehQiT_Gjtbug2Lrjb4mlwTc-krQT8cZPDmHtASJEwqXbV-VQpOJct-3S5W0dcsmE_Z511aWyQy"/>
<div class="absolute top-space-xs left-space-xs flex flex-col gap-space-2xs">
<span class="font-label-badge text-label-badge bg-surface-container-lowest/90 text-primary px-space-xs py-space-2xs rounded uppercase tracking-wider backdrop-blur-sm">QUARTZ OPTICS</span>
<span class="font-tech-spec text-[10px] bg-surface-container/90 text-on-surface px-space-xs py-space-2xs rounded">JGS1 GRADE</span>
</div>
<div class="absolute top-space-xs right-space-xs">
<span class="flex items-center gap-1 font-label-badge text-label-badge bg-emerald-950/80 text-emerald-400 px-space-xs py-space-2xs rounded uppercase">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>320 Units Ready
              </span>
</div>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div>
<div class="font-tech-spec text-tech-spec text-primary font-bold">SKU: QTZ-WIN-30X5</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold mt-space-2xs">D30 x 5mm Quartz Protective Optical Window</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Dual-sided AR coating at 1064nm with high damage threshold (&gt;15J/cm²) for fiber cutting heads up to 15kW.</p>
<div class="grid grid-cols-2 gap-space-xs bg-surface-container p-space-xs rounded mt-space-sm font-tech-spec text-[11px] text-on-surface">
<div><span class="text-outline">Dimensions:</span> Ø30mm x 5mm</div>
<div><span class="text-outline">Transmittance:</span> &gt;99.95%</div>
<div><span class="text-outline">Wavelength:</span> 1064 nm AR</div>
<div><span class="text-outline">Head:</span> Precitec / Raytools</div>
</div>
</div>
<div class="flex flex-col gap-space-sm pt-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-caps text-label-caps uppercase text-outline">Price Level</span>
<span class="font-tech-spec text-body-sm font-bold text-on-surface">Packs of 5 / 10 / 50</span>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-[#25D366] hover:bg-[#20bd5a] text-[#090C10] py-space-xs px-space-sm rounded font-headline-sm text-body-md font-bold transition-all shadow-sm" href="https://wa.me/919876543219?text=Hello%20ZR%20IMPEX,%20I%20would%20like%20to%20order%20SKU:%20QTZ-WIN-30X5%20(D30x5mm%20Quartz%20Window).%20Required%20Qty:%20" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span>Order on WhatsApp</span>
</a>
<button class="rfq-btn inline-flex items-center justify-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface py-space-xs px-space-sm rounded font-tech-spec text-tech-spec transition-colors" data-name="D30x5mm Quartz Protective Window" data-sku="QTZ-WIN-30X5">
<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
<span>Add to Spares RFQ List</span>
</button>
</div>
</div>
</div>
</div>
<!-- Spares RFQ Floating Bar (Active when items added) -->
<div class="hidden mt-space-xl p-space-md bg-surface-container-highest rounded-xl shadow-xl flex flex-col md:flex-row items-center justify-between gap-space-md" id="rfqBar">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">checklist</span>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold" id="rfqCountText">3 Spares Items Selected for Consolidated RFQ</span>
<span class="font-tech-spec text-body-sm text-on-surface-variant">Click below to dispatch an automated consolidated inquiry to the engineering parts team.</span>
</div>
</div>
<div class="flex items-center gap-space-sm">
<button class="px-space-md py-space-sm bg-surface-container text-on-surface-variant hover:text-on-surface rounded font-tech-spec text-tech-spec transition-colors" id="clearRfqBtn">
            Clear List
          </button>
<button class="px-space-lg py-space-sm bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-body-md font-bold rounded shadow-md transition-all" id="sendConsolidatedRfqBtn">
            Submit Consolidated RFQ
          </button>
</div>
</div>
</div>
</section>
<!-- COUNTERFEIT ALERT & GENUINE VERIFICATION GUIDE -->
<section class="w-full bg-surface-container-low py-space-3xl px-gutter-mobile md:px-gutter-desktop shadow-sm">
<div class="max-w-max-width-content mx-auto flex flex-col gap-space-2xl">
<div class="flex flex-col gap-space-xs text-center items-center max-w-3xl mx-auto">
<div class="inline-flex items-center gap-space-xs text-error font-label-caps text-label-caps uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">warning</span>
<span>Critical Warning: Risk of Machine Downtime &amp; Toolhead Burnout</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface uppercase">
          Genuine OEM Spares vs. Counterfeit Market Clones
        </h2>
<p class="font-body-md text-body-md text-on-surface-variant">
          Using unverified, counterfeit optical windows or cheap spindle clones leads to catastrophic beam reflections, thermal lens fracture, and premature bearing seizure.
        </p>
</div>
<!-- Side-by-side technical audit table -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-space-lg">
<!-- GENUINE PANEL -->
<div class="flex flex-col bg-surface-container p-space-xl rounded-xl shadow-md">
<div class="flex items-center justify-between pb-space-md">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[28px]">verified</span>
<h3 class="font-headline-md text-headline-md text-on-surface font-semibold">ZR IMPEX Certified OEM</h3>
</div>
<span class="font-label-badge text-label-badge bg-primary/20 text-primary px-space-sm py-space-2xs rounded uppercase">100% Guaranteed</span>
</div>
<ul class="flex flex-col gap-space-md text-body-md text-on-surface-variant mt-space-md">
<li class="flex items-start gap-space-sm">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span>
<div>
<strong class="text-on-surface">Spectrophotometer Tested Optics:</strong> Quartz windows feature verified 99.95% transmittance at 1064nm, avoiding catastrophic back-reflection into the laser module.
              </div>
</li>
<li class="flex items-start gap-space-sm">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span>
<div>
<strong class="text-on-surface">German Ceramic Spindle Bearings:</strong> Spindles utilize pre-loaded ceramic hybrid bearings rated for 20,000+ continuous hours under heavy lateral cutting load.
              </div>
</li>
<li class="flex items-start gap-space-sm">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span>
<div>
<strong class="text-on-surface">Pure T2 Grade Electrolytic Copper:</strong> High thermal dissipation prevents nozzle deformation during long pierce sequences with nitrogen assist gas.
              </div>
</li>
<li class="flex items-start gap-space-sm">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span>
<div>
<strong class="text-on-surface">Full Traceability &amp; Batch Serial:</strong> Laser-etched QR code on every single part links to factory QC test certificates and dimensional tolerance logs.
              </div>
</li>
</ul>
</div>
<!-- COUNTERFEIT PANEL -->
<div class="flex flex-col bg-surface-container p-space-xl rounded-xl shadow-md">
<div class="flex items-center justify-between pb-space-md">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-error text-[28px]">gpp_bad</span>
<h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Unbranded Market Replicas</h3>
</div>
<span class="font-label-badge text-label-badge bg-error/20 text-error px-space-sm py-space-2xs rounded uppercase">Extreme Failure Risk</span>
</div>
<ul class="flex flex-col gap-space-md text-body-md text-on-surface-variant mt-space-md">
<li class="flex items-start gap-space-sm">
<span class="material-symbols-outlined text-error text-[20px] shrink-0">cancel</span>
<div>
<strong class="text-on-surface">Optical Thermal Fracture:</strong> Low purity glass absorbs optical energy, heating past 400°C and shattering directly into the collimating chamber.
              </div>
</li>
<li class="flex items-start gap-space-sm">
<span class="material-symbols-outlined text-error text-[20px] shrink-0">cancel</span>
<div>
<strong class="text-on-surface">Unbalanced Cast Iron Rotors:</strong> Cloned spindles exhibit massive runout (&gt;0.05mm), leading to burned stator windings and chatter marks on finished parts.
              </div>
</li>
<li class="flex items-start gap-space-sm">
<span class="material-symbols-outlined text-error text-[20px] shrink-0">cancel</span>
<div>
<strong class="text-on-surface">Scrap Brass Alloy:</strong> Poor thermal conductivity causes nozzle melt, deformed gas vortex rings, and jagged burrs on sheet metal edges.
              </div>
</li>
<li class="flex items-start gap-space-sm">
<span class="material-symbols-outlined text-error text-[20px] shrink-0">cancel</span>
<div>
<strong class="text-on-surface">Voided Machine Warranties:</strong> Machine tool warranties are immediately invalidated when non-OEM optical or driver parts cause system trips.
              </div>
</li>
</ul>
</div>
</div>
<!-- Serial Verification Bar -->
<div class="p-space-xl bg-surface-container rounded-xl shadow-md flex flex-col md:flex-row items-center justify-between gap-space-lg">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded bg-primary/10 flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[28px]">qr_code_scanner</span>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">Online Spares Authenticity Verification Portal</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Enter the 12-digit security code etched onto your ZR IMPEX spare part box to verify authenticity.</span>
</div>
</div>
<div class="flex w-full md:w-auto items-center gap-space-xs">
<input class="bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec py-space-sm px-space-md rounded focus:outline-none focus:ring-1 focus:ring-primary uppercase w-full md:w-48 shadow-inner" placeholder="e.g. ZR-8842-9912" type="text"/>
<button class="bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-md py-space-sm rounded font-bold transition-colors whitespace-nowrap">
            Verify Now
          </button>
</div>
</div>
</div>
</section>
<!-- 24-HOUR EMERGENCY SLA & DEPOT NETWORK BANNER -->
<section class="w-full bg-surface py-space-3xl px-gutter-mobile md:px-gutter-desktop">
<div class="max-w-max-width-content mx-auto grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
<div class="lg:col-span-7 flex flex-col gap-space-md">
<div class="inline-flex items-center gap-space-xs text-secondary font-label-caps text-label-caps uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">local_shipping</span>
<span>Zero Machine Downtime Guarantee</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-tight">
          24-Hour Emergency Pan-India Spares Dispatch
        </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
          We maintain dedicated buffer stock inventories across 5 strategic regional manufacturing corridors. Whether your fiber laser lens shattered during night production or an ATC spindle bearing faulted, our rapid response team guarantees courier handoff within 180 minutes.
        </p>
<!-- Depots Grid -->
<div class="grid grid-cols-2 sm:grid-cols-3 gap-space-sm mt-space-sm">
<div class="p-space-sm bg-surface-container rounded shadow-sm flex flex-col">
<span class="font-tech-spec text-tech-spec font-bold text-on-surface">Ahmedabad Hub</span>
<span class="font-body-sm text-body-sm text-outline">Central Mega Depot (GIDC)</span>
</div>
<div class="p-space-sm bg-surface-container rounded shadow-sm flex flex-col">
<span class="font-tech-spec text-tech-spec font-bold text-on-surface">Delhi / Manesar</span>
<span class="font-body-sm text-body-sm text-outline">North India Buffer Stock</span>
</div>
<div class="p-space-sm bg-surface-container rounded shadow-sm flex flex-col">
<span class="font-tech-spec text-tech-spec font-bold text-on-surface">Pune / Chakan</span>
<span class="font-body-sm text-body-sm text-outline">West Auto-Corridor Spares</span>
</div>
<div class="p-space-sm bg-surface-container rounded shadow-sm flex flex-col">
<span class="font-tech-spec text-tech-spec font-bold text-on-surface">Bengaluru (Peenya)</span>
<span class="font-body-sm text-body-sm text-outline">South Aerospace Hub</span>
</div>
<div class="p-space-sm bg-surface-container rounded shadow-sm flex flex-col">
<span class="font-tech-spec text-tech-spec font-bold text-on-surface">Rajkot Center</span>
<span class="font-body-sm text-body-sm text-outline">Saurashtra Industrial Node</span>
</div>
<div class="p-space-sm bg-surface-container rounded shadow-sm flex flex-col">
<span class="font-tech-spec text-tech-spec font-bold text-on-surface">Same-Day Pickup</span>
<span class="font-body-sm text-body-sm text-primary">Self-counter pickup 24/7</span>
</div>
</div>
</div>
<!-- Spares Head Direct Contact Card -->
<div class="lg:col-span-5 p-space-xl bg-surface-container-high rounded-xl shadow-xl flex flex-col gap-space-md">
<div class="flex items-center gap-space-md">
<div class="w-14 h-14 rounded-full bg-primary/20 flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[32px]">support_agent</span>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Er. Rajesh Panchal</span>
<span class="font-label-caps text-label-caps text-primary uppercase">Chief Spares &amp; Applications Engineer</span>
<span class="font-tech-spec text-body-sm text-outline">ZR IMPEX Factory Team</span>
</div>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
          "Unsure about lens focal length or servo motor compatibility? Send us a high-resolution photo of your existing component label on WhatsApp for instant SKU verification and stock reservation."
        </p>
<div class="flex flex-col gap-space-xs pt-space-xs font-tech-spec text-tech-spec">
<div class="flex items-center gap-space-xs text-on-surface">
<span class="material-symbols-outlined text-primary text-[18px]">phone_in_talk</span>
<span>Spares Hotline: +91 98765 43219 / Ext. 4</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface">
<span class="material-symbols-outlined text-primary text-[18px]">mail</span>
<span>spares-dispatch@zrimpex.com</span>
</div>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-[#25D366] hover:bg-[#20bd5a] text-[#090C10] font-headline-sm text-headline-sm py-space-md px-space-lg rounded font-bold transition-all shadow-[0_0_16px_rgba(37,211,102,0.3)] mt-space-xs" href="https://wa.me/919876543219?text=Hello%20Er.%20Rajesh,%20I%20need%20technical%20verification%20for%20a%20CNC/Laser%20spare%20part." rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span>
<span>Send Part Photo on WhatsApp</span>
</a>
</div>
</div>
</section>
<!-- CLIENT-SIDE FILTERING & RFQ INTERACTIVITY SCRIPT -->
<script>
    (function() {
      const searchInput = document.getElementById('sparesSearchInput');
      const categoryPills = document.querySelectorAll('.category-pill');
      const machineSelect = document.getElementById('machineSelect');
      const stockToggle = document.getElementById('stockToggle');
      const cards = document.querySelectorAll('.part-card');
      const activeCountSpan = document.getElementById('activeCategoryCount');

      let currentCategory = 'all';

      function filterCards() {
        const query = (searchInput.value || '').toLowerCase().trim();
        const machine = machineSelect.value;
        const stockOnly = stockToggle.checked;

        let visibleCount = 0;

        cards.forEach(card => {
          const cardCat = card.dataset.category;
          const cardMachine = card.dataset.machine;
          const cardSku = card.dataset.sku.toLowerCase();
          const cardText = card.innerText.toLowerCase();

          const matchesCat = (currentCategory === 'all' || cardCat === currentCategory);
          const matchesMachine = (machine === 'all' || cardMachine === machine);
          const matchesQuery = !query || cardSku.includes(query) || cardText.includes(query);

          if (matchesCat && matchesMachine && matchesQuery) {
            card.style.display = 'flex';
            visibleCount++;
          } else {
            card.style.display = 'none';
          }
        });

        if (activeCountSpan) {
          activeCountSpan.textContent = `Showing ${visibleCount} of ${cards.length} Primary SKU Lines`;
        }
      }

      categoryPills.forEach(pill => {
        pill.addEventListener('click', () => {
          categoryPills.forEach(p => {
            p.classList.remove('bg-primary', 'text-on-primary');
            p.classList.add('bg-surface-container', 'text-on-surface-variant');
          });
          pill.classList.remove('bg-surface-container', 'text-on-surface-variant');
          pill.classList.add('bg-primary', 'text-on-primary');

          currentCategory = pill.dataset.cat;
          filterCards();
        });
      });

      searchInput.addEventListener('input', filterCards);
      machineSelect.addEventListener('change', filterCards);
      stockToggle.addEventListener('change', filterCards);

      // RFQ list management
      const rfqList = new Set();
      const rfqBar = document.getElementById('rfqBar');
      const rfqCountText = document.getElementById('rfqCountText');
      const clearRfqBtn = document.getElementById('clearRfqBtn');
      const sendConsolidatedRfqBtn = document.getElementById('sendConsolidatedRfqBtn');

      document.querySelectorAll('.rfq-btn').forEach(btn => {
        btn.addEventListener('click', () => {
          const sku = btn.dataset.sku;
          const name = btn.dataset.name;
          rfqList.add(`${sku} (${name})`);
          
          btn.classList.add('bg-primary/20', 'text-primary');
          btn.innerHTML = '<span class="material-symbols-outlined text-[16px]">check</span><span>Added to RFQ</span>';

          updateRfqBar();
        });
      });

      function updateRfqBar() {
        if (rfqList.size > 0) {
          rfqBar.classList.remove('hidden');
          rfqCountText.textContent = `${rfqList.size} Spares SKU(s) Selected for Consolidated RFQ`;
        } else {
          rfqBar.classList.add('hidden');
        }
      }

      if (clearRfqBtn) {
        clearRfqBtn.addEventListener('click', () => {
          rfqList.clear();
          document.querySelectorAll('.rfq-btn').forEach(btn => {
            btn.classList.remove('bg-primary/20', 'text-primary');
            btn.innerHTML = '<span class="material-symbols-outlined text-[16px]">add_shopping_cart</span><span>Add to Spares RFQ List</span>';
          });
          updateRfqBar();
        });
      }

      if (sendConsolidatedRfqBtn) {
        sendConsolidatedRfqBtn.addEventListener('click', () => {
          const itemsStr = Array.from(rfqList).join('%0A- ');
          const url = `https://wa.me/919876543219?text=Hello%20ZR%20IMPEX,%20I%20request%20a%20consolidated%20quote%20for%20these%20items:%0A- ${itemsStr}`;
          window.open(url, '_blank');
        });
      }

    })();
  </script>
</div></main>
@endsection
