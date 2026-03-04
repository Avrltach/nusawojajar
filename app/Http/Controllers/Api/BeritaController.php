<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest('published_at')
                        ->paginate(6); 

        return response()->json([
            'success' => true,
            'message' => 'List Berita',
            'data'    => $beritas
        ], 200);
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->first();

        if (!$berita) {
            return response()->json([
                'success' => false,
                'message' => 'Berita tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Berita',
            'data'    => $berita
        ], 200);
    }
}