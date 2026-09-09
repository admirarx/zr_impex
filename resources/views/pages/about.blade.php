@extends('layouts.app')

@section('title', 'About ZR IMPEX — Heavy Industrial CNC Routers & Laser Systems Engineering')
@section('meta_description', 'Discover ZR IMPEX manufacturing heritage since 2008: 4-stage build rigor, 600°C stress-annealed frames, laser interferometer calibration, and factory-direct support across India.')

@section('content')
<div class="w-full bg-transparent min-h-screen"><div class="flex flex-col w-full">

<!-- Hero Section: Mechanical Mastery & Direct Factory OEM -->
<section class="relative w-full bg-transparent py-space-3xl overflow-hidden">
<div class="max-w-max-width-content mx-auto px-gutter-desktop grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center relative z-10">
<div class="lg:col-span-7 flex flex-col gap-space-md">
<div class="flex items-center gap-space-sm">
<span class="px-space-sm py-space-2xs rounded bg-surface-container-high text-primary font-label-caps text-label-caps uppercase tracking-widest">
            OEM Heavy Machine Builder • GIDC Hub
          </span>
<span class="px-space-sm py-space-2xs rounded bg-surface-container text-tertiary font-label-caps text-label-caps uppercase">
            Turnkey Integration
          </span>
</div>
<h1 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-tight">
          Engineering Heavy Industrial CNC Routers &amp; High-Precision Fiber Lasers Since 2008
        </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
          Direct OEM manufacturer and turnkey integration specialist headquartered in GIDC Industrial Estate, Gujarat. We bridge the critical gap between heavy-duty mechanical rigidity, tier-1 global motion drive components, and uncompromising on-site commissioning across Indian workshops and international export markets.
        </p>
