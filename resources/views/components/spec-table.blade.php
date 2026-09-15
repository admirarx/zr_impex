@props(['specifications'])

<div class="overflow-x-auto border border-border rounded-lg bg-surface">
    <table class="w-full text-left text-sm">
        <thead class="bg-surface-subtle/80 text-steel font-mono uppercase text-[10px] tracking-wider border-b border-border/60">
            <tr>
                <th class="px-4 py-3 font-semibold">Specification</th>
                <th class="px-4 py-3 font-semibold">Value</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-border/40">
            @foreach($specifications as $index => $spec)
                <tr class="{{ $index % 2 === 1 ? 'bg-ink/30' : 'bg-transparent' }} hover:bg-surface-subtle/40 transition-colors">
                    <td class="px-4 py-3 text-steel-light font-medium">{{ $spec->spec_name }}</td>
                    <td class="px-4 py-3 font-mono text-white font-medium">{{ $spec->spec_value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
