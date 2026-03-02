<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Foto;

class FotoController extends Controller
{
    public function index()
    {
        $fotos = Foto::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'List Galeri Foto',
            'data'    => $fotos
        ], 200);
    }
}