<x-filament-widgets::widget>
    <x-filament::section>
    <div class="relative overflow-hidden bg-gradient-to-br from-green-600 via-green-700 to-emerald-800 rounded-xl shadow-lg p-6 md:p-8 text-white">        
        <div class="absolute top-0 right-0 w-48 h-48 bg-white opacity-5 rounded-full -mr-20 -mt-20 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-white opacity-5 rounded-full -ml-10 -mb-10 pointer-events-none"></div>
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 relative z-10">
                        <div class="flex-1 text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-2 mb-2">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-yellow-500"></span>
                    </span>
                    <span class="text-xs font-semibold uppercase tracking-widest text-green-200">
                        {{ now()->translatedFormat('l, d F Y') }}
                    </span>
                </div>

                <h2 class="text-2xl md:text-3xl font-bold mb-2">
                    {{ $greeting }}, {{ auth()->user()->name }}! 👋
                </h2>

                <p class="text-green-100 mb-6 text-sm md:text-base">
                    Semoga aktivitas mengelola website NU Sawojajar hari ini dipermudah Allah SWT.
                </p>
            </div>
        </div>
    </div>
    </x-filament::section>
</x-filament-widgets::widget>
