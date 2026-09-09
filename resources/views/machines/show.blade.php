@extends('layouts.app')

@section('title', ($machine->name ?? 'Industrial CNC Laser System') . ' — ZR IMPEX Machinery')
@section('meta_description', $machine->short_description ?? 'Heavy-duty industrial CNC router and laser cutting machine engineered by ZR IMPEX with high repeatability and factory direct warranty.')

@section('content')
<main class="w-full pt-[7.5rem] bg-surface min-h-screen"><div class="flex flex-col w-full">
<!-- Top Specimen & Breadcrumb Gantry Strip -->
<div class="w-full bg-surface-container-lowest">
<div class="max-w-max-width-content mx-auto px-gutter-desktop py-space-sm flex flex-wrap items-center justify-between gap-space-sm">
<nav class="flex items-center gap-space-xs font-tech-spec text-tech-spec text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-space-2xs" href="{{ route('home') }}">
<span class="material-symbols-outlined text-[15px]">home</span>
<span>Home</span>
</a>
<span class="text-outline">/</span>
<a class="hover:text-primary transition-colors" data-path="cnc-machines" href="#">CNC Machines</a>
<span class="text-outline">/</span>
<a class="hover:text-primary transition-colors" data-path="fiber-laser-and-cutting" href="#">Fiber Laser</a>
<span class="text-outline">/</span>
<span class="text-primary font-semibold">LASER Fiber Metal Marking Machine</span>
</nav>
<div class="flex items-center gap-space-md font-label-badge text-label-badge tracking-widest text-outline uppercase">
<div class="flex items-center gap-space-2xs">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
<span class="text-on-surface">STOCK ID: ZR-FLM-8842</span>
</div>
<span class="text-surface-variant">|</span>
<span class="text-secondary">EXPORT SPECIFICATION GRADE-A</span>
</div>
</div>
</div>
<!-- Primary Machine Showcase Stage -->
<section class="w-full py-space-xl lg:py-space-2xl bg-surface">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl lg:gap-space-2xl items-start">
<!-- Left: Industrial Gallery (7 Cols Desktop) -->
<div class="lg:col-span-7 flex flex-col gap-space-md">
<div class="relative bg-surface-container-lowest rounded-xl overflow-hidden shadow-2xl">
<!-- Badges Bar -->
<div class="absolute top-space-md left-space-md right-space-md z-10 flex items-center justify-between pointer-events-none">
<div class="flex flex-wrap items-center gap-space-xs pointer-events-auto">
<span class="inline-flex items-center gap-space-2xs bg-surface-container-highest/90 backdrop-blur-md px-space-sm py-space-2xs rounded font-label-badge text-label-badge text-primary uppercase shadow-md">
<span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
                  Ready to Ship (Factory Stock)
                </span>
<span class="inline-flex items-center gap-space-2xs bg-surface-container/90 backdrop-blur-md px-space-sm py-space-2xs rounded font-label-badge text-label-badge text-secondary uppercase shadow-md">
<span class="material-symbols-outlined text-[13px]">verified</span>
                  CE &amp; ISO 9001:2015
                </span>
</div>
<span class="hidden sm:inline-flex items-center gap-space-2xs bg-surface-dim/80 backdrop-blur-md px-space-xs py-space-2xs rounded font-label-caps text-label-caps text-outline">
<span class="material-symbols-outlined text-[14px]">zoom_in</span>
<span>Rollover Zoom</span>
</span>
</div>
<!-- Main High-Res Visual Frame -->
<div class="relative w-full aspect-[4/3] bg-surface-container-low flex items-center justify-center overflow-hidden group">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Industrial heavy-duty fiber laser metal marking machine workstation mounted with high-speed Sino-Galvo scanner head, precision Z-axis motorized column, aluminum T-slot tooling bed, Raycus fiber laser generator cabinet, illuminated control switches, deep slate gray and titanium alloy chassis with metallic amber trim inside a pristine high-tech engineering cleanroom workshop" id="mainProductImage" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzh6xXG-3gwR-m95Kl64Z0KFx-WKfXQRE7OpOk_WDz-XhEBljCzRwPbjrAivJ34JEFeYP3_II-8MEMs4oEuipy7eKbOFbLUzkGLZj-Lm0dUwgrCy3JauR6fCnb-IMqVCXoVvbcdR5CyeVt3aempDfLwUyy8a78xhLH6iNL_tuqImiwvnDXRexRGG65kegzduT-uRLjvhAuzjASJ6ZY3VXJDCenxESNhYs128gT5oo1NSJ47FwPk4Gc"/>
<!-- Subtle Reticle / Laser Focal Visual Overlay -->
<div class="absolute inset-0 pointer-events-none opacity-40 bg-[radial-gradient(#ffc64d_1px,transparent_1px)] [background-size:24px_24px]"></div>
<!-- Interactive Zoom Target indicator -->
<div class="absolute bottom-space-md right-space-md bg-surface-dim/90 backdrop-blur-md px-space-md py-space-xs rounded flex items-center gap-space-xs font-tech-spec text-tech-spec text-on-surface">
<span class="material-symbols-outlined text-primary text-[16px]">crop_free</span>
<span>Focal Length: F=254mm</span>
</div>
</div>
<!-- Milled Telemetry Bar Below Main Image -->
<div class="bg-surface-container-high px-space-lg py-space-sm flex flex-wrap items-center justify-between gap-space-md text-on-surface-variant font-tech-spec text-tech-spec">
<div class="flex items-center gap-space-sm">
<span class="text-outline font-label-caps uppercase">Source Wavelength:</span>
<span class="text-primary font-bold">1064 ± 5 nm</span>
</div>
<div class="flex items-center gap-space-sm">
<span class="text-outline font-label-caps uppercase">Galvo Repeatability:</span>
<span class="text-secondary font-bold">±0.002 mm</span>
</div>
<div class="flex items-center gap-space-sm">
<span class="text-outline font-label-caps uppercase">Duty Cycle:</span>
<span class="text-on-surface font-bold">24/7 Continuous</span>
</div>
</div>
</div>
<!-- Component Inspection Thumbnails -->
<div class="grid grid-cols-4 gap-space-sm">
<button class="thumbnail-btn active relative aspect-[4/3] bg-surface-container-low rounded overflow-hidden shadow-sm transition-all focus:outline-none" onclick="switchProductView('main', this)">
<img class="w-full h-full object-cover" data-alt="Close up view of the complete fiber laser marking machine enclosure with monitor bracket and foot switch accessories" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5xwO6Ln5Vk9jTdZN81vWpiQ07H80oGf1FgkXHPgV7RAnR8mEAoVf_dhqFxdVrfvQmV6LYQhNsFEBNysXdh3-7vNwyXII_-_dveXv4qXLFMf5cb1JGnh-x8V_1e2O_a3W-_3ALdodpaGbUvrsL2NNLLZsoMVXq97ZNUaKHc0Ov2FIY14DxQwhv0QjI5JTM9QEX5Vurost5UkwBh87pNBWSUeBX85tKIRWwfN2w6h00T5EEqBnGi4gX"/>
<div class="absolute inset-x-0 bottom-0 bg-surface-dim/90 backdrop-blur-sm py-space-2xs text-center font-label-badge text-label-badge uppercase text-primary truncate px-space-2xs">
                Full Unit
              </div>
