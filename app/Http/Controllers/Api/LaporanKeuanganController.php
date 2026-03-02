<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LaporanKeuangan;
use Illuminate\Http\Request;

class LaporanKeuanganController extends Controller
{
    public function index(Request $request)
    {
       
        $years = LaporanKeuangan::select('year')
                    ->distinct()
                    ->orderBy('year', 'desc')
                    ->pluck('year');

        $query = LaporanKeuangan::orderBy('created_at', 'desc');

        if ($request->has('year') && $request->year != 'all') {
            $query->where('year', $request->year);
        }

        $laporan = $query->get();

        return response()->json([
            'success' => true,
            'message' => 'List Laporan Keuangan',
            'years'   => $years, 
            'data'    => $laporan,
        ], 200);
    }
}