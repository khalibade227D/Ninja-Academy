<x-layout title="Ninja Academy | Welcome to the Dojo">


  <div class="rounded h-auto overflow-hidden  mb-10">
  <img
    src="{{ asset('images/ninjabg.png') }}"
    class="block h-auto w-full object-cover"
  >
</div>

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
