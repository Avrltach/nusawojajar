<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                    
                FileUpload::make('video_path')
                    ->label('Upload Video')
                    ->disk('public')       
                    ->directory('videos') 
                    ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/mov', 'video/*'])
                    ->maxSize(51200) 
                    ->required()
                    ->previewable(true), 
            ]);
    }
}