</button>
<button class="thumbnail-btn relative aspect-[4/3] bg-surface-container-low rounded overflow-hidden shadow-sm transition-all focus:outline-none opacity-70 hover:opacity-100" onclick="switchProductView('galvo', this)">
<img class="w-full h-full object-cover" data-alt="High precision digital Sino-Galvo scanning head with dual red light pointer positioning beam and optical quartz F-theta lens" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFvEVpwQ_EpHG8HoZscAgE-ZR-CLvDtFWxqkNYOIxHQJUkOC77Xi04Zeo02HtEUf4bY4dW8KNBomleFMN5AkPPlbz1mvLGEWBR-KCsUTDt2-brvkxHmSTeBk2imq_oU9tWoPJKI_7WeOIblJpnxnWPXS80-hqlT3dyFVrPMgqDX1dpN7XGnvnvmNbTA0gN4quPzwzPyuUA7ku3m3Qsz3hEIAYbFKhKFvx7-RXjzycJ0AvA1eUJrA3D"/>
<div class="absolute inset-x-0 bottom-0 bg-surface-dim/90 backdrop-blur-sm py-space-2xs text-center font-label-badge text-label-badge uppercase text-on-surface truncate px-space-2xs">
                Galvo Head
              </div>
</button>
<button class="thumbnail-btn relative aspect-[4/3] bg-surface-container-low rounded overflow-hidden shadow-sm transition-all focus:outline-none opacity-70 hover:opacity-100" onclick="switchProductView('source', this)">
<img class="w-full h-full object-cover" data-alt="Industrial 30W 50W Raycus MAX solid state fiber laser generator module with optical fiber delivery conduit inside sealed bay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsmtDiYFTMp5kirZsXFaxx2lgZcTDQ8KEEPowHVAFObROaJDg4zOXLBul2znDKbNhD5jShh79Bj0woHHVD3t2h-TfGuz8UALciizKfSv0ygAMeBPYE8vSvvUVW5Eoh1ONfp84a-z5EnZ5Y0UZcHMyfl1-PHPkh_o7NTJVvXRY-WqZGEQJT-JewkzAVHUBal3kOrUM25iEofUZbOy2_4ikCSVpXAx5ffx9a73-XcyYGjQ4NeDfG0qoz"/>
<div class="absolute inset-x-0 bottom-0 bg-surface-dim/90 backdrop-blur-sm py-space-2xs text-center font-label-badge text-label-badge uppercase text-on-surface truncate px-space-2xs">
                MAX / Raycus
              </div>
</button>
<button class="thumbnail-btn relative aspect-[4/3] bg-surface-container-low rounded overflow-hidden shadow-sm transition-all focus:outline-none opacity-70 hover:opacity-100" onclick="switchProductView('rotary', this)">
<img class="w-full h-full object-cover" data-alt="Heavy duty chuck-type rotary attachment axis tool for cylindrical round bar laser marking on stainless steel tumblers" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvkr2GKMgDY-pGv_djjLb0UPEx_krgCjLdaLwn9_6nFvC79G40HXpk3HOEYhk7BE2_TdKx2y9EgcLSgy_skCHe9ZKzMXFKom5CiEbLRz5RNgGMPPfpOLfNsx40rBPusxB_bSdj-AL-sRM8SA14IYwA_2Wk87_LQRxVRshixKOCbSixEnrdhUt4jtYj12nuMd5WAz49a7V1BaQ776-mp6NQgY-kgu83kRXPYUY_TPjE7F2KYG6acNFP"/>
<div class="absolute inset-x-0 bottom-0 bg-surface-dim/90 backdrop-blur-sm py-space-2xs text-center font-label-badge text-label-badge uppercase text-on-surface truncate px-space-2xs">
                Rotary Axis D80
              </div>
</button>
</div>
</div>
<!-- Right: Industrial Parameter & Purchase Control Unit (5 Cols Desktop) -->
<div class="lg:col-span-5 flex flex-col gap-space-lg bg-surface-container-lowest p-space-lg lg:p-space-xl rounded-xl shadow-xl">
<!-- Product Title & Model ID -->
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between gap-space-sm flex-wrap">
<span class="font-label-caps text-label-caps tracking-widest text-primary uppercase bg-surface-container-high px-space-sm py-space-2xs rounded">
                ZR IMPEX • ZR IMPEX LASER
              </span>
<div class="flex items-center gap-space-xs font-tech-spec text-tech-spec">
<div class="flex text-primary">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<span class="font-bold text-on-surface">4.9</span>
<span class="text-outline text-body-sm">(48 plant reviews)</span>
</div>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
              LASER Fiber Metal Marking Machine
            </h1>
<p class="font-headline-sm text-headline-sm text-secondary font-medium">
              Series 30W / 50W High-Speed Precision
            </p>
<div class="font-tech-spec text-tech-spec text-outline">
              SKU: <span class="text-on-surface">ZR-FLM-30/50W-PRO</span> • HS Code: 84561100
            </div>
</div>
<!-- Fast Spec Matrix Pods -->
<div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-2 gap-space-sm">
<div class="bg-surface-container p-space-sm rounded flex flex-col">
<span class="font-label-caps text-label-caps uppercase text-outline">Laser Power</span>
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-primary font-bold">30W / 50W</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Air Cooled Optical</span>
</div>
<div class="bg-surface-container p-space-sm rounded flex flex-col">
<span class="font-label-caps text-label-caps uppercase text-outline">Marking Scope</span>
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-secondary font-bold">200 × 200</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Options: 110-300mm</span>
</div>
<div class="bg-surface-container p-space-sm rounded flex flex-col">
<span class="font-label-caps text-label-caps uppercase text-outline">Galvo Vector Speed</span>
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-tertiary font-bold">7,000</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">mm / s Scan Linear</span>
</div>
<div class="bg-surface-container p-space-sm rounded flex flex-col">
<span class="font-label-caps text-label-caps uppercase text-outline">Laser Lifespan</span>
<span class="font-tech-telemetry-lg text-tech-telemetry-lg text-on-surface font-bold">100,000+</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Operating Hours MTBF</span>
</div>
</div>
<!-- Key Highlights Bullet Matrix -->
<div class="flex flex-col gap-space-xs bg-surface-container-low p-space-md rounded">
<span class="font-label-caps text-label-caps uppercase text-secondary font-semibold tracking-wider">
              Core Engineering Specifications
            </span>
