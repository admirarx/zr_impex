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
<p class="font-body-md text-body-md text-on-surface-variant mb-space-lg">
            Consult on gantry spans, laser wattage sizing, servo drive options, and turn-key factory commissioning pricing.
          </p>
<div class="flex flex-col gap-space-sm mt-auto font-tech-spec text-tech-spec pt-space-md bg-surface-container-lowest/50 p-space-sm rounded">
<div class="flex items-center justify-between">
<span class="text-outline font-label-caps text-label-caps uppercase">Hotline 1:</span>
<a class="text-primary hover:underline font-bold" href="tel:+919876543210">+91 98765 43210</a>
</div>
<div class="flex items-center justify-between">
<span class="text-outline font-label-caps text-label-caps uppercase">Hotline 2:</span>
<a class="text-on-surface hover:underline" href="tel:+919876543211">+91 98765 43211</a>
</div>
<div class="flex items-center justify-between">
<span class="text-outline font-label-caps text-label-caps uppercase">Direct Sales:</span>
<a class="text-secondary hover:underline" href="mailto:sales@zrimpex.com">sales@zrimpex.com</a>
</div>
<div class="flex items-center justify-between text-body-sm text-on-surface-variant">
<span class="text-outline font-label-caps text-label-caps uppercase">Hours:</span>
<span>Mon–Sat, 09:00–19:30 IST</span>
</div>
</div>
<a class="mt-space-md w-full py-space-sm px-space-md bg-surface-container-highest hover:bg-surface-bright text-primary font-headline-sm text-headline-sm font-bold rounded flex items-center justify-center gap-space-xs transition-colors" href="https://wa.me/919876543210?text=Hello%20ZR%20IMPEX,%20please%20share%20the%20industrial%20catalog" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span>
<span>WhatsApp Quick Catalog &amp; Pricing</span>
</a>
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
<p class="font-body-md text-body-md text-on-surface-variant mb-space-lg">
            Emergency breakdown support for machine owners, optical lenses, HQD/HSD spindles, servo pack diagnostics, and air-assist spares.
          </p>
<div class="flex flex-col gap-space-sm mt-auto font-tech-spec text-tech-spec pt-space-md bg-surface-container-lowest/50 p-space-sm rounded">
<div class="flex items-center justify-between">
<span class="text-outline font-label-caps text-label-caps uppercase">Emergency:</span>
<a class="text-tertiary hover:underline font-bold" href="tel:+919876543219">+91 98765 43219</a>
</div>
<div class="flex items-center justify-between">
<span class="text-outline font-label-caps text-label-caps uppercase">Spares Desk:</span>
<a class="text-secondary hover:underline" href="mailto:spares@zrimpex.com">spares@zrimpex.com</a>
</div>
<div class="flex items-center justify-between">
<span class="text-outline font-label-caps text-label-caps uppercase">SLA Window:</span>
<span class="text-primary font-bold">24-Hour Dispatch SLA</span>
</div>
<div class="flex items-center justify-between text-body-sm text-on-surface-variant">
<span class="text-outline font-label-caps text-label-caps uppercase">Coverage:</span>
<span>All Tier 1–3 Industrial Zones</span>
</div>
</div>
<a class="mt-space-md w-full py-space-sm px-space-md bg-surface-container-highest hover:bg-surface-bright text-tertiary font-headline-sm text-headline-sm font-bold rounded flex items-center justify-center gap-space-xs transition-colors" href="tel:+919876543219">
<span class="material-symbols-outlined text-[20px]">support_agent</span>
<span>Call Service Hotline Now</span>
</a>
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
<p class="font-body-md text-body-md text-on-surface-variant mb-space-lg">
            Experience 12kW fiber cutting, multi-axis 3D wood relief, and stone carving firsthand. Walk the assembly floor with our production heads.
          </p>
