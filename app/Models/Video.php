<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    protected $fillable = ['title', 'video_path'];

   
    public function getVideoUrlAttribute(): string
    {
        return $this->video_path 
            ? asset('storage/' . $this->video_path) 
            : '';
    }
    
    protected $appends = ['video_url'];
    protected $hidden = ['video_path'];
}