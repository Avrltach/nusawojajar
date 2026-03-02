<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true) 
                    ->afterStateUpdated(fn (callable $set, ?string $state) => $set('slug', \Str::slug($state))),
                    
                TextInput::make('slug')
                    ->required()
                    ->disabled() 
                    ->dehydrated(), 
                    
                FileUpload::make('image')
                    ->image()
                    ->disk('public')      
                    ->directory('berita') 
                    ->visibility('public'), 
                    
                TextInput::make('publisher')
                    ->required(),
                Select::make('category')
                    ->options(['fatayat' => 'Fatayat', 'berita_umum' => 'Berita umum'])
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('published_at')
                    ->required(),
            ]);
    }
}