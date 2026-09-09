@extends('layouts.app')

@section('title', ($machine->name ?? 'Industrial CNC Laser System') . ' — ZR IMPEX Machinery')
@section('meta_description', $machine->short_description ?? 'Heavy-duty industrial CNC router and laser cutting machine engineered by ZR IMPEX with high repeatability and factory direct warranty.')

@section('content')
<div class="w-full bg-surface min-h-screen"><div class="flex flex-col w-full">
<!-- Primary Machine Showcase Stage -->
<section class="w-full py-space-xl lg:py-space-2xl bg-surface">
<div class="max-w-max-width-content mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl lg:gap-space-2xl items-start">
<!-- Left: Industrial Gallery (7 Cols Desktop) -->
<div class="lg:col-span-7 flex flex-col gap-space-md">
<div class="relative bg-surface-container-lowest rounded-xl overflow-hidden shadow-2xl border border-surface-container">
<!-- Main High-Res Visual Frame with Interactive Hover Pan-Zoom & Lightbox Click -->
<div id="productZoomStage" class="relative w-full aspect-[4/3] bg-surface-container-low flex items-center justify-center overflow-hidden cursor-zoom-in group select-none" onclick="openLightbox(currentViewImageUrl, currentViewCaption)">
<img id="mainProductImage" class="w-full h-full object-cover transition-transform duration-150 ease-out will-change-transform" src="{{ $machine->primary_image_url }}" alt="{{ $machine->name }} - Industrial heavy machinery" />
<!-- Hover Clue Overlay -->
<div class="absolute bottom-space-sm right-space-sm bg-surface-dim/80 backdrop-blur-md px-space-sm py-space-2xs rounded flex items-center gap-space-xs font-tech-spec text-tech-spec text-on-surface opacity-80 group-hover:opacity-100 transition-opacity pointer-events-none">
<span class="material-symbols-outlined text-primary text-[15px]">zoom_in</span>
<span>Click for Full Image</span>
</div>
</div>
</div>
<!-- Component Inspection Thumbnails (Dynamic or Curated) -->
@php
  $galleryPhotos = $machine->galleryImages;
