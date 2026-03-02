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

    
}