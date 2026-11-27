<x-layout title="Ninja Academy | Recruit New Shinobi">
    <div class="max-w-2xl mx-auto">
        <a href="/ninjas" class="inline-flex items-center gap-1.5 text-xs text-slate-500 font-bold hover:text-red-600 transition-colors mb-6 group">
            <span class="group-hover:-translate-x-1 transition-transform">&larr;</span>
            <span>Back to All Ninjas</span>
        </a>
        <div class="bg-white rounded-2xl border border-slate-200/90 shadow-sm p-6 sm:p-8">
            <div class="border-b border-slate-100 pb-5 mb-6">
                <h1 class="text-2xl sm:text-3xl font-black text-slate-900 my-0">
                    Create Ninja
                </h1>
                <p class="text-sm text-slate-500 mt-1 mb-0">
                    Register an aspiring warrior and assign them to an official academy dojo.
                </p>
            </div>

            <form action="/ninjas" method="POST" class="max-w-full space-y-5">
                @csrf

                <!-- Name -->
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

                <!-- Assigned Dojo (Foreign Key Relationship) -->
                <div>
                    <label for="dojo_id" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                        Assigned Dojo Sanctuary
                    </label>
                    <select id="dojo_id" name="dojo_id" required class="mt-0">
                        <option value="" disabled selected>-- Select a Dojo --</option>
                        @foreach($dojos ?? [] as $dojo)
                            <option value="{{ $dojo->id }}">
                                🏯 {{ $dojo->name }} ({{ $dojo->location }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Primary Skill -->
                <div>
                    <label for="skill" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                        Primary Technique / Jutsu
                    </label>
                    <select id="skill" name="skill" class="mt-0">
                        <option value="Stealth">Stealth & Infiltration</option>
                        <option value="Fireball">Fireball Technique</option>
                        <option value="Swordsmanship">Dual-Blade Swordsmanship</option>
                        <option value="Chakra Healing">Chakra Healing & Alchemy</option>
                        <option value="Shadow Clone">Shadow Clone</option>
                        <option value="Lightning Blade">Lightning Blade</option>
                    </select>
                </div>

                <!-- Rank -->
                <div>
                    <label for="rank" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                        Shinobi Rank
                    </label>
                    <select id="rank" name="rank" class="mt-0">
                        <option value="Genin">Genin (Apprentice)</option>
                        <option value="Chunin">Chunin (Journeyman)</option>
                        <option value="Jonin" selected>Jonin (Elite)</option>
                        <option value="Ambu">Ambu (Black Ops)</option>
                        <option value="Sensei">Sensei (Master Instructor)</option>
                        <option value="Kage">Kage (Grandmaster)</option>
                    </select>
                </div>

                <!-- Background / Bio -->
                <div>
                    <label for="bio" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                        Background & Scroll Lore (Optional)
                    </label>
                    <textarea 
                        id="bio" 
                        name="bio" 
                        rows="3" 
                        placeholder="Clan heritage, weapon of choice, training records..."
                        class="mt-0"
                    ></textarea>
                </div>

                <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-end gap-3">
                    <a href="/ninjas" class="w-full sm:w-auto px-4 py-2.5 text-center text-sm font-semibold text-slate-600 hover:text-slate-900 rounded-lg hover:bg-slate-100 transition-colors">
                        Cancel
                    </a>
                    <button 
                        type="submit" 
                        class="w-full sm:w-auto btn-primary px-6 py-2.5 text-sm cursor-pointer"
                    >
                        Save Ninja &rarr;
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
