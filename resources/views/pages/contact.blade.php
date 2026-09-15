@extends('layouts.app')

@section('title', 'Factory Demo Center & Technical Sales Contact — ZR IMPEX')
@section('meta_description', 'Connect directly with ZR IMPEX factory engineers and technical sales. Schedule live cutting demonstrations, request cycle-time analysis, or visit our manufacturing demo plant.')

@section('content')
<div class="w-full bg-transparent min-h-screen"><div class="flex flex-col w-full">

<!-- Page Header & Industrial Context -->
<section class="w-full bg-transparent py-space-3xl lg:py-space-4xl">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-end">
<div class="lg:col-span-8 flex flex-col gap-space-sm">
<div class="inline-flex items-center gap-space-xs bg-surface-container px-space-sm py-space-2xs rounded w-fit">
<span class="material-symbols-outlined text-primary text-[16px]">factory</span>
<span class="font-label-caps text-label-caps uppercase tracking-wider text-primary">Contact ZR Impex Engineering • Direct Factory Sales &amp; Technical Support Center</span>
</div>
<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight uppercase">
            Connect Directly with Factory Engineers &amp; Technical Sales
          </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl">
            Whether you require a heavy-duty custom CNC gantry build, material cutting feasibility test, precision spare parts dispatch, or an on-site deployment engineer, our plant engineering team in Ahmedabad is ready to assist your production floor.
          </p>
</div>
<div class="lg:col-span-4 flex flex-col gap-space-sm bg-surface-container p-space-md rounded">
<div class="flex items-center justify-between font-label-caps text-label-caps text-outline uppercase pb-space-xs">
<span>Plant Shift Status</span>
<span class="text-primary font-bold">Shift 01 &amp; 02 Live</span>
</div>
<div class="grid grid-cols-2 gap-space-sm font-tech-spec text-tech-spec">
<div class="bg-surface-container-lowest p-space-sm rounded flex flex-col">
<span class="text-outline text-[11px] uppercase">Shop Floor Load</span>
<span class="text-primary font-bold text-[15px]">88.4% Nominal</span>
</div>
<div class="bg-surface-container-lowest p-space-sm rounded flex flex-col">
<span class="text-outline text-[11px] uppercase">Service Dispatches</span>
<span class="text-on-surface font-bold text-[15px]">14 Teams Fielded</span>
</div>
</div>
<div class="text-body-sm text-on-surface-variant flex items-center gap-space-2xs pt-space-2xs">
<span class="material-symbols-outlined text-tertiary text-[14px]">shield</span>
<span>All inquiries routed directly through plant-certified engineers.</span>
</div>
</div>
</div>
</div>
</section>
<!-- Primary Contact Channels & Quick-Reach Cards -->
<section class="w-full bg-transparent py-space-2xl">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
      <!-- Card 1: Machine Sales -->
      <div class="flex flex-col bg-surface-container rounded p-space-lg relative overflow-hidden group hover:bg-surface-container-high transition-all">
        <div class="flex items-center justify-between mb-space-md">
          <div class="w-12 h-12 rounded bg-surface-container-highest flex items-center justify-center text-primary group-hover:scale-105 transition-transform">
            <span class="material-symbols-outlined text-[28px]">precision_manufacturing</span>
          </div>
          <span class="font-label-badge text-label-badge uppercase bg-primary-container/20 text-primary px-space-xs py-space-2xs rounded">
            Channel 01 • Sales
          </span>
        </div>
        <h2 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Machine Sales &amp; Commercial Quotations</h2>
        <p class="font-body-md text-body-md text-on-surface-variant">
          Consult on gantry spans, laser wattage sizing, servo drive options, and turn-key factory commissioning pricing.
        </p>
      </div>
      <!-- Card 2: 24/7 Field Service & Spares -->
      <div class="flex flex-col bg-surface-container rounded p-space-lg relative overflow-hidden group hover:bg-surface-container-high transition-all">
        <div class="flex items-center justify-between mb-space-md">
          <div class="w-12 h-12 rounded bg-surface-container-highest flex items-center justify-center text-tertiary group-hover:scale-105 transition-transform">
            <span class="material-symbols-outlined text-[28px]">handyman</span>
          </div>
          <span class="font-label-badge text-label-badge uppercase bg-tertiary-container/20 text-tertiary px-space-xs py-space-2xs rounded">
            Channel 02 • 24/7 Service
          </span>
        </div>
        <h2 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">24/7 Field Service &amp; Spares Depot</h2>
        <p class="font-body-md text-body-md text-on-surface-variant">
          Emergency breakdown support for machine owners, optical lenses, HQD/HSD spindles, servo pack diagnostics, and air-assist spares.
        </p>
      </div>
      <!-- Card 3: Factory HQ & Demo Plant -->
      <div class="flex flex-col bg-surface-container rounded p-space-lg relative overflow-hidden group hover:bg-surface-container-high transition-all">
        <div class="flex items-center justify-between mb-space-md">
          <div class="w-12 h-12 rounded bg-surface-container-highest flex items-center justify-center text-primary group-hover:scale-105 transition-transform">
            <span class="material-symbols-outlined text-[28px]">domain</span>
          </div>
          <span class="font-label-badge text-label-badge uppercase bg-surface-variant text-outline px-space-xs py-space-2xs rounded">
            Channel 03 • HQ Plant
          </span>
        </div>
        <h2 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Factory Headquarters &amp; Demo Plant</h2>
        <p class="font-body-md text-body-md text-on-surface-variant">
          Experience 12kW fiber cutting, multi-axis 3D wood relief, and stone carving firsthand. Walk the assembly floor with our production heads.
        </p>
      </div>
