@extends('layouts.app') 

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div>
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">
                        Struktur Organisasi
                    </h2>
                    <div class="flex gap-2 mt-3">
                        <div class="h-2 w-24 bg-green-600"></div>
                        <div class="h-2 w-16 bg-green-400"></div>
                        <div class="h-2 w-10 bg-green-200"></div>
                    </div>
                </div>
                <div class="mt-6 text-gray-600">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum dolor a libero hendrerit tempor. Aenean suscipit vulputate tellus condimentum cursus. 
                    Phasellus sapien leo, pulvinar id ultricies eget, convallis ut lectus. Duis efficitur ornare turpis eu accumsan. Maecenas in mauris lobortis lacus posuere volutpat 
                    eget auctor ante. Maecenas sed fringilla metus, id convallis felis. Vestibulum faucibus odio sit amet ante pulvinar finibus. Nulla volutpat orci pellentesque, vulputate 
                    nisl in, tristique justo. Pellentesque sem diam, aliquet vitae sollicitudin et, consectetur vel dui. Donec cursus turpis nec nulla faucibus, in feugiat erat sagittis. Ut 
                    luctus ultrices nisl non tempus. Proin eu risus lorem. Nunc condimentum tempus luctus.</p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum dolor a libero hendrerit tempor. Aenean suscipit vulputate tellus condimentum cursus. Phasellus 
                    sapien leo, pulvinar id ultricies eget, convallis ut lectus. Duis efficitur ornare turpis eu accumsan. Maecenas in mauris lobortis lacus posuere volutpat eget auctor ante. 
                    Maecenas sed fringilla metus, id convallis felis. Vestibulum faucibus odio sit amet ante pulvinar finibus. Nulla volutpat orci pellentesque, vulputate nisl in, tristique justo. 
                    Pellentesque sem diam, aliquet vitae sollicitudin et, consectetur vel dui. Donec cursus turpis nec nulla faucibus, in feugiat erat sagittis. Ut luctus ultrices nisl non tempus. 
                    Proin eu risus lorem. Nunc condimentum tempus luctus.Nam bibendum urna quis consequat varius. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                    Phasellus ut tellus condimentum, mattis quam at, consectetur nibh. Sed lobortis, nisl eu molestie tristique, diam nisi dignissim ex, ut cursus tortor nibh et est. Pellentesque porta 
                    orci eget urna tincidunt, a lobortis sapien mollis. Aliquam in ultrices nisl. Pellentesque in tellus porta, porttitor orci eu, dictum lectus. Sed tellus nisl, pellentesque vitae ipsum ut, 
                    venenatis eleifend diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non tempor mi. Pellentesque ultricies odio ornare urna hendrerit porta. Praesent a lobortis risus, 
                    et tristique tortor. Integer ut lorem facilisis, varius erat nec, egestas mi. Nulla sed hendrerit dolor, vitae condimentum sapien. Integer at risus id elit elementum fermentum. Ut feugiat 
                    eros odio, vel molestie lacus molestie ut.</p>
                </div>
            </div>
        </div>
        
        <div class="lg:col-span-1">
            @include('partials.sidebar_berita', ['beritas' => $beritas])
        </div>

    </div>
</div>
@endsection