@endphp
<div class="grid grid-cols-4 gap-space-sm">
<button class="thumbnail-btn active relative aspect-[4/3] bg-surface-container-low rounded overflow-hidden shadow-sm transition-all focus:outline-none ring-2 ring-primary" onclick="switchProductView('{{ $machine->primary_image_url }}', '{{ addslashes($machine->name) }}', this)">
<img class="w-full h-full object-cover" src="{{ $machine->primary_image_url }}" alt="{{ $machine->name }}" />
<div class="absolute inset-x-0 bottom-0 bg-surface-dim/90 backdrop-blur-sm py-space-2xs text-center font-label-badge text-label-badge uppercase text-primary truncate px-space-2xs">
Main View
</div>
</button>
@if($galleryPhotos->isNotEmpty())
@foreach($galleryPhotos->take(3) as $gImg)
<button class="thumbnail-btn relative aspect-[4/3] bg-surface-container-low rounded overflow-hidden shadow-sm transition-all focus:outline-none opacity-70 hover:opacity-100" onclick="switchProductView('{{ $gImg->url }}', '{{ addslashes($gImg->caption ?? $machine->name) }}', this)">
<img class="w-full h-full object-cover" src="{{ $gImg->url }}" alt="{{ $gImg->caption ?? $machine->name }}" />
<div class="absolute inset-x-0 bottom-0 bg-surface-dim/90 backdrop-blur-sm py-space-2xs text-center font-label-badge text-label-badge uppercase text-on-surface truncate px-space-2xs">
{{ $gImg->caption ?? 'Angle ' . $loop->iteration }}
</div>
</button>
@endforeach
@else
<button class="thumbnail-btn relative aspect-[4/3] bg-surface-container-low rounded overflow-hidden shadow-sm transition-all focus:outline-none opacity-70 hover:opacity-100" onclick="switchProductView('https://lh3.googleusercontent.com/aida-public/AB6AXuAFvEVpwQ_EpHG8HoZscAgE-ZR-CLvDtFWxqkNYOIxHQJUkOC77Xi04Zeo02HtEUf4bY4dW8KNBomleFMN5AkPPlbz1mvLGEWBR-KCsUTDt2-brvkxHmSTeBk2imq_oU9tWoPJKI_7WeOIblJpnxnWPXS80-hqlT3dyFVrPMgqDX1dpN7XGnvnvmNbTA0gN4quPzwzPyuUA7ku3m3Qsz3hEIAYbFKhKFvx7-RXjzycJ0AvA1eUJrA3D', 'High Precision Digital Scanning Head', this)">
<img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFvEVpwQ_EpHG8HoZscAgE-ZR-CLvDtFWxqkNYOIxHQJUkOC77Xi04Zeo02HtEUf4bY4dW8KNBomleFMN5AkPPlbz1mvLGEWBR-KCsUTDt2-brvkxHmSTeBk2imq_oU9tWoPJKI_7WeOIblJpnxnWPXS80-hqlT3dyFVrPMgqDX1dpN7XGnvnvmNbTA0gN4quPzwzPyuUA7ku3m3Qsz3hEIAYbFKhKFvx7-RXjzycJ0AvA1eUJrA3D" alt="Precision Scanning Head" />
<div class="absolute inset-x-0 bottom-0 bg-surface-dim/90 backdrop-blur-sm py-space-2xs text-center font-label-badge text-label-badge uppercase text-on-surface truncate px-space-2xs">
Galvo Head
</div>
</button>
<button class="thumbnail-btn relative aspect-[4/3] bg-surface-container-low rounded overflow-hidden shadow-sm transition-all focus:outline-none opacity-70 hover:opacity-100" onclick="switchProductView('https://lh3.googleusercontent.com/aida-public/AB6AXuDsmtDiYFTMp5kirZsXFaxx2lgZcTDQ8KEEPowHVAFObROaJDg4zOXLBul2znDKbNhD5jShh79Bj0woHHVD3t2h-TfGuz8UALciizKfSv0ygAMeBPYE8vSvvUVW5Eoh1ONfp84a-z5EnZ5Y0UZcHMyfl1-PHPkh_o7NTJVvXRY-WqZGEQJT-JewkzAVHUBal3kOrUM25iEofUZbOy2_4ikCSVpXAx5ffx9a73-XcyYGjQ4NeDfG0qoz', 'Laser Generator Source Module', this)">
<img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsmtDiYFTMp5kirZsXFaxx2lgZcTDQ8KEEPowHVAFObROaJDg4zOXLBul2znDKbNhD5jShh79Bj0woHHVD3t2h-TfGuz8UALciizKfSv0ygAMeBPYE8vSvvUVW5Eoh1ONfp84a-z5EnZ5Y0UZcHMyfl1-PHPkh_o7NTJVvXRY-WqZGEQJT-JewkzAVHUBal3kOrUM25iEofUZbOy2_4ikCSVpXAx5ffx9a73-XcyYGjQ4NeDfG0qoz" alt="Laser Generator Source" />
<div class="absolute inset-x-0 bottom-0 bg-surface-dim/90 backdrop-blur-sm py-space-2xs text-center font-label-badge text-label-badge uppercase text-on-surface truncate px-space-2xs">
Laser Source
</div>
</button>
<button class="thumbnail-btn relative aspect-[4/3] bg-surface-container-low rounded overflow-hidden shadow-sm transition-all focus:outline-none opacity-70 hover:opacity-100" onclick="switchProductView('https://lh3.googleusercontent.com/aida-public/AB6AXuBvkr2GKMgDY-pGv_djjLb0UPEx_krgCjLdaLwn9_6nFvC79G40HXpk3HOEYhk7BE2_TdKx2y9EgcLSgy_skCHe9ZKzMXFKom5CiEbLRz5RNgGMPPfpOLfNsx40rBPusxB_bSdj-AL-sRM8SA14IYwA_2Wk87_LQRxVRshixKOCbSixEnrdhUt4jtYj12nuMd5WAz49a7V1BaQ776-mp6NQgY-kgu83kRXPYUY_TPjE7F2KYG6acNFP', 'Motorized Rotary Chuck Tooling', this)">
<img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvkr2GKMgDY-pGv_djjLb0UPEx_krgCjLdaLwn9_6nFvC79G40HXpk3HOEYhk7BE2_TdKx2y9EgcLSgy_skCHe9ZKzMXFKom5CiEbLRz5RNgGMPPfpOLfNsx40rBPusxB_bSdj-AL-sRM8SA14IYwA_2Wk87_LQRxVRshixKOCbSixEnrdhUt4jtYj12nuMd5WAz49a7V1BaQ776-mp6NQgY-kgu83kRXPYUY_TPjE7F2KYG6acNFP" alt="Rotary Axis Attachment" />
<div class="absolute inset-x-0 bottom-0 bg-surface-dim/90 backdrop-blur-sm py-space-2xs text-center font-label-badge text-label-badge uppercase text-on-surface truncate px-space-2xs">
Rotary Axis
</div>
</button>
@endif
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
              {{ $machine->name }}
            </h1>
<p class="font-headline-sm text-headline-sm text-secondary font-medium">
              {{ $machine->model_number ? 'Model ' . $machine->model_number . ' High-Speed Precision' : 'Series High-Speed Industrial Precision' }}
            </p>