<ul class="flex flex-col gap-space-xs font-body-md text-body-md text-on-surface-variant">
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">verified</span>
<span>Genuine <strong class="text-on-surface font-semibold">MAX Photonics or Raycus Q-switched/MOPA</strong> pulsed fiber laser module with zero scheduled consumable maintenance.</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">verified</span>
<span>High-Speed Digital Galvo Head achieving <strong class="text-on-surface font-semibold">0.01mm micro-character resolution</strong> and deep metal engraving capability.</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">verified</span>
<span>Equipped with genuine <strong class="text-on-surface font-semibold">BJJCZ EzCAD2/EzCAD3 motherboard</strong> supporting Windows 10/11 64-bit and vector integration.</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">verified</span>
<span>Dual red focus-finder targeting beams for instantaneous, tool-free millimeter focus adjustment.</span>
</li>
</ul>
</div>
<!-- Power Configuration Selector (Interactive Micro-Toggles) -->
<div class="flex flex-col gap-space-xs">
<label class="font-label-caps text-label-caps uppercase text-outline flex items-center justify-between">
<span>Select Wattage Rating:</span>
<span class="text-primary font-tech-spec text-tech-spec" id="configSelectedDisplay">ZR-FLM-30W Standard Air-Cool</span>
</label>
<div class="grid grid-cols-2 gap-space-sm" id="wattageSelection">
<button class="watt-btn p-space-sm rounded bg-surface-container-high text-left shadow-sm transition-all focus:outline-none ring-1 ring-primary" onclick="selectWattage('30W', this)" type="button">
<div class="flex items-center justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-primary">30 Watt</span>
<span class="material-symbols-outlined text-primary text-[18px]">radio_button_checked</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant block mt-space-2xs">For surface marking, serials, QR barcodes &amp; fine jewelry engraving.</span>
</button>
<button class="watt-btn p-space-sm rounded bg-surface-container text-left shadow-sm transition-all focus:outline-none opacity-80 hover:opacity-100" onclick="selectWattage('50W', this)" type="button">
<div class="flex items-center justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">50 Watt</span>
<span class="material-symbols-outlined text-outline text-[18px]">radio_button_unchecked</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant block mt-space-2xs">Deep 3D metal engraving, tool steel stamps &amp; rapid brass cutting.</span>
</button>
</div>
</div>
<!-- Dual Conversion Action CTA Stack -->
<div class="flex flex-col gap-space-sm pt-space-xs">
<!-- WhatsApp Conversion Engine (High Prominence) -->
<div class="relative group">
<a class="w-full bg-[#25D366] hover:bg-[#20ba59] active:translate-y-[1px] text-[#071d12] p-space-md rounded font-headline-sm text-headline-sm font-bold flex items-center justify-between gap-space-md shadow-[0_4px_20px_rgba(37,211,102,0.35)] transition-all" href="https://api.whatsapp.com/send?phone=919876543210&amp;text=Hello%20ZR%20Impex%20/%20ZR IMPEX,%20I%20am%20interested%20in:%20Product:%20LASER%20Fiber%20Metal%20Marking%20Machine%20(Model:%20ZR-FLM-30W).%20Please%20send%20latest%20pricing,%20FOB/CIF%20delivery%20timeline,%20and%20PDF%20catalogue.%20URL:%20https://ZR IMPEX.in/machine/laser-fiber-metal-making-machine/" rel="noopener noreferrer" target="_blank">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-[26px]">chat</span>
<div class="flex flex-col text-left">
<span class="leading-none">Inquire on WhatsApp</span>
<span class="font-label-badge text-label-badge uppercase tracking-wider text-[#0e3723] mt-space-2xs">Pre-filled with Model ZR-FLM-30W Specs</span>
</div>
</div>
<span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</a>
<!-- Descriptive Tooltip explaining automation -->
<div class="hidden sm:block absolute -top-12 left-1/2 -translate-x-1/2 bg-surface-dim/95 text-on-surface px-space-md py-space-2xs rounded text-body-sm font-tech-spec shadow-xl pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-30 whitespace-nowrap">
                Direct route to Machine Engineer Hotline (+91 98765 43210)
              </div>
</div>
<!-- Primary Formal RFP Modal Trigger -->
<button class="w-full bg-primary hover:bg-primary-fixed-dim text-on-primary p-space-md rounded font-headline-sm text-headline-sm font-bold flex items-center justify-center gap-space-sm shadow-[0_0_20px_rgba(229,169,16,0.3)] transition-all hover:scale-[1.005] active:translate-y-[1px]" onclick="toggleQuoteModal(true)">
<span class="material-symbols-outlined text-[22px]">request_quote</span>
<span>Request Official Quote &amp; CIF Pricing</span>
</button>
<div class="flex items-center justify-between text-body-sm font-tech-spec text-outline px-space-xs pt-space-2xs">
<span class="flex items-center gap-space-2xs">
<span class="material-symbols-outlined text-primary text-[14px]">local_shipping</span>
<span>Dispatch within 48h</span>
</span>
<span class="flex items-center gap-space-2xs">
<span class="material-symbols-outlined text-secondary text-[14px]">security</span>
<span>2-Year Laser Warranty</span>
</span>
<span class="flex items-center gap-space-2xs">
<span class="material-symbols-outlined text-tertiary text-[14px]">support</span>
<span>Full Lifetime Tech Support</span>
</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Automated WhatsApp Lead Generation Demonstration Callout -->
<section class="w-full py-space-lg bg-surface-container-lowest">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="bg-surface-container-low p-space-lg lg:p-space-xl rounded-xl shadow-lg flex flex-col md:flex-row items-center justify-between gap-space-lg">
<div class="flex items-start gap-space-md max-w-xl">
<div class="w-12 h-12 rounded-full bg-[#25D366]/20 text-[#25D366] flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[28px]">mark_chat_read</span>
</div>
<div class="flex flex-col gap-space-2xs">
<span class="font-label-caps text-label-caps uppercase text-primary tracking-wider">Fast-Track Procurement Protocol</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">WhatsApp Instant Enquiry &amp; Direct Message Preview</h2>
<p class="font-body-md text-body-md text-on-surface-variant">
              Clicking the inquiry trigger automatically initializes an encrypted sales chat with our engineering desk in Gujarat, pre-formatted with exact part identifiers:
            </p>
