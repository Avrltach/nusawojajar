<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class WelcomeWidget extends Widget
{
    protected string $view = 'filament.widgets.welcome-widget';
    
    protected int|string|array $columnSpan = 'full';
    
    protected static ?int $sort = -1;

    protected function getViewData(): array
    {
        $hour = now()->hour;
        $greeting = 'Selamat Pagi';

        if ($hour >= 12 && $hour < 15) {
            $greeting = 'Selamat Siang';
        } elseif ($hour >= 15 && $hour < 18) {
            $greeting = 'Selamat Sore';
        } elseif ($hour >= 18) {
            $greeting = 'Selamat Malam';
        }

        return [
            'greeting' => $greeting,
        ];
    }
}