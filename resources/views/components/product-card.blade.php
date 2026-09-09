@props(['product'])

@php
    $detailRoute = $product->is_machine ? route('machines.show', $product->slug) : route('spare-parts.show', $product->slug);
    $waUrl = \App\Services\WhatsAppUrlBuilder::build($product);
@endphp

<div class="group bg-surface border border-border hover:border-gold/60 rounded-lg overflow-hidden transition-all duration-300 flex flex-col hover:shadow-xl hover:shadow-black/60">
    <!-- Thumbnail Image Container -->
    <a href="{{ $detailRoute }}" class="block relative aspect-[4/3] bg-ink overflow-hidden border-b border-border">
        <img src="{{ $product->primary_image_url }}" 
             alt="{{ $product->name }}" 
             loading="lazy"
             class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
        
        <!-- Category & Model Chips -->
        <div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
            @if($product->category)
                <span class="bg-ink/90 backdrop-blur-sm border border-border text-[11px] font-mono font-medium text-steel-light px-2.5 py-0.5 rounded">
                    {{ $product->category->name }}
                </span>
            @endif
            @if($product->is_featured)
                <span class="bg-gold text-ink text-[10px] font-mono font-bold uppercase tracking-wider px-2 py-0.5 rounded">
                    Featured
                </span>
            @endif
        </div>

        @if($product->model_number)
            <div class="absolute bottom-3 right-3 bg-ink/95 border border-gold/40 text-gold text-xs font-mono font-semibold px-2.5 py-0.5 rounded">
                {{ $product->model_number }}
            </div>
        @endif
    </a>

    <!-- Card Content -->
    <div class="p-5 flex-grow flex flex-col justify-between">
        <div>
            <h3 class="text-base font-heading font-bold text-white group-hover:text-gold transition-colors line-clamp-1">
                <a href="{{ $detailRoute }}">
                    {{ $product->name }}
                </a>
            </h3>

            @if($product->short_description)
                <p class="mt-2 text-xs text-steel line-clamp-2 leading-relaxed">
                    {{ $product->short_description }}
                </p>
            @endif

            <!-- Key Specs Snapshot (First 3 specifications) -->
            @if($product->specifications->count() > 0)
                <div class="mt-4 pt-3 border-t border-border/80 space-y-1.5">
                    @foreach($product->specifications->take(3) as $spec)
                        <div class="flex items-baseline justify-between text-xs gap-2">
                            <span class="text-steel shrink-0">{{ $spec->spec_name }}:</span>
                            <span class="font-mono text-white/90 text-right truncate">{{ $spec->spec_value }}</span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Card Bottom CTAs -->
        <div class="mt-5 pt-4 border-t border-border grid grid-cols-2 gap-2">
            <a href="{{ $detailRoute }}" 
               class="bg-surface-subtle hover:bg-border text-white text-xs font-mono py-2 rounded text-center transition-colors">
                View Specs
            </a>

            <button type="button" 
                    onclick="window.openWhatsApp('{{ $waUrl }}', {{ $product->id }})"
                    class="bg-gold/15 hover:bg-gold text-gold hover:text-ink border border-gold/30 hover:border-gold font-mono text-xs py-2 rounded text-center font-semibold transition-all duration-200 flex items-center justify-center gap-1.5">
                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
                WhatsApp
            </button>
        </div>
    </div>
</div>
