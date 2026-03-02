<?php

namespace App\Filament\Resources\LaporanKeuangans\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LaporanKeuanganForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Laporan')
                    ->required(),

                FileUpload::make('file')
                    ->label('Upload File (PDF / Excel)')
                    ->disk('public') 
                    ->directory('laporan-keuangan') 
                    ->acceptedFileTypes([
                        'application/pdf',          
                        'application/vnd.ms-excel', 
                        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 
                        'application/vnd.oasis.opendocument.spreadsheet', 
                        'text/csv'                  
                    ])
                    ->maxSize(51200) 
                    ->required(),

                Select::make('year')
                    ->label('Tahun')
                    ->options(array_combine(range(2020, date('Y') + 1), range(2020, date('Y') + 1)))
                    ->required()
                    ->default(date('Y')),
            ]);
    }
}