</div>
</div>
<!-- Simulated WhatsApp Chat Box Bubble -->
<div class="w-full md:w-auto md:min-w-[420px] bg-[#0c1f17] p-space-md rounded shadow-inner flex flex-col gap-space-xs text-body-sm font-tech-spec">
<div class="flex items-center justify-between text-[#25d366] text-label-badge font-label-badge uppercase">
<span>Pre-Filled Text Payload</span>
<span>Live Sync</span>
</div>
<p class="text-[#b9f4cf] leading-relaxed select-all" id="whatsAppPayloadText">
            "Hello ZR IMPEX, I am interested in: Product: LASER Fiber Metal Marking Machine (Model: ZR-FLM-30W). Please send latest pricing, FOB/CIF delivery timeline, and PDF catalogue. URL: https://ZR IMPEX.in/machine/laser-fiber-metal-making-machine/"
          </p>
<div class="flex justify-end text-[#529d72] text-[10px]">
<span>Delivered • Direct to Plant Manager</span>
</div>
</div>
</div>
</div>
</section>
<!-- Technical Specification & Architecture Tabs -->
<section class="w-full py-space-3xl bg-surface">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<!-- Section Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-md">
<div>
<span class="font-label-caps text-label-caps uppercase text-primary tracking-widest">Engineering Documentation</span>
<h2 class="font-headline-xl text-headline-xl text-on-surface font-bold tracking-tight mt-space-2xs">
            Machine Configurations &amp; Parameters
          </h2>
</div>
<div class="font-tech-spec text-tech-spec text-on-surface-variant flex items-center gap-space-xs">
<span class="material-symbols-outlined text-secondary text-[18px]">tune</span>
<span>Calibrated to VDI/DGQ 3441 Machining Standards</span>
</div>
</div>
<!-- Tab Buttons Navigation -->
<div class="flex items-center gap-space-xs overflow-x-auto pb-space-xs mb-space-lg">
<button class="tab-trigger active px-space-lg py-space-sm rounded font-headline-sm text-headline-sm font-semibold whitespace-nowrap bg-primary text-on-primary transition-all" onclick="switchTab('specs', this)">
          1. Technical Parameters
        </button>
<button class="tab-trigger px-space-lg py-space-sm rounded font-headline-sm text-headline-sm font-semibold whitespace-nowrap bg-surface-container text-on-surface-variant hover:text-on-surface transition-all" onclick="switchTab('included', this)">
          2. Standard Included Kit
        </button>
<button class="tab-trigger px-space-lg py-space-sm rounded font-headline-sm text-headline-sm font-semibold whitespace-nowrap bg-surface-container text-on-surface-variant hover:text-on-surface transition-all" onclick="switchTab('materials', this)">
          3. Industrial Materials Matrix
        </button>
<button class="tab-trigger px-space-lg py-space-sm rounded font-headline-sm text-headline-sm font-semibold whitespace-nowrap bg-surface-container text-on-surface-variant hover:text-on-surface transition-all" onclick="switchTab('downloads', this)">
          4. Compliance &amp; Downloads
        </button>
</div>
<!-- Tab Content Area -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg lg:p-space-xl shadow-xl">
<!-- Tab 1: Comprehensive Parameters Table -->
<div class="tab-panel flex flex-col gap-space-lg" id="tab-specs">
<div class="flex items-center justify-between flex-wrap gap-space-md">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">Technical Specifications &amp; Parametric Performance Sheet</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Validated via optical interferometer before shipment.</p>
</div>
<span class="font-label-badge text-label-badge bg-surface-container px-space-sm py-space-xs rounded text-primary uppercase">
              TOLERANCE COMPLIANT: ISO 2768-m
            </span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left font-tech-spec text-tech-spec">
