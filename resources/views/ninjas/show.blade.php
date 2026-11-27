<x-layout title="Ninja Academy | {{ $ninja->name }}">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 space-y-4">
        <!-- Back Navigation -->
        <a href="/ninjas" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-red-600 transition-colors group">
            <span class="group-hover:-translate-x-1 transition-transform">&larr;</span>
            <span>Back to All Ninjas</span>
        </a>

        <!-- Ninja Hero Header -->
        <section class="bg-linear-to-br from-slate-900 via-slate-800 to-slate-950 rounded-2xl p-6 sm:p-10 text-white shadow-md border border-slate-800">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6">
                <div class="flex items-center gap-5">
                    <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-linear-to-br from-red-500 to-red-700 flex items-center justify-center text-3xl font-black shrink-0 shadow-lg shadow-red-600/30">
                        {{ strtoupper(substr($ninja->name ?? 'N', 0, 2)) }}
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <h1 class="text-2xl sm:text-3xl font-bold my-0">{{ $ninja->name ?? 'Unnamed Ninja' }}</h1>
                            <span class="text-xs bg-white/10 px-2.5 py-0.5 rounded-full border border-white/20 font-mono">
                                #{{ $ninja->id }}
                            </span>
                        </div>
                        <p class="text-slate-300 text-sm mt-1 mb-0 flex items-center gap-1.5">
                            <span>🏯</span>
                            <span class="font-medium text-white">{{ $ninja->dojo->name ?? 'Independent Clan' }}</span>
                            @if($ninja->dojo)
                                <span class="text-slate-400">&bull; {{ $ninja->dojo->location }}</span>
                            @endif
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-3 shrink-0">
                    <a href="/ninjas" class="border border-white/20 hover:bg-white/10 text-white text-xs sm:text-sm font-semibold px-4 py-2 rounded-lg transition-colors">
                        edit
                    </a>
                    <form action="{{ route('ninjas.delete', $ninja->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this ninja?');" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-xs sm:text-sm font-semibold px-4 py-2 rounded-lg transition-colors shadow-xs cursor-pointer">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Stats Grid -->
        <section class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4">
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Rank</span>
                <span class="text-lg sm:text-xl font-bold text-slate-800">
                    {{ ucfirst(strtolower($ninja->rank ?? 'Genin')) }}
                </span>
            </div>
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Primary Technique</span>
                <span class="text-lg sm:text-xl font-bold text-red-600 truncate block">
                    {{ $ninja->skill ?? '—' }}
                </span>
            </div>
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Dojo Name</span>
                <span class="text-sm sm:text-base font-bold text-slate-800 truncate block">
                    {{ $ninja->dojo->name ?? 'Ronin' }}
                </span>
            </div>
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Readiness</span>
                <span class="text-lg sm:text-xl font-bold text-emerald-600">Active</span>
            </div>
        </section>

        <!-- Dojo Affiliation Details Card -->
        @if($ninja->dojo)
            <section class="bg-white p-5 sm:p-6 rounded-xl border border-slate-200/80 shadow-2xs">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 border-b border-slate-100 pb-3 mb-3">
                    <div>
                        <span class="text-[11px] font-bold text-red-600 uppercase tracking-wider block">Dojo Sanctuary</span>
                        <h2 class="text-lg sm:text-xl font-bold text-slate-900 my-0 flex items-center gap-2">
                            <span>🏯</span>
                            <span>{{ $ninja->dojo->name }}</span>
                        </h2>
                    </div>
                    <span class="inline-flex items-center gap-1 text-xs bg-slate-100 text-slate-700 px-3 py-1 rounded-full border border-slate-200 font-medium">
                        <span>📍 Location:</span>
                        <strong class="font-semibold">{{ $ninja->dojo->location }}</strong>
                    </span>
                </div>
                <p class="text-slate-600 text-sm leading-relaxed my-0">
                    {{ $ninja->dojo->description }}
                </p>
                <div class="mt-4 pt-3 border-t border-slate-100 text-xs text-slate-400">
                    Total Shinobi currently training at this dojo: <strong class="text-slate-700">{{ $ninja->dojo->ninjas->count() }}</strong>
                </div>
            </section>
        @endif

        <!-- About / Shinobi Scroll Lore -->
        <section class="bg-white p-5 sm:p-6 rounded-xl border border-slate-200/80 shadow-2xs">
            <h2 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">
                📜 Shinobi Background & Scroll Notes
            </h2>
            <p class="text-slate-700 text-sm leading-relaxed my-0">
                {{ $ninja->bio ?? 'This ninja has pledged silence under the Shadow Oath. No personal background lore has been unsealed in the scrolls.' }}
            </p>
        </section>
    </div>
</x-layout>
