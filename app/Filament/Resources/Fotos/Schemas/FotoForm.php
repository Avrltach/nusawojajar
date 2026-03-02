<?php

namespace App\Filament\Resources\Fotos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FotoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->image()
                    ->disk('public')       
                    ->directory('galeri')  
                    ->visibility('public') 
                    ->required(),
                TextInput::make('caption')
                    ->default(null),
            ]);
    }
}