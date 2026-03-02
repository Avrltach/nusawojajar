<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BanomController extends Controller
{
    private function getLatestNews()
    {
        return Berita::latest()->take(5)->get(); 
    }

    public function muslimat()
    {
        $beritas = $this->getLatestNews();
        return view('banom.muslimat', compact('beritas'));
    }

    public function fatayat()
    {
        $beritas = $this->getLatestNews();
        return view('banom.fatayat', compact('beritas'));
    }

    public function gpAnsor()
    {
        $beritas = $this->getLatestNews();
        return view('banom.gp-ansor', compact('beritas'));
    }
    public function ipnu()
    {
        $beritas = $this->getLatestNews();
        return view('banom.ipnu', compact('beritas'));
    }
    public function ippnu()
    {
        $beritas = $this->getLatestNews();
        return view('banom.ippnu', compact('beritas'));
    }
    public function pagarNusa()
    {
        $beritas = $this->getLatestNews();
        return view('banom.pagar-nusa', compact('beritas'));
    }
}