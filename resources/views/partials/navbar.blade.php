<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/95 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <div class="w-12 h-12 flex items-center justify-center shadow-lg">
                    <img src="{{ asset('resource/logo.png') }}" class="h-10 w-auto" alt="Logo NU Sawojajar" />
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-lg text-gray-900 leading-tight">NU Sawojajar</span>
                    <span class="text-xs text-gray-500">Brebes, Jawa Tengah</span>
                </div>
            </a>

            <div class="hidden lg:flex items-center gap-1">
                <a href="{{ url('/') }}" class="nav-link px-4 py-2 text-gray-700 font-medium hover:text-primary transition-colors duration-200 relative group">
                    Home
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-3/4 group-[.active]:w-3/4"></span>
                </a>

                <div class="relative group" data-dropdown>
                    <button class="nav-link px-4 py-2 text-gray-700 font-medium hover:text-primary transition-colors duration-200 flex items-center gap-1 group">
                        Profil
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-3/4 group-[.active]:w-3/4"></span>
                    </button>
                    <div class="dropdown-menu absolute top-full left-0 pt-2 opacity-0 invisible translate-y-2 transition-all duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 py-2 min-w-[200px] overflow-hidden">
                            <a href="{{ route('profil.struktur') }}" class="block px-4 py-2.5 text-gray-600 hover:bg-primary/5 hover:text-primary hover:pl-6 transition-all duration-200">
                                Struktur Organisasi
                            </a>
                            <a href="{{ route('profil.visi-misi') }}" class="block px-4 py-2.5 text-gray-600 hover:bg-primary/5 hover:text-primary hover:pl-6 transition-all duration-200">
                                Visi dan Misi
                            </a>
                            <a href="{{ route('profil.laporan-keuangan') }}" class="block px-4 py-2.5 text-gray-600 hover:bg-primary/5 hover:text-primary hover:pl-6 transition-all duration-200">
                                Laporan Keuangan
                            </a>
                        </div>
                    </div>
                </div>

                <div class="relative group" data-dropdown>
                    <button class="nav-link px-4 py-2 text-gray-700 font-medium hover:text-primary transition-colors duration-200 flex items-center gap-1 group">
                        Banom
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-3/4 group-[.active]:w-3/4"></span>
                    </button>
                    <div class="dropdown-menu absolute top-full left-0 pt-2 opacity-0 invisible translate-y-2 transition-all duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 py-2 min-w-[180px] overflow-hidden">
                            <a href="{{ route('banom.muslimat') }}" class="block px-4 py-2.5 text-gray-600 hover:bg-primary/5 hover:text-primary hover:pl-6 transition-all duration-200">Muslimat</a>
                            <a href="{{ route('banom.fatayat') }}" class="block px-4 py-2.5 text-gray-600 hover:bg-primary/5 hover:text-primary hover:pl-6 transition-all duration-200">Fatayat</a>
                            <a href="{{ route('banom.gp-ansor') }}" class="block px-4 py-2.5 text-gray-600 hover:bg-primary/5 hover:text-primary hover:pl-6 transition-all duration-200">GP Ansor</a>
                            <a href="{{ route('banom.ipnu') }}" class="block px-4 py-2.5 text-gray-600 hover:bg-primary/5 hover:text-primary hover:pl-6 transition-all duration-200">IPNU</a>
                            <a href="{{ route('banom.ippnu') }}" class="block px-4 py-2.5 text-gray-600 hover:bg-primary/5 hover:text-primary hover:pl-6 transition-all duration-200">IPPNU</a>
                            <a href="{{ route('banom.pagar-nusa') }}" class="block px-4 py-2.5 text-gray-600 hover:bg-primary/5 hover:text-primary hover:pl-6 transition-all duration-200">Pagar Nusa</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('kegiatan') }}" class="nav-link px-4 py-2 text-gray-700 font-medium hover:text-primary transition-colors duration-200 relative group">
                    Kegiatan
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-3/4 group-[.active]:w-3/4"></span>
                </a>

                <a href="{{ route('berita') }}" class="nav-link px-4 py-2 text-gray-700 font-medium hover:text-primary transition-colors duration-200 relative group">
                    Berita
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-3/4 group-[.active]:w-3/4"></span>
                </a>

                <div class="relative group" data-dropdown>
                    <button class="nav-link px-4 py-2 text-gray-700 font-medium hover:text-primary transition-colors duration-200 flex items-center gap-1 group">
                        Galeri
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-3/4 group-[.active]:w-3/4"></span>
                    </button>
                    <div class="dropdown-menu absolute top-full left-0 pt-2 opacity-0 invisible translate-y-2 transition-all duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 py-2 min-w-[160px] overflow-hidden">
                            <a href="{{ route('galeri.foto') }}" class="block px-4 py-2.5 text-gray-600 hover:bg-primary/5 hover:text-primary hover:pl-6 transition-all duration-200">Foto</a>
                            <a href="{{ route('galeri.video') }}" class="block px-4 py-2.5 text-gray-600 hover:bg-primary/5 hover:text-primary hover:pl-6 transition-all duration-200">Video</a>
                        </div>
                    </div>
                </div>
            </div>

            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-100 max-h-0 overflow-hidden transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
            <a href="{{ url('/') }}" class="block px-4 py-3 text-gray-700 font-medium hover:bg-primary/5 hover:text-primary rounded-lg transition-colors duration-200">Home</a>
            
            <div class="mobile-accordion">
                <button class="w-full flex items-center justify-between px-4 py-3 text-gray-700 font-medium hover:bg-primary/5 hover:text-primary rounded-lg transition-colors duration-200">
                    Profil
                    <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="hidden pl-4 space-y-1">
                    <a href="{{ url('profil/struktur-organisasi') }}" class="block px-4 py-2 text-gray-600 hover:text-primary transition-colors duration-200">Struktur Organisasi</a>
                    <a href="{{ url('profil/visi-misi') }}" class="block px-4 py-2 text-gray-600 hover:text-primary transition-colors duration-200">Visi dan Misi</a>
                    <a href="{{ url('profil/laporan-keuangan') }}" class="block px-4 py-2 text-gray-600 hover:text-primary transition-colors duration-200">Laporan Keuangan</a>
                </div>
            </div>
            <div class="mobile-accordion">
                <button class="w-full flex items-center justify-between px-4 py-3 text-gray-700 font-medium hover:bg-primary/5 hover:text-primary rounded-lg transition-colors duration-200">
                    Banom
                    <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="hidden pl-4 space-y-1">
                    <a href="{{ url('banom/muslimat') }}" class="block px-4 py-2 text-gray-600 hover:text-primary transition-colors duration-200">Muslimat</a>
                    <a href="{{ url('banom/fatayat') }}" class="block px-4 py-2 text-gray-600 hover:text-primary transition-colors duration-200">Fatayat</a>
                    <a href="{{ url('banom/gp-ansor') }}" class="block px-4 py-2 text-gray-600 hover:text-primary transition-colors duration-200">GP Ansor</a>
                    <a href="{{ url('banom/ipnu') }}" class="block px-4 py-2 text-gray-600 hover:text-primary transition-colors duration-200">IPNU</a>
                    <a href="{{ url('banom/ippnu') }}" class="block px-4 py-2 text-gray-600 hover:text-primary transition-colors duration-200">IPPNU</a>
                    <a href="{{ url('banom/pagar-nusa') }}" class="block px-4 py-2 text-gray-600 hover:text-primary transition-colors duration-200">Pagar Nusa</a>
                </div>
            </div>
            <a href="{{ url('kegiatan') }}" class="block px-4 py-3 text-gray-700 font-medium hover:bg-primary/5 hover:text-primary rounded-lg transition-colors duration-200">Kegiatan</a>
            <a href="{{ url('berita') }}" class="block px-4 py-3 text-gray-700 font-medium hover:bg-primary/5 hover:text-primary rounded-lg transition-colors duration-200">Berita</a>
            <div class="mobile-accordion">
                <button class="w-full flex items-center justify-between px-4 py-3 text-gray-700 font-medium hover:bg-primary/5 hover:text-primary rounded-lg transition-colors duration-200">
                    Galeri
                    <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="hidden pl-4 space-y-1">
                    <a href="{{ url('galeri/foto') }}" class="block px-4 py-2 text-gray-600 hover:text-primary transition-colors duration-200">Foto</a>
                    <a href="{{ url('galeri/video') }}" class="block px-4 py-2 text-gray-600 hover:text-primary transition-colors duration-200">Video</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="h-20"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        
        mobileMenuBtn.addEventListener('click', function() {
            const isOpen = !mobileMenu.classList.contains('hidden');
            if (isOpen) {
                mobileMenu.style.maxHeight = '0px';
                setTimeout(() => mobileMenu.classList.add('hidden'), 300);
                menuIcon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
            } else {
                mobileMenu.classList.remove('hidden');
                mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                menuIcon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
            }
        });

        document.querySelectorAll('.mobile-accordion button').forEach(btn => {
            btn.addEventListener('click', function() {
                const parent = this.parentElement;
                const content = parent.querySelector('div');
                const isOpen = parent.classList.contains('open');
                
                if (isOpen) {
                    content.classList.add('hidden');
                    parent.classList.remove('open');
                } else {
                    content.classList.remove('hidden');
                    parent.classList.add('open');
                }
                
                // Adjust max-height for smooth animation
                setTimeout(() => {
                    if (!mobileMenu.classList.contains('hidden')) {
                         mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                    }
                }, 10);
            });
        });

        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white/98', 'shadow-[0_4px_20px_rgba(0,0,0,0.08)]');
                navbar.classList.remove('bg-white/95');
            } else {
                navbar.classList.remove('bg-white/98', 'shadow-[0_4px_20px_rgba(0,0,0,0.08)]');
                navbar.classList.add('bg-white/95');
            }
        });

        document.addEventListener('click', function(e) {
            if (!e.target.closest('[data-dropdown]')) {
            }
        });
    });
</script>