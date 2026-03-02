<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'publisher',
        'category',
        'content',
        'published_at',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($berita) {
            $berita->slug = Str::slug($berita->title);
        });
    }

    protected $casts = [
        'published_at' => 'date',
    ];
     protected $appends = ['image_url']; 

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return asset('images/default-placeholder.png');
    }
}