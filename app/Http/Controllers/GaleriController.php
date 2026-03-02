<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    private function getLatestNews()
    {
        return Berita::latest()->take(5)->get(); 
    }

    public function foto()
    {
        $beritas = $this->getLatestNews();
        return view('galeri.foto', compact('beritas'));
    }

    public function video()
    {
        $beritas = $this->getLatestNews();
        return view('galeri.video', compact('beritas'));
    }
}