<!-- Dynamic Live Spec Quick Switch -->
<div class="mt-space-sm grid grid-cols-2 sm:grid-cols-4 gap-space-sm">
<div class="bg-surface-container-low p-space-md rounded flex flex-col justify-between shadow-sm">
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary">1,450+</span>
<span class="font-label-caps text-label-caps text-on-surface-variant uppercase mt-space-xs">Active Installations</span>
</div>
<div class="bg-surface-container-low p-space-md rounded flex flex-col justify-between shadow-sm">
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary">15+</span>
<span class="font-label-caps text-label-caps text-on-surface-variant uppercase mt-space-xs">Years CNC Excellence</span>
</div>
<div class="bg-surface-container-low p-space-md rounded flex flex-col justify-between shadow-sm">
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-tertiary">45,000</span>
<span class="font-label-caps text-label-caps text-on-surface-variant uppercase mt-space-xs">Sq.ft Demo &amp; Plant</span>
</div>
<div class="bg-surface-container-low p-space-md rounded flex flex-col justify-between shadow-sm">
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-secondary">38</span>
<span class="font-label-caps text-label-caps text-on-surface-variant uppercase mt-space-xs">Field Automation Eng.</span>
</div>
</div>
<div class="flex flex-wrap items-center gap-space-md mt-space-md">
<a class="inline-flex items-center gap-space-sm bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-lg py-space-md rounded font-bold shadow-md transition-transform hover:scale-[1.01] active:translate-y-[1px]" @click="quoteModalOpen = true; activeQuoteProduct = null" href="javascript:void(0)">
<span class="material-symbols-outlined text-[20px]">calendar_month</span>
<span>Schedule Factory Inspection</span>
</a>
<a class="inline-flex items-center gap-space-sm bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-sm text-headline-sm px-space-lg py-space-md rounded transition-colors" href="#rigor-process">
<span class="material-symbols-outlined text-primary text-[20px]">precision_manufacturing</span>
<span>Inspect Assembly Standards</span>
</a>
</div>
</div>
<!-- Telemetry Graphic / CAD Gantry Blueprint Visual -->
<div class="lg:col-span-5 relative">
<div class="relative bg-surface-container-low rounded-xl p-space-md shadow-xl overflow-hidden">
<div class="flex items-center justify-between pb-space-sm mb-space-sm bg-surface-container-lowest px-space-md py-space-xs rounded">
<div class="flex items-center gap-space-xs">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="font-label-badge text-label-badge text-primary uppercase">Plant Telemetry: Active Bed Stress Analysis</span>
</div>
<span class="font-tech-spec text-tech-spec text-outline">FEM CAD-0493</span>
</div>
<div class="relative rounded overflow-hidden aspect-[4/3] bg-surface-container-lowest flex items-center justify-center group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Technical CAD stress analysis diagram and cutaway rendering of a heavy gantry CNC router steel frame bed, showing laser alignment lines, structural gussets, and gold vibration dampers in a high-tech dark industrial engineering lab." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDITTgcWQCGYSFcKnqf7oKY3jom_au5S15E2fxyqP8w7rUF0zKVPdQSnx-NixU8oxBEQwzgCU94AYU2fiZlCkV5WSjabFLnDmMZZnXgqZ3zkcjeMJ4tv0xsKCwnYWvHCuHp1_qJ1ognB9V7fkJIZUC8cDpq2NSfLBamcp2be-RfFuOheulfl1pfeMJcfNN2S3yoYD5-NTOWim-yfMkRWfGgMBRZ6iDWok6D_P_DBH3L5Cik3ucnJs-a"/>
<!-- Overlaid Monospaced Diagnostic Coordinates -->
<div class="absolute inset-0 bg-gradient-to-t from-surface-dim via-transparent to-transparent opacity-80 pointer-events-none"></div>
<div class="absolute bottom-space-md left-space-md right-space-md bg-surface-container/95 p-space-sm rounded backdrop-blur flex items-center justify-between">
<div>
<p class="font-label-badge text-label-badge text-primary uppercase">Bed Planar Flatness</p>
<p class="font-tech-spec text-tech-spec text-on-surface font-bold">±0.015 mm / 4,000 mm</p>
</div>
<div class="text-right">
<p class="font-label-badge text-label-badge text-tertiary uppercase">Thermal Annealing</p>
<p class="font-tech-spec text-tech-spec text-on-surface font-bold">600°C • 12 Hr Soak</p>
</div>
</div>
</div>
<div class="mt-space-sm p-space-xs bg-surface-container rounded grid grid-cols-3 text-center text-body-sm">
<div>
<span class="font-label-badge text-label-badge text-outline uppercase block">Vibration Deflect.</span>
<span class="font-tech-spec text-tech-spec text-on-surface">&lt; 0.003 mm</span>
</div>
<div>
<span class="font-label-badge text-label-badge text-outline uppercase block">Steel Wall Gauge</span>
<span class="font-tech-spec text-tech-spec text-on-surface">12 - 16 mm Box</span>
</div>
<div>
<span class="font-label-badge text-label-badge text-outline uppercase block">Bed Weight</span>
<span class="font-tech-spec text-tech-spec text-primary">3,850 kg Static</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Manufacturing Footprint & Core Metrics Grid -->
<section class="w-full bg-[#101419]/60 backdrop-blur-xs py-space-3xl border-y border-surface-container/60">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col gap-space-xs mb-space-2xl">
<div class="flex items-center gap-space-xs text-primary font-label-caps text-label-caps uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">military_tech</span>
<span>Foundational Principles</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface uppercase tracking-tight">
          Engineered to Outlast. Built to Eliminate Workshop Downtime.
        </h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
          At ZR IMPEX, our mechanical philosophy reject cheap, bolt-together sheet metal fabrications. We operate under the standard that structural stability determines laser cut quality, edge burr reduction, and spindle carbide tool longevity.
        </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-space-lg">
<!-- Mission Card -->
<div class="lg:col-span-6 bg-surface-container p-space-xl rounded-xl flex flex-col justify-between shadow-md">
<div class="flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<span class="p-space-sm bg-surface-container-high rounded text-primary">
<span class="material-symbols-outlined text-[28px]">handyman</span>
</span>
<span class="font-label-badge text-label-badge text-outline uppercase bg-surface-container-low px-space-xs py-space-2xs rounded">01 • Engineering Mission</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase font-bold">
              Eliminate Unplanned Machine Stoppages Across Indian Industrial Clusters
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              To free Indian furniture, metal fabricators, marble sculptors, and aerospace subcontractors from continuous breakdown anxiety. We accomplish this by supplying heavily rib-reinforced, heat-treated structural machine beds paired exclusively with factory-certified Tier-1 motion systems: Raytools heads, Delta servos, and Hiwin linear motion bearings.
            </p>
