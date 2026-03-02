<?php

namespace App\Filament\Resources\LaporanKeuangans;

use App\Filament\Resources\LaporanKeuangans\Pages\CreateLaporanKeuangan;
use App\Filament\Resources\LaporanKeuangans\Pages\EditLaporanKeuangan;
use App\Filament\Resources\LaporanKeuangans\Pages\ListLaporanKeuangans;
use App\Filament\Resources\LaporanKeuangans\Schemas\LaporanKeuanganForm;
use App\Filament\Resources\LaporanKeuangans\Tables\LaporanKeuangansTable;
use App\Models\LaporanKeuangan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LaporanKeuanganResource extends Resource
{
    protected static ?string $model = LaporanKeuangan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return LaporanKeuanganForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LaporanKeuangansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLaporanKeuangans::route('/'),
            'create' => CreateLaporanKeuangan::route('/create'),
            'edit' => EditLaporanKeuangan::route('/{record}/edit'),
        ];
    }
}