</div>
</div>
</section>
<!-- Interactive Technical Quotation & Feasibility Request Form Section -->
<section class="w-full bg-surface-dim/60 backdrop-blur-xs border-y border-surface-container/60 py-space-3xl">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl">
<!-- Main Form Column (8 Cols) -->
<div class="lg:col-span-8 flex flex-col bg-surface-container rounded p-space-xl">
<div class="flex items-center justify-between pb-space-md mb-space-lg">
<div class="flex flex-col">
<span class="font-label-caps text-label-caps uppercase text-primary tracking-widest">Engineering Assessment &amp; Feasibility</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface font-bold">Request Plant Commercial Quote &amp; Send Direct Technical Enquiry</h2>
</div>
<div class="hidden sm:flex flex-col items-end">
<span class="font-tech-spec text-tech-spec text-outline">Form Rev. 2025.4</span>
<span class="font-label-badge text-label-badge uppercase text-primary">Confidential NDA Bound</span>
</div>
</div>
<form action="{{ route('enquiry.store') }}" method="POST" class="flex flex-col gap-space-lg" id="rfq-technical-form">
@csrf
<input type="hidden" name="source" value="contact_form">
<div class="hidden" aria-hidden="true"><input type="text" name="b_name" tabindex="-1" autocomplete="off"></div>
<!-- Row 1: Contact Identity -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps uppercase text-on-surface-variant flex items-center justify-between" for="contact-name">
<span>Full Name *</span>
<span class="text-outline text-[10px]">Machine Buyer / Operator</span>
</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">person</span>
<input class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="contact-name" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required="" type="text"/>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps uppercase text-on-surface-variant flex items-center justify-between" for="company-name">
<span>Organization / Company Name *</span>
<span class="text-outline text-[10px]">GST registered</span>
</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">corporate_fare</span>
<input class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="company-name" name="company_name" value="{{ old('company_name') }}" placeholder="Enter your company name" required="" type="text"/>
</div>
</div>
</div>
<!-- Row 2: Direct Contact Reach -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps uppercase text-on-surface-variant flex items-center justify-between" for="work-email">
<span>Work Email *</span>
<span class="text-outline text-[10px]">For formal PDF quotes</span>
</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">mail</span>
<input class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="work-email" name="email" value="{{ old('email') }}" placeholder="Enter your work email" required="" type="email"/>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps uppercase text-on-surface-variant flex items-center justify-between" for="whatsapp-num">
<span>WhatsApp / Direct Mobile *</span>
<span class="text-primary text-[10px]">Instant specs &amp; video link</span>
</label>
<div class="flex items-center gap-space-xs">
<div class="w-24 bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec px-space-sm py-space-sm rounded flex items-center justify-center">
                    +91 (IN)
                  </div>
