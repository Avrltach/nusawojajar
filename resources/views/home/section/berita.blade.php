<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-xl md:text-2xl font-bold text-gray-800">
                    Berita
                </h2>
                <div class="flex gap-2 mt-3">
                    <div class="h-2 w-24 bg-green-600"></div>
                    <div class="h-2 w-16 bg-green-400"></div>
                    <div class="h-2 w-10 bg-green-200"></div>
                </div>
            </div>
            <a href="{{ route('berita') }}" 
            class="text-green-600 hover:text-green-800 font-semibold text-sm">
                Lihat Semua &rarr;
            </a>
        </div>
        <div id="berita-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">            
            <div class="skeleton-item bg-white rounded-lg shadow-md overflow-hidden animate-pulse">
                <div class="bg-gray-300 h-48 w-full"></div>
                <div class="p-5">
                    <div class="h-4 bg-gray-300 rounded w-1/3 mb-3"></div>
                    <div class="h-6 bg-gray-300 rounded w-full mb-2"></div>
                    <div class="h-4 bg-gray-300 rounded w-2/3"></div>
                </div>
            </div>
            <div class="skeleton-item bg-white rounded-lg shadow-md overflow-hidden animate-pulse hidden md:block">
                <div class="bg-gray-300 h-48 w-full"></div>
                <div class="p-5">
                    <div class="h-4 bg-gray-300 rounded w-1/3 mb-3"></div>
                    <div class="h-6 bg-gray-300 rounded w-full mb-2"></div>
                    <div class="h-4 bg-gray-300 rounded w-2/3"></div>
                </div>
            </div>
            <div class="skeleton-item bg-white rounded-lg shadow-md overflow-hidden animate-pulse hidden lg:block">
                <div class="bg-gray-300 h-48 w-full"></div>
                <div class="p-5">
                    <div class="h-4 bg-gray-300 rounded w-1/3 mb-3"></div>
                    <div class="h-6 bg-gray-300 rounded w-full mb-2"></div>
                    <div class="h-4 bg-gray-300 rounded w-2/3"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('berita-container');
        const apiUrl = '/api/beritas';

        fetch(apiUrl)
            .then(response => response.json())
            .then(res => {
                container.innerHTML = '';
                const newsData = res.data.data;

                if (newsData && newsData.length > 0) {
                    newsData.forEach(item => {
                        
                        const dateObj = new Date(item.published_at);
                        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                        const formattedDate = dateObj.toLocaleDateString('id-ID', options);

                        let badgeClass = '';
                        let badgeText = '';
                        
                        if (item.category === 'fatayat') {
                            badgeClass = 'bg-green-600 text-white';
                            badgeText = 'Fatayat';
                        } else {
                            badgeClass = 'bg-green-600 text-white';
                            badgeText = 'Berita Umum';
                        }

                        const imgUrl = item.image_url 
                            ? item.image_url 
                            : 'https://via.placeholder.com/400x200?text=No+Image';

                        const cardHTML = `
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                                <img src="${imgUrl}" alt="${item.title}" class="w-full h-48 object-cover">
                                <div class="p-5 flex-grow flex flex-col">
                                    <div class="flex justify-between items-center mb-3">
                                        <span class="px-3 py-1 text-xs font-bold uppercase rounded-full ${badgeClass}">
                                            ${badgeText}
                                        </span>
                                        <span class="text-xs text-gray-500">
                                            <i class="far fa-calendar-alt mr-1"></i>${formattedDate}
                                        </span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-800 mb-2 flex-grow">
                                        <a href="/berita/${item.slug}" class="hover:text-green-600">
                                            ${item.title}
                                        </a>
                                    </h3>
                                    <div class="text-sm text-gray-600 mt-auto pt-3 border-t">
                                        <i class="far fa-user mr-1"></i> ${item.publisher}
                                    </div>
                                </div>
                            </div>
                        `;

                        container.innerHTML += cardHTML;
                    });
                } else {
                    container.innerHTML = `
                        <div class="col-span-3 text-center py-10">
                            <p class="text-gray-500">Belum ada berita tersedia.</p>
                        </div>
                    `;
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                container.innerHTML = `
                    <div class="col-span-3 text-center py-10">
                        <p class="text-red-500">Gagal memuat data berita.</p>
                    </div>
                `;
            });
    });
</script>