<thead class="bg-surface-container-high text-outline uppercase font-label-caps text-label-caps">
<tr>
<th class="p-space-md">Parameter Metric</th>
<th class="p-space-md">30 Watt Standard Config</th>
<th class="p-space-md">50 Watt High-Output Config</th>
<th class="p-space-md">Industrial Remarks</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container">
<tr class="bg-surface-container-low hover:bg-surface-container transition-colors">
<td class="p-space-md text-on-surface font-bold">Standard Marking Field</td>
<td class="p-space-md text-primary">110 × 110 mm / 150 × 150 mm</td>
<td class="p-space-md text-primary">200 × 200 mm / 300 × 300 mm</td>
<td class="p-space-md text-on-surface-variant">High-grade quartz telecentric F-Theta lens</td>
</tr>
<tr class="bg-surface-container-lowest hover:bg-surface-container transition-colors">
<td class="p-space-md text-on-surface font-bold">Max Linear Scanning Velocity</td>
<td class="p-space-md text-secondary">7,000 mm/second</td>
<td class="p-space-md text-secondary">9,000 mm/second (Upgraded Galvo)</td>
<td class="p-space-md text-on-surface-variant">Dual-axis balanced galvanometer mirror motors</td>
</tr>
<tr class="bg-surface-container-low hover:bg-surface-container transition-colors">
<td class="p-space-md text-on-surface font-bold">Repetition Positioning Accuracy</td>
<td class="p-space-md text-on-surface font-semibold">± 0.002 mm</td>
<td class="p-space-md text-on-surface font-semibold">± 0.002 mm</td>
<td class="p-space-md text-on-surface-variant">Micro-stepped optical feedback loop</td>
</tr>
<tr class="bg-surface-container-lowest hover:bg-surface-container transition-colors">
<td class="p-space-md text-on-surface font-bold">Min. Character Height / Width</td>
<td class="p-space-md text-on-surface font-semibold">0.15 mm / 0.01 mm</td>
<td class="p-space-md text-on-surface font-semibold">0.20 mm / 0.012 mm</td>
<td class="p-space-md text-on-surface-variant">Capable of micro-QR and aerospace serial tags</td>
</tr>
<tr class="bg-surface-container-low hover:bg-surface-container transition-colors">
<td class="p-space-md text-on-surface font-bold">Laser Modulation Frequency</td>
<td class="p-space-md text-on-surface">20 kHz – 80 kHz</td>
<td class="p-space-md text-on-surface">20 kHz – 100 kHz (MOPA Optional 1-4000kHz)</td>
<td class="p-space-md text-on-surface-variant">Allows precise thermal control on heat-sensitive alloys</td>
</tr>
<tr class="bg-surface-container-lowest hover:bg-surface-container transition-colors">
<td class="p-space-md text-on-surface font-bold">Thermal Management</td>
<td class="p-space-md text-tertiary font-bold">Forced Clean Air-Cooled</td>
<td class="p-space-md text-tertiary font-bold">Forced Clean Air-Cooled</td>
<td class="p-space-md text-on-surface-variant">Built-in dual centrifugal fans; no chiller required</td>
</tr>
<tr class="bg-surface-container-low hover:bg-surface-container transition-colors">
<td class="p-space-md text-on-surface font-bold">Input Power Requirement</td>
<td class="p-space-md text-on-surface">AC 220V ± 10% / 50-60Hz / 1-Phase</td>
<td class="p-space-md text-on-surface">AC 220V ± 10% / 50-60Hz / 1-Phase</td>
<td class="p-space-md text-on-surface-variant">Total power consumption &lt; 650W total draw</td>
</tr>
<tr class="bg-surface-container-lowest hover:bg-surface-container transition-colors">
<td class="p-space-md text-on-surface font-bold">Supported Graphic Data Formats</td>
<td class="p-space-md text-on-surface" colspan="2">PLT, DXF, AI, DST, BMP, JPG, GIF, TGA, PNG, TIF, TIFF</td>
<td class="p-space-md text-on-surface-variant">Direct AutoCAD, CorelDRAW, Illustrator import</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Tab 2: Standard Machine Configuration & Scope -->
<div class="tab-panel hidden flex flex-col gap-space-lg" id="tab-included">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">What is Included in Standard Package</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Zero hidden add-on costs. Turnkey system ready for immediate factory deployment.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">
<div class="bg-surface-container p-space-md rounded flex flex-col gap-space-xs shadow-sm">
<span class="material-symbols-outlined text-primary text-[28px]">domain_verification</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Fiber Generator Unit</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Integrated MAX/Raycus 30W/50W source in dust-sealed gantry compartment.</p>
</div>
<div class="bg-surface-container p-space-sm rounded flex flex-col gap-space-xs shadow-sm">
<span class="material-symbols-outlined text-primary text-[28px]">speed</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Digital Galvo Scanner</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Sino-Galvo SG7110 with dual red dot focus positioning pointers.</p>
</div>
<div class="bg-surface-container p-space-sm rounded flex flex-col gap-space-xs shadow-sm">
<span class="material-symbols-outlined text-primary text-[28px]">center_focus_strong</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">F-Theta Optical Lens</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Wavelength 1064nm Singapore optical glass high-transmittance lens.</p>
</div>
<div class="bg-surface-container p-space-sm rounded flex flex-col gap-space-xs shadow-sm">
<span class="material-symbols-outlined text-primary text-[28px]">developer_board</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">BJJCZ Control Board</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Genuine Beijing JCZ USB EzCAD board with licensed EzCAD2 software suite.</p>
</div>
<div class="bg-surface-container p-space-sm rounded flex flex-col gap-space-xs shadow-sm">
<span class="material-symbols-outlined text-secondary text-[28px]">keyboard_double_arrow_down</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Production Foot Switch</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Heavy-duty cast aluminum foot pedal for high-cadence assembly operations.</p>
</div>
<div class="bg-surface-container p-space-sm rounded flex flex-col gap-space-xs shadow-sm">
<span class="material-symbols-outlined text-secondary text-[28px]">height</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Z-Axis Lift Column</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">500mm travel precision scale height adjustment column with aluminum handwheel.</p>
</div>
<div class="bg-surface-container p-space-sm rounded flex flex-col gap-space-xs shadow-sm">
<span class="material-symbols-outlined text-secondary text-[28px]">construction</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Tool Kit &amp; Spares</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Hex wrench set, lens cleaning papers, laser safety glasses, and grounding clamp.</p>
</div>
<div class="bg-surface-container p-space-sm rounded flex flex-col gap-space-xs shadow-sm">
<span class="material-symbols-outlined text-secondary text-[28px]">school</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Training &amp; Documentation</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Complete operator manuals, parameter library presets, and video tutorial USB drive.</p>
</div>
</div>
</div>
<!-- Tab 3: Industrial Applications & Materials -->
<div class="tab-panel hidden flex flex-col gap-space-lg" id="tab-materials">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">Machining Substrates &amp; Industry Sectors</h3>
<p class="font-body-md text-body-md text-on-surface-variant">High photon absorption for micro-welding, annealing, etching, and black marking.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
<div class="bg-surface-container p-space-md rounded flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-primary font-headline-sm text-headline-sm font-semibold">
<span class="material-symbols-outlined">precision_manufacturing</span>
<span>Ferrous &amp; Non-Ferrous Metals</span>
</div>
<ul class="font-body-sm text-body-sm text-on-surface-variant flex flex-col gap-space-2xs mt-space-xs">
<li>• Stainless Steel 304/316 (High-contrast black marking)</li>
<li>• Carbon Steel, Tooling Steels, Hardened Alloys</li>
<li>• Anodized &amp; Bare Aerospace Aluminum</li>
<li>• Brass, Copper &amp; Precious Goldsmith Metals (Gold, Silver, Platinum)</li>
<li>• Titanium &amp; Surgical Medical Grade Alloys</li>
</ul>
</div>
<div class="bg-surface-container p-space-md rounded flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-secondary font-headline-sm text-headline-sm font-semibold">
<span class="material-symbols-outlined">view_in_ar</span>
<span>Non-Metallic Engineered Solids</span>
</div>
<ul class="font-body-sm text-body-sm text-on-surface-variant flex flex-col gap-space-2xs mt-space-xs">
<li>• Industrial ABS, PVC, Epoxy Resins</li>
<li>• High-Density Polyethylene (HDPE) &amp; Delrin/POM</li>
<li>• Ceramic Electronic Substrates &amp; Alumina</li>
<li>• Painted Metal Surfaces &amp; PVD Coatings</li>
<li>• Silicon Wafers &amp; IC Encapsulation Epoxy</li>
</ul>
</div>
<div class="bg-surface-container p-space-md rounded flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-tertiary font-headline-sm text-headline-sm font-semibold">
<span class="material-symbols-outlined">factory</span>
<span>Target Industries</span>
</div>
<ul class="font-body-sm text-body-sm text-on-surface-variant flex flex-col gap-space-2xs mt-space-xs">
<li>• Automotive VIN, Engine Block &amp; Gear Serial Tracking</li>
<li>• Medical Instrumentation UDI Barcode Compliance</li>
<li>• Hardware Tools, CNC Endmills &amp; Carbide Inserts</li>
<li>• Electronics Components, Keypads &amp; PCB Traceability</li>
<li>• Jewelry Hallmark Engraving &amp; Fine Watch Dial Cutout</li>
</ul>
</div>
</div>
</div>
<!-- Tab 4: Downloads & Compliance -->
<div class="tab-panel hidden flex flex-col gap-space-lg" id="tab-downloads">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">Engineering Datasheets &amp; Certifications</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Full compliance documentation for industrial procurement audit and CE conformity.</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-space-md">
<div class="bg-surface-container p-space-md rounded flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary text-[32px]">picture_as_pdf</span>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Technical Datasheet</span>
<span class="font-tech-spec text-tech-spec text-outline">PDF • 4.2 MB (Rev 3.2)</span>
</div>
</div>
<a class="bg-surface-container-highest hover:bg-primary hover:text-on-primary text-primary p-space-xs rounded transition-colors" download="" href="#" title="Download Specification">
<span class="material-symbols-outlined text-[20px]">download</span>
</a>
</div>
<div class="bg-surface-container p-space-md rounded flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-secondary text-[32px]">verified</span>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">CE Conformity Certificate</span>
<span class="font-tech-spec text-tech-spec text-outline">PDF • 1.8 MB (EN 60825-1)</span>
</div>
</div>
<a class="bg-surface-container-highest hover:bg-secondary hover:text-on-secondary text-secondary p-space-xs rounded transition-colors" download="" href="#" title="Download Certificate">
<span class="material-symbols-outlined text-[20px]">download</span>
</a>
</div>
<div class="bg-surface-container p-space-md rounded flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-tertiary text-[32px]">menu_book</span>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">EzCAD Operation Manual</span>
<span class="font-tech-spec text-tech-spec text-outline">PDF • 12.4 MB (English)</span>
</div>
</div>
<a class="bg-surface-container-highest hover:bg-tertiary hover:text-on-tertiary text-tertiary p-space-xs rounded transition-colors" download="" href="#" title="Download Manual">
<span class="material-symbols-outlined text-[20px]">download</span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Related Industrial Heavy Machinery Section -->
<section class="w-full py-space-3xl bg-surface-container-lowest">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-space-2xl gap-space-sm">
<div>
<span class="font-label-caps text-label-caps uppercase text-primary tracking-wider">Expand Your Machine Shop</span>
<h2 class="font-headline-xl text-headline-xl text-on-surface font-bold tracking-tight mt-space-2xs">
            Complementary Industrial CNC Systems
          </h2>
