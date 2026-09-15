@extends('layouts.app')

@section('title', "{$sparePart->name} ({$sparePart->model_number}) — Genuine OEM Spares | ZR IMPEX")
@section('meta_description', $sparePart->short_description ?: "Certified original {$sparePart->name} ({$sparePart->model_number}) with factory warranty and same-day courier dispatch across India by ZR IMPEX.")

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Product',
    'name' => $sparePart->name,
    'image' => $sparePart->primary_image_url,
    'description' => $sparePart->short_description ?? '',
    'sku' => $sparePart->model_number,
    'brand' => [
        '@type' => 'Brand',
        'name' => 'ZR IMPEX',
    ],
    'offers' => [
        '@type' => 'AggregateOffer',
        'priceCurrency' => 'INR',
        'availability' => 'https://schema.org/InStock',
        'url' => url()->current(),
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')
    @php
        $waUrl = \App\Services\WhatsAppUrlBuilder::build($sparePart);
        $phone = \App\Models\SiteSetting::get('primary_phone', '+91 9899639380');
    @endphp

    <!-- Breadcrumb Bar -->
    <section class="bg-surface-container-lowest border-b border-surface-container-high py-3 text-xs font-tech-spec text-outline">
        <div class="max-w-max-width-content mx-auto px-gutter-mobile sm:px-gutter-tablet lg:px-gutter-desktop flex items-center gap-2 overflow-x-auto whitespace-nowrap">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a>
            <span>/</span>
            <a href="{{ route('spare-parts.index') }}" class="hover:text-primary transition-colors">Spare Parts Depot</a>
            @if($sparePart->category)
                <span>/</span>
                <a href="{{ route('spare-parts.index', ['category' => $sparePart->category->slug]) }}" class="hover:text-primary transition-colors">
                    {{ $sparePart->category->name }}
                </a>
            @endif
            <span>/</span>
            <span class="text-on-surface truncate">{{ $sparePart->name }}</span>
        </div>
    </section>

    <!-- Spare Part Main Detail Section -->
    <section class="py-space-3xl lg:py-space-4xl bg-transparent border-b border-surface-container-high"
             x-data="{ activeImage: '{{ $sparePart->primary_image_url }}' }">
        <div class="max-w-max-width-content mx-auto px-gutter-mobile sm:px-gutter-tablet lg:px-gutter-desktop">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- Left: Media Gallery -->
                <div class="lg:col-span-6 space-y-4">
                    <div class="aspect-[4/3] bg-surface-container rounded border border-surface-container-highest overflow-hidden relative shadow-2xl flex items-center justify-center p-6">
                        <img :src="activeImage" 
                             alt="{{ $sparePart->name }}" 
                             class="w-full h-full object-contain object-center">

                        <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                            @if($sparePart->category)
                                <span class="bg-surface-container-lowest/90 backdrop-blur-sm border border-surface-container-high text-on-surface text-xs font-label-caps uppercase px-3 py-1 rounded">
                                    {{ $sparePart->category->name }}
                                </span>
                            @endif
                            <span class="bg-surface-container-lowest/90 border border-emerald-500/50 text-emerald-400 text-xs font-label-badge uppercase px-3 py-1 rounded flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                In Stock • Same-Day Dispatch
                            </span>
                        </div>
                    </div>

                    <!-- Thumbnails Strip -->
                    @if($sparePart->images->count() > 0)
                        <div class="flex items-center gap-3 overflow-x-auto pb-2">
                            <button type="button" 
                                    @click="activeImage = '{{ $sparePart->primary_image_url }}'"
                                    class="w-20 h-16 rounded border bg-surface-container overflow-hidden shrink-0 transition-colors"
                                    :class="activeImage === '{{ $sparePart->primary_image_url }}' ? 'border-primary ring-1 ring-primary' : 'border-surface-container-highest hover:border-outline'">
                                <img src="{{ $sparePart->primary_image_url }}" alt="Main" class="w-full h-full object-cover">
                            </button>

                            @foreach($sparePart->images as $img)
                                <button type="button" 
                                        @click="activeImage = '{{ $img->url }}'"
                                        class="w-20 h-16 rounded border bg-surface-container overflow-hidden shrink-0 transition-colors"
                                        :class="activeImage === '{{ $img->url }}' ? 'border-primary ring-1 ring-primary' : 'border-surface-container-highest hover:border-outline'">
                                    <img src="{{ $img->url }}" alt="{{ $img->alt_text ?: $sparePart->name }}" class="w-full h-full object-cover">
                                </button>
                            @endforeach
                        </div>
                    @endif

                    <!-- Genuine Assurance Notice -->
                    <div class="bg-surface-container border border-surface-container-highest rounded p-4 flex items-center gap-3 text-body-sm text-on-surface-variant">
                        <div class="w-10 h-10 rounded bg-primary/10 text-primary flex items-center justify-center shrink-0 border border-primary/30">
                            <span class="material-symbols-outlined text-[22px]">verified</span>
                        </div>
                        <p class="leading-relaxed">
                            <strong class="text-on-surface">100% Genuine OEM Part:</strong> Tested for zero vibration, precise electrical tolerance, and shipped in shock-absorbing industrial packaging with verification QR code.
                        </p>
                    </div>
                </div>

                <!-- Right: Spares Overview & Conversion -->
                <div class="lg:col-span-6 space-y-6">
                    <div>
                        @if($sparePart->model_number)
                            <div class="text-xs font-tech-spec font-bold text-primary uppercase tracking-wider mb-1">
                                OEM Part / Model No: {{ $sparePart->model_number }}
                            </div>
                        @endif
                        <h1 class="font-headline-xl text-headline-xl font-bold text-on-surface leading-tight">
                            {{ $sparePart->name }}
                        </h1>
                    </div>

                    @if($sparePart->short_description)
                        <p class="text-on-surface-variant font-body-md leading-relaxed border-l-2 border-primary/60 pl-4 py-1">
                            {{ $sparePart->short_description }}
                        </p>
                    @endif

                    <!-- Key Features & Engineering Highlights -->
                    @if(!empty($sparePart->key_features) && is_array($sparePart->key_features))
                        <div class="bg-surface-container border border-surface-container-highest rounded-xl p-4 space-y-2.5">
                            <span class="font-label-caps text-label-caps uppercase text-primary font-semibold tracking-wider flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                Key Features &amp; Engineering Highlights
                            </span>
                            <ul class="space-y-1.5 font-body-sm text-body-sm text-on-surface-variant">
                                @foreach($sparePart->key_features as $feature)
                                    @php
                                        $featureText = is_array($feature) ? ($feature['feature'] ?? '') : $feature;
                                    @endphp
                                    @if(!empty($featureText))
                                        <li class="flex items-start gap-2">
                                            <span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">check_circle</span>
                                            <span>{{ $featureText }}</span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Specs Snapshot -->
                    @if($sparePart->specifications->count() > 0)
                        <div class="bg-surface-container border border-surface-container-highest rounded p-4 space-y-2">
                            <span class="font-label-caps text-label-caps uppercase text-primary font-semibold block mb-2">
                                Technical Parameters &amp; Ratings
                            </span>
                            @foreach($sparePart->specifications->filter(fn($s) => filled($s->spec_value))->take(5) as $spec)
                                <div class="flex items-center justify-between text-xs border-b border-surface-container-high/60 pb-2 last:border-b-0 last:pb-0">
                                    <span class="text-on-surface-variant font-tech-spec">{{ $spec->spec_name }}:</span>
                                    <span class="font-tech-spec text-on-surface font-semibold">{{ $spec->spec_value }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Compatible Machines Callout -->
                    @if($sparePart->compatibleMachines->count() > 0)
                        <div class="bg-surface-container border border-surface-container-highest rounded p-4">
                            <span class="font-label-caps text-label-caps uppercase text-on-surface font-semibold block mb-2">
                                Compatible Industrial CNC Systems:
                            </span>
                            <div class="flex flex-wrap gap-2">
                                @foreach($sparePart->compatibleMachines as $cm)
                                    <a href="{{ route('machines.show', $cm->slug) }}" 
                                       class="bg-surface-container-lowest hover:bg-surface-container-high border border-primary/40 text-primary text-xs font-tech-spec px-3 py-1 rounded transition-colors flex items-center gap-1.5">
                                        <span>{{ $cm->model_number ?: $cm->name }}</span>
                                        <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Conversion Actions -->
                    <div class="space-y-3 pt-2">
                        <button type="button" 
                                onclick="window.openWhatsApp('{{ $waUrl }}', {{ $sparePart->id }})"
                                class="w-full bg-[#25D366] hover:bg-[#20ba59] text-white font-headline-sm font-bold py-3.5 rounded flex items-center justify-center gap-3 transition-all duration-300 shadow-xl hover:shadow-emerald-500/20 active:translate-y-[1px]">
                            <svg class="w-6 h-6 fill-current shrink-0" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                            <span>WhatsApp Order &amp; Price Check</span>
                        </button>

                        <div class="grid grid-cols-2 gap-3">
                            <button type="button" 
                                    @click="quoteModalOpen = true; activeQuoteProduct = {{ $sparePart->id }}"
                                    class="bg-primary hover:bg-primary-fixed-dim text-on-primary font-bold text-xs uppercase tracking-wider font-tech-spec py-3 rounded text-center transition-colors shadow-md">
                                Request Quote
                            </button>

                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $phone) }}" 
                               class="bg-surface-container hover:bg-surface-container-high border border-surface-container-highest text-on-surface font-tech-spec text-xs py-3 rounded text-center transition-colors flex items-center justify-center gap-1.5">
                                <span class="material-symbols-outlined text-primary text-[18px]">call</span>
                                Call Spares Desk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Specifications Table Section -->
    <section class="py-16 bg-surface-container-low border-b border-surface-container-high">
        <div class="max-w-max-width-content mx-auto px-gutter-mobile sm:px-gutter-tablet lg:px-gutter-desktop">
            <div class="max-w-3xl mb-8">
                <span class="font-label-caps text-label-caps uppercase tracking-widest text-primary font-semibold">Technical Ratings</span>
                <h2 class="font-headline-lg text-headline-lg font-bold text-on-surface mt-1">Full Specifications Sheet</h2>
            </div>

            <x-spec-table :specifications="$sparePart->specifications" />
        </div>
    </section>

    <!-- Description / Operational Notes -->
    @if($sparePart->description)
        <section class="py-16 bg-surface-dim border-b border-surface-container-high">
            <div class="max-w-max-width-content mx-auto px-gutter-mobile sm:px-gutter-tablet lg:px-gutter-desktop">
                <div class="max-w-3xl mb-8">
                    <span class="font-label-caps text-label-caps uppercase tracking-widest text-primary font-semibold">Part Details</span>
                    <h2 class="font-headline-lg text-headline-lg font-bold text-on-surface mt-1">Spare Part Overview &amp; Technical Description</h2>
                </div>

                <div class="bg-surface-container border border-surface-container-highest rounded-xl p-6 sm:p-10 text-on-surface-variant leading-relaxed font-body-md space-y-4 prose prose-invert max-w-none">
                    {!! $sparePart->description !!}
                </div>
            </div>
        </section>
    @endif

    <!-- Target Applications Section -->
    @if(!empty($sparePart->applications) && is_array($sparePart->applications))
        <section class="py-16 bg-surface-container-low border-b border-surface-container-high">
            <div class="max-w-max-width-content mx-auto px-gutter-mobile sm:px-gutter-tablet lg:px-gutter-desktop">
                <div class="max-w-3xl mb-8">
                    <span class="font-label-caps text-label-caps uppercase tracking-widest text-primary font-semibold">Industrial Applications</span>
                    <h2 class="font-headline-lg text-headline-lg font-bold text-on-surface mt-1">Target Applications &amp; Use Cases</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach($sparePart->applications as $app)
                        <div class="bg-surface-container p-6 rounded-xl border border-surface-container-highest flex flex-col gap-2.5 shadow-sm hover:border-primary/40 transition-colors">
                            <div class="flex items-center gap-2.5">
                                <span class="material-symbols-outlined text-primary text-[22px]">precision_manufacturing</span>
                                <h3 class="font-headline-sm text-headline-sm font-bold text-on-surface">{{ $app['title'] ?? '' }}</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ $app['description'] ?? '' }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Engineering & Production Benefits Section -->
    @if(!empty($sparePart->benefits) && is_array($sparePart->benefits))
        <section class="py-16 bg-surface-container-lowest border-b border-surface-container-high">
            <div class="max-w-max-width-content mx-auto px-gutter-mobile sm:px-gutter-tablet lg:px-gutter-desktop">
                <div class="max-w-3xl mb-8">
                    <span class="font-label-caps text-label-caps uppercase tracking-widest text-primary font-semibold">Operational Advantages</span>
                    <h2 class="font-headline-lg text-headline-lg font-bold text-on-surface mt-1">Engineering &amp; Production Benefits</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach($sparePart->benefits as $benefit)
                        <div class="bg-surface-container p-6 rounded-xl border border-surface-container-highest flex flex-col gap-2.5 shadow-sm hover:border-emerald-500/40 transition-colors">
                            <div class="flex items-center gap-2.5">
                                <span class="material-symbols-outlined text-emerald-400 text-[22px]">verified</span>
                                <h3 class="font-headline-sm text-headline-sm font-bold text-on-surface">{{ $benefit['title'] ?? '' }}</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ $benefit['description'] ?? '' }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
