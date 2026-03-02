@extends('layouts.app') 

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- KOLOM KIRI: KONTEN UTAMA VIDEO -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                
                <!-- Header Judul -->
                <div class="mb-8">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">
                        Galeri Video
                    </h2>
                    <div class="flex gap-2 mt-3">
                        <div class="h-2 w-24 bg-green-600"></div>
                        <div class="h-2 w-16 bg-green-400"></div>
                        <div class="h-2 w-10 bg-green-200"></div>
                    </div>
                </div>

                <!-- Grid Video -->
                <div id="video-container" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Loading Skeleton -->
                    <div class="skeleton-item bg-white rounded-lg shadow-md overflow-hidden animate-pulse border">
                        <div class="bg-gray-300 h-48 w-full"></div>
                        <div class="p-5">
                            <div class="h-4 bg-gray-300 rounded w-2/3 mb-2"></div>
                        </div>
                    </div>
                    <div class="skeleton-item bg-white rounded-lg shadow-md overflow-hidden animate-pulse border hidden md:block">
                        <div class="bg-gray-300 h-48 w-full"></div>
                        <div class="p-5">
                            <div class="h-4 bg-gray-300 rounded w-2/3 mb-2"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- KOLOM KANAN: SIDEBAR BERITA -->
        <div class="lg:col-span-1">
            @include('partials.sidebar_berita', ['beritas' => $beritas])
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('video-container');
        const apiUrl = '/api/videos';

        fetch(apiUrl)
            .then(response => response.json())
            .then(res => {
                container.innerHTML = '';
                const videoData = res.data; 

                if (videoData && videoData.length > 0) {
                    videoData.forEach(item => {
                        // Cek apakah URL video ada
                        if (!item.video_url) return;

                        const cardHTML = `
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full border border-gray-100 group">
                                <div class="relative aspect-video bg-gray-900">
                                    <video controls class="w-full h-full object-cover" preload="metadata">
                                        <source src="${item.video_url}" type="video/mp4">
                                        Browser Anda tidak mendukung video tag.
                                    </video>
                                </div>
                                <div class="p-4 flex-grow flex flex-col border-l-4 border-green-500">
                                    <h3 class="font-semibold text-gray-800 group-hover:text-green-700 transition-colors line-clamp-2">
                                        ${item.title}
                                    </h3>
                                    <span class="text-xs text-gray-500 mt-2">
                                        <i class="fas fa-video mr-1"></i> Video Kegiatan
                                    </span>
                                </div>
                            </div>
                        `;
                        container.innerHTML += cardHTML;
                    });
                } else {
                    container.innerHTML = `
                        <div class="col-span-2 text-center py-10">
                            <p class="text-gray-500">Belum ada video tersedia.</p>
                        </div>
                    `;
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                container.innerHTML = `
                    <div class="col-span-2 text-center py-10">
                        <p class="text-red-500">Gagal memuat data video.</p>
                    </div>
                `;
            });
    });
</script>
@endsection