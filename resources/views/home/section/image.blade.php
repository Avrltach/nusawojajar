<section class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">        
        <div class="w-full">
            <div class="flex items-center mb-6">
                <span class="bg-green-600 text-white px-4 py-2 font-bold text-lg rounded-r-lg">Video</span>
                <div class="flex-grow h-1 bg-green-600 ml-2"></div>
            </div>
            <div id="video-list" class="space-y-6">
                <div class="skeleton-loading bg-gray-200 h-48 rounded-lg animate-pulse"></div>
            </div>
        </div>
        <div class="w-full">
            <div class="flex items-center mb-6">
                <span class="bg-green-600 text-white px-4 py-2 font-bold text-lg rounded-r-lg">Galeri Foto</span>
                <div class="flex-grow h-1 bg-green-600 ml-2"></div>
            </div>
            <div id="foto-list" class="space-y-6">
                <div class="skeleton-loading bg-gray-200 h-48 rounded-lg animate-pulse"></div>
            </div>
        </div>

    </div>
</section>

<script>
    function formatTanggal(dateString) {
        if (!dateString) return '-';
        const options = { day: 'numeric', month: 'long', year: 'numeric' };
        return new Date(dateString).toLocaleDateString('id-ID', options);
    }

    async function loadVideos() {
        const container = document.getElementById('video-list');
        try {
            const response = await fetch('/api/videos'); 
            if (!response.ok) throw new Error('Gagal memuat video');
            const result = await response.json();
            container.innerHTML = ''; 
            if (result.success && result.data.length > 0) {
                result.data.forEach(video => {
                    if (!video.video_url) return; 
                    const card = `
                        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <div class="relative aspect-video bg-gray-900">
                                <video controls class="w-full h-full object-cover" preload="metadata">
                                    <source src="${video.video_url}" type="video/mp4">
                                    Browser Anda tidak mendukung video tag.
                                </video>
                            </div>
                            <div class="p-4 border-l-4 border-green-500 bg-gray-50">
                                <h3 class="font-semibold text-gray-800">${video.title}</h3>
                                <span class="text-xs text-gray-500">Video Kegiatan</span>
                            </div>
                        </div>
                    `;
                    container.innerHTML += card;
                });
            } else {
                container.innerHTML = '<p class="text-gray-500 text-center py-8 col-span-2">Belum ada video yang diupload.</p>';
            }
        } catch (error) {
            console.error('Error:', error);
            container.innerHTML = '<p class="text-red-500 text-center py-8">Gagal memuat data video.</p>';
        }
    }

    async function loadFotos() {
        const container = document.getElementById('foto-list');
        try {
            const response = await fetch('/api/fotos');
            if (!response.ok) throw new Error('Gagal memuat foto');
            const result = await response.json();
            container.innerHTML = '';
            if (result.success && result.data.length > 0) {
                result.data.forEach(foto => {
                    if (!foto.image_url) return;
                    const card = `
                        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100 hover:shadow-xl transition-shadow duration-300 group">
                            <div class="relative aspect-video overflow-hidden">
                                <img src="${foto.image_url}" alt="${foto.caption || 'Foto Galeri'}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute top-0 left-0 bg-green-600 text-white text-xs px-3 py-1 rounded-br-lg font-semibold">
                                    Foto
                                </div>
                            </div>
                            <div class="p-4 border-l-4 border-green-500 bg-gray-50">
                                <p class="text-sm text-gray-800 mb-1">${foto.caption || 'Tidak ada caption'}</p>
                                <p class="text-xs text-gray-400">${formatTanggal(foto.created_at)}</p>
                            </div>
                        </div>
                    `;
                    container.innerHTML += card;
                });
            } else {
                container.innerHTML = '<p class="text-gray-500 text-center py-8 col-span-2">Belum ada foto yang diupload.</p>';
            }
        } catch (error) {
            console.error('Error:', error);
            container.innerHTML = '<p class="text-red-500 text-center py-8">Gagal memuat data foto.</p>';
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        loadVideos();
        loadFotos();
    });
</script>