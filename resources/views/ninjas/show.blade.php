<x-layout title="Ninja Academy | Shinobi Dossier - {{ $ninja->name }}">


    <div class="max-w-3xl mx-auto">
        <a href="/ninjas" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-red-600 transition-colors mb-6 group">
            <span class="group-hover:-translate-x-1 transition-transform">&larr;</span>
            <span>Back to All Ninjas</span>
        </a>
        <div class="bg-white rounded-3xl border border-slate-200/90 shadow-sm overflow-hidden">
            <div class="h-28 sm:h-36 bg-linear-to-r from-slate-900 via-slate-800 to-red-950 p-6 flex items-end justify-between relative">
                <div class="absolute inset-0 opacity-15 bg-radial from-red-500 to-transparent pointer-events-none"></div>
                <div class="relative z-10 flex flex-wrap items-center gap-2">
                    <span class="px-2.5 py-1 rounded-full bg-white/10 backdrop-blur-md text-[11px] font-bold text-white tracking-widest uppercase border border-white/15">
                        Shinobi ID #{{ $ninja->id }}
                    </span>
                    <span class="px-2.5 py-1 rounded-full text-[11px] font-bold text-white tracking-widest uppercase {{ $isElite ? 'bg-red-600' : 'bg-slate-700' }}">
                        {{ ucfirst($ninja->rank) }}
                    </span>
                </div>

                <!-- Stats Grid (Responsive) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 my-6">
                    <!-- Specialty / Jutsu -->
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200/80">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">
                            Primary Martial Discipline
                        </span>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="text-base font-bold text-slate-800 font-mono">
                                {{ $ninja->skill }}
                            </span>
                        </div>
                    </div>

                    <!-- Mission Clearance -->
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200/80">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">
                            Mission Clearance Level
                        </span>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="w-2.5 h-2.5 rounded-full {{ $isElite ? 'bg-red-500 animate-pulse' : 'bg-emerald-500' }}"></span>
                            <span class="text-xs sm:text-sm font-semibold text-slate-800">
                                {{ $missionClearance }}
                            </span>
                        </div>
                    </div>

                    <!-- Registration Date -->
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200/80">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">
                            Enrolled Date
                        </span>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="text-xs sm:text-sm font-semibold text-slate-800">
                                {{ $ninja->created_at ? $ninja->created_at->format('F d, Y') : 'Original Academy Veteran' }}
                            </span>
                        </div>
                    </div>

                    <!-- Dojo Status -->
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200/80">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block mb-1">
                            Combat Readiness
                        </span>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                            <span class="text-xs sm:text-sm font-semibold text-slate-800">
                                Active Duty • Armed & Ready
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Dossier Bio / Background Scroll -->
                <div class="mb-8">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-2.5 flex items-center gap-1.5">
                        <span>📜</span>
                        <span>Shinobi Background & Scroll Notes</span>
                    </h3>
                    <div class="bg-slate-50/70 p-4 sm:p-5 rounded-2xl border border-slate-200/80">
                        <p class="text-sm text-slate-700 leading-relaxed my-0">
                            {{ $ninja->bio ?: 'This shinobi has pledged silence under the Shadow Oath. No personal background lore has been unsealed in the scrolls.' }}
                        </p>
                    </div>
                </div>

                <!-- Action Buttons (Responsive) -->
                <div class="pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-3">
                    <a href="/ninjas" class="w-full sm:w-auto btn text-center">
                        &larr; View All Ninjas
                    </a>
                    <a href="/ninjas/create" class="w-full sm:w-auto btn-primary text-center">
                        + Recruit Another Shinobi
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
