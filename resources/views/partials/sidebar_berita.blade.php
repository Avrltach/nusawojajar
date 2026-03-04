<div class="bg-white rounded-lg shadow-md p-6 sticky top-4 border-t-4 border-green-600">
    <h3 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Berita Terbaru</h3>
    
    <div class="space-y-4">
        @foreach($beritas as $berita)
        <a href="#" class="block group">
            <div class="flex flex-col">
                <span class="text-xs font-semibold text-green-600 uppercase tracking-wider mb-1">
                    {{ $berita->category ?? 'Umum' }}
                </span>
                <h4 class="text-sm font-bold text-gray-800 group-hover:text-green-700 transition-colors line-clamp-2">
                    {{ $berita->title }}
                </h4>                
                <p class="text-xs text-gray-500 mt-1">
                    {{ $berita->created_at->translatedFormat('d F Y') }}
                </p>
            </div>
        </a>
        <hr class="my-2 border-gray-100 last:border-0">
        @endforeach
    </div>
</div>