<div class="flex flex-col gap-space-sm mt-auto font-tech-spec text-tech-spec pt-space-md bg-surface-container-lowest/50 p-space-sm rounded">
<div class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-primary text-[16px] shrink-0 mt-0.5">location_on</span>
<span class="text-on-surface text-body-sm">Plot 48-A, Precision Machine Hub, GIDC Phase II, Ahmedabad, Gujarat 382445</span>
</div>
<div class="flex items-center justify-between">
<span class="text-outline font-label-caps text-label-caps uppercase">Test Materials:</span>
<span class="text-on-surface">Steel, SS, Brass, Wood</span>
</div>
<div class="flex items-center justify-between">
<span class="text-outline font-label-caps text-label-caps uppercase">Plant Visits:</span>
<span class="text-primary font-bold">Appointment Recommended</span>
</div>
</div>
<a class="mt-space-md w-full py-space-sm px-space-md bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm font-bold rounded flex items-center justify-center gap-space-xs transition-colors" href="#visit-schedule-section">
<span class="material-symbols-outlined text-[20px]">calendar_month</span>
<span>Schedule In-Person Plant Visit</span>
</a>
</div>
</div>
</div>
</section>
<!-- Interactive Technical Quotation & Feasibility Request Form Section -->
<section class="w-full bg-[#101419]/60 backdrop-blur-xs border-y border-surface-container/60 py-space-3xl">
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
<input class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="contact-name" name="name" value="{{ old('name') }}" placeholder="e.g., Rajesh Patel" required="" type="text"/>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps uppercase text-on-surface-variant flex items-center justify-between" for="company-name">
<span>Organization / Company Name *</span>
<span class="text-outline text-[10px]">GST registered</span>
</label>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-outline text-[18px]">corporate_fare</span>
<input class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="company-name" name="company_name" value="{{ old('company_name') }}" placeholder="e.g., Apex Precision Fabrication LLP" required="" type="text"/>
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
<input class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="work-email" name="email" value="{{ old('email') }}" placeholder="procurement@apexlaser.com" required="" type="email"/>
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
<input class="w-full bg-surface-container-lowest text-on-surface font-tech-spec text-tech-spec pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="whatsapp-num" name="phone" value="{{ old('phone') }}" placeholder="98250 12345" required="" type="tel"/>
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
<input class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="factory-city" name="city" value="{{ old('city') }}" placeholder="e.g., Pune, Maharashtra or Sharjah, UAE" required="" type="text"/>
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
<input class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-10 pr-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" id="material-thickness" placeholder="e.g., 6mm Mild Steel, 25mm MDF, 3mm Brass" type="text"/>
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
<input class="w-full bg-surface-container text-on-surface font-tech-spec text-tech-spec px-space-md py-space-sm rounded focus:outline-none focus:ring-1 focus:ring-primary" placeholder="https://drive.google.com/your-cad-file-folder" type="url"/>
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
<!-- Quick Telemetry Card -->
<div class="bg-surface-container rounded p-space-lg flex flex-col gap-space-sm">
<div class="flex items-center gap-space-xs text-secondary font-label-caps text-label-caps uppercase">
<span class="material-symbols-outlined text-[16px]">verified</span>
<span>Factory Quality Certified</span>
</div>
<div class="font-headline-sm text-headline-sm text-on-surface">ISO 9001:2015 Registered Plant</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Every CNC table is vibration-stress-relieved and test-machined for 72 continuous run-hours before logistics clearance.
            </p>
