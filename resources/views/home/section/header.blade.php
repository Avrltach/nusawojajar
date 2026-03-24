<header class="relative w-full h-screen md:h-[85vh] bg-gray-900 overflow-hidden flex items-center justify-center">    
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('resource/background.jpeg') }}" 
             alt="Background NU Sawojajar" 
             class="w-full h-full object-cover object-center opacity-50 grayscale">        
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-transparent"></div>        
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
    </div>
    <div class="relative z-10 text-center px-6 container mx-auto max-w-5xl">        
        <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-white text-sm font-medium">
            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
            Portal Resmi PR NU Sawojajar
        </div>
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight tracking-tight">
            <span class="block">NU Sawojajar</span>
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-200">Online</span>
        </h1>
        <div class="w-24 h-1.5 bg-gradient-to-r from-green-600 to-green-200 mx-auto rounded-full mb-8"></div>
        <p class="max-w-3xl mx-auto text-lg md:text-xl text-gray-200 font-light leading-relaxed mb-10">
            Merupakan situs resmi PR NU Sawojajar yang dikelola oleh tim media 
            <span class="text-white font-semibold relative inline-block">
                NUSA PRODUCTION
                <span class="absolute bottom-0 left-0 w-full h-1 bg-green-500/50 rounded-full"></span>
            </span> 
            dibawah manajemen badan Khusus NU Sawojajar Online.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('berita') }}" class="px-8 py-3.5 bg-green-600 hover:bg-green-700 text-white font-bold rounded-full shadow-lg transition duration-300 transform hover:-translate-y-1 hover:shadow-green-500/30">
                Lihat Berita Terbaru
            </a>
            <a href="{{ route('profil.struktur') }}" class="px-8 py-3.5 bg-transparent border-2 border-white/30 hover:border-white text-white font-bold rounded-full transition duration-300 hover:bg-white/10">
                Tentang Kami
            </a>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 z-10">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#F9FAFB"/>
        </svg>
    </div>
</header>