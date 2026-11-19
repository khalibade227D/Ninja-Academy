
    @php
        $dossiers = [
            '1' => ['name' => 'Ryu', 'skill' => 'Fireball', 'Health' => 30, 'bio' => 'Master of flame ninjutsu trained in the volcanic peaks of Mount Fuji. Specializes in intense thermal strikes.', 'rank' => 'Genin', 'clan' => 'Flame Clan'],
            '2' => ['name' => 'Ayame', 'skill' => 'Stealth', 'Health' => 40, 'bio' => 'Shadow infiltrator who can vanish in the blink of an eye without leaving a trace. Infiltrates impenetrable fortifications unseen.', 'rank' => 'Chunin', 'clan' => 'Shadow Syndicate'],
            '3' => ['name' => 'Kenji', 'skill' => 'Swordsmanship', 'Health' => 74, 'bio' => 'Dual-blade prodigy capable of striking seven times before thunder cracks. Master of the silent twin Katana style.', 'rank' => 'Jonin', 'clan' => 'Iron Blade'],
            '4' => ['name' => 'Mika', 'skill' => 'Healing', 'Health' => 90, 'bio' => 'Master of secret herbal alchemy and revitalizing chakra recovery techniques. Preserves the vitality of allied shinobi on perilous missions.', 'rank' => 'Jonin', 'clan' => 'Lotus Sanctuary'],
        ];

        $ninja = $dossiers[(string)$id] ?? [
            'name' => 'Shinobi #' . $id,
            'skill' => 'Shadow Arts',
            'Health' => 85,
            'bio' => 'A mysterious warrior roaming the academy grounds, undergoing elite training under the grandmasters.',
            'rank' => 'Elite Shinobi',
            'clan' => 'Hidden Leaf Sanctuary',
        ];
    @endphp
    <x-layout title="Ninja Academy | Shinobi Dossier #{{ $id }}">

    <div class="max-w-3xl mx-auto">
        <a href="/ninjas" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-red-600 transition-colors mb-6">
            <span>&larr;</span>
            <span>Back to All Ninjas</span>
        </a>
        <div class="bg-white rounded-3xl border border-slate-200/90 shadow-sm overflow-hidden">
            <div class="h-28 sm:h-36 bg-linear-to-r from-slate-900 via-slate-800 to-red-950 p-6 flex items-end justify-between relative">
                <div class="absolute inset-0 opacity-10 bg-radial from-red-500 to-transparent"></div>
                <div class="relative z-10 flex items-center gap-2">
                    <span class="px-2.5 py-1 rounded-full bg-white/10 backdrop-blur-md text-[11px] font-bold text-white mb-2 tracking-widest uppercase border border-white/10 " >
                        Ninja ID #{{ $id }}
                    </span>
                    <span class="px-2.5 py-1 mb-2  rounded-full bg-red-600 text-[11px] font-bold text-white tracking-widest uppercase">
                        {{ $ninja['rank'] }}
                    </span>
                </div>
            </div>
            <div class="p-6 sm:p-8 -mt-12 relative z-20">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 pb-6 border-b border-slate-100">
                    <div class="flex items-center gap-4">
                        <div class="w-20 h-20 rounded-2xl bg-white p-1.5 shadow-md border border-slate-200 shrink-0">
                            <div class="w-full h-full rounded-xl bg-linear-to-br from-red-500 to-red-700 text-white flex items-center justify-center text-3xl font-black">
                                {{ substr($ninja['name'], 0, 1) }}
                            </div>
                        </div>

                        <div>
                            <h1 class="text-2xl mt-3  sm:text-3xl font-black text-slate-900 my-0">
                                {{ $ninja['name'] }}
                            </h1>
                            <p class="text-xs sm:text-sm text-slate-500 font-medium my-0">
                                Clan: <span class="text-slate-800 font-semibold">{{ $ninja['clan'] }}</span>
                            </p>
                        </div>
                    </div>

                    <div class="inline-flex">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-red-50 text-red-700 border border-red-200/60 font-mono text-xs font-semibold">
                            ✦ Specialty: {{ $ninja['skill'] }}
                        </span>
                    </div>
                </div>

                <!-- Stats Grid (Responsive) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 my-6">
                    <!-- Health Metric -->
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200/80">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Combat Stamina / HP</span>
                            <span class="text-sm font-black {{ $ninja['Health'] > 70 ? 'text-red-600' : 'text-slate-700' }}">
                                {{ $ninja['Health'] }} / 100
                            </span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-2.5 overflow-hidden">
                            <div 
                                class="h-full rounded-full {{ $ninja['Health'] > 70 ? 'bg-red-600' : ($ninja['Health'] > 35 ? 'bg-amber-500' : 'bg-slate-400') }}" 
                                style="width: {{ $ninja['Health'] }}%"
                            ></div>
                        </div>
                    </div>

                    <!-- Rank & Readiness -->
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200/80">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500 block mb-1">Status Classification</span>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="w-2.5 h-2.5 rounded-full {{ $ninja['Health'] > 70 ? 'bg-emerald-500' : 'bg-amber-500' }}"></span>
                            <span class="text-sm font-bold text-slate-800">
                                {{ $ninja['Health'] > 70 ? 'Ready for S-Rank Missions' : 'Light Duty / Recuperation' }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Dossier Bio -->
                <div class="mb-8">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-2">
                        Shinobi Background & Scroll Notes
                    </h3>
                    <p class="text-sm text-slate-700 leading-relaxed bg-slate-50/60 p-4 rounded-xl border border-slate-100 my-0">
                        {{ $ninja['bio'] }}
                    </p>
                </div>

                <!-- Action Buttons (Responsive) -->
                <div class="pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-3">
                    <a href="/ninjas" class="w-full sm:w-auto btn text-center">
                        &larr; View All Ninjas
                </div>
            </div>
        </div>
    </div>
</x-layout>
