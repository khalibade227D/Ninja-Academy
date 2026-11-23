@props([
    'highlight' => false,
    'badge' => null,
    'href' => null,
])

<div @class([
    'card group transition-all duration-200 hover:shadow-md hover:border-slate-300 hover:-translate-y-0.5 bg-white border border-slate-200/90 rounded-2xl p-4 sm:p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4',
    'highlight border-l-4 border-l-red-600 bg-linear-to-r from-red-50/40 via-white to-white' => $highlight,
])>
    <div class="flex-1 min-w-0">
        @if ($badge)
            <span class="inline-flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-full bg-red-100 text-red-700 mb-2.5 border border-red-200/60">
                <span class="w-1.5 h-1.5 rounded-full bg-red-600"></span>
                {{ $badge }}
            </span>
        @endif
        {{ $slot }}
    </div>

    @if($href)
        <div class="pt-3 sm:pt-0 border-t border-slate-100 sm:border-0 shrink-0">
            <a href="{{ $href }}" class="btn group-hover:bg-red-600 group-hover:text-white w-full sm:w-auto">
                <span>View Details</span>
                <span class="group-hover:translate-x-1 transition-transform duration-150">&rarr;</span>
            </a>
        </div>
    @endif
</div>
