<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    private function getLatestNews()
    {
        return Berita::latest()->take(5)->get(); 
    }

    public function kegiatan()
    {
        $beritas = $this->getLatestNews();
        return view('kegiatan.kegiatan', compact('beritas'));
    }

    
}