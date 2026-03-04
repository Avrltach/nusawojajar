@extends('layouts.app') 

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">        
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">                
                <div class="mb-8">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">
                        Galeri Foto
                    </h2>
                    <div class="flex gap-2 mt-3">
                        <div class="h-2 w-24 bg-green-600"></div>
                        <div class="h-2 w-16 bg-green-400"></div>
                        <div class="h-2 w-10 bg-green-200"></div>
                    </div>
                </div>
                <div id="foto-container" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="skeleton-item bg-white rounded-lg shadow-md overflow-hidden animate-pulse border">
                        <div class="bg-gray-300 h-48 w-full"></div>
                        <div class="p-5">
                            <div class="h-4 bg-gray-300 rounded w-2/3 mb-2"></div>
                            <div class="h-3 bg-gray-300 rounded w-1/3"></div>
                        </div>
                    </div>
                    <div class="skeleton-item bg-white rounded-lg shadow-md overflow-hidden animate-pulse border hidden md:block">
                        <div class="bg-gray-300 h-48 w-full"></div>
                        <div class="p-5">
                            <div class="h-4 bg-gray-300 rounded w-2/3 mb-2"></div>
                            <div class="h-3 bg-gray-300 rounded w-1/3"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="lg:col-span-1">
            @include('partials.sidebar_berita', ['beritas' => $beritas])
        </div>

    </div>
</div>

<script>
    function formatTanggal(dateString) {
        if (!dateString) return '-';
        const options = { day: 'numeric', month: 'long', year: 'numeric' };
        return new Date(dateString).toLocaleDateString('id-ID', options);
    }

    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('foto-container');
        const apiUrl = '/api/fotos';

        fetch(apiUrl)
            .then(response => response.json())
            .then(res => {
                container.innerHTML = '';
                const fotoData = res.data; 

                if (fotoData && fotoData.length > 0) {
                    fotoData.forEach(item => {
                        const imgUrl = item.image_url 
                            ? item.image_url 
                            : 'https://via.placeholder.com/400x200?text=No+Image';

                        const cardHTML = `
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full border border-gray-100 group">
                                <div class="relative aspect-video overflow-hidden">
                                    <img src="${imgUrl}" alt="${item.caption || 'Foto'}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute top-0 left-0 bg-green-600 text-white text-xs px-3 py-1 rounded-br-lg font-semibold">
                                        Foto
                                    </div>
                                </div>
                                <div class="p-4 flex-grow flex flex-col border-l-4 border-green-500">
                                    <p class="text-sm text-gray-800 font-medium mb-2 line-clamp-2">
                                        ${item.caption || 'Tidak ada caption'}
                                    </p>
                                    <p class="text-xs text-gray-400 mt-auto">
                                        <i class="far fa-calendar-alt mr-1"></i> ${formatTanggal(item.created_at)}
                                    </p>
                                </div>
                            </div>
                        `;
                        container.innerHTML += cardHTML;
                    });
                } else {
                    container.innerHTML = `
                        <div class="col-span-2 text-center py-10">
                            <p class="text-gray-500">Belum ada foto tersedia.</p>
                        </div>
                    `;
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                container.innerHTML = `
                    <div class="col-span-2 text-center py-10">
                        <p class="text-red-500">Gagal memuat data foto.</p>
                    </div>
                `;
            });
    });
</script>
@endsection