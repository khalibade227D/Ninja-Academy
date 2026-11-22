<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Academy</title>

    @vite('resources/css/app.css')
</head>
<body class=" min-h-full flex flex-col font-sans bg-slate-50 text-slate-800 selection:bg-red-500 selection:text-white">
    <!-- Header Navigation -->
    <header class="bg-white/95 backdrop-blur-md border-b border-slate-200/80 sticky top-0 z-40 shadow-xs">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3.5 flex items-center justify-between gap-4">
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-2.5 group">
                <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-linear-to-br from-red-500 to-red-700 text-white shadow-sm shadow-red-500/30 group-hover:scale-105 group-hover:rotate-45 transition-transform duration-300">
                    <svg class="w-5 h-5 transition-transform duration-500 group-hover:rotate-180" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L14.5 9.5L22 12L14.5 14.5L12 22L9.5 14.5L2 12L9.5 9.5L12 2Z" />
                        <circle cx="12" cy="12" r="2" class="fill-white/80" />
                    </svg>
                </span>
                <div class="flex flex-col">
                    <span class="text-xl sm:text-2xl font-black tracking-tight text-slate-900 group-hover:text-red-600 transition-colors">
                        Ninja <span class="text-red-600">Academy</span>
                    </span>
                </div>
            </a>
            <div class="flex items-center gap-2 sm:gap-4">
                <a href="/ninjas" 
                   class="px-3.5 py-2 text-sm font-semibold rounded-lg transition-colors {{ request()->is('ninjas') ? 'text-red-600 bg-red-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                    All Ninjas
                </a>
                
                <a href="/ninjas/create" 
                   class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-2 text-sm font-semibold rounded-lg text-white bg-red-600 hover:bg-red-700 active:bg-red-800 shadow-xs hover:shadow transition-all duration-150">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <span>Create Ninja</span>
                </a>
            </div>
        </nav>
    </header>
    <main class="container  scroll-smooth">
        {{ $slot }}
    </main>
    <footer class="bg-slate-900 text-slate-400 border-t border-slate-800/80 mt-auto">
        <div class="h-0.5 bg-linear-to-r from-red-600 via-amber-500 to-red-600"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 sm:pt-16 pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-12">
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-2.5">
                        <span class="flex items-center justify-center w-9 h-9 rounded-xl bg-red-600 text-white shadow-sm shadow-red-600/30">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L14.5 9.5L22 12L14.5 14.5L12 22L9.5 14.5L2 12L9.5 9.5L12 2Z" />
                                <circle cx="12" cy="12" r="2" class="fill-white" />
                            </svg>
                        </span>
                        <span class="text-xl font-bold tracking-tight text-white">
                            Ninja <span class="text-red-500">Academy</span>
                        </span>
                    </div>

                    <p class="text-sm text-slate-400 leading-relaxed max-w-sm">
                        The elite sanctuary for Ninja warriors. Mastering ancient stealth, Hand-to-hand combat  and martial discipline to Attack and Defend honor.
                    </p>
                </div>

                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-200 mb-4">
                        Dojo Grounds
                    </h4>
                    <ul class="space-y-2.5 text-sm my-0">
                        <li>
                            <a href="/ninjas" class="hover:text-red-400 transition-colors inline-flex items-center gap-1.5">
                                <span class="text-red-500 text-xs">›</span> All Ninjas
                            </a>
                        </li>
                        <li>
                            <a href="/ninjas/create" class="hover:text-red-400 transition-colors inline-flex items-center gap-1.5">
                                <span class="text-red-500 text-xs">›</span> Create Ninja
                            </a>
                        </li>
                        <li>
                            <a href="/" class="hover:text-red-400 transition-colors inline-flex items-center gap-1.5">
                                <span class="text-red-500 text-xs">›</span> Academy Gateway
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-200 mb-4">
                        Contact
                    </h4>
                    <p class="text-xs text-slate-400 mb-3 leading-relaxed">
                        Reach out to us for further details
                    </p>
                    <form onsubmit="event.preventDefault(); alert('Subscribed to the Shadow Dispatch!');" class="w-full">
                        <div class="flex flex-col sm:flex-row gap-2">
                            <input 
                                type="email" 
                                required
                                placeholder="shinobi@clan.ninja" 
                                class="w-full my-0 py-2 px-3 text-xs bg-slate-900 border border-slate-800 rounded-lg text-slate-200 placeholder-slate-500 focus:outline-hidden focus:border-red-500 focus:ring-1 focus:ring-red-500"
                            />
                            <button 
                                type="submit" 
                                class="shrink-0 px-3.5 py-2 text-xs font-bold text-white bg-red-600 hover:bg-red-700 active:bg-red-800 rounded-lg transition-colors cursor-pointer text-center"
                            >
                                Join
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="mt-12 pt-8 border-t border-slate-800/80 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <div class="flex items-center gap-2">
                    <p class="my-0">
                        &copy; {{ date('Y') }} <span class="text-slate-300 font-semibold">Ninja Academy</span>. Honoring the Shinobi Way. All rights reserved.
                    </p>
                </div>

                <!-- Footer Nav & Socials -->
                <div class="flex flex-wrap items-center justify-center gap-5">
                    <a href="#" class="hover:text-red-400 transition-colors">Privacy Policy</a>
                    <span class="text-slate-700">&bull;</span>
                    <a href="#" class="hover:text-red-400 transition-colors">Terms</a>
                    <span class="text-slate-700">&bull;</span>
                    <a href="#" class="hover:text-red-400 transition-colors">Contact</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