<div class="relative flex-1 flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">phone_iphone</span>
<input class="w-full bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="whatsapp-num" name="phone" value="{{ old('phone') }}" placeholder="Enter your mobile number" required="" type="tel"/>
</div>
</div>
</div>
</div>
<!-- Row 3: Factory Location & Machine Sizing Dropdown -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps uppercase text-on-surface-variant" for="factory-city">
                  Factory Location (City, State / Country) *
                </label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">location_city</span>
<input class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="factory-city" name="city" value="{{ old('city') }}" placeholder="Enter your city, state or country" required="" type="text"/>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps uppercase text-on-surface-variant" for="machine-category">
                  Machine Model or System Needed *
                </label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">tune</span>
<select class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded appearance-none focus:outline-none focus:ring-1 focus:ring-primary" id="machine-category" required="">
<option value="fiber-laser-flatbed">Fiber Laser Sheet Metal Cutter (1.5 kW – 12 kW)</option>
<option value="fiber-laser-tube">Tube &amp; Pipe Fiber Laser System</option>
<option value="heavy-cnc-atc">Heavy Duty ATC CNC Router (1325 / 1530 / 2040)</option>
<option value="multi-axis-cnc">Multi-Axis 4D / 5D Rotary CNC Gantry</option>
<option value="stone-granite-cnc">Heavy Stone &amp; Granite Carving CNC</option>
<option value="co2-acrylic-laser">CO2 Precision Laser Cutter / Engraver</option>
<option value="handheld-laser">Handheld 3-in-1 Laser Welder &amp; Cleaner</option>
<option value="genuine-spares">Genuine Spare Parts &amp; Spindles (HQD/HSD/Raytools)</option>
<option value="custom-integration">Custom Bespoke Production Line System</option>
</select>
<span class="material-symbols-outlined absolute right-3 pointer-events-none text-outline text-[18px]">expand_more</span>
</div>
</div>
</div>
<!-- Row 4: Material, Thickness & Daily Duty Cycle -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps uppercase text-on-surface-variant" for="material-thickness">
                  Material &amp; Thickness Specifications
                </label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">layers</span>
<input class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="material-thickness" name="material_thickness" placeholder="Enter material and thickness specifications" type="text"/>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps uppercase text-on-surface-variant" for="duty-cycle">
                  Planned Factory Shift / Operational Intensity
                </label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">pace</span>
<select class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded appearance-none focus:outline-none focus:ring-1 focus:ring-primary" id="duty-cycle">
<option value="single-shift">Single Shift (8 hrs/day • Standard Duty)</option>
<option value="double-shift">Double Shift (16 hrs/day • High Rigidity Spec)</option>
<option value="continuous">24/7 Continuous Duty (Industrial Grade Water Chiller &amp; Heavy Bed)</option>
<option value="job-shop">Variable Job Shop / R&amp;D Prototyping</option>
</select>
<span class="material-symbols-outlined absolute right-3 pointer-events-none text-outline text-[18px]">expand_more</span>
</div>
</div>
</div>
<!-- CAD File / Drawing simulation note -->
<div class="flex flex-col gap-space-xs bg-surface-container-lowest p-space-md rounded">
<div class="flex items-center gap-space-xs text-primary font-headline-sm text-headline-sm font-semibold">
<span class="material-symbols-outlined text-[20px]">cloud_upload</span>
<span>Blueprints / Sample DXF or DWG File Link</span>
</div>
<p class="text-body-sm text-on-surface-variant">
                Include a link (Google Drive / WeTransfer / Dropbox) to your CAD drawings, nesting profiles, or component photos for accurate cycle time, gas consumption, and kerf simulation by our plant CAM operators:
              </p>