</div>
<div class="mt-space-lg bg-surface-container-low p-space-md rounded flex items-center gap-space-md">
<span class="material-symbols-outlined text-primary text-[28px]">speed</span>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Zero-Compromise Machine Bed Standard</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Every structural tubular section is ultrasonic wall-gauge verified before fabrication.</span>
</div>
</div>
</div>
<!-- Vision Card -->
<div class="lg:col-span-6 bg-surface-container p-space-xl rounded-xl flex flex-col justify-between shadow-md">
<div class="flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<span class="p-space-sm bg-surface-container-high rounded text-tertiary">
<span class="material-symbols-outlined text-[28px]">radar</span>
</span>
<span class="font-label-badge text-label-badge text-outline uppercase bg-surface-container-low px-space-xs py-space-2xs rounded">02 • Industrial Vision</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase font-bold">
              South Asia's Most Responsive Direct-to-Factory CNC &amp; Fiber Laser Ecosystem
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              To become the standard benchmark for domestic high-performance automation. We eliminate third-party commission middle-men by maintaining a 24-Hour Emergency Spare Parts Dispatch bank directly from our Gujarat plant, backed by local application teams stationed across northern, western, and southern industrial manufacturing corridors.
            </p>
</div>
<div class="mt-space-lg bg-surface-container-low p-space-md rounded flex items-center gap-space-md">
<span class="material-symbols-outlined text-tertiary text-[28px]">schedule</span>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Guaranteed 24-Hr Parts Dispatch</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Ready-inventory reserves of spindles, collimator lenses, servo packs, and CNC boards.</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- The 4-Stage Precision Build Rigor -->
<section class="w-full bg-transparent py-space-4xl" id="rigor-process">
<div class="max-w-max-width-content mx-auto px-gutter-desktop flex flex-col gap-space-2xl">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
<div>
<div class="flex items-center gap-space-xs text-primary font-label-caps text-label-caps uppercase tracking-wider mb-space-xs">
<span class="material-symbols-outlined text-[16px]">engineering</span>
<span>Quality Assurance Process &amp; Build Rigor</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-tight">
            How We Build Our Machines: The 4-Stage Rigor
          </h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">
          A machine's precision is permanent only when the foundational mechanical steel is purged of internal residual stress before machining.
        </p>
</div>
<!-- Process 4-Column Flow Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">
<!-- Stage 1 -->
<div class="bg-surface-container-low p-space-lg rounded-xl flex flex-col justify-between relative group hover:bg-surface-container transition-colors shadow-sm">
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between pb-space-sm">
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary">01</span>
<span class="material-symbols-outlined text-primary text-[22px]">local_fire_department</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">
              600°C Annealing Furnace
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Every welded machine chassis undergoes a 12-hour thermal cycle in our controlled industrial furnace to eliminate internal crystalline stress, preventing bed warping or twisting over 15+ years of aggressive production.
            </p>
</div>
<div class="mt-space-lg pt-space-md bg-surface-container-lowest p-space-sm rounded">
<span class="font-label-badge text-label-badge text-outline uppercase block">Tolerance Benchmark</span>
<span class="font-tech-spec text-tech-spec text-primary font-bold">Zero Structural Drift (&lt;0.01mm)</span>
</div>
</div>
<!-- Stage 2 -->
<div class="bg-surface-container-low p-space-lg rounded-xl flex flex-col justify-between relative group hover:bg-surface-container transition-colors shadow-sm">
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between pb-space-sm">
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-tertiary">02</span>
<span class="material-symbols-outlined text-tertiary text-[22px]">architecture</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">
              Multi-Axis Gantry Milling
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Post-annealing, machine guide-rail steps and rack channels are finished on our 5-face gantry planing mill in a single clamped fixture, ensuring absolute parallelism across X and Y axes.
            </p>
</div>
<div class="mt-space-lg pt-space-md bg-surface-container-lowest p-space-sm rounded">
<span class="font-label-badge text-label-badge text-outline uppercase block">Planar Flatness</span>
<span class="font-tech-spec text-tech-spec text-tertiary font-bold">±0.015mm / 4,000mm Bed</span>
</div>
</div>
<!-- Stage 3 -->
<div class="bg-surface-container-low p-space-lg rounded-xl flex flex-col justify-between relative group hover:bg-surface-container transition-colors shadow-sm">
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between pb-space-sm">
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-secondary">03</span>
<span class="material-symbols-outlined text-secondary text-[22px]">flaky</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">
              Laser Interferometer Calibration
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Pitch error compensation and axis lead-screw backlash are calibrated using Renishaw dual-beam laser optical interferometers. Every machine is issued a physical calibration certificate prior to release.
            </p>
