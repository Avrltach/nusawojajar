<?php

namespace App\Filament\Resources\LaporanKeuangans\Pages;

use App\Filament\Resources\LaporanKeuangans\LaporanKeuanganResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLaporanKeuangans extends ListRecords
{
    protected static string $resource = LaporanKeuanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
