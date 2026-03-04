<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();

        $data = $videos->map(function ($video) {
            return [
                'id' => $video->id,
                'title' => $video->title,
                'video_url' => $video->video_url,
            ];
        });

        return response()->json([
            'success' => true,
            'message' => 'List Video',
            'data' => $data,
        ], 200);
    }

    public function show($id)
    {
        $video = Video::find($id);

        if (!$video) {
            return response()->json(['message' => 'Video tidak ditemukan'], 404);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'id' => $video->id,
                'title' => $video->title,
                'video_url' => $video->video_url,
            ]
        ], 200);
    }
}