<div class="pt-space-xs flex items-center justify-between font-tech-spec text-tech-spec text-outline">
<span>Machining Precision:</span>
<span class="text-primary font-bold">±0.02 mm</span>
</div>
</div>
<!-- Visual Factory Assembly Floor Asset -->
<div class="bg-surface-container rounded overflow-hidden flex flex-col">
<img class="w-full h-48 object-cover" data-alt="Heavy industrial CNC router and fiber laser manufacturing assembly line at ZR IMPEX plant, high ceilings, yellow gantry cranes, precision granite surface plates, dark industrial cast-iron tones with amber accent machinery lighting and engineers in safety gear measuring bed tolerances" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzWtfIUhLFjXcI68pBZIZKPU-hHcYV4V74wvEan63dNSDKhKa93VvniKnaqBLWNxn1rcEYZX36MvrxxybhaWBEfPDX1yRvq9liod8wdCXO1LorsTD9KTMHyQxB2sjUQSvJ0QxUp3X24yXVaJ7F3He2-OPidHXe1zlYbis73LQuI8DHX1OZ1MfCDOZh4bz7LmxoktBsH0tPkp79t1gO3GslOpRtQm5aNkCMFdMMjYJN4iipnQpDc_bi"/>
<div class="p-space-sm bg-surface-container-lowest flex items-center justify-between text-body-sm text-outline">
<span class="font-label-caps text-label-caps uppercase">Ahmedabad Gantry Line Bay 2</span>
<span class="text-primary font-tech-spec text-tech-spec">Live Operations</span>
</div>
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
<span>Ahmedabad Plant Demonstration Complex</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-on-surface uppercase">
          Factory Location &amp; Visiting Logistics
        </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
          Located inside Gujarat's core machinery fabrication belt. We welcome client delegations, engineering consultants, and workshop owners for real-time live cutting benchmarks.
        </p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl">
<!-- Interactive Map Frame with Data Location -->
<div class="lg:col-span-7 flex flex-col bg-surface-container rounded overflow-hidden">
<div class="p-space-md bg-surface-container-high flex flex-wrap items-center justify-between gap-space-sm font-tech-spec text-tech-spec">
<div class="flex items-center gap-space-xs text-on-surface">
<span class="material-symbols-outlined text-primary text-[18px]">navigation</span>
<span class="font-bold">GIDC Phase II, Precision Machine Hub, Ahmedabad</span>
</div>
<div class="flex items-center gap-space-xs text-outline font-label-caps text-label-caps uppercase">
<span>GPS: 22.9868° N, 72.6315° E</span>
</div>
</div>
<!-- Map Container -->
<div class="w-full h-80 lg:h-96 bg-cover bg-center relative" data-alt="Stylized satellite overview showing GIDC industrial zone Ahmedabad with precision highway connectivity to National Highway 48 and Sardar Patel Ring Road, machinery warehouses, dark night-mode industrial aerial photography with subtle gold grid indicators" data-location="GIDC Phase II Ahmedabad Gujarat India" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAIGGqF_eeSAYlF0n3oCd9fkgQ9aTZjGru_ZqOfe9qvVVDAl-tU_uRlxZgpTHUCxFydxm7uAY9LqNS4E5Bwx0hOmE1v7myHYbJxgmqKLzOAVwRnRhWVchUsJvP3t_Fay5f5IZ8ohkMN-iIv0R62x5QeNcqTP7V1xS6i6tGbIEHIil9LITGBsS4hPv5oF8ZJl3IOWxAfrD4Jp4hWXn7OQFuMi7wE_0lURkm1BXxIdj-sJUclt4Um7BPL')">
<!-- Simulated Map HUD Overlay -->
<div class="absolute inset-0 bg-surface-dim/40 backdrop-blur-[2px] flex flex-col justify-between p-space-md pointer-events-none">
<div class="flex items-center justify-between">
<span class="bg-surface-container-lowest/90 px-space-sm py-space-xs rounded text-primary font-tech-spec text-tech-spec font-bold flex items-center gap-space-xs">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                  ZR IMPEX PLANT HEADQUARTERS
                </span>
