<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\StatsWidget;
use App\Filament\Widgets\WelcomeWidget;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $title = 'Dashboard NU Sawojajar';
    public function getWidgets(): array
    {
        return [
            WelcomeWidget::class,
            StatsWidget::class,
        ];
    }
}