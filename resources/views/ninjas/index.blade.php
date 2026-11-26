<x-layout title="Ninja Academy | Shinobi Roster">
    <div class="mb-8">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-6 border-b border-slate-200">
            <div>
              
                <h1 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900 my-0">
                    Currently Available Ninjas 🥷 
                </h1>
                <p class="text-sm text-slate-500 mt-1 mb-0">
                    Go through all registered ninjas, inspect their combat ranks, assigned dojo, and view their complete profiles.
                </p>
            </div>

            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white border border-slate-200 shadow-2xs text-xs font-semibold text-slate-700">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    {{ $ninjas->total() }} Ninjas
                </span>
            </div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 mt-6">
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Total Ninjas</span>
                <span class="text-xl sm:text-2xl font-bold text-slate-800">{{ $ninjas->total() }}</span>
            </div>
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Elite Tier (Jonin+)</span>
                <span class="text-xl sm:text-2xl font-bold text-red-600">
                    {{ $ninjas->filter(fn($n) => in_array(strtolower($n->rank), ['jonin', 'kage', 'sensei', 'ambu']))->count() }}
                </span>
            </div>
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Unique Techniques</span>
                <span class="text-xl sm:text-2xl font-bold text-slate-800">
                    {{ $ninjas->pluck('skill')->unique()->count() }}
                </span>
            </div>
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Dojo Status</span>
                <span class="text-xl sm:text-2xl font-bold text-emerald-600">Active</span>
            </div>
        </div>
    </div>

    @if($ninjas->isEmpty())
        <div class="bg-white rounded-2xl border border-slate-200 p-12 text-center my-8">
            <div class="w-16 h-16 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center text-2xl mx-auto mb-4">
                🥷
            </div>
            <h3 class="text-lg font-bold text-slate-800 my-0">No Ninjas Enrolled Yet</h3>
            <p class="text-sm text-slate-500 mt-1 mb-4">The dojo is currently quiet!</p>
            <a href="/ninjas/create" class="btn-primary">
                + Create a Ninja
            </a>
        </div>
    @else
        <ul class="space-y-4 my-6 list-none p-0">
            @foreach($ninjas as $ninja)
                @php
                    $isElite = in_array(strtolower($ninja->rank), ['jonin', 'kage', 'sensei', 'ambu']);
                    $rankLower = strtolower($ninja->rank);
                    $avatarColor = match(true) {
                        str_contains($rankLower, 'kage') => 'bg-linear-to-br from-amber-500 to-red-600 text-white shadow-amber-500/20',
                        str_contains($rankLower, 'jonin') || str_contains($rankLower, 'sensei') => 'bg-linear-to-br from-red-500 to-red-700 text-white shadow-red-500/20',
                        str_contains($rankLower, 'ambu') => 'bg-linear-to-br from-purple-600 to-slate-900 text-white shadow-purple-500/20',
                        str_contains($rankLower, 'chunin') => 'bg-linear-to-br from-blue-500 to-indigo-600 text-white shadow-blue-500/20',
                        default => 'bg-linear-to-br from-slate-600 to-slate-800 text-white shadow-slate-500/20',
                    };
                @endphp
                <li>
                    <x-card 
                        :highlight="$isElite"
                        :badge="$isElite ? '★ ' . ucfirst($ninja->rank) : ucfirst($ninja->rank)"
                        :href="route('ninjas.show', $ninja->id)"
                    >
                        <div class="flex items-start sm:items-center gap-3.5">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center font-black text-lg shrink-0 shadow-sm {{ $avatarColor }}">
                                {{ strtoupper(substr($ninja->name, 0, 1)) }}
                            </div>

                            <div class="flex-1 min-w-0">
                                <div class="flex flex-wrap items-center gap-2">
                                    <h3 class="my-0 text-base sm:text-lg font-bold text-slate-900 group-hover:text-red-600 transition-colors">
                                        {{ $ninja->name }}
                                    </h3>
                                    <span class="text-xs bg-slate-100 text-slate-600 px-2.5 py-0.5 rounded-md border border-slate-200 font-mono font-medium">
                                        ✦ {{ $ninja->skill }}
                                    </span>
                                    @if($ninja->dojo)
                                        <span class="text-xs bg-red-50 text-red-700 px-2.5 py-0.5 rounded-md border border-red-200/60 font-medium inline-flex items-center gap-1">
                                            <span>🏯</span>
                                            <span>{{ $ninja->dojo->name }}</span>
                                        </span>
                                    @endif
                                </div>

                                @if($ninja->bio)
                                    <p class="text-xs text-slate-500 line-clamp-1 mt-1 mb-0">
                                        {{ Str::limit($ninja->bio, 110) }}
                                    </p>
                                @endif

                                <div class="mt-2 flex flex-wrap items-center gap-2 sm:gap-3 text-[11px] text-slate-400">
                                    <span>ID #{{ $ninja->id }}</span>
                                    <span>&bull;</span>
                                    <span>Rank: <strong class="text-slate-600 font-semibold">{{ ucfirst($ninja->rank) }}</strong></span>
                                    @if($ninja->dojo)
                                        <span>&bull;</span>
                                        <span>Dojo: <strong class="text-slate-600 font-semibold">{{ $ninja->dojo->name }} ({{ $ninja->dojo->location }})</strong></span>
                                    @endif
                                    @if($ninja->created_at)
                                        <span>&bull;</span>
                                        <span>Joined {{ $ninja->created_at->format('M Y') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </x-card>
                </li>
            @endforeach
        </ul>

        <div class="mt-8">
            {{ $ninjas->links() }}
        </div>
    @endif
</x-layout>
