<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->required(),
                FileUpload::make('value')
                    ->image()
                    ->visible(fn($get) => $get('type') === 'image'),
                TextInput::make('value')
                    ->visible(fn($get) => $get('type') !== 'image'),
                Select::make('type')
                    ->options([
                        'text'  => 'Text',
                        'image' => 'Image',
                        'link'  => 'Link',
                    ])
                    ->default('text')
                    ->live()
                    ->required(),
            ]);
    }
}