<input class="w-full bg-surface-container text-on-surface font-tech-spec text-tech-spec px-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" name="file_link" placeholder="Enter file link (optional)" type="url"/>
</div>
<!-- Preferred Communication Method -->
<div class="flex flex-col gap-space-xs">
<span class="font-label-caps text-label-caps uppercase text-on-surface-variant">Preferred Engineer Response Mode:</span>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-space-sm">
<label class="flex items-center gap-space-sm bg-surface-container-lowest p-space-sm rounded cursor-pointer hover:bg-surface-container-high transition-colors">
<input checked="" class="accent-primary" name="contact_pref" type="radio" value="whatsapp"/>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold text-[14px]">WhatsApp PDF</span>
<span class="text-[11px] text-outline">Fastest dispatch (&lt; 30 min)</span>
</div>
</label>
<label class="flex items-center gap-space-sm bg-surface-container-lowest p-space-sm rounded cursor-pointer hover:bg-surface-container-high transition-colors">
<input class="accent-primary" name="contact_pref" type="radio" value="call"/>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold text-[14px]">Technical Call</span>
<span class="text-[11px] text-outline">Direct application engineer</span>
</div>
</label>
<label class="flex items-center gap-space-sm bg-surface-container-lowest p-space-sm rounded cursor-pointer hover:bg-surface-container-high transition-colors">
<input class="accent-primary" name="contact_pref" type="radio" value="email"/>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold text-[14px]">Commercial Email</span>
<span class="text-[11px] text-outline">Full BOM &amp; line drawing</span>
</div>
</label>
</div>
</div>
<!-- Feedback Notice (Hidden until submit) -->
<div class="hidden bg-surface-container-highest p-space-md rounded flex items-start gap-space-md" id="form-feedback">
<span class="material-symbols-outlined text-primary text-[24px] shrink-0">check_circle</span>
<div class="flex flex-col text-body-md">
<span class="text-on-surface font-bold">RFQ Transmitted Directly to Plant Dispatch Desk!</span>
<span class="text-on-surface-variant text-body-sm">
                  A ZR IMPEX manufacturing engineer has received your parameters. Expect a technical feasibility breakdown, cutting cycle estimate, and formal price sheet on your preferred channel within 2 working hours.
                </span>
</div>
</div>
<!-- Submit CTA Button -->
<button class="w-full py-space-md px-space-xl bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm font-bold uppercase tracking-wider rounded shadow-md transition-all flex items-center justify-center gap-space-sm active:translate-y-[1px]" type="submit">
<span class="material-symbols-outlined text-[22px]">send</span>
<span>Request Factory Commercial Quotation &amp; Cycle Time Analysis</span>
</button>
</form>
</div>
<!-- Right Side: Why Submit RFQ Directly to Plant (4 Cols) -->
<div class="lg:col-span-4 flex flex-col gap-space-md">
<div class="bg-surface-container rounded p-space-lg flex flex-col gap-space-md">
<span class="font-label-caps text-label-caps uppercase text-primary tracking-wider">Manufacturer Direct Advantage</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Why Source Directly from ZR IMPEX?</h3>
<div class="flex flex-col gap-space-md pt-space-xs">
<!-- Item 1 -->
<div class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded bg-surface-container-highest flex items-center justify-center text-primary shrink-0 font-tech-spec text-tech-spec font-bold">
                  01
                </div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold text-[15px]">Factory-Direct Floor Pricing</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                    Zero middlemen, no broker commissions, or sub-dealer fees. Genuine OEM gantry builds and direct spindle pricing.
                  </p>
</div>
</div>
<!-- Item 2 -->
<div class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded bg-surface-container-highest flex items-center justify-center text-primary shrink-0 font-tech-spec text-tech-spec font-bold">
                  02
                </div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold text-[15px]">Free Material Sample Cut</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                    Courier your raw sheets or timber profiles. We perform edge quality benchmarks and ship cut samples back with high-definition cycle footage.
                  </p>
</div>
</div>
<!-- Item 3 -->
<div class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded bg-surface-container-highest flex items-center justify-center text-primary shrink-0 font-tech-spec text-tech-spec font-bold">
                  03
                </div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold text-[15px]">Turnkey Plant Onboarding</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                    Rigorous machine leveling, dual-dial indicator squaring, interferometer optics calibration, and 3-day on-site operator CAM training included.
                  </p>
