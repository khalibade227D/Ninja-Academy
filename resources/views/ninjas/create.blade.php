<x-layout title="Ninja Academy | Recruit New Shinobi">
    <div class="max-w-2xl mx-auto">
        <a href="/ninjas" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-red-600 transition-colors mb-6">
            <span>&larr;</span>
            <span>Back to Ninja Roster</span>
        </a>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8">
            <div class="border-b border-slate-100 pb-5 mb-6">
                <h1 class="text-2xl sm:text-3xl font-black text-slate-900 my-0">
                    Create Ninja
                 </h1>
                <p class="text-sm text-slate-500 mt-1 mb-0">
                    Register an aspiring warrior into the academy's official Clan
                </p>
            </div>

            <form action="/ninjas" method="POST" class="max-w-full space-y-5">
                @csrf
                <div>
                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                        Ninja Name
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        required 
                        placeholder="e.g. Hanzo, Sakura, Sasuke"
                        class="mt-0"
                    />
                </div>

                <!-- Primary Skill / Specialty -->
                <div>
                    <label for="skill" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                        Primary Specialty
                    </label>
                    <select id="skill" name="skill" class="mt-0">
                        <option value="Stealth">Stealth & Infiltration</option>
                        <option value="Fireball">Fireball </option>
                        <option value="Swordsmanship">Dual-Blade Swordsmanship</option>
                        <option value="Healing">Healing technique</option>
                        <option value="Shadow Possession">Shadow Clone</option>
                        <option value="Lightning">Lightning Blade</option>
                    </select>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="health" class="block text-xs font-bold uppercase tracking-wider text-slate-700">
                            Initial Health/Stamina Points (HP: 1 - 100)
                        </label>
                        <span id="healthDisplay" class="text-xs font-bold text-red-600">80 HP</span>
                    </div>
                    <input 
                        type="range" 
                        id="health" 
                        name="health" 
                        min="1" 
                        max="100" 
                        value="80" 
                        oninput="document.getElementById('healthDisplay').textContent = this.value + ' HP'"
                        class="w-full accent-red-600 cursor-pointer mt-0 mb-2"
                    />
                    <div class="flex justify-between text-[11px] text-slate-400">
                        <span>1 (Novice)</span>
                        <span>50 (Chunin)</span>
                        <span>100 (Master Shinobi)</span>
                    </div>
                </div>

                <!-- Bio / Notes -->
                <div>
                    <label for="bio" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                        Dojo Notes & Background (Optional)
                    </label>
                    <textarea 
                        id="bio" 
                        name="bio" 
                        rows="3" 
                        placeholder="Clan heritage, weapon of choice, training records..."
                        class="mt-0"
                    ></textarea>
                </div>

                <!-- Form Actions (Responsive) -->
                <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-end gap-3">
                    <a href="/ninjas" class="w-full sm:w-auto px-4 py-2.5 text-center text-sm font-semibold text-slate-600 hover:text-slate-900 rounded-lg hover:bg-slate-100 transition-colors">
                        Cancel
                    </a>
                    <button 
                        type="submit" 
                        class="w-full sm:w-auto btn-primary px-6 py-2.5 text-sm cursor-pointer"
                    >
                        Enroll Shinobi &rarr;
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
