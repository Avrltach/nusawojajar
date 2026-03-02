<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class LaporanKeuangan extends Model
{
    protected $fillable = ['title', 'file', 'year'];

    protected $appends = ['file_url', 'file_name'];

    // Mengambil URL lengkap (http://localhost/storage/laporan-keuangan/file.pdf)
    public function getFileUrlAttribute()
    {
        return $this->file ? asset('storage/' . $this->file) : null;
    }

    // Mengambil nama file saja (optional, berguna untuk download)
    public function getFileNameAttribute()
    {
        return $this->file ? basename($this->file) : null;
    }
}