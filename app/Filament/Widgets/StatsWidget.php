<?php

namespace App\Filament\Widgets;

use App\Models\Berita;
use App\Models\Foto;
use App\Models\Video;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Berita', Berita::count())
                ->description('Artikel telah dipublikasikan')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('success'),
            
            Stat::make('Galeri Foto', Foto::count())
                ->description('Foto tersimpan')
                ->descriptionIcon('heroicon-m-photo')
                ->color('warning'),
            
            Stat::make('Video Kegiatan', Video::count())
                ->description('Video terupload')
                ->descriptionIcon('heroicon-m-film')
                ->color('primary'),
        ];
    }
}