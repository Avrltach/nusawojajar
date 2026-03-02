@extends('layouts.app') 

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <div>
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">
                        Laporan Keuangan
                    </h2>
                    <div class="flex gap-2 mt-3">
                        <div class="h-2 w-24 bg-green-600"></div>
                        <div class="h-2 w-16 bg-green-400"></div>
                        <div class="h-2 w-10 bg-green-200"></div>
                    </div>
                </div>
                <div class="mt-6 flex flex-wrap gap-2" id="year-filter">
                    <button onclick="filterYear('all')" 
                            class="year-btn px-4 py-2 rounded font-semibold text-sm transition-all duration-300 bg-green-600 text-white hover:bg-green-100" 
                            data-year="all">
                        Semua
                    </button>
                    <button onclick="filterYear(2025)" 
                            class="year-btn px-4 py-2 rounded font-semibold text-sm transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-green-100" 
                            data-year="2025">
                        2025
                    </button>
                    <button onclick="filterYear(2026)" 
                            class="year-btn px-4 py-2 rounded font-semibold text-sm transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-green-100" 
                            data-year="2026">
                        2026
                    </button>
                    <button onclick="filterYear(2027)" 
                            class="year-btn px-4 py-2 rounded font-semibold text-sm transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-green-100" 
                            data-year="2027">
                        2027
                    </button>
                    <button onclick="filterYear(2028)" 
                            class="year-btn px-4 py-2 rounded font-semibold text-sm transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-green-100" 
                            data-year="2028">
                        2028
                    </button>
                    <button onclick="filterYear(2029)" 
                            class="year-btn px-4 py-2 rounded font-semibold text-sm transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-green-100" 
                            data-year="2029">
                        2029
                    </button>
                    <button onclick="filterYear(2030)" 
                            class="year-btn px-4 py-2 rounded font-semibold text-sm transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-green-100" 
                            data-year="2030">
                        2030
                    </button>
                </div>
                <div id="laporan-list" class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gray-200 h-48 rounded-lg animate-pulse"></div>
                    <div class="bg-gray-200 h-48 rounded-lg animate-pulse"></div>
                    <div class="bg-gray-200 h-48 rounded-lg animate-pulse"></div>
                </div>

            </div>
        </div>
        
        <div class="lg:col-span-1">
            @include('partials.sidebar_berita', ['beritas' => $beritas])
        </div>

    </div>
</div>

<script>
    let currentYear = 'all'; 
    function updateButtonStyles() {
        const buttons = document.querySelectorAll('.year-btn');
        buttons.forEach(btn => {
            if (btn.dataset.year == currentYear) {
                // Jika aktif: Hijau solid
                btn.classList.remove('bg-gray-200', 'text-gray-700');
                btn.classList.add('bg-green-600', 'text-white');
            } else {
                // Jika tidak aktif: Abu-abu
                btn.classList.remove('bg-green-600', 'text-white');
                btn.classList.add('bg-gray-200', 'text-gray-700');
            }
        });
    }

    function filterYear(year) {
        currentYear = year;
        updateButtonStyles();
        loadLaporanKeuangan(); 
    }

    async function loadLaporanKeuangan() {
        const container = document.getElementById('laporan-list');
        container.innerHTML = `
            <div class="bg-gray-200 h-48 rounded-lg animate-pulse"></div>
            <div class="bg-gray-200 h-48 rounded-lg animate-pulse"></div>
        `; 
        
        try {
            let url = '/api/laporan-keuangan';
            if (currentYear !== 'all') {
                url += `?year=${currentYear}`;
            }

            const response = await fetch(url);
            if (!response.ok) throw new Error('Gagal memuat data');
            
            const result = await response.json();
            container.innerHTML = ''; 

            if (result.success && result.data.length > 0) {
                result.data.forEach(item => {
                    const isPdf = item.file_url.endsWith('.pdf');
                    
                    const card = `
                        <div class="bg-white rounded-lg shadow-md border border-gray-100 hover:shadow-xl transition-all duration-300 overflow-hidden group">
                            
                            <!-- Header Card dengan Ikon -->
                            <div class="bg-green-50 p-6 flex items-center justify-center border-b border-green-100">
                                <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                                    ${isPdf ? `
                                        <!-- Ikon PDF -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 13h6m-6 4h4" />
                                        </svg>
                                    ` : `
                                        <!-- Ikon Excel/File -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    `}
                                </div>
                            </div>

                            <!-- Body Card -->
                            <div class="p-5">
                                <h3 class="font-bold text-gray-800 text-lg mb-2 line-clamp-2" title="${item.title}">
                                    ${item.title}
                                </h3>
                                <div class="flex items-center text-sm text-gray-500 space-x-2">
                                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded font-semibold">
                                        ${item.year}
                                    </span>
                                    <span>•</span>
                                    <span>${item.file_name.substring(0, 10)}...</span>
                                </div>
                            </div>

                            <!-- Footer: Tombol Download -->
                            <div class="px-5 pb-5">
                                <a href="${item.file_url}" 
                                   target="_blank" 
                                   class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2.5 rounded transition-colors">
                                    Download File
                                </a>
                            </div>
                        </div>
                    `;
                    container.innerHTML += card;
                });
            } else {
                container.innerHTML = `
                    <div class="col-span-3 text-center py-10 text-gray-500">
                        Tidak ada laporan keuangan untuk tahun ${currentYear === 'all' ? 'ini' : currentYear}.
                    </div>
                `;
            }
        } catch (error) {
            console.error('Error:', error);
            container.innerHTML = `
                <div class="col-span-3 text-center py-10 text-red-500">
                    Gagal memuat data laporan.
                </div>
            `;
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        loadLaporanKeuangan();
    });
</script>
@endsection