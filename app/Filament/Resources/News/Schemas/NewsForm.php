<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Investor Document')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                fn($state, callable $set) =>
                                $set('slug', Str::slug($state))
                            ),
                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),
                        RichEditor::make('content')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->image()
                            ->required(),
                        Textarea::make('meta_description')
                            ->default(null),
                        DateTimePicker::make('published_at'),
                        TextInput::make('meta_keywords')
                            ->default(null),
                    ])
            ]);
    }
}
