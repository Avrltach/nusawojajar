@extends('layouts.app') 

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">        
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-md p-6 overflow-hidden">                
                <div id="skeleton-loader" class="animate-pulse space-y-4">
                    <div class="bg-gray-300 h-64 w-full rounded-lg"></div>
                    <div class="h-4 bg-gray-300 rounded w-1/4"></div>
                    <div class="h-8 bg-gray-300 rounded w-3/4"></div>
                    <div class="space-y-2 pt-4">
                        <div class="h-4 bg-gray-300 rounded w-full"></div>
                        <div class="h-4 bg-gray-300 rounded w-full"></div>
                        <div class="h-4 bg-gray-300 rounded w-5/6"></div>
                        <div class="h-4 bg-gray-300 rounded w-full"></div>
                    </div>
                </div>
                <div id="article-content" class="hidden">                    
                    <div class="mb-6 overflow-hidden rounded-lg">
                        <img id="article-image" src="" alt="" class="w-full h-auto max-h-96 object-cover">
                    </div>
                    <div class="border-b border-gray-100 pb-4 mb-4">
                        <div class="flex flex-wrap items-center gap-3 mb-4 text-sm text-gray-500">
                            <span id="article-category" class="bg-green-600 text-white px-3 py-1 rounded-full text-xs font-bold uppercase">
                                Kategori
                            </span>
                            <span id="article-date" class="flex items-center">
                                <i class="far fa-calendar-alt mr-1 text-green-600"></i> 
                                <span>-</span>
                            </span>
                            <span id="article-publisher" class="flex items-center">
                                <i class="far fa-user mr-1 text-green-600"></i> 
                                <span>-</span>
                            </span>
                        </div>
                        <h1 id="article-title" class="text-2xl md:text-3xl font-bold text-gray-800 leading-tight">
                            Judul Berita
                        </h1>
                    </div>
                    <div id="article-body" class="text-gray-700 leading-relaxed space-y-4 content-article">
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
    document.addEventListener('DOMContentLoaded', function() {
        const pathArray = window.location.pathname.split('/');
        const slug = pathArray[pathArray.length - 1]; 

        if (slug) {
            loadArticle(slug);
        }
    });

    async function loadArticle(slug) {
        const skeleton = document.getElementById('skeleton-loader');
        const contentDiv = document.getElementById('article-content');

        try {
            const response = await fetch(`/api/beritas/${slug}`);
            
            if (!response.ok) throw new Error('Berita tidak ditemukan');
            
            const res = await response.json();
            const item = res.data || res; 
            skeleton.classList.add('hidden');
            contentDiv.classList.remove('hidden');
            const dateObj = new Date(item.published_at || item.created_at);
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = dateObj.toLocaleDateString('id-ID', options);
            document.getElementById('article-title').innerText = item.title;
            const imgEl = document.getElementById('article-image');
            imgEl.src = item.image_url || 'https://via.placeholder.com/800x400?text=No+Image';
            imgEl.alt = item.title;
            document.getElementById('article-date').querySelector('span').innerText = formattedDate;
            document.getElementById('article-publisher').querySelector('span').innerText = item.publisher || 'Admin';            
            const catEl = document.getElementById('article-category');
            catEl.innerText = item.category ? item.category.replace('_', ' ').toUpperCase() : 'BERITA';
            document.getElementById('article-body').innerHTML = item.content;
            document.title = item.title + " - NU Sawojajar";

        } catch (error) {
            console.error('Error:', error);
            skeleton.classList.add('hidden');
            contentDiv.classList.remove('hidden');
            contentDiv.innerHTML = `
                <div class="p-10 text-center">
                    <p class="text-red-500 text-lg font-semibold">Berita tidak ditemukan.</p>
                    <a href="/berita" class="text-green-600 hover:underline mt-4 inline-block">Kembali ke daftar berita</a>
                </div>
            `;
        }
    }
</script>
@endsection