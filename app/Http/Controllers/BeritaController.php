<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    private function getLatestNews()
    {
        return Berita::latest()->take(5)->get(); 
    }

    public function berita()
    {
        $beritas = $this->getLatestNews();
        return view('berita.berita', compact('beritas'));
    }

    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $beritas = $this->getLatestNews(); 

        return view('berita.detail', compact('berita', 'beritas'));
    }
}