<span class="bg-surface-container-lowest/80 text-on-surface font-label-caps text-label-caps px-space-xs py-space-2xs rounded">Scale: 1:5000</span>
</div>
<div class="bg-surface-container-lowest/95 p-space-md rounded max-w-sm flex flex-col gap-space-2xs shadow-xl">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold text-[14px]">ZR IMPEX Heavy Machine Works</span>
<span class="text-body-sm text-on-surface-variant">Gate No. 3, High-Tonnage Freight &amp; Customer Demo Center</span>
<div class="flex items-center gap-space-md pt-space-xs text-[11px] font-tech-spec text-tech-spec text-secondary">
<span>Open: 09:00 - 18:30</span>
<span>• Heavy Crane Bay Loaded</span>
</div>
</div>
</div>
</div>
<!-- Transit Connectivity Chips -->
<div class="p-space-lg bg-surface-container-low grid grid-cols-1 sm:grid-cols-3 gap-space-md">
<div class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0">flight</span>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface text-[14px] font-semibold">Ahmedabad Airport (AMD)</span>
<span class="text-body-sm text-on-surface-variant">35 mins via S.P. Ring Road</span>
</div>
</div>
<div class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0">train</span>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface text-[14px] font-semibold">Kalupur Railway Junction</span>
<span class="text-body-sm text-on-surface-variant">25 mins direct arterial transit</span>
</div>
</div>
<div class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-primary text-[20px] shrink-0">local_shipping</span>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface text-[14px] font-semibold">Freight Corridor NH-48</span>
<span class="text-body-sm text-on-surface-variant">Direct container truck access</span>
</div>
</div>
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
<a class="w-full py-space-sm px-space-md bg-surface-container-highest hover:bg-surface-bright text-on-surface font-headline-sm text-headline-sm font-semibold rounded flex items-center justify-center gap-space-xs transition-colors" href="tel:+919876543210">
<span class="material-symbols-outlined text-primary text-[20px]">call</span>
<span>Call Visit Coordinator (+91 98765 43210)</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Nationwide Support & Engineer Deployment Network -->
<section class="w-full bg-[#101419]/60 backdrop-blur-xs border-y border-surface-container/60 py-space-3xl">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg mb-space-2xl">
<div class="flex flex-col gap-space-xs">
<div class="inline-flex items-center gap-space-xs text-primary font-label-caps text-label-caps uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">hub</span>
<span>Pan-India Field Engineering Grid</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-on-surface uppercase">
            Nationwide Spares &amp; Service Depots
          </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
            Under 24-hour on-site engineer dispatch across major industrial production corridors with localized spares inventory.
          </p>
