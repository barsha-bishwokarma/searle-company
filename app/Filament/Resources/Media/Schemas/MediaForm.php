<?php

namespace App\Filament\Resources\Media\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class MediaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Media')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        FileUpload::make('pdf')
                            ->acceptedFileTypes(['application/pdf'])
                            ->disk('public')
                            ->nullable(),
                        RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),

                    ])

            ]);
    }
}