</div>
<div class="mt-space-lg pt-space-md bg-surface-container-lowest p-space-sm rounded">
<span class="font-label-badge text-label-badge text-outline uppercase block">Repeatability Matrix</span>
<span class="font-tech-spec text-tech-spec text-secondary font-bold">±0.02mm Axis Repeatability</span>
</div>
</div>
<!-- Stage 4 -->
<div class="bg-surface-container-low p-space-lg rounded-xl flex flex-col justify-between relative group hover:bg-surface-container transition-colors shadow-sm">
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between pb-space-sm">
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary">04</span>
<span class="material-symbols-outlined text-primary text-[22px]">timer</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">
              72-Hr Continuous Burn-In
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Prior to crating, every CNC gantry and fiber laser undergoes 72 hours of uninterrupted full-envelope motion and cutting cycles with continuous infrared thermal telemetry on spindle bearings and drivers.
            </p>
</div>
<div class="mt-space-lg pt-space-md bg-surface-container-lowest p-space-sm rounded">
<span class="font-label-badge text-label-badge text-outline uppercase block">Thermal Delta Peak</span>
<span class="font-tech-spec text-tech-spec text-primary font-bold">ΔT &lt; 14°C Bearing Max</span>
</div>
</div>
</div>
</div>
</section>
<!-- Component Philosophy: Genuine OEM Ecosystem -->
<section class="w-full bg-surface-container-lowest py-space-3xl">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col gap-space-xs mb-space-2xl">
<div class="flex items-center gap-space-xs text-secondary font-label-caps text-label-caps uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">verified</span>
<span>Zero-Compromise Hardware Ecosystem</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-tight">
          Direct Strategic Component Sourcing
        </h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
          We reject unbranded white-label hardware. Every ZR IMPEX machine integrates factory-traceable motion, optics, and electrospindle components guaranteed with direct OEM warranty backing.
        </p>
</div>
<!-- Component Matrix Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
<!-- Module 1: Laser Sources -->
<div class="bg-surface-container p-space-lg rounded-xl shadow-md flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-label-badge text-label-badge text-primary uppercase bg-surface-container-low px-space-xs py-space-2xs rounded">Solid State Optics</span>
<span class="material-symbols-outlined text-primary text-[20px]">wb_iridescent</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase font-bold mb-space-xs">Laser Sources</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              High-efficiency fiber resonators configured for razor-sharp beam quality and reliable duty cycles across stainless, mild steel, and aluminum.
            </p>
<ul class="space-y-space-xs font-tech-spec text-tech-spec text-on-surface">
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>Raycus Continuous Wave</span>
<span class="text-primary font-bold">1.5 kW - 12 kW</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>MAX Photonics Series</span>
<span class="text-primary font-bold">3 kW - 20 kW</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>IPG Photonics (Germany)</span>
<span class="text-primary font-bold">Single Mode Optional</span>
</li>
</ul>
</div>
<div class="mt-space-md text-body-sm text-outline font-label-caps uppercase tracking-wider">
            • Anti-Reflection Back-Burn Protection
          </div>
</div>
<!-- Module 2: Cutting & Galvo Heads -->
<div class="bg-surface-container p-space-lg rounded-xl shadow-md flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-label-badge text-label-badge text-tertiary uppercase bg-surface-container-low px-space-xs py-space-2xs rounded">Swiss &amp; High-Speed Optics</span>
<span class="material-symbols-outlined text-tertiary text-[20px]">adjust</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase font-bold mb-space-xs">Cutting &amp; Galvo Heads</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Auto-focus cutting heads with dual water cooling loops for long-duration piercing without thermal drift.
            </p>
<ul class="space-y-space-xs font-tech-spec text-tech-spec text-on-surface">
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>Raytools BM111 / BM06K</span>
<span class="text-tertiary font-bold">Auto-Focus Swiss</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>WSX Precision Nozzle Head</span>
<span class="text-tertiary font-bold">High-Pressure Assist</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>Sino-Galvo Digital Heads</span>
<span class="text-tertiary font-bold">F-Theta Coated Glass</span>
</li>
</ul>
</div>
<div class="mt-space-md text-body-sm text-outline font-label-caps uppercase tracking-wider">
            • Integrated Capacitive Height Sensing
          </div>