</div>
<a class="font-tech-spec text-tech-spec text-primary hover:underline flex items-center gap-space-2xs" data-path="cnc-machines" href="#">
<span>View All CNC &amp; Laser Inventory</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
<!-- Card 1: Heavy Duty Wood CNC Router 1325 -->
<div class="bg-surface-container-low rounded-xl overflow-hidden shadow-lg flex flex-col group hover:shadow-2xl transition-all">
<div class="relative aspect-video bg-surface-container overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Heavy duty industrial 1325 Wood CNC Router with vacuum table bed, 6.0kW air-cooled electrospindle, Syntec controller, and helical rack and pinion gantry" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRze-hTfsXfNsua8SEc2rW-FYInAYmkpsmg72hYTyNa8nG0t6hYvnNov7uymZHw6WKXZGHE0IUpV0WNP8go9BSv2Jz5w84VZiiTS5miu3x5T-1EI9ZxfknJB25xY8QkkZBp9Q4ONwULtlIb2d6B4GBn0k1hJbYqhyxHSziAI6Cizhu7hI5Yv07vGkj6Cxs-15XGHHLKngT5C0tKN8Dr2xrxLkK2M5ZWPVqUkQPC4KfD2NfjiQA-D-1"/>
<div class="absolute top-space-sm left-space-sm bg-surface-dim/90 backdrop-blur-sm px-space-sm py-space-2xs rounded font-label-badge text-label-badge text-primary uppercase">
              CNC ROUTER
            </div>
</div>
<div class="p-space-lg flex flex-col gap-space-sm flex-1 justify-between">
<div class="flex flex-col gap-space-xs">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">
                Heavy Duty Wood CNC Router 1325 (3-Axis)
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Vacuum adsorption bed with 6.0kW Italian-spec spindle for high-speed acoustic paneling, furniture routing, and solid wood processing.
              </p>
</div>
<div class="flex flex-col gap-space-md pt-space-xs">
<div class="grid grid-cols-3 gap-space-xs font-tech-spec text-tech-spec bg-surface-container p-space-xs rounded text-center">
<div>
<span class="text-outline text-[10px] block uppercase">Bed Size</span>
<span class="text-on-surface font-semibold">1.3×2.5m</span>
</div>
<div>
<span class="text-outline text-[10px] block uppercase">Spindle</span>
<span class="text-primary font-semibold">6.0 kW</span>
</div>
<div>
<span class="text-outline text-[10px] block uppercase">Max Speed</span>
<span class="text-secondary font-semibold">32 m/min</span>
</div>
</div>
<a class="w-full bg-surface-container-high hover:bg-primary hover:text-on-primary text-on-surface py-space-xs rounded text-center font-headline-sm text-headline-sm font-semibold transition-colors" data-path="cnc-machines" href="#">
                View Specifications
              </a>
</div>
</div>
</div>
<!-- Card 2: CO2 Laser Acrylic Cutting Machine 1390 -->
<div class="bg-surface-container-low rounded-xl overflow-hidden shadow-lg flex flex-col group hover:shadow-2xl transition-all">
<div class="relative aspect-video bg-surface-container overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="High precision industrial CO2 laser cutting machine model 1390 with glass tube, motorized honeycomb bed, knife table, and Ruida 6442 digital DSP controller" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2-A7QvQvffpXQ0b8dPHtXxxNfU0V3fEC-6jV1oFxjm3raXyTKXT2xX8aCTg7zqethoQ4u91cphFs_7xImvQAhwg1pkHDMEb5VJtm5Q5--ddCxR5p6200fQWHMJsFGoKnjuZqRzfPkG8lPvxLnIc5kRVGnZqnivps_FCv3NhAQSUO-ufhOihvll5UTDcZHy--dywUsAF-MFRVJLUsGonI9UlrGeN-NMGspMXJ8grODx8R0hGKgXIeH"/>
<div class="absolute top-space-sm left-space-sm bg-surface-dim/90 backdrop-blur-sm px-space-sm py-space-2xs rounded font-label-badge text-label-badge text-secondary uppercase">
              CO2 LASER
            </div>
