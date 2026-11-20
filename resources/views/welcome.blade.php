<x-layout title="Ninja Academy | Welcome to the Dojo">
    <!-- Hero Section -->
    <div class="relative overflow-hidden rounded-3xl bg-linear-to-br from-slate-900 via-slate-800 to-slate-950 text-white p-6 sm:p-12 lg:p-16 mb-12 shadow-xl border border-slate-800">
        <!-- Background Ambient Glow & Kanji Motif -->
        <div class="absolute -right-12 -bottom-12 w-96 h-96 bg-red-600/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute right-6 top-6 sm:right-12 sm:top-12 opacity-10 text-8xl sm:text-9xl font-black select-none pointer-events-none text-red-500">
            忍
        </div>

        <div class="relative z-10 max-w-2xl">
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white my-0 leading-tight">
                Mastering the Art of discipline
            </h1>

            <p class="text-base sm:text-lg text-slate-300 mt-4 sm:mt-6 mb-8 leading-relaxed">
                Step into the Ninja Academy. Discover elite shinobis trained in legendary hand-to-hand combat
            </p>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                <a href="/ninjas" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl font-bold text-white bg-red-600 hover:bg-red-700 active:bg-red-800 shadow-lg shadow-red-600/30 hover:shadow-red-600/50 transition-all duration-200 text-center">
                    <span>All  Ninjas</span>
                    <span>&rarr;</span>
                </a>

                <a href="/ninjas/create" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl font-bold text-slate-200 bg-slate-800/90 hover:bg-slate-700 hover:text-white border border-slate-700 transition-all duration-200 text-center">
                    <span>Create New Ninja</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Academy Pillars / Features Grid (Responsive) -->
    <div class="mb-12">
        <div class="text-center max-w-xl mx-auto mb-10">
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900 my-0">
                Pillars of the Academy
            </h2>
            <p class="text-sm text-slate-500 mt-2 mb-0">
                Every shinobi undergoes rigorous conditioning across various foundational martial disciplines.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Pillar 1 -->
            <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-shadow">
                <div class="w-12 h-12 rounded-xl bg-red-50 border border-red-200/70 text-red-600 flex items-center justify-center text-xl mb-4 font-bold">
                    🔥
                </div>
                <h3 class="text-lg font-bold text-slate-900 my-0">
                    Mind(Shin)
                </h3>
                <p class="text-sm text-slate-600 mt-2 mb-0 leading-relaxed">
                    Calm, disciplined and observant.
                   The art of staying level under pressure and notice what others miss
                </p>
            </div>

            <!-- Pillar 2 -->
            <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-shadow">
                <div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200 text-slate-800 flex items-center justify-center text-xl mb-4 font-bold">
                    🌑
                </div>
                <h3 class="text-lg font-bold text-slate-900 my-0">
                   Skill(gi)
                </h3>
                <p class="text-sm text-slate-600 mt-2 mb-0 leading-relaxed">
                   A craft you keep sharpening over time plus ability to learn fast, gather information and adapt to various scenarious 
                </p>
            </div>

            <!-- Pillar 3 -->
            <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-shadow">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 border border-emerald-200/70 text-emerald-600 flex items-center justify-center text-xl mb-4 font-bold">
                    🌿
                </div>
                <h3 class="text-lg font-bold text-slate-900 my-0">
                   Body(tai)
                </h3>
                <p class="text-sm text-slate-600 mt-2 mb-0 leading-relaxed">
                  Fitness, rest and stamina beacuse the best plan fails if you can't carry it out 
                </p>
            </div>
        </div>
    </div>
</x-layout>
