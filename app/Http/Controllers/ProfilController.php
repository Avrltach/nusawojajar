<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    private function getLatestNews()
    {
        return Berita::latest()->take(5)->get(); 
    }

    public function strukturOrganisasi()
    {
        $beritas = $this->getLatestNews();
        return view('profil.struktur-organisasi', compact('beritas'));
    }

    public function visiMisi()
    {
        $beritas = $this->getLatestNews();
        return view('profil.visi-misi', compact('beritas'));
    }

    public function laporanKeuangan()
    {
        $beritas = $this->getLatestNews();
        return view('profil.laporan-keuangan', compact('beritas'));
    }
}