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
use UnitEnum;


class LaporanKeuanganResource extends Resource
{
    protected static ?string $model = LaporanKeuangan::class;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentChartBar;
    protected static ?string $recordTitleAttribute = 'title';
    protected static UnitEnum|string|null $navigationGroup = 'Transparansi';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Laporan Keuangan';

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