</div>
</div>
<!-- Item 4 -->
<div class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded bg-surface-container-highest flex items-center justify-center text-primary shrink-0 font-tech-spec text-tech-spec font-bold">
                  04
                </div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold text-[15px]">1,450+ Verified Installations</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                    Proven track record across automotive tier suppliers, structural PEB fabricators, furniture mills, and precision job-shops since 2010.
                  </p>
</div>
</div>
</div>
</div>
        <!-- Visual Factory Assembly Floor Asset -->
        <div class="bg-surface-container rounded overflow-hidden flex flex-col">
          <img class="w-full h-48 object-cover" data-alt="Heavy industrial CNC router and fiber laser manufacturing assembly line at ZR IMPEX plant, high ceilings, yellow gantry cranes, precision granite surface plates, dark industrial cast-iron tones with amber accent machinery lighting and engineers in safety gear measuring bed tolerances" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzWtfIUhLFjXcI68pBZIZKPU-hHcYV4V74wvEan63dNSDKhKa93VvniKnaqBLWNxn1rcEYZX36MvrxxybhaWBEfPDX1yRvq9liod8wdCXO1LorsTD9KTMHyQxB2sjUQSvJ0QxUp3X24yXVaJ7F3He2-OPidHXe1zlYbis73LQuI8DHX1OZ1MfCDOZh4bz7LmxoktBsH0tPkp79t1gO3GslOpRtQm5aNkCMFdMMjYJN4iipnQpDc_bi"/>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Factory Location, Map & Visiting Guide -->
<section class="w-full bg-surface py-space-3xl" id="visit-schedule-section">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col gap-space-xs mb-space-xl">
<div class="inline-flex items-center gap-space-xs text-primary font-label-caps text-label-caps uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">pin_drop</span>
<span>New Delhi Plant Demonstration Complex</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-on-surface uppercase">
          Factory Location &amp; Visiting Logistics
        </h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
          Located at Paschim Vihar, New Delhi. We welcome client delegations, engineering consultants, and workshop owners for real-time live cutting benchmarks.
        </p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl">
@php
    $mapEmbedUrl = \App\Models\SiteSetting::getGoogleMapsEmbedUrl();
    $plantAddress = $contactSettings['address'] ?? \App\Models\SiteSetting::get('address', 'W-116, S-Block, PVC Market, Paschim Vihar, New Delhi, Delhi 110087, India');
@endphp
<!-- Interactive Map Frame with Live Embed -->
<div class="lg:col-span-7 flex flex-col bg-surface-container rounded overflow-hidden border border-surface-container-high">
<div class="p-space-md bg-surface-container-high flex flex-wrap items-center justify-between gap-space-sm font-tech-spec text-tech-spec">
<div class="flex items-center gap-space-xs text-on-surface">
<span class="material-symbols-outlined text-primary text-[18px]">navigation</span>
<span class="font-bold">{{ $plantAddress }}</span>
</div>
<div class="flex items-center gap-space-xs text-outline font-label-caps text-label-caps uppercase">
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
<span>Live Google Maps Embed</span>
</div>
</div>
<!-- Map Container -->
<div class="w-full flex-1 min-h-[380px] lg:min-h-[440px] relative bg-surface-container-lowest">
    <iframe 
        src="{{ $mapEmbedUrl }}" 
        class="w-full h-full border-0" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        title="ZR IMPEX Factory Location Map">
    </iframe>
</div>
</div>
<!-- Plant Visit Demo Booking Card (5 Cols) -->
<div class="lg:col-span-5 flex flex-col bg-surface-container rounded p-space-xl justify-between">
<div class="flex flex-col gap-space-md">
<div class="flex items-center gap-space-xs text-primary font-label-caps text-label-caps uppercase">
<span class="material-symbols-outlined text-[16px]">event_available</span>
<span>Reserve Demo Bay</span>
</div>
<h3 class="font-headline-lg text-headline-lg text-on-surface font-bold">Schedule an In-Person Live Machine Demo</h3>
<p class="font-body-md text-body-md text-on-surface-variant">
              Bring your project blueprints and raw test material. Our application engineers will configure laser power, assist gas pressure, and router feedrates to cut right before your eyes.
            </p>
<div class="bg-surface-container-lowest p-space-md rounded flex flex-col gap-space-sm">
<span class="font-headline-sm text-headline-sm text-on-surface text-[14px] font-semibold flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[18px]">fact_check</span>
<span>Included with Your Visit:</span>
</span>
<ul class="flex flex-col gap-space-xs text-body-sm text-on-surface-variant font-body-sm">
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>
<span>Live 12kW Raycus / IPG Laser speed runs on up to 30mm Mild Steel.</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>
<span>Heavy 9kW HSD Spindle high-speed acrylic and hardwood 3D relief routing.</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>
<span>Direct consultation with Lead Mechanical &amp; Electrical System Designers.</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>
<span>Complimentary airport / hotel pick-up for out-of-state and overseas delegations.</span>
</li>
</ul>
</div>
</div>
<div class="flex flex-col gap-space-sm mt-space-lg">
<div class="flex items-center justify-between font-tech-spec text-tech-spec text-outline">
<span>Plant Protocol:</span>
<span class="text-on-surface">Safety eyewear provided at Gate 1</span>
</div>
<a class="w-full py-space-sm px-space-md bg-surface-container-highest hover:bg-surface-bright text-on-surface font-headline-sm text-headline-sm font-semibold rounded flex items-center justify-center gap-space-xs transition-colors" href="tel:{{ preg_replace('/[^0-9+]/', '', $contactSettings['phone']) }}">
<span class="material-symbols-outlined text-primary text-[20px]">call</span>
<span>Call Visit Coordinator ({{ $contactSettings['phone'] }})</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Nationwide Support & Engineer Deployment Network -->
<section class="w-full bg-surface-dim/60 backdrop-blur-xs border-y border-surface-container/60 py-space-3xl">
  <div class="max-w-max-width-content mx-auto px-gutter-desktop">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg mb-space-2xl">
      <div class="flex flex-col gap-space-xs">
        <div class="inline-flex items-center gap-space-xs text-primary font-label-caps text-label-caps uppercase tracking-wider">
          <span class="material-symbols-outlined text-[16px]">public</span>
          <span>Pan-India &amp; Cross-Border Grid</span>
        </div>
        <h2 class="font-headline-xl text-headline-xl text-on-surface uppercase">
          Nationwide Spares &amp; Service Depots
        </h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
          Comprehensive All-India CNC machine delivery, express spare parts fulfillment, and rapid on-site engineer dispatch. Full machine sales, genuine spares, and field services extended across India, Nepal, and Bhutan.
        </p>
      </div>
      <div class="bg-surface-container px-space-lg py-space-sm rounded flex flex-wrap items-center gap-space-md">
        <div class="flex flex-col">
          <span class="font-label-badge text-label-badge uppercase text-outline">Network Coverage</span>
          <span class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary font-bold">India • Nepal • Bhutan</span>
        </div>
        <div class="hidden sm:block w-px h-8 bg-surface-container-highest"></div>
        <div class="flex flex-col">
          <span class="font-label-badge text-label-badge uppercase text-outline">Emergency Dispatch SLA</span>
          <span class="font-tech-telemetry-lg text-tech-telemetry-lg text-on-surface font-bold">&le; 24 Hours</span>
        </div>
        <div class="hidden sm:block w-px h-8 bg-surface-container-highest"></div>
        <div class="flex flex-col">
          <span class="font-label-badge text-label-badge uppercase text-outline">Field Technicians</span>
          <span class="font-tech-telemetry-lg text-tech-telemetry-lg text-on-surface font-bold">42+ Engineers</span>
        </div>
      </div>
    </div>
    <!-- Hubs Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-space-md">
      <!-- Hub 1: All-India Machine Delivery -->
      <div class="bg-surface-container rounded p-space-md flex flex-col gap-space-sm hover:bg-surface-container-high transition-colors">
        <div class="flex items-center justify-between">
          <span class="font-label-badge text-label-badge uppercase bg-primary/20 text-primary px-space-xs py-space-2xs rounded">Machine Delivery</span>
          <span class="w-2 h-2 rounded-full bg-primary"></span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">All-India Machine Delivery</h3>
        <span class="text-body-sm text-outline">Doorstep Transit &amp; Rigging</span>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Safe turnkey delivery of heavy CNC routers, fiber laser cutters &amp; stone centers across all Indian states with transit insurance and offloading guidance.</p>
      </div>
      <!-- Hub 2: All-India Spare Parts Delivery -->
      <div class="bg-surface-container rounded p-space-md flex flex-col gap-space-sm hover:bg-surface-container-high transition-colors">
        <div class="flex items-center justify-between">
          <span class="font-label-badge text-label-badge uppercase bg-primary/20 text-primary px-space-xs py-space-2xs rounded">Spares Delivery</span>
          <span class="w-2 h-2 rounded-full bg-primary"></span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">All-India Spares Delivery</h3>
        <span class="text-body-sm text-outline">Express Same-Day Dispatch</span>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Ready-to-ship stock of genuine spindles, DSP/NC controllers, stepper &amp; servo drives, laser optics, nozzles, and tooling delivered pan-India.</p>
      </div>
      <!-- Hub 3: All-India Service & Support -->
      <div class="bg-surface-container rounded p-space-md flex flex-col gap-space-sm hover:bg-surface-container-high transition-colors">
        <div class="flex items-center justify-between">
          <span class="font-label-badge text-label-badge uppercase bg-primary/20 text-primary px-space-xs py-space-2xs rounded">Service &amp; Support</span>
          <span class="w-2 h-2 rounded-full bg-primary"></span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">All-India Service &amp; Support</h3>
        <span class="text-body-sm text-outline">&le;24-Hr Engineer Deployment</span>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Factory-certified technicians for on-site commissioning, laser alignment, servo calibration, preventative maintenance &amp; breakdown repairs.</p>
      </div>
      <!-- Hub 4: Nepal Machine, Spares & Service -->
      <div class="bg-surface-container rounded p-space-md flex flex-col gap-space-sm hover:bg-surface-container-high transition-colors">
        <div class="flex items-center justify-between">
          <span class="font-label-badge text-label-badge uppercase bg-surface-variant text-on-surface-variant px-space-xs py-space-2xs rounded">Nepal Hub</span>
          <span class="w-2 h-2 rounded-full bg-primary"></span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Nepal Sales &amp; Service</h3>
        <span class="text-body-sm text-outline">Kathmandu &amp; Industrial Belts</span>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Full CNC machine sales &amp; delivery, rapid genuine spare parts supply, plus on-site engineering installation, training &amp; maintenance support.</p>
      </div>
      <!-- Hub 5: Bhutan Machine, Spares & Service -->
      <div class="bg-surface-container rounded p-space-md flex flex-col gap-space-sm hover:bg-surface-container-high transition-colors">
        <div class="flex items-center justify-between">
          <span class="font-label-badge text-label-badge uppercase bg-surface-variant text-on-surface-variant px-space-xs py-space-2xs rounded">Bhutan Hub</span>
          <span class="w-2 h-2 rounded-full bg-primary"></span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Bhutan Sales &amp; Service</h3>
        <span class="text-body-sm text-outline">Thimphu &amp; Phuntsholing</span>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Turnkey CNC machinery sales &amp; cross-border transport, genuine spare parts fulfillment, with certified technician setup, training &amp; service support.</p>
      </div>
    </div>
  </div>
</section>
<!-- Technical Inquiry FAQs -->
<section class="w-full bg-transparent py-space-3xl">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col gap-space-xs mb-space-xl">
<div class="inline-flex items-center gap-space-xs text-primary font-label-caps text-label-caps uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">help_center</span>
<span>Procurement &amp; Technical Clarifications</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-on-surface uppercase">
          Frequently Asked Questions for Plant Inquiries
        </h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg">
<!-- FAQ 1 -->
<div class="bg-surface-container rounded p-space-lg flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-primary font-headline-sm text-headline-sm font-semibold">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
<h3>Can I test my own sheet metal or raw wood prior to buying?</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant pt-space-xs">
            Yes, absolutely. You can either visit our Ahmedabad demonstration facility in person or dispatch your raw material batch by transport. We will cut the exact DXF geometry you require, document the kerf accuracy with digital micrometers, record the cutting cycle time video, and return the finished parts to your address.
          </p>
</div>
<!-- FAQ 2 -->
<div class="bg-surface-container rounded p-space-lg flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-primary font-headline-sm text-headline-sm font-semibold">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
<h3>What are the commercial payment and financing terms?</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant pt-space-xs">
            Standard build terms are 30% advance on order booking to initiate chassis casting and gantry CNC milling, 60% upon plant pre-dispatch inspection approval, and 10% after successful on-site commissioning and operator sign-off. We also support SIDBI, MSME machinery term loans, and private machinery leasing partners.
          </p>