</div>
<!-- Module 3: Motion & Guidance -->
<div class="bg-surface-container p-space-lg rounded-xl shadow-md flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-label-badge text-label-badge text-secondary uppercase bg-surface-container-low px-space-xs py-space-2xs rounded">Taiwan Flanged Guides</span>
<span class="material-symbols-outlined text-secondary text-[20px]">straighten</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase font-bold mb-space-xs">Guidance &amp; Drive</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Heavy-load square guide rails matched with helical ground gear racks for zero-slip microstep feed transmission.
            </p>
<ul class="space-y-space-xs font-tech-spec text-tech-spec text-on-surface">
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>Hiwin 25mm / 30mm Rails</span>
<span class="text-secondary font-bold">High-Rigidity HG Series</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>TBI Motion C5 Ball Screws</span>
<span class="text-secondary font-bold">Preloaded Dual Nuts</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>Helical M2 Milled Racks</span>
<span class="text-secondary font-bold">DIN 6 Precision Class</span>
</li>
</ul>
</div>
<div class="mt-space-md text-body-sm text-outline font-label-caps uppercase tracking-wider">
            • Automatic Centralized Oil Lubrication
          </div>
</div>
<!-- Module 4: Spindles & AC Drivers -->
<div class="bg-surface-container p-space-lg rounded-xl shadow-md flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-label-badge text-label-badge text-primary uppercase bg-surface-container-low px-space-xs py-space-2xs rounded">European Electrospindles</span>
<span class="material-symbols-outlined text-primary text-[20px]">rotate_right</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase font-bold mb-space-xs">Spindles &amp; Motors</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Ceramic hybrid bearings rated to 24,000 RPM with low vibration runout, driven by closed-loop AC servo packs.
            </p>
<ul class="space-y-space-xs font-tech-spec text-tech-spec text-on-surface">
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>HSD Italy ATC Electrospindles</span>
<span class="text-primary font-bold">9.0 kW ISO30 / HSK</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>HQD Air/Water-Cooled</span>
<span class="text-primary font-bold">3.2 kW - 6.0 kW ER32</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>Yaskawa &amp; Delta AC Servos</span>
<span class="text-primary font-bold">Absolute 23-Bit Optical</span>
</li>
</ul>
</div>
<div class="mt-space-md text-body-sm text-outline font-label-caps uppercase tracking-wider">
            • IP65 Enclosure • Built-in Thermistor
          </div>
</div>
<!-- Module 5: Controllers & Software -->
<div class="bg-surface-container p-space-lg rounded-xl shadow-md flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-label-badge text-label-badge text-tertiary uppercase bg-surface-container-low px-space-xs py-space-2xs rounded">Deterministic Motion Logic</span>
<span class="material-symbols-outlined text-tertiary text-[20px]">memory</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase font-bold mb-space-xs">CNC Control Units</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Hardware motion control units ensuring ultra-smooth acceleration curves, kerf compensation, and instant nest processing.
            </p>
<ul class="space-y-space-xs font-tech-spec text-tech-spec text-on-surface">
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>CypCut / HypCut Laser</span>
<span class="text-tertiary font-bold">Fly-Cut &amp; Auto-Nesting</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>Syntec Taiwan Multi-Axis</span>
<span class="text-tertiary font-bold">G-Code ATC Management</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>RichAuto DSP &amp; Ruida DSP</span>
<span class="text-tertiary font-bold">Standalone USB Pendant</span>
</li>
</ul>
</div>
<div class="mt-space-md text-body-sm text-outline font-label-caps uppercase tracking-wider">
            • Offline Recovery from Power Stoppage
          </div>
</div>
<!-- Module 6: Factory Spares Buffer -->
<div class="bg-surface-container p-space-lg rounded-xl shadow-md flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="font-label-badge text-label-badge text-secondary uppercase bg-surface-container-low px-space-xs py-space-2xs rounded">Inventory Warehouse</span>
<span class="material-symbols-outlined text-secondary text-[20px]">inventory_2</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase font-bold mb-space-xs">Immediate Parts Hub</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Guaranteed availability for all wearing parts with immediate dispatched couriers from our central Gujarat stockyard.
            </p>
