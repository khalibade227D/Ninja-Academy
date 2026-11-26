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
                <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-linear-to-br from-red-500 to-red-700 text-white shadow-sm shadow-red-500/30 group-hover:scale-105 hover:rotate-180 transition-transform duration-900">
                    <img src="{{asset('images/shuriken.png')}}" alt="" class="brightness-0 invert h-5 w-5">
                </span>
                <div class="flex flex-col">
                    <span class="text-xl sm:text-2xl font-black tracking-tight text-slate-900">
                        Ninja <span>Academy</span>
                    </span>
                </div>
            </a>
            <div class="flex items-center gap-2 sm:gap-4">
                <a href="/ninjas" 
                   class="px-3.5 py-2 text-sm font-semibold rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100">
                    All Ninjas
                </a>
                
                <a href="/ninjas/create" 
                   class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-2 text-sm font-semibold rounded-lg text-white bg-slate-800 hover:bg-slate-900 active:bg-slate-900 shadow-xs hover:shadow transition-all duration-150">
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
<footer class="mt-auto border-t border-slate-800/80 bg-slate-900 text-slate-400">
  <div class="mx-auto flex max-w-7xl flex-col items-center justify-center gap-3 px-4 py-6 text-center sm:flex-row sm:gap-4">
    <div class="flex items-center gap-2">
      <img
        src="{{ asset('images/shuriken.png') }}"
        alt=""
        aria-hidden="true"
        class="h-5 w-5 shrink-0 brightness-0 invert"
      >
      <span class="font-bold text-white">Ninja Academy</span>
    </div>

    <p class="text-xs sm:text-sm">
      Train with discipline, grow with purpose. © Ninja Academy
    </p>
  </div>
</footer>



</body>
</html>
