<x-layout title="Ninja Academy | Welcome to the Dojo">
    <section class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-900/80 mb-14 min-h-115 sm:min-h-130 lg:min-h-140 flex items-center transition-all">
        <img
            src="{{ asset('images/ninjabg.png') }}"
            alt="Ninja Academy Training Grounds"
            class="absolute inset-0 w-full h-full object-cover object-center select-none"
        >
        <div class="absolute inset-0 bg-linear-to-t sm:bg-linear-to-r from-slate-950 via-slate-950/75 to-slate-950/20"></div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950/40 via-transparent to-slate-950/80"></div>
        <div class="absolute -left-16 -top-16 w-80 h-80 bg-red-600/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute right-4 sm:right-10 top-6 sm:top-10 text-7xl sm:text-9xl font-black text-white/5 select-none pointer-events-none font-serif leading-none">
            忍
        </div>
        <div class="relative z-10 p-6 sm:p-10 lg:p-14 max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900/90 border border-red-500/40 backdrop-blur-md text-red-400 text-xs font-bold uppercase tracking-widest mb-4 shadow-sm">
                <img src="{{ asset('images/shuriken.png') }}" class="w-3.5 h-3.5 brightness-0 invert animate-spin" style="animation-duration: 12s;" alt="">
                <span>The Way of the Ninja</span>
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
            </div>

            <!-- Stylized Headline -->
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white leading-[1.1] my-0 drop-shadow-lg">
                Master <span class="text-transparent bg-clip-text bg-linear-to-r from-red-500 via-rose-400 to-amber-300">Stealth</span>,<br class="hidden sm:inline">
                Discipline &amp; Precision
            </h1>
            <p class="mt-4 sm:mt-5 text-sm sm:text-base lg:text-lg text-slate-200/90 max-w-xl leading-relaxed drop-shadow-sm font-normal my-0">
                Enter the sacred grounds of martial mastery. Train under legendary mentors and forge your clan legacy across the Five Great Dojos.
            </p>

            <!-- Call-to-Action Buttons -->
            <div class="mt-6 sm:mt-8 flex flex-wrap items-center gap-3 sm:gap-4">
                <a 
                    href="/ninjas" 
                    class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl font-bold text-sm text-white bg-red-600 hover:bg-red-700 active:scale-98 shadow-lg shadow-red-600/35 hover:shadow-red-600/50 transition-all duration-200 group"
                >
                    <span>Explore All Ninjas</span>
                    <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>

                <a 
                    href="/ninjas/create" 
                    class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl font-bold text-sm text-slate-200 bg-slate-950/70 hover:bg-slate-900 hover:text-white border border-white/20 backdrop-blur-md transition-all duration-200 shadow-sm"
                >
                    <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                    </svg>
                    <span>Create your profile</span>
                </a>
            </div>

            <!-- Trust / Quick Facts Strip -->
            <div class="mt-8 pt-6 border-t border-white/10 flex flex-wrap items-center gap-5 sm:gap-6 text-xs text-slate-300">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <strong class="text-white">5 Ancient Dojos</strong>
                    <span class="text-slate-400">Sanctuaries</span>
                </div>
                <div class="hidden sm:block text-slate-600">&bull;</div>
                <div class="flex items-center gap-2">
                    <strong class="text-white">Active Clan Roster</strong>
                    <span class="text-slate-400">Genin to Kage</span>
                </div>
                <div class="hidden sm:block text-slate-600">&bull;</div>
                <div class="flex items-center gap-2">
                    <strong class="text-white">100% Honor</strong>
                    <span class="text-slate-400">Shinobi Code</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Foundational Training Section (The 3 Pillars) -->
    <section class="mb-14">
        <div class="text-center max-w-xl mx-auto mb-10">
            <span class="inline-flex items-center gap-1.5 text-xs font-black uppercase tracking-widest text-red-600">
                <img src="{{ asset('images/shuriken.png') }}" class="w-3 h-3 brightness-0 invert" alt="">
                <span>The Path to Mastery</span>
            </span>
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mt-1 mb-0">
                Foundational Training
            </h2>
            <p class="text-sm text-slate-500 mt-2 mb-0 leading-relaxed">
                Every shinobi undergoes rigorous conditioning across three sacred pillars before specializing in advanced martial disciplines.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Pillar 1: Mind (Shin) -->
            <div class="group bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-xl hover:border-red-200 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
                <div class="absolute -right-3 -top-3 text-6xl font-black text-slate-100 select-none pointer-events-none group-hover:text-red-50 transition-colors font-serif">
                    心
                </div>
                <div class="w-12 h-12 rounded-xl bg-red-50 border border-red-200/70 text-red-600 flex items-center justify-center text-xl mb-4 font-bold shadow-xs group-hover:scale-105 transition-transform">
                    🔥
                </div>
                <span class="text-[11px] font-bold text-red-600 uppercase tracking-wider block mb-1">Pillar I</span>
                <h3 class="text-lg font-bold text-slate-900 my-0 group-hover:text-red-600 transition-colors">
                    Mind (Shin / 心)
                </h3>
                <p class="text-sm text-slate-600 mt-2 mb-0 leading-relaxed">
                    Calm, disciplined, and observant. The art of staying level under extreme pressure and perceiving what others miss in battle.
                </p>
            </div>

            <!-- Pillar 2: Skill (Gi) -->
            <div class="group bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-xl hover:border-slate-300 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
                <div class="absolute -right-3 -top-3 text-6xl font-black text-slate-100 select-none pointer-events-none group-hover:text-slate-200/60 transition-colors font-serif">
                    技
                </div>
                <div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200 text-slate-800 flex items-center justify-center text-xl mb-4 font-bold shadow-xs group-hover:scale-105 transition-transform">
                    🌑
                </div>
                <span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider block mb-1">Pillar II</span>
                <h3 class="text-lg font-bold text-slate-900 my-0 group-hover:text-slate-900 transition-colors">
                    Skill (Gi / 技)
                </h3>
                <p class="text-sm text-slate-600 mt-2 mb-0 leading-relaxed">
                    A craft sharpened with relentless practice. The ability to learn swiftly, gather vital intelligence, and adapt to shifting scenarios.
                </p>
            </div>

            <!-- Pillar 3: Body (Tai) -->
            <div class="group bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
                <div class="absolute -right-3 -top-3 text-6xl font-black text-slate-100 select-none pointer-events-none group-hover:text-emerald-50 transition-colors font-serif">
                    体
                </div>
                <div class="w-12 h-12 rounded-xl bg-emerald-50 border border-emerald-200/70 text-emerald-600 flex items-center justify-center text-xl mb-4 font-bold shadow-xs group-hover:scale-105 transition-transform">
                    🌿
                </div>
                <span class="text-[11px] font-bold text-emerald-600 uppercase tracking-wider block mb-1">Pillar III</span>
                <h3 class="text-lg font-bold text-slate-900 my-0 group-hover:text-emerald-700 transition-colors">
                    Body (Tai / 体)
                </h3>
                <p class="text-sm text-slate-600 mt-2 mb-0 leading-relaxed">
                    Endurance, explosive reflexes, and disciplined recovery. Even the most cunning strategy fails if physical strength cannot carry it out.
                </p>
            </div>
        </div>
    </section>

    <!-- Bottom Action Banner -->
    <section class="bg-linear-to-r from-slate-900 via-slate-800 to-slate-900 rounded-2xl p-6 sm:p-8 text-white border border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-5 mb-6 shadow-md">
        <div class="space-y-1 text-center sm:text-left">
            <h3 class="text-lg sm:text-xl font-bold text-white my-0">
                Ready to review the clan roster?
            </h3>
            <p class="text-xs sm:text-sm text-slate-300 my-0">
                Inspect registered warriors, filter by their sanctuary dojos, or enlist a recruit.
            </p>
        </div>
        <div class="flex items-center gap-3 shrink-0">
            <a href="/ninjas" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm text-white bg-red-600 hover:bg-red-700 transition-all shadow-sm">
                <span>View All Ninjas &rarr;</span>
            </a>
        </div>
    </section>

</x-layout>