</div>
<div class="bg-surface-container px-space-lg py-space-sm rounded flex items-center gap-space-md">
<div class="flex flex-col">
<span class="font-label-badge text-label-badge uppercase text-outline">Emergency Dispatch SLA</span>
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary font-bold">≤ 24 Hours</span>
</div>
<div class="w-px h-8 bg-surface-container-highest"></div>
<div class="flex flex-col">
<span class="font-label-badge text-label-badge uppercase text-outline">Registered Technicians</span>
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-on-surface font-bold">42 Engineers</span>
</div>
</div>
</div>
<!-- Hubs Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-space-md">
<!-- Hub 1: Ahmedabad -->
<div class="bg-surface-container rounded p-space-md flex flex-col gap-space-sm hover:bg-surface-container-high transition-colors">
<div class="flex items-center justify-between">
<span class="font-label-badge text-label-badge uppercase bg-primary/20 text-primary px-space-xs py-space-2xs rounded">Central HQ</span>
<span class="w-2 h-2 rounded-full bg-primary"></span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Ahmedabad</h3>
<span class="text-body-sm text-outline">Gujarat Manufacturing Base</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Full gantry casting, heavy CNC assembly line &amp; national master parts depot.</p>
<div class="mt-auto pt-space-xs font-tech-spec text-tech-spec text-primary text-[12px] flex items-center gap-space-2xs">
<span class="material-symbols-outlined text-[14px]">phone</span>
<span>+91 98765 43210</span>
</div>
</div>
<!-- Hub 2: Delhi NCR -->
<div class="bg-surface-container rounded p-space-md flex flex-col gap-space-sm hover:bg-surface-container-high transition-colors">
<div class="flex items-center justify-between">
<span class="font-label-badge text-label-badge uppercase bg-surface-variant text-on-surface-variant px-space-xs py-space-2xs rounded">North Hub</span>
<span class="w-2 h-2 rounded-full bg-primary"></span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Delhi NCR / Manesar</h3>
<span class="text-body-sm text-outline">Automotive &amp; Sheet Metal</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Fiber laser rapid service center, cutting nozzle kits &amp; optical repairs.</p>
<div class="mt-auto pt-space-xs font-tech-spec text-tech-spec text-on-surface text-[12px] flex items-center gap-space-2xs">
<span class="material-symbols-outlined text-[14px]">phone</span>
<span>+91 98765 43212</span>
</div>
</div>
<!-- Hub 3: Pune -->
<div class="bg-surface-container rounded p-space-md flex flex-col gap-space-sm hover:bg-surface-container-high transition-colors">
<div class="flex items-center justify-between">
<span class="font-label-badge text-label-badge uppercase bg-surface-variant text-on-surface-variant px-space-xs py-space-2xs rounded">West Depot</span>
<span class="w-2 h-2 rounded-full bg-primary"></span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Pune &amp; Chakan</h3>
<span class="text-body-sm text-outline">Maharashtra Industrial Belt</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Heavy fabrication tooling, servo calibration &amp; Yaskawa electronics depot.</p>
<div class="mt-auto pt-space-xs font-tech-spec text-tech-spec text-on-surface text-[12px] flex items-center gap-space-2xs">
<span class="material-symbols-outlined text-[14px]">phone</span>
<span>+91 98765 43213</span>
</div>
</div>
<!-- Hub 4: Bengaluru -->
<div class="bg-surface-container rounded p-space-md flex flex-col gap-space-sm hover:bg-surface-container-high transition-colors">
<div class="flex items-center justify-between">
<span class="font-label-badge text-label-badge uppercase bg-surface-variant text-on-surface-variant px-space-xs py-space-2xs rounded">South Depot</span>
<span class="w-2 h-2 rounded-full bg-primary"></span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Bengaluru / Peenya</h3>
<span class="text-body-sm text-outline">Karnataka &amp; Tamil Nadu</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Woodworking routers, multi-axis 5D service desk &amp; vacuum pump spares.</p>
<div class="mt-auto pt-space-xs font-tech-spec text-tech-spec text-on-surface text-[12px] flex items-center gap-space-2xs">
<span class="material-symbols-outlined text-[14px]">phone</span>
<span>+91 98765 43214</span>
</div>
</div>
<!-- Hub 5: Rajkot -->
<div class="bg-surface-container rounded p-space-md flex flex-col gap-space-sm hover:bg-surface-container-high transition-colors">
<div class="flex items-center justify-between">
<span class="font-label-badge text-label-badge uppercase bg-surface-variant text-on-surface-variant px-space-xs py-space-2xs rounded">Tooling Hub</span>
<span class="w-2 h-2 rounded-full bg-primary"></span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Rajkot &amp; Morbi</h3>
<span class="text-body-sm text-outline">Saurashtra Precision Cluster</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Stone granite CNC bits, diamond tool re-tipping &amp; linear guide rail stocks.</p>
<div class="mt-auto pt-space-xs font-tech-spec text-tech-spec text-on-surface text-[12px] flex items-center gap-space-2xs">
<span class="material-symbols-outlined text-[14px]">phone</span>
<span>+91 98765 43215</span>
</div>
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
</section>
<!-- Final Dispatch Quick Action Banner -->
<section class="w-full bg-[#101419]/80 backdrop-blur-sm border-t border-surface-container/60 py-space-xl">
<div class="max-w-max-width-content mx-auto px-gutter-desktop flex flex-col sm:flex-row items-center justify-between gap-space-lg">
<div class="flex flex-col">
<span class="font-label-caps text-label-caps text-primary uppercase tracking-wider">Urgent RFQ or Breakdown Assistance?</span>
<h3 class="font-headline-lg text-headline-lg text-on-surface font-bold">Talk directly with a Senior Machine Specialist right now.</h3>
</div>
<div class="flex items-center gap-space-md shrink-0">
<a class="px-space-lg py-space-sm bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm font-bold rounded transition-colors flex items-center gap-space-xs" href="tel:+919876543210">
<span class="material-symbols-outlined text-[20px]">call</span>
<span>+91 98765 43210</span>
</a>
<a class="px-space-lg py-space-sm bg-surface-container hover:bg-surface-bright text-on-surface font-headline-sm text-headline-sm font-semibold rounded transition-colors flex items-center gap-space-xs" href="https://wa.me/919876543210" rel="noopener" target="_blank">
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
