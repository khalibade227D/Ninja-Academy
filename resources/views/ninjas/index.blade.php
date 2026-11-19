<x-layout>
    <!-- Page Header & Stats -->
    <div class="mb-8">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-6 border-b border-slate-200">
            <div>
                <div class="flex items-center gap-2 text-xs font-semibold tracking-wider uppercase text-red-600 mb-1">
                    <span>🥋 Shinobi Roster</span>
                </div>
                <h1 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900 my-0">
                    Currently Available Ninjas
                </h1>
                <p class="text-sm text-slate-500 mt-1 mb-0">
                    Browse shinobi Ninjas and inspect their profiles 
                </p>
            </div>

            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white border border-slate-200 shadow-2xs text-xs font-semibold text-slate-700">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    {{ count($ninjas) }} Shinobi Ready
                </span>
            </div>
        </div>

        <!-- Quick Summary Bar (Responsive Grid) -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 mt-6">
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Total Recruits</span>
                <span class="text-xl sm:text-2xl font-bold text-slate-800">{{ count($ninjas) }}</span>
            </div>
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Master Tier (HP > 70)</span>
                <span class="text-xl sm:text-2xl font-bold text-red-600">
                   
                </span>
            </div>
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Top Specialty</span>
                <span class="text-sm sm:text-base font-bold text-slate-800 truncate block">Elemental Arts</span>
            </div>
            <div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
                <span class="text-xs font-medium text-slate-400 block">Dojo Readiness</span>
                <span class="text-xl sm:text-2xl font-bold text-emerald-600">100%</span>
            </div>
        </div>
    </div>

    <!-- Ninjas List -->
    <ul class="space-y-4 my-6 list-none p-0">
        @foreach($ninjas as $ninja)
            <li>
                <x-card 
                    href="/ninjas/{{ $ninja['id'] }}" 
                    :highlight="$ninja['Health'] > 70"
                    :badge="$ninja['Health'] > 70 ? '★ Master Ninja' : null"
                >
                    <div class="flex items-start sm:items-center gap-3.5">
                        <!-- Ninja Avatar Icon -->
                        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl flex items-center justify-center font-black text-base shrink-0 shadow-2xs {{ $ninja['Health'] > 70 ? 'bg-red-100 text-red-700 border border-red-200' : 'bg-slate-100 text-slate-700 border border-slate-200' }}">
                            {{ substr($ninja['name'], 0, 1) }}
                        </div>

                        <div class="flex-1 min-w-0">
                            <div class="flex flex-wrap items-center gap-2">
                                <h3 class="my-0 text-base sm:text-lg font-bold text-slate-900 group-hover:text-red-600 transition-colors">
                                    {{ $ninja['name'] }}
                                </h3>
                                <span class="text-xs bg-slate-100 text-slate-600 px-2.5 py-0.5 rounded-md border border-slate-200 font-mono font-medium">
                                    ✦ {{ $ninja['skill'] }}
                                </span>
                            </div>

                            <!-- Health Bar & Metrics -->
                            <div class="mt-2.5 flex flex-wrap items-center gap-2 sm:gap-3 text-xs text-slate-500">
                                <span class="font-medium text-slate-600">
                                    Health: <strong class="{{ $ninja['Health'] > 70 ? 'text-red-600' : ($ninja['Health'] > 35 ? 'text-amber-600' : 'text-slate-500') }}">{{ $ninja['Health'] }}</strong>/100
                                </span>

                                <div class="w-28 sm:w-40 bg-slate-200/80 rounded-full h-2 overflow-hidden shadow-inner">
                                    <div 
                                        class="h-full rounded-full transition-all duration-500 {{ $ninja['Health'] > 70 ? 'bg-red-600' : ($ninja['Health'] > 35 ? 'bg-amber-500' : 'bg-slate-400') }}" 
                                        style="width: {{ $ninja['Health'] }}%"
                                    ></div>
                                </div>

                                <span class="text-[11px] text-slate-400">
                                    @if($ninja['Health'] > 70)
                                        Battle Ready
                                    @elseif($ninja['Health'] > 35)
                                        In Training
                                    @else
                                        Recovering
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