</div>
<div class="p-space-lg flex flex-col gap-space-sm flex-1 justify-between">
<div class="flex flex-col gap-space-xs">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">
                CO2 Laser Acrylic Cutting Machine 1390 (130W)
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Sealed RECI W6 CO2 laser tube engineered for polished edge acrylic signage cutting, wood fretwork, and high-detail leather engraving.
              </p>
</div>
<div class="flex flex-col gap-space-md pt-space-xs">
<div class="grid grid-cols-3 gap-space-xs font-tech-spec text-tech-spec bg-surface-container p-space-xs rounded text-center">
<div>
<span class="text-outline text-[10px] block uppercase">Scope</span>
<span class="text-on-surface font-semibold">1300×900</span>
</div>
<div>
<span class="text-outline text-[10px] block uppercase">Tube Power</span>
<span class="text-primary font-semibold">130 Watt</span>
</div>
<div>
<span class="text-outline text-[10px] block uppercase">Controller</span>
<span class="text-secondary font-semibold">Ruida 6445</span>
</div>
</div>
<a class="w-full bg-surface-container-high hover:bg-primary hover:text-on-primary text-on-surface py-space-xs rounded text-center font-headline-sm text-headline-sm font-semibold transition-colors" data-path="fiber-laser-and-cutting" href="#">
                View Specifications
              </a>
</div>
</div>
</div>
<!-- Card 3: Sheet Metal Fiber Laser Cutter (1.5kW - 3kW) -->
<div class="bg-surface-container-low rounded-xl overflow-hidden shadow-lg flex flex-col group hover:shadow-2xl transition-all">
<div class="relative aspect-video bg-surface-container overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Heavy duty gantry sheet metal fiber laser cutting machine with dual platform exchange, Raytools laser cutting head, CypCut industrial computer station, and protective enclosure" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBq2u2kTvtZ3ckmXWoD7owIi56qk757yyk7JgWBntuxaBAUyc1vHtFLZZntvQfsvzF8w8QXk2jgLTBalvlGUcOwk6WcaF73wYjZFECX9w--NcuxNJHJMW4zJxDp74_76JO2F7p9zZ6tt2B4ESseyoIRblK30xgtfP6OhV7TdfXJBmicdaos0vO2edJVMnL5fBHHtdS6fkySB-3eb357xfFplUsTSXAJNq5NEMbp4gKOhpupYrCKmT8r"/>
<div class="absolute top-space-sm left-space-sm bg-surface-dim/90 backdrop-blur-sm px-space-sm py-space-2xs rounded font-label-badge text-label-badge text-tertiary uppercase">
              HIGH-POWER FIBER
            </div>
</div>
<div class="p-space-lg flex flex-col gap-space-sm flex-1 justify-between">
<div class="flex flex-col gap-space-xs">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">
                Sheet Metal Fiber Laser Cutter (1.5kW – 3kW)
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Cast iron heavy bed machine for cutting up to 20mm mild carbon steel and 10mm stainless steel with automated Raytools autofocus torch.
              </p>
</div>
<div class="flex flex-col gap-space-md pt-space-xs">
<div class="grid grid-cols-3 gap-space-xs font-tech-spec text-tech-spec bg-surface-container p-space-xs rounded text-center">
<div>
<span class="text-outline text-[10px] block uppercase">Working Area</span>
<span class="text-on-surface font-semibold">1.5×3.0m</span>
</div>
<div>
<span class="text-outline text-[10px] block uppercase">Generator</span>
<span class="text-primary font-semibold">3000 W</span>
</div>
<div>
<span class="text-outline text-[10px] block uppercase">Max Accel</span>
<span class="text-secondary font-semibold">1.2 G</span>
</div>
</div>
<a class="w-full bg-surface-container-high hover:bg-primary hover:text-on-primary text-on-surface py-space-xs rounded text-center font-headline-sm text-headline-sm font-semibold transition-colors" data-path="fiber-laser-and-cutting" href="#">
                View Specifications
              </a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Industrial Support & Warranty Guarantees Ribbon -->