<ul class="space-y-space-xs font-tech-spec text-tech-spec text-on-surface">
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>Raytools Protective Lenses</span>
<span class="text-secondary font-bold">D28 / D30 In-Stock</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>Copper Cutting Nozzles</span>
<span class="text-secondary font-bold">Single / Double 1.0-4.0</span>
</li>
<li class="flex items-center justify-between p-space-xs bg-surface-container-low rounded">
<span>Hiwin Carriages &amp; Steppers</span>
<span class="text-secondary font-bold">Same-Day Dispatch</span>
</li>
</ul>
</div>
<div class="mt-space-md text-body-sm text-outline font-label-caps uppercase tracking-wider">
            • 24/7 Field Tech WhatsApp Dispatch
          </div>
</div>
</div>
</div>
</section>
<!-- Engineering Leadership & Plant Directors -->
<section class="w-full bg-transparent py-space-3xl">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col gap-space-xs mb-space-2xl">
<div class="flex items-center gap-space-xs text-primary font-label-caps text-label-caps uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">groups</span>
<span>Technical Leadership</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-tight">
          Automation Engineers Behind Every Frame
        </h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
          Led by mechanical fabricators and mechatronics specialists with over 3 decades of cumulative experience building machines capable of handling extreme continuous factory shifts.
        </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
<!-- Leader 1 -->
<div class="bg-surface-container-low rounded-xl overflow-hidden shadow-md group">
<div class="h-64 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Experienced chief mechanical engineering director in dark industrial safety jacket standing in an advanced CNC router assembly factory bay, smiling with technical competence, industrial lighting with amber workshop sparks in background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBznI-Af2Nhy1swtRbwTfkZLjGEdIK_LVPYCWegZ0k3XFk3fhc6gyqnfJb_3pxBSQBV7PylnDd7v0J4_BkxzdiESp9f12dUB6ny8xM0JZylqljbUW6SlbsiPi40rZTheeOuPwWXDZ2lgj_wlrfXQXiLgc0F6ICXY_VTZkzsnxP3j6mlm8J0btrxE0Ypui7x8NQHffnAH0SETg-3N7urKmbkTf0kLPRQd746qcAqodkRmcL3-PXfLyUl"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-low via-transparent to-transparent"></div>
<div class="absolute bottom-space-sm left-space-md">
<span class="font-label-badge text-label-badge text-primary bg-surface-container-lowest px-space-xs py-space-2xs rounded uppercase">Managing Director • Founder</span>
</div>
</div>
<div class="p-space-lg flex flex-col gap-space-xs">
<h3 class="font-headline-md text-headline-md text-on-surface font-bold uppercase">Rajesh V. Sharma</h3>
<p class="font-label-caps text-label-caps text-tertiary">22+ Years in Heavy Structural Tooling</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
              Pioneered stress-relieved bed manufacturing standards for Indian marble and granite CNC machines. Oversees direct procurement partnerships across Germany, Italy, and Taiwan.
            </p>
<div class="flex items-center gap-space-xs mt-space-md text-outline font-tech-spec text-body-sm">
<span class="material-symbols-outlined text-primary text-[16px]">badge</span>
<span>B.E. Mechanical Engineering • Tool &amp; Die</span>
</div>
</div>
</div>
<!-- Leader 2 -->
<div class="bg-surface-container-low rounded-xl overflow-hidden shadow-md group">
<div class="h-64 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Sharp female head of fiber laser optics and automation standing next to an enclosed 12kW fiber laser cutting unit holding a digital diagnostic tablet, high tech dark machine background with blue specular reflection." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBntL4mnoar0UNBlE6iecV4X4QIZf4fBMyRQL6xWbpB14q2luHBERYcZ5j8L4nmcyz5lN9dOfz5mI-4nOumvqXqil_JV_yHNGQkHN-wWir7E_pheAOndzRvpYWtlcOWuvcp2bKA8Gh2eKfHy-264wb108y0wiAycht5s-kqmns5WEbD0879bEtqv_IUrnpcpZsM134g4XZ6jDJFeiHHkAk21z4DHwR1FPWLK7TQZZSfwoHG2P4jyLWj"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-low via-transparent to-transparent"></div>
<div class="absolute bottom-space-sm left-space-md">
<span class="font-label-badge text-label-badge text-tertiary bg-surface-container-lowest px-space-xs py-space-2xs rounded uppercase">Chief Automation Engineer</span>
</div>
</div>
<div class="p-space-lg flex flex-col gap-space-xs">
<h3 class="font-headline-md text-headline-md text-on-surface font-bold uppercase">Dr. Priya M. Patel</h3>
<p class="font-label-caps text-label-caps text-tertiary">14+ Years in Laser Physics &amp; Motion Control</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
              Specialist in laser beam polarization, assist-gas dynamics, and high-frequency servo synchronicity. Manages the 72-hour factory burn-in and laser interferometer calibration lines.
            </p>