<div class="font-tech-spec text-tech-spec text-outline">
              SKU: <span class="text-on-surface">{{ $machine->sku ?? ($machine->model_number ?? 'ZR-CNC-PRO') }}</span> • HS Code: 84561100
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
<a id="mainWhatsAppLink" class="w-full bg-[#25D366] hover:bg-[#20ba59] active:translate-y-[1px] text-[#071d12] p-space-md rounded font-headline-sm text-headline-sm font-bold flex items-center justify-between gap-space-md shadow-[0_4px_20px_rgba(37,211,102,0.35)] transition-all" href="{{ \App\Services\WhatsAppUrlBuilder::build($machine) }}" rel="noopener noreferrer" target="_blank">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-[26px]">chat</span>
<div class="flex flex-col text-left">
<span class="leading-none">Inquire on WhatsApp</span>
<span class="font-label-badge text-label-badge uppercase tracking-wider text-[#0e3723] mt-space-2xs">Pre-filled with Model {{ $machine->model_number ?? 'ZR-SERIES' }} Specs</span>
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
<!-- Sample Designs & Machined Workpieces Gallery Section -->
<section class="w-full py-space-2xl bg-surface-container-lowest border-y border-surface-container">
  <div class="max-w-max-width-content mx-auto px-gutter-desktop">
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-md">
      <div class="flex flex-col gap-space-2xs">
        <span class="font-label-caps text-label-caps uppercase text-primary tracking-widest font-bold flex items-center gap-space-2xs">
          <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
          Industrial Output Samples
        </span>
        <h2 class="font-headline-xl text-headline-xl text-on-surface font-bold tracking-tight">
          Sample Designs &amp; Finished Workpieces
        </h2>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
          High-definition production specimens produced by our {{ $machine->name }}. Click any sample to inspect fine details, depths, and surface edge quality.
        </p>
      </div>
      <div class="font-tech-spec text-tech-spec text-on-surface-variant flex items-center gap-space-xs bg-surface-container px-space-md py-space-xs rounded">
        <span class="material-symbols-outlined text-secondary text-[18px]">photo_library</span>
        <span>Factory Verified Precision</span>
      </div>
    </div>

    <!-- Sample Cards Grid -->
    @php
      $sampleList = $machine->sampleImages;
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-lg">
      @if($sampleList->isNotEmpty())
        @foreach($sampleList as $sample)
          <div class="bg-surface-container-low border border-surface-container rounded-xl overflow-hidden shadow-md hover:shadow-2xl hover:border-primary/50 transition-all duration-300 flex flex-col group">
            <div class="relative aspect-[4/3] bg-surface-container overflow-hidden cursor-pointer" onclick="openLightbox('{{ $sample->url }}', '{{ addslashes($sample->caption ?? 'Sample Design') }}')">
              <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{ $sample->url }}" alt="{{ $sample->caption ?? 'Machined Sample Design' }}" />
              <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 backdrop-blur-xs transition-opacity flex items-center justify-center gap-space-xs text-white font-headline-sm text-headline-sm font-semibold">
                <span class="material-symbols-outlined text-primary text-[24px]">zoom_in</span>
                <span>Inspect Sample</span>
              </div>
            </div>
            <div class="p-space-md flex flex-col justify-between flex-1 gap-space-xs">
              <div class="flex flex-col">
                <h4 class="font-headline-sm text-headline-sm font-bold text-on-surface line-clamp-1">
                  {{ $sample->caption ?? 'Machined Sample' }}
                </h4>
                @if($sample->material)
                  <span class="font-tech-spec text-tech-spec text-primary font-medium mt-space-2xs">
                    {{ $sample->material }}
                  </span>
                @endif
              </div>
              <button type="button" class="mt-space-xs flex items-center gap-space-2xs text-secondary hover:text-primary font-label-caps text-label-caps uppercase transition-colors text-left" onclick="openLightbox('{{ $sample->url }}', '{{ addslashes($sample->caption ?? 'Sample Design') }}')">
                <span>View Full Resolution</span>
                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
              </button>
            </div>
          </div>
        @endforeach
      @else
        <!-- Curated Fallbacks for immediate rich showcase -->
        <div class="bg-surface-container-low border border-surface-container rounded-xl overflow-hidden shadow-md hover:shadow-2xl hover:border-primary/50 transition-all duration-300 flex flex-col group">
          <div class="relative aspect-[4/3] bg-surface-container overflow-hidden cursor-pointer" onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuA5xwO6Ln5Vk9jTdZN81vWpiQ07H80oGf1FgkXHPgV7RAnR8mEAoVf_dhqFxdVrfvQmV6LYQhNsFEBNysXdh3-7vNwyXII_-_dveXv4qXLFMf5cb1JGnh-x8V_1e2O_a3W-_3ALdodpaGbUvrsL2NNLLZsoMVXq97ZNUaKHc0Ov2FIY14DxQwhv0QjI5JTM9QEX5Vurost5UkwBh87pNBWSUeBX85tKIRWwfN2w6h00T5EEqBnGi4gX', 'Deep 3D Brass Seal Relief Engraving')">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5xwO6Ln5Vk9jTdZN81vWpiQ07H80oGf1FgkXHPgV7RAnR8mEAoVf_dhqFxdVrfvQmV6LYQhNsFEBNysXdh3-7vNwyXII_-_dveXv4qXLFMf5cb1JGnh-x8V_1e2O_a3W-_3ALdodpaGbUvrsL2NNLLZsoMVXq97ZNUaKHc0Ov2FIY14DxQwhv0QjI5JTM9QEX5Vurost5UkwBh87pNBWSUeBX85tKIRWwfN2w6h00T5EEqBnGi4gX" alt="Deep 3D Brass Seal Relief Engraving" />
            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 backdrop-blur-xs transition-opacity flex items-center justify-center gap-space-xs text-white font-headline-sm text-headline-sm font-semibold">
              <span class="material-symbols-outlined text-primary text-[24px]">zoom_in</span>
              <span>Inspect Sample</span>
            </div>
          </div>
          <div class="p-space-md flex flex-col justify-between flex-1 gap-space-xs">
            <div class="flex flex-col">
              <h4 class="font-headline-sm text-headline-sm font-bold text-on-surface line-clamp-1">
                Deep 3D Brass Seal Engraving
              </h4>
              <span class="font-tech-spec text-tech-spec text-primary font-medium mt-space-2xs">
                Solid Brass C36000 • 1.2mm depth
              </span>
            </div>
            <button type="button" class="mt-space-xs flex items-center gap-space-2xs text-secondary hover:text-primary font-label-caps text-label-caps uppercase transition-colors text-left" onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuA5xwO6Ln5Vk9jTdZN81vWpiQ07H80oGf1FgkXHPgV7RAnR8mEAoVf_dhqFxdVrfvQmV6LYQhNsFEBNysXdh3-7vNwyXII_-_dveXv4qXLFMf5cb1JGnh-x8V_1e2O_a3W-_3ALdodpaGbUvrsL2NNLLZsoMVXq97ZNUaKHc0Ov2FIY14DxQwhv0QjI5JTM9QEX5Vurost5UkwBh87pNBWSUeBX85tKIRWwfN2w6h00T5EEqBnGi4gX', 'Deep 3D Brass Seal Relief Engraving')">
              <span>View Full Resolution</span>
              <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
            </button>
          </div>
        </div>

        <div class="bg-surface-container-low border border-surface-container rounded-xl overflow-hidden shadow-md hover:shadow-2xl hover:border-primary/50 transition-all duration-300 flex flex-col group">
          <div class="relative aspect-[4/3] bg-surface-container overflow-hidden cursor-pointer" onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuAFvEVpwQ_EpHG8HoZscAgE-ZR-CLvDtFWxqkNYOIxHQJUkOC77Xi04Zeo02HtEUf4bY4dW8KNBomleFMN5AkPPlbz1mvLGEWBR-KCsUTDt2-brvkxHmSTeBk2imq_oU9tWoPJKI_7WeOIblJpnxnWPXS80-hqlT3dyFVrPMgqDX1dpN7XGnvnvmNbTA0gN4quPzwzPyuUA7ku3m3Qsz3hEIAYbFKhKFvx7-RXjzycJ0AvA1eUJrA3D', 'Stainless Steel 304 Color Oxide Annealing')">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFvEVpwQ_EpHG8HoZscAgE-ZR-CLvDtFWxqkNYOIxHQJUkOC77Xi04Zeo02HtEUf4bY4dW8KNBomleFMN5AkPPlbz1mvLGEWBR-KCsUTDt2-brvkxHmSTeBk2imq_oU9tWoPJKI_7WeOIblJpnxnWPXS80-hqlT3dyFVrPMgqDX1dpN7XGnvnvmNbTA0gN4quPzwzPyuUA7ku3m3Qsz3hEIAYbFKhKFvx7-RXjzycJ0AvA1eUJrA3D" alt="Stainless Steel 304 Color Oxide Annealing" />
            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 backdrop-blur-xs transition-opacity flex items-center justify-center gap-space-xs text-white font-headline-sm text-headline-sm font-semibold">
              <span class="material-symbols-outlined text-primary text-[24px]">zoom_in</span>
              <span>Inspect Sample</span>
            </div>
          </div>
          <div class="p-space-md flex flex-col justify-between flex-1 gap-space-xs">
            <div class="flex flex-col">
              <h4 class="font-headline-sm text-headline-sm font-bold text-on-surface line-clamp-1">
                Stainless Color Annealing
              </h4>
              <span class="font-tech-spec text-tech-spec text-secondary font-medium mt-space-2xs">
                Mirror SS304 • Spectral Oxide Layers
              </span>
            </div>
            <button type="button" class="mt-space-xs flex items-center gap-space-2xs text-secondary hover:text-primary font-label-caps text-label-caps uppercase transition-colors text-left" onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuAFvEVpwQ_EpHG8HoZscAgE-ZR-CLvDtFWxqkNYOIxHQJUkOC77Xi04Zeo02HtEUf4bY4dW8KNBomleFMN5AkPPlbz1mvLGEWBR-KCsUTDt2-brvkxHmSTeBk2imq_oU9tWoPJKI_7WeOIblJpnxnWPXS80-hqlT3dyFVrPMgqDX1dpN7XGnvnvmNbTA0gN4quPzwzPyuUA7ku3m3Qsz3hEIAYbFKhKFvx7-RXjzycJ0AvA1eUJrA3D', 'Stainless Steel 304 Color Oxide Annealing')">
              <span>View Full Resolution</span>
              <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
            </button>
          </div>
        </div>

        <div class="bg-surface-container-low border border-surface-container rounded-xl overflow-hidden shadow-md hover:shadow-2xl hover:border-primary/50 transition-all duration-300 flex flex-col group">
          <div class="relative aspect-[4/3] bg-surface-container overflow-hidden cursor-pointer" onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuDsmtDiYFTMp5kirZsXFaxx2lgZcTDQ8KEEPowHVAFObROaJDg4zOXLBul2znDKbNhD5jShh79Bj0woHHVD3t2h-TfGuz8UALciizKfSv0ygAMeBPYE8vSvvUVW5Eoh1ONfp84a-z5EnZ5Y0UZcHMyfl1-PHPkh_o7NTJVvXRY-WqZGEQJT-JewkzAVHUBal3kOrUM25iEofUZbOy2_4ikCSVpXAx5ffx9a73-XcyYGjQ4NeDfG0qoz', 'Anodized Aluminum UID & 2D Data Matrix')">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsmtDiYFTMp5kirZsXFaxx2lgZcTDQ8KEEPowHVAFObROaJDg4zOXLBul2znDKbNhD5jShh79Bj0woHHVD3t2h-TfGuz8UALciizKfSv0ygAMeBPYE8vSvvUVW5Eoh1ONfp84a-z5EnZ5Y0UZcHMyfl1-PHPkh_o7NTJVvXRY-WqZGEQJT-JewkzAVHUBal3kOrUM25iEofUZbOy2_4ikCSVpXAx5ffx9a73-XcyYGjQ4NeDfG0qoz" alt="Anodized Aluminum UID & 2D Data Matrix" />
            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 backdrop-blur-xs transition-opacity flex items-center justify-center gap-space-xs text-white font-headline-sm text-headline-sm font-semibold">
              <span class="material-symbols-outlined text-primary text-[24px]">zoom_in</span>
              <span>Inspect Sample</span>
            </div>
          </div>
          <div class="p-space-md flex flex-col justify-between flex-1 gap-space-xs">
            <div class="flex flex-col">
              <h4 class="font-headline-sm text-headline-sm font-bold text-on-surface line-clamp-1">
                Anodized Aluminum 2D Matrix
              </h4>
              <span class="font-tech-spec text-tech-spec text-tertiary font-medium mt-space-2xs">
                MIL-STD-130 Traceability UID
              </span>
            </div>
            <button type="button" class="mt-space-xs flex items-center gap-space-2xs text-secondary hover:text-primary font-label-caps text-label-caps uppercase transition-colors text-left" onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuDsmtDiYFTMp5kirZsXFaxx2lgZcTDQ8KEEPowHVAFObROaJDg4zOXLBul2znDKbNhD5jShh79Bj0woHHVD3t2h-TfGuz8UALciizKfSv0ygAMeBPYE8vSvvUVW5Eoh1ONfp84a-z5EnZ5Y0UZcHMyfl1-PHPkh_o7NTJVvXRY-WqZGEQJT-JewkzAVHUBal3kOrUM25iEofUZbOy2_4ikCSVpXAx5ffx9a73-XcyYGjQ4NeDfG0qoz', 'Anodized Aluminum UID & 2D Data Matrix')">
              <span>View Full Resolution</span>
              <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
            </button>
          </div>
        </div>

        <div class="bg-surface-container-low border border-surface-container rounded-xl overflow-hidden shadow-md hover:shadow-2xl hover:border-primary/50 transition-all duration-300 flex flex-col group">
          <div class="relative aspect-[4/3] bg-surface-container overflow-hidden cursor-pointer" onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuBvkr2GKMgDY-pGv_djjLb0UPEx_krgCjLdaLwn9_6nFvC79G40HXpk3HOEYhk7BE2_TdKx2y9EgcLSgy_skCHe9ZKzMXFKom5CiEbLRz5RNgGMPPfpOLfNsx40rBPusxB_bSdj-AL-sRM8SA14IYwA_2Wk87_LQRxVRshixKOCbSixEnrdhUt4jtYj12nuMd5WAz49a7V1BaQ776-mp6NQgY-kgu83kRXPYUY_TPjE7F2KYG6acNFP', 'Titanium Surgical Dial Micro-Lettering')">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvkr2GKMgDY-pGv_djjLb0UPEx_krgCjLdaLwn9_6nFvC79G40HXpk3HOEYhk7BE2_TdKx2y9EgcLSgy_skCHe9ZKzMXFKom5CiEbLRz5RNgGMPPfpOLfNsx40rBPusxB_bSdj-AL-sRM8SA14IYwA_2Wk87_LQRxVRshixKOCbSixEnrdhUt4jtYj12nuMd5WAz49a7V1BaQ776-mp6NQgY-kgu83kRXPYUY_TPjE7F2KYG6acNFP" alt="Titanium Surgical Dial Micro-Lettering" />
            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 backdrop-blur-xs transition-opacity flex items-center justify-center gap-space-xs text-white font-headline-sm text-headline-sm font-semibold">
              <span class="material-symbols-outlined text-primary text-[24px]">zoom_in</span>
              <span>Inspect Sample</span>
            </div>
          </div>
          <div class="p-space-md flex flex-col justify-between flex-1 gap-space-xs">
            <div class="flex flex-col">
              <h4 class="font-headline-sm text-headline-sm font-bold text-on-surface line-clamp-1">
                Titanium Micro-Lettering
              </h4>
              <span class="font-tech-spec text-tech-spec text-outline font-medium mt-space-2xs">
                Grade 5 Titanium • 0.15mm Characters
              </span>
            </div>
            <button type="button" class="mt-space-xs flex items-center gap-space-2xs text-secondary hover:text-primary font-label-caps text-label-caps uppercase transition-colors text-left" onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuBvkr2GKMgDY-pGv_djjLb0UPEx_krgCjLdaLwn9_6nFvC79G40HXpk3HOEYhk7BE2_TdKx2y9EgcLSgy_skCHe9ZKzMXFKom5CiEbLRz5RNgGMPPfpOLfNsx40rBPusxB_bSdj-AL-sRM8SA14IYwA_2Wk87_LQRxVRshixKOCbSixEnrdhUt4jtYj12nuMd5WAz49a7V1BaQ776-mp6NQgY-kgu83kRXPYUY_TPjE7F2KYG6acNFP', 'Titanium Surgical Dial Micro-Lettering')">
              <span>View Full Resolution</span>
              <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
            </button>
          </div>
        </div>
      @endif
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
            Technical Specifications &amp; Machine Parameters
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
@if($machine->specifications->isNotEmpty())
<div class="overflow-x-auto">
<table class="w-full text-left font-tech-spec text-tech-spec">
<thead class="bg-surface-container-high text-outline uppercase font-label-caps text-label-caps">
<tr>
<th class="p-space-md">Specification Group</th>
<th class="p-space-md">Parameter Metric</th>
<th class="p-space-md">Engineering Specification / Value</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container">
@foreach($machine->specifications as $spec)
<tr class="{{ $loop->even ? 'bg-surface-container-low' : 'bg-surface-container-lowest' }} hover:bg-surface-container transition-colors">
<td class="p-space-md text-primary font-semibold">{{ $spec->spec_group }}</td>
<td class="p-space-md text-on-surface font-bold">{{ $spec->spec_name }}</td>
<td class="p-space-md text-secondary font-medium">{{ $spec->spec_value }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@else
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
<td class="p-space-md text-on-surface-variant">Wide pulse shaping range for heat control</td>
</tr>
<tr class="bg-surface-container-lowest hover:bg-surface-container transition-colors">
<td class="p-space-md text-on-surface font-bold">Cooling System Architecture</td>
<td class="p-space-md text-on-surface">Forced Dual Fan Air-Cooling</td>
<td class="p-space-md text-on-surface">Forced High-CFM Air-Cooling</td>
<td class="p-space-md text-on-surface-variant">No distilled water or chiller refilling required</td>
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
@endif
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
<span class="font-tech-spec text-tech-spec text-outline">PDF • {{ $machine->brochure_path ? 'Official Factory Sheet' : 'Available on Request' }}</span>
</div>
</div>
@if($machine->brochure_url)
<a class="bg-surface-container-highest hover:bg-primary hover:text-on-primary text-primary p-space-xs rounded transition-colors" download="{{ $machine->slug }}-datasheet.pdf" href="{{ $machine->brochure_url }}" target="_blank" title="Download Specification">
<span class="material-symbols-outlined text-[20px]">download</span>
</a>
@else
<button type="button" class="bg-surface-container-highest hover:bg-primary hover:text-on-primary text-primary p-space-xs rounded transition-colors" onclick="toggleQuoteModal(true)" title="Request Specification Sheet">
<span class="material-symbols-outlined text-[20px]">download</span>
</button>
@endif
</div>
<div class="bg-surface-container p-space-md rounded flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-secondary text-[32px]">verified</span>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">CE Conformity Certificate</span>
<span class="font-tech-spec text-tech-spec text-outline">PDF • {{ $machine->certificate_path ? 'Audit Certified' : 'Available on Request' }}</span>
</div>
</div>
@if($machine->certificate_url)
<a class="bg-surface-container-highest hover:bg-secondary hover:text-on-secondary text-secondary p-space-xs rounded transition-colors" download="{{ $machine->slug }}-ce-certificate.pdf" href="{{ $machine->certificate_url }}" target="_blank" title="Download Certificate">
<span class="material-symbols-outlined text-[20px]">download</span>
</a>
@else
<button type="button" class="bg-surface-container-highest hover:bg-secondary hover:text-on-secondary text-secondary p-space-xs rounded transition-colors" onclick="toggleQuoteModal(true)" title="Request Certificate">
<span class="material-symbols-outlined text-[20px]">download</span>
</button>
@endif
</div>
<div class="bg-surface-container p-space-md rounded flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-tertiary text-[32px]">menu_book</span>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Operation &amp; Safety Manual</span>
<span class="font-tech-spec text-tech-spec text-outline">PDF • {{ $machine->manual_path ? 'Full Operator Guide' : 'Available on Request' }}</span>
</div>
</div>
@if($machine->manual_url)
<a class="bg-surface-container-highest hover:bg-tertiary hover:text-on-tertiary text-tertiary p-space-xs rounded transition-colors" download="{{ $machine->slug }}-manual.pdf" href="{{ $machine->manual_url }}" target="_blank" title="Download Manual">
<span class="material-symbols-outlined text-[20px]">download</span>
</a>
@else
<button type="button" class="bg-surface-container-highest hover:bg-tertiary hover:text-on-tertiary text-tertiary p-space-xs rounded transition-colors" onclick="toggleQuoteModal(true)" title="Request Manual">
<span class="material-symbols-outlined text-[20px]">download</span>
</button>
@endif
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
<a class="font-tech-spec text-tech-spec text-primary hover:underline flex items-center gap-space-2xs" href="{{ route('machines.index') }}">
<span>View All CNC &amp; Laser Inventory</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
@forelse($relatedMachines as $rel)
<div class="bg-surface-container-low rounded-xl overflow-hidden shadow-lg flex flex-col group hover:shadow-2xl transition-all">
<div class="relative aspect-video bg-surface-container overflow-hidden">
<a href="{{ route('machines.show', $rel->slug) }}" class="block w-full h-full">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="{{ $rel->primary_image_url }}" alt="{{ $rel->name }}"/>
</a>
<div class="absolute top-space-sm left-space-sm bg-surface-dim/90 backdrop-blur-sm px-space-sm py-space-2xs rounded font-label-badge text-label-badge text-primary uppercase">
{{ $rel->category->name ?? 'INDUSTRIAL CNC' }}
</div>
</div>
<div class="p-space-lg flex flex-col gap-space-sm flex-1 justify-between">
<div class="flex flex-col gap-space-xs">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">
<a href="{{ route('machines.show', $rel->slug) }}">
{{ $rel->name }}
</a>
</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
{{ $rel->short_description ?? 'Heavy-duty industrial CNC and laser manufacturing system.' }}
</p>
</div>
<div class="flex flex-col gap-space-md pt-space-xs">
<div class="grid grid-cols-3 gap-space-xs font-tech-spec text-tech-spec bg-surface-container p-space-xs rounded text-center">
<div>
<span class="text-outline text-[10px] block uppercase">Model</span>
<span class="text-on-surface font-semibold truncate block">{{ $rel->model_number ?? 'ZR-SERIES' }}</span>
</div>
<div>
<span class="text-outline text-[10px] block uppercase">Grade</span>
<span class="text-primary font-semibold">Heavy Duty</span>
</div>
<div>
<span class="text-outline text-[10px] block uppercase">Warranty</span>
<span class="text-secondary font-semibold">2 Years</span>
</div>
</div>
<a class="w-full bg-surface-container-high hover:bg-primary hover:text-on-primary text-on-surface py-space-xs rounded text-center font-headline-sm text-headline-sm font-semibold transition-colors" href="{{ route('machines.show', $rel->slug) }}">
View Specifications
</a>
</div>
</div>
</div>
@empty
<div class="col-span-3 text-center py-space-xl text-on-surface-variant font-body-md">
No complementary machines currently listed.
</div>
@endforelse
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
<form class="flex flex-col gap-space-sm font-body-md text-body-md" method="POST" action="{{ route('enquiry.store') }}">
@csrf
<input type="hidden" name="source" value="quote_form" />
<input type="hidden" name="product_id" value="{{ $machine->id }}" />
<div class="hidden" aria-hidden="true" style="display:none !important;">
  <input type="text" name="b_name" tabindex="-1" autocomplete="off" />
</div>
<div>
<label class="font-label-caps text-label-caps uppercase text-outline block mb-space-2xs">Machine Model Configuration</label>
<input class="w-full bg-surface-container px-space-md py-space-xs rounded text-primary font-tech-spec text-tech-spec focus:outline-none cursor-not-allowed" id="modalMachineField" readonly="" type="text" name="message" value="{{ $machine->name }} ({{ $machine->model_number ?? 'Standard' }})"/>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
<div>
<label class="font-label-caps text-label-caps uppercase text-outline block mb-space-2xs">Your Full Name *</label>
<input class="w-full bg-surface-container px-space-md py-space-xs rounded text-on-surface focus:bg-surface-container-high focus:outline-none font-body-md" name="name" placeholder="e.g. Vikram Sharma" required="" type="text"/>
</div>
<div>
<label class="font-label-caps text-label-caps uppercase text-outline block mb-space-2xs">Phone / WhatsApp *</label>
<input class="w-full bg-surface-container px-space-md py-space-xs rounded text-on-surface focus:bg-surface-container-high focus:outline-none font-tech-spec" name="phone" placeholder="+91 98765 43210" required="" type="tel"/>
</div>
</div>
<div>
<label class="font-label-caps text-label-caps uppercase text-outline block mb-space-2xs">Corporate / Plant Email *</label>
<input class="w-full bg-surface-container px-space-md py-space-xs rounded text-on-surface focus:bg-surface-container-high focus:outline-none font-body-md" name="email" placeholder="purchasing@factory.com" required="" type="email"/>
</div>
<div>
<label class="font-label-caps text-label-caps uppercase text-outline block mb-space-2xs">Delivery Destination Port / City</label>
<input class="w-full bg-surface-container px-space-md py-space-xs rounded text-on-surface focus:bg-surface-container-high focus:outline-none font-body-md" name="city" placeholder="e.g. Mundra Port / Ahmedabad GIDC" type="text"/>
</div>
<button class="w-full bg-primary hover:bg-primary-fixed-dim text-on-primary py-space-sm rounded font-headline-sm text-headline-sm font-bold mt-space-xs shadow-lg flex items-center justify-center gap-space-xs transition-all cursor-pointer" type="submit">
<span class="material-symbols-outlined text-[18px]">send</span>
<span>Submit Request to Technical Desk</span>
</button>
</form>
</div>
</div>
</div>
<!-- Fullscreen Lightbox Modal for High-Resolution Visual Inspection -->
<div id="imageLightboxModal" class="fixed inset-0 z-[200] bg-black/95 backdrop-blur-md hidden items-center justify-center p-space-md select-none transition-opacity duration-200" onclick="closeLightbox(event)">
  <!-- Top Bar -->
  <div class="absolute top-space-md left-space-md right-space-md flex items-center justify-between pointer-events-none z-10">
    <div class="bg-surface-dim/80 backdrop-blur-md px-space-md py-space-xs rounded font-tech-spec text-tech-spec text-on-surface flex items-center gap-space-xs pointer-events-auto shadow-lg">
      <span class="material-symbols-outlined text-primary text-[18px]">verified</span>
      <span id="lightboxCaption">ZR IMPEX Machinery Inspection</span>
    </div>
    <button type="button" class="text-white/80 hover:text-white bg-surface-container/70 hover:bg-surface-container p-space-sm rounded-full transition-colors flex items-center justify-center pointer-events-auto shadow-lg cursor-pointer" onclick="closeLightboxDirect()" title="Close (Esc)">
      <span class="material-symbols-outlined text-[24px]">close</span>
    </button>
  </div>

  <!-- Main Lightbox Image Container -->
  <div class="relative max-h-[85vh] max-w-[90vw] flex items-center justify-center overflow-hidden" onclick="event.stopPropagation()">
    <img id="lightboxImg" class="max-h-[85vh] max-w-[90vw] object-contain rounded-lg shadow-2xl transition-transform duration-200" src="" alt="Full Resolution Machinery Inspection" />
  </div>

  <!-- Bottom Hint Bar -->
  <div class="absolute bottom-space-md inset-x-0 flex justify-center pointer-events-none">
    <div class="bg-surface-dim/80 backdrop-blur-md px-space-lg py-space-xs rounded-full font-label-badge text-label-badge text-outline flex items-center gap-space-sm shadow-md">
      <span>Press <kbd class="px-1.5 py-0.5 bg-surface-container rounded text-primary font-mono text-xs">ESC</kbd> or click outside to close</span>
    </div>
  </div>
</div>

<!-- Client-side Interactive Engine -->
<script>
  let currentWattage = '30W';
  let currentViewImageUrl = @json($machine->primary_image_url);
  let currentViewCaption = @json($machine->name);

  function switchProductView(imgUrl, caption, btnElement) {
    currentViewImageUrl = imgUrl;
    currentViewCaption = caption || @json($machine->name);

    // Reset thumbnail active classes
    const buttons = document.querySelectorAll('.thumbnail-btn');
    buttons.forEach(b => {
      b.classList.remove('active', 'ring-2', 'ring-primary');
      b.classList.add('opacity-70');
    });
    btnElement.classList.add('active', 'ring-2', 'ring-primary');
    btnElement.classList.remove('opacity-70');

    // Swap main view image directly
    const mainImg = document.getElementById('mainProductImage');
    if (mainImg) {
      mainImg.src = imgUrl;
    }
  }

  // Smooth Interactive Hover Pan-Zoom on Main Product Image
  const zoomStage = document.getElementById('productZoomStage');
  const mainProductImg = document.getElementById('mainProductImage');

  if (zoomStage && mainProductImg) {
    zoomStage.addEventListener('mousemove', function(e) {
      const rect = zoomStage.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width) * 100;
      const y = ((e.clientY - rect.top) / rect.height) * 100;
      mainProductImg.style.transformOrigin = `${x}% ${y}%`;
      mainProductImg.style.transform = 'scale(2)';
    });

    zoomStage.addEventListener('mouseleave', function() {
      mainProductImg.style.transformOrigin = 'center center';
      mainProductImg.style.transform = 'scale(1)';
    });
  }

  // Lightbox Modal Controls
  function openLightbox(imgUrl, caption) {
    const modal = document.getElementById('imageLightboxModal');
    const img = document.getElementById('lightboxImg');
    const cap = document.getElementById('lightboxCaption');

    if (modal && img) {
      img.src = imgUrl || currentViewImageUrl;
      if (cap) cap.textContent = caption || currentViewCaption;
      modal.classList.remove('hidden');
      modal.classList.add('flex');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeLightbox(event) {
    if (event.target.id === 'imageLightboxModal') {
      closeLightboxDirect();
    }
  }

  function closeLightboxDirect() {
    const modal = document.getElementById('imageLightboxModal');
    if (modal) {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
      document.body.style.overflow = '';
    }
  }

  // Keyboard shortcut ESC to close modals
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeLightboxDirect();
      toggleQuoteModal(false);
    }
  });

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
    const displayElem = document.getElementById('configSelectedDisplay');
    if (displayElem) displayElem.textContent = `ZR-FLM-${watt} High-Precision System`;
    const fieldElem = document.getElementById('modalMachineField');
    if (fieldElem) fieldElem.value = `{{ $machine->name }} (Model: ZR-FLM-${watt})`;

    // Update dynamic WhatsApp preview text payload and anchor href
    const machineName = @json($machine->name);
    const machineUrl = @json(route('machines.show', $machine->slug));
    const cleanNumber = '{{ preg_replace('/[^0-9]/', '', \App\Models\SiteSetting::get('whatsapp_number', '919876543210')) }}';
    const dynamicMsg = `Hello ZR Impex,\n\nI am interested in: ${machineName} (Model: ZR-FLM-${watt})\nLink: ${machineUrl}\n\nPlease share the commercial quotation, technical datasheet, and delivery timeline.`;
    
    const payloadElem = document.getElementById('whatsAppPayloadText');
    if (payloadElem) {
      payloadElem.textContent = dynamicMsg;
    }
    const whatsAppLink = document.getElementById('mainWhatsAppLink');
    if (whatsAppLink) {
      whatsAppLink.href = `https://wa.me/${cleanNumber}?text=` + encodeURIComponent(dynamicMsg);
    }
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
</script></div>
@endsection