<section class="w-full py-space-2xl bg-surface-container">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-lg">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded bg-surface-container-highest text-primary flex items-center justify-center shrink-0 shadow-md">
<span class="material-symbols-outlined text-[28px]">headset_mic</span>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">24/7 Phone Support</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Dedicated engineer dispatch line for troubleshooting.</span>
</div>
</div>
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded bg-surface-container-highest text-primary flex items-center justify-center shrink-0 shadow-md">
<span class="material-symbols-outlined text-[28px]">engineering</span>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">On-Site Commissioning</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Factory installation, leveling &amp; operator training.</span>
</div>
</div>
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded bg-surface-container-highest text-primary flex items-center justify-center shrink-0 shadow-md">
<span class="material-symbols-outlined text-[28px]">verified_user</span>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">2-Year Core Warranty</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Complete Raycus/MAX source replacement coverage.</span>
</div>
</div>
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded bg-surface-container-highest text-primary flex items-center justify-center shrink-0 shadow-md">
<span class="material-symbols-outlined text-[28px]">inventory_2</span>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Ready Stock Spares</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Lenses, galvo drivers &amp; boards shipped in 24 hours.</span>
</div>
</div>
</div>
</div>
</section>
<!-- Interactive Modal for Quick Quote & Catalogue Request -->
<div class="fixed inset-0 z-[100] bg-surface-dim/80 backdrop-blur-md hidden items-center justify-center p-space-md" id="quoteModal">
<div class="bg-surface-container-lowest border-0 rounded-xl p-space-lg lg:p-space-xl max-w-lg w-full shadow-2xl flex flex-col gap-space-md relative animate-in fade-in zoom-in duration-200">
<!-- Close Button -->
<button class="absolute top-space-md right-space-md text-on-surface-variant hover:text-on-surface p-space-xs rounded bg-surface-container" onclick="toggleQuoteModal(false)">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
<div class="flex flex-col gap-space-2xs">
<span class="font-label-caps text-label-caps uppercase text-primary tracking-wider">ZR IMPEX Industrial Sales</span>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">Request Formal Quotation</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Receive FOB/CIF pricing, technical catalog, and shipping schedule within 2 hours.</p>
</div>
<form class="flex flex-col gap-space-sm font-body-md text-body-md" onsubmit="handleQuoteSubmit(event)">
<div>
<label class="font-label-caps text-label-caps uppercase text-outline block mb-space-2xs">Machine Model Configuration</label>
<input class="w-full bg-surface-container px-space-md py-space-xs rounded text-primary font-tech-spec text-tech-spec focus:outline-none cursor-not-allowed" id="modalMachineField" readonly="" type="text" value="ZR-FLM-30W Series Fiber Laser"/>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
<div>
<label class="font-label-caps text-label-caps uppercase text-outline block mb-space-2xs">Your Full Name *</label>
<input class="w-full bg-surface-container px-space-md py-space-xs rounded text-on-surface focus:bg-surface-container-high focus:outline-none font-body-md" placeholder="e.g. Vikram Sharma" required="" type="text"/>
</div>
<div>
<label class="font-label-caps text-label-caps uppercase text-outline block mb-space-2xs">Phone / WhatsApp *</label>
<input class="w-full bg-surface-container px-space-md py-space-xs rounded text-on-surface focus:bg-surface-container-high focus:outline-none font-tech-spec" placeholder="+91 98765 43210" required="" type="tel"/>
</div>
</div>
<div>
<label class="font-label-caps text-label-caps uppercase text-outline block mb-space-2xs">Corporate / Plant Email *</label>
<input class="w-full bg-surface-container px-space-md py-space-xs rounded text-on-surface focus:bg-surface-container-high focus:outline-none font-body-md" placeholder="purchasing@factory.com" required="" type="email"/>
</div>
<div>
<label class="font-label-caps text-label-caps uppercase text-outline block mb-space-2xs">Delivery Destination Port / City</label>
<input class="w-full bg-surface-container px-space-md py-space-xs rounded text-on-surface focus:bg-surface-container-high focus:outline-none font-body-md" placeholder="e.g. Mundra Port / Ahmedabad GIDC" type="text"/>
</div>
<button class="w-full bg-primary hover:bg-primary-fixed-dim text-on-primary py-space-sm rounded font-headline-sm text-headline-sm font-bold mt-space-xs shadow-lg flex items-center justify-center gap-space-xs transition-all" type="submit">
<span class="material-symbols-outlined text-[18px]">send</span>
<span>Submit Request to Technical Desk</span>
</button>
</form>
</div>
</div>
</div>
<!-- Client-side Interactive Engine -->
<script>
  let currentWattage = '30W';

  function switchProductView(viewKey, btnElement) {
    // Reset thumbnail active classes
    const buttons = document.querySelectorAll('.thumbnail-btn');
    buttons.forEach(b => {
      b.classList.remove('active');
      b.classList.add('opacity-70');
    });
    btnElement.classList.add('active');
    btnElement.classList.remove('opacity-70');

    // Swap main view image prompt or state
    const mainImg = document.getElementById('mainProductImage');
    if (viewKey === 'galvo') {
      mainImg.setAttribute('data-alt', 'Close-up precision macro photograph of high-speed Sino-Galvo galvanometer mirror optical head with dual coaxial guide laser pointers targeting an aluminum fixture plate');
    } else if (viewKey === 'source') {
      mainImg.setAttribute('data-alt', 'Engineered chassis bay revealing the MAX Photonics 30W solid-state fiber laser generator housing with fiber optic cable coiled safely in metallic armor conduit');
    } else if (viewKey === 'rotary') {
      mainImg.setAttribute('data-alt', 'Heavy-duty 80mm three-jaw rotary chuck chuck fixture mounted on aluminum t-slot bed of fiber laser marker engraving a steel shaft');
    } else {
      mainImg.setAttribute('data-alt', 'Industrial heavy-duty fiber laser metal marking machine workstation mounted with high-speed Sino-Galvo scanner head, precision Z-axis motorized column, aluminum T-slot bed, and Raycus fiber source');
    }
  }

  function selectWattage(watt, btnElement) {
    currentWattage = watt;
    const buttons = document.querySelectorAll('.watt-btn');
    buttons.forEach(b => {
      b.classList.remove('ring-1', 'ring-primary', 'bg-surface-container-high');
      b.classList.add('bg-surface-container', 'opacity-80');
      const icon = b.querySelector('.material-symbols-outlined');
      if (icon) {
        icon.textContent = 'radio_button_unchecked';
        icon.classList.remove('text-primary');
        icon.classList.add('text-outline');
      }
    });

    btnElement.classList.add('ring-1', 'ring-primary', 'bg-surface-container-high');
    btnElement.classList.remove('opacity-80');
    const activeIcon = btnElement.querySelector('.material-symbols-outlined');
    if (activeIcon) {
      activeIcon.textContent = 'radio_button_checked';
      activeIcon.classList.add('text-primary');
      activeIcon.classList.remove('text-outline');
    }

    // Update displays
    document.getElementById('configSelectedDisplay').textContent = `ZR-FLM-${watt} High-Precision System`;
    document.getElementById('modalMachineField').value = `ZR-FLM-${watt} Series High-Speed Precision Fiber Marker`;

    // Update dynamic WhatsApp preview text payload
    const dynamicMsg = `"Hello ZR IMPEX, I am interested in: Product: LASER Fiber Metal Marking Machine (Model: ZR-FLM-${watt}). Please send latest pricing, FOB/CIF delivery timeline, and PDF catalogue. URL: https://ZR IMPEX.in/machine/laser-fiber-metal-making-machine/"`;
    document.getElementById('whatsAppPayloadText').textContent = dynamicMsg;
  }

  function switchTab(tabId, btnElement) {
    // Tab buttons styling
    const triggers = document.querySelectorAll('.tab-trigger');
    triggers.forEach(t => {
      t.classList.remove('bg-primary', 'text-on-primary');
      t.classList.add('bg-surface-container', 'text-on-surface-variant');
    });
    btnElement.classList.add('bg-primary', 'text-on-primary');
    btnElement.classList.remove('bg-surface-container', 'text-on-surface-variant');

    // Tab panels visibility
    const panels = document.querySelectorAll('.tab-panel');
    panels.forEach(p => p.classList.add('hidden'));

    const target = document.getElementById(`tab-${tabId}`);
    if (target) {
      target.classList.remove('hidden');
    }
  }

  function toggleQuoteModal(show) {
    const modal = document.getElementById('quoteModal');
    if (show) {
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    } else {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    }
  }

  function handleQuoteSubmit(e) {
    e.preventDefault();
    alert('Thank you. Your quotation request has been routed directly to the ZR IMPEX plant engineering team. A formal proposal will be dispatched via WhatsApp and Email.');
    toggleQuoteModal(false);
  }
</script></main>
@endsection
