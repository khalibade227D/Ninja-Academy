
<x-layout>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 space-y-2">
        <a href="/ninjas" class="inline-flex items-center gap-1.5 text-xs font-semibold">
            <div class="text-slate-500 hover:text-red-600 font-bold transition-colors">
            <span class="">&larr;</span>
            <span class="p">Back to All Ninjas</span>
            </div>
<main class="">
<section class="bg-linear-to-br from-slate-900 to-slate-800 rounded-2xl p-4 sm:p-10 text-white mb-4">
<div class="flex flex-col sm:flex-row sm:items-center gap-6">
<div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-red-600 flex items-center justify-center
text-3xl font-bold shrink-0">
{{ strtoupper(substr($ninja->name ?? 'N', 0, 2)) }}
</div>
<div class="flex-1 ml-4" >
<h1 class="text-2xl  font-bold">{{ $ninja->name ?? 'Unnamed Ninja' }}</h1>
<p class="text-slate-300 mt-1">{{ $ninja->village ?? 'Hidden leaf Village' }}</p>
</div>
<div class="flex gap-3 shrink-0">
<a href="" class="bg-red-600 hover:bg-red-700 text-white
text-sm font-semibold px-4 py-2 rounded-lg">
Delete Ninja
</a>
<a href="" class="border border-white/30 hover:bg-white/10
text-white text-sm font-semibold px-4 py-2 rounded-lg">
Edit Ninja
</a>
</div>
</div>
</section>
<section class="grid grid-cols-2 sm:grid-cols-3 gap-3.5">
<div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
<span class="text-xs font-medium text-slate-400 block">Rank</span>
<span class="text-xl sm:text-2xl font-bold text-slate-800">
{{ ucfirst(strtolower($ninja->rank ?? '—')) }}
</span>
</div>
<div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
<span class="text-xs font-medium text-slate-400 block">Primary Skill</span>
<span class="text-xl sm:text-2xl font-bold text-red-600">
{{ $ninja->skill ?? '—' }}
</span>
</div>
<div class="bg-white p-3.5 sm:p-4 rounded-xl border border-slate-200/80 shadow-2xs">
<span class="text-xs font-medium text-slate-400 block">Dojo Status</span>
<span class="text-xl sm:text-2xl font-bold {{ ($ninja->status ?? 'active') === 'active' ?
'text-emerald-600' : 'text-slate-400' }}">
{{ ucfirst($ninja->status ?? 'Active') }}
</span>
</div>
</section>
{{-- About card — plain white card, same border/shadow language as the rest of the app --}}
<section class="bg-white p-5 sm:p-6 rounded-xl border border-slate-200/80 shadow-2xs mt-6">
<h2 class="text-sm font-semibold text-slate-400 uppercase tracking-wide mb-2">About</h2>
<p class="text-slate-700 leading-relaxed">
{{ $ninja->bio ?? 'This ninja has not written a profile bio yet.' }}
</p>
</section>
</main>


        </div>
    </div>

        </x-layout>
       