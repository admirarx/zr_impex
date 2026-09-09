@props(['specifications'])

@php
    $groupedSpecs = $specifications->groupBy('spec_group');
@endphp

<div class="border border-border rounded-lg overflow-hidden bg-surface">
    @foreach($groupedSpecs as $groupName => $specs)
        <div class="border-b border-border last:border-b-0">
            <div class="bg-surface-subtle/80 px-4 py-2.5 border-b border-border/60 flex items-center justify-between">
                <span class="text-xs font-mono uppercase tracking-wider text-gold font-semibold flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-gold"></span>
                    {{ $groupName ?: 'General Technical Specs' }}
                </span>
                <span class="text-[10px] font-mono text-steel">{{ $specs->count() }} parameters</span>
            </div>

            <div class="divide-y divide-border/40">
                @foreach($specs as $index => $spec)
                    <div class="grid grid-cols-1 sm:grid-cols-3 px-4 py-3 text-xs {{ $index % 2 === 1 ? 'bg-ink/30' : 'bg-transparent' }}">
                        <div class="text-steel-light font-medium sm:col-span-1">
                            {{ $spec->spec_name }}
                        </div>
                        <div class="font-mono text-white font-medium sm:col-span-2 mt-1 sm:mt-0">
                            {{ $spec->spec_value }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