</div>
<!-- FAQ 3 -->
<div class="bg-surface-container rounded p-space-lg flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-primary font-headline-sm text-headline-sm font-semibold">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
<h3>How fast can replacement optical lenses or spindles be delivered?</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant pt-space-xs">
            Critical machine wear components (protective windows, focus collimators, Raytools ceramic rings, nozzles, HQD/HSD ER25/ER32 collets, and water-cooled electrospindles) are dispatched within 24 hours via premium air courier from our Ahmedabad, Pune, and Delhi depots.
          </p>
</div>
<!-- FAQ 4 -->
<div class="bg-surface-container rounded p-space-lg flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-primary font-headline-sm text-headline-sm font-semibold">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
<h3>Do you provide operator training and CAM nesting software setup?</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant pt-space-xs">
            Every ZR IMPEX machine delivery includes full on-site installation by a qualified field engineer. We configure CypCut, FSCUT, or DSP/Syntec controllers, establish auto-nesting software workflows on your factory PC, and conduct practical hands-on training for your machine operators and shop-floor supervisors.
          </p>
</div>
</div>
</div>
<!-- Final Dispatch Quick Action Banner -->
<section class="w-full bg-surface-dim/80 backdrop-blur-sm border-t border-surface-container/60 py-space-xl">
  <div class="max-w-max-width-content mx-auto px-gutter-desktop flex flex-col sm:flex-row items-center justify-between gap-space-lg">
    <div class="flex flex-col">
      <span class="font-label-caps text-label-caps text-primary uppercase tracking-wider">Urgent RFQ or Breakdown Assistance?</span>
      <h3 class="font-headline-lg text-headline-lg text-on-surface font-bold">Talk directly with a Senior Machine Specialist right now.</h3>
    </div>
    <div class="flex items-center gap-space-md shrink-0">
      <a class="px-space-lg py-space-sm bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm font-bold rounded transition-colors flex items-center gap-space-xs" href="tel:{{ preg_replace('/[^0-9+]/', '', $contactSettings['phone']) }}">
        <span class="material-symbols-outlined text-[20px]">call</span>
        <span>{{ $contactSettings['phone'] }}</span>
      </a>
      <a class="px-space-lg py-space-sm bg-surface-container hover:bg-surface-bright text-on-surface font-headline-sm text-headline-sm font-semibold rounded transition-colors flex items-center gap-space-xs" href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contactSettings['whatsapp']) }}" rel="noopener" target="_blank">
        <span class="material-symbols-outlined text-primary text-[20px]">chat</span>
        <span>WhatsApp Chat</span>
      </a>
    </div>
  </div>
</section>
</div>
<script>
  (function() {
    // Keep active styling on "Contact" link in header if script executes
    try {
      const contactLinks = document.querySelectorAll('header nav a[data-path="contact"]');
      contactLinks.forEach(link => {
        link.classList.add('bg-primary-container', 'text-on-primary-container', 'font-semibold');
        link.classList.remove('text-on-surface-variant');
      });
    } catch (e) {}
  })();
</script></div>
@endsection