<div class="flex items-center gap-space-xs mt-space-md text-outline font-tech-spec text-body-sm">
<span class="material-symbols-outlined text-tertiary text-[16px]">science</span>
<span>M.Tech Mechatronics • Ph.D Laser Applications</span>
</div>
</div>
</div>
<!-- Leader 3 -->
<div class="bg-surface-container-low rounded-xl overflow-hidden shadow-md group">
<div class="h-64 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Experienced plant commissioning and CNC field service director holding micrometer measuring tool on a heavy milled machine rail inside machine tool plant, high contrast industrial workshop." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCf4eycU3m4alxcwhe1H8wDoRrYaEjMx4IaoE9RF0jFQpRjAuHQpo2Qcn476aI2bycIvpXbGKXlBOMDeJMoAzkIGZWD76UjoKsUt9hWSIeS7_p_6ZWalcj6Wmy9G2V9xkN0iF0GBtHHNCNPy4Skmp5LH5tYywnzEgeBhIkx9zJ91ZKwzcK2RuH23C6m_CV2ykaoVXqzffZOtEnhxdkDzYCzGHyLK4MBp78NzwOrspaX_GK4oRAy-gwY"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-low via-transparent to-transparent"></div>
<div class="absolute bottom-space-sm left-space-md">
<span class="font-label-badge text-label-badge text-secondary bg-surface-container-lowest px-space-xs py-space-2xs rounded uppercase">Head of Commissioning &amp; Field Ops</span>
</div>
</div>
<div class="p-space-lg flex flex-col gap-space-xs">
<h3 class="font-headline-md text-headline-md text-on-surface font-bold uppercase">Manish K. Chawla</h3>
<p class="font-label-caps text-label-caps text-tertiary">18+ Years Field Commissioning Lead</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
              Directs our rapid-response team of 38 field engineers stationed across key manufacturing hubs, ensuring 24/7 on-site operator training, setup, and immediate preventative servicing.
            </p>
<div class="flex items-center gap-space-xs mt-space-md text-outline font-tech-spec text-body-sm">
<span class="material-symbols-outlined text-secondary text-[16px]">support_agent</span>
<span>Over 800+ Turnkey Factory Commissionings</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Certified Standards & Export Compliance Grid -->
<section class="w-full bg-[#101419]/60 backdrop-blur-xs py-space-2xl border-y border-surface-container/60">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
<!-- Cert 1 -->
<div class="bg-surface-container p-space-lg rounded-xl flex items-start gap-space-md">
<div class="p-space-sm rounded bg-surface-container-high text-primary">
<span class="material-symbols-outlined text-[32px]">verified_user</span>
</div>
<div class="flex flex-col gap-space-2xs">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">ISO 9001:2015</span>
<span class="font-label-badge text-label-badge text-primary uppercase">Certified Quality Management</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
              Strict material traceability, multi-point gantry inspection, and documented assembly protocol for all CNC machinery.
            </p>
</div>
</div>
<!-- Cert 2 -->
<div class="bg-surface-container p-space-lg rounded-xl flex items-start gap-space-md">
<div class="p-space-sm rounded bg-surface-container-high text-secondary">
<span class="material-symbols-outlined text-[32px]">shield</span>
</div>
<div class="flex flex-col gap-space-2xs">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">CE European Conformity</span>
<span class="font-label-badge text-label-badge text-secondary uppercase">Safety &amp; Electromagnetic Standards</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
              Certified electrical cabinet isolation, dual pneumatic brake fail-safes, and CE emergency stops for global export.
            </p>
</div>
</div>
<!-- Cert 3 -->
<div class="bg-surface-container p-space-lg rounded-xl flex items-start gap-space-md">
<div class="p-space-sm rounded bg-surface-container-high text-tertiary">
<span class="material-symbols-outlined text-[32px]">visibility_lock</span>
</div>
<div class="flex flex-col gap-space-2xs">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">EN 60825-1 Laser Safe</span>
<span class="font-label-badge text-label-badge text-tertiary uppercase">Laser Radiation Protective Housing</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
              Class 4 / Class 1 full enclosures fitted with OD6+ rated laser safety glass windows and interlocked access doors.
            </p>
</div>
</div>
</div>
</div>
</section>
<!-- Visit Factory & Schedule Live Demo Banner -->
<section class="w-full bg-transparent py-space-3xl relative overflow-hidden">
<div class="max-w-max-width-content mx-auto px-gutter-desktop relative z-10">
<div class="bg-surface-container-high rounded-xl p-space-xl lg:p-space-2xl shadow-xl">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
<div class="lg:col-span-8 flex flex-col gap-space-md">
<div class="flex items-center gap-space-xs text-primary font-label-caps text-label-caps uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">location_on</span>
<span>GIDC Phase II • Gujarat Experience Center</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-tight">
              Test Cut Your Raw Materials at Our 45,000 Sq.Ft Plant
            </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
              Bring your AutoCAD or SolidWorks files along with your production material: 12mm stainless steel, brass, thick acrylic, or solid teak. Our application engineers will run test parts on live production spindles and fiber lasers so you evaluate real cycle times and edge squareness before booking.
            </p>
<div class="flex flex-wrap items-center gap-space-md mt-space-sm">
<a class="inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-lg py-space-md rounded font-bold shadow-md transition-transform hover:scale-[1.01]" @click="quoteModalOpen = true; activeQuoteProduct = null" href="javascript:void(0)">
<span class="material-symbols-outlined text-[20px]">calendar_today</span>
<span>Book Live Factory Cut Demo</span>
</a>
<a class="inline-flex items-center gap-space-xs bg-surface-container hover:bg-surface-container-highest text-primary font-headline-sm text-headline-sm px-space-lg py-space-md rounded transition-colors" href="https://wa.me/919876543210" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span>
<span>Direct WhatsApp Engineering Hotline</span>
</a>
</div>
</div>
<!-- Location Map Visual / Facility Coordinates Box -->
<div class="lg:col-span-4 flex flex-col gap-space-sm">
<div class="w-full h-52 bg-surface-container-low rounded-xl overflow-hidden relative shadow-md" data-location="GIDC Industrial Estate, Gujarat, India" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC-aVBJgXohg2tc6ZC3FMIeRWtxON1a_lMVOyUsJaIt16tf-l9_XJ-7jC0vB4w7CarVyUeS_omgmK1y5ZYb0ZtxD_WM9V35p7QBB0mV50YPfRpMzXN2BfckRFoe1KU9tsTCm7YdkzTCVuc3nXotgJitX8muj6K9tdcIyQL5ZXFRiQbW984kEB-StPwnB9baYzY_2Bl7Prap8heiOVUYWWJZ3vxQ1f5IBUSV5PQL28Ar1WfniylyFlRM')">
<div class="absolute inset-0 bg-surface-dim/40 backdrop-blur-[1px] flex flex-col items-center justify-center p-space-md text-center">
<span class="material-symbols-outlined text-primary text-[36px] mb-space-2xs animate-bounce">location_on</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase">ZR IMPEX Campus</span>
<span class="font-tech-spec text-tech-spec text-on-surface-variant">Plot 48-A, Precision Machine Hub, GIDC Phase II</span>
</div>
</div>
<div class="bg-surface-container-low p-space-md rounded flex items-center justify-between font-tech-spec text-tech-spec">
<span class="text-on-surface-variant">Coordinates:</span>
<span class="text-primary font-bold">22.2587° N, 70.8022° E</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Interactive Telemetry Script for Micro-Interactions -->
<script>
    (function() {
      // Smooth interactions for interactive demo trigger
      const scheduleLinks = document.querySelectorAll('a[data-path="request-quote"]');
      scheduleLinks.forEach(link => {
        link.addEventListener('click', function(e) {
          // Normal internal router behavior maintained
        });
      });
    })();
  </script>
</div></div>
@endsection
