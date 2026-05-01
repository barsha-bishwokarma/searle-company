<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Products')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        Select::make('category_id')
                            ->relationship('category', 'name')
                            ->required(),
                        TextInput::make('name')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                fn($state, callable $set) =>
                                $set('slug', Str::slug($state))
                            ),
                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),
                        TextInput::make('generic')
                            ->default(null),
                        TextInput::make('ingredients')
                            ->default(null),
                        TextInput::make('form')
                            ->default(null),
                        TextInput::make('strength')
                            ->default(null),
                        Textarea::make('presentation')
                            ->default(null),
                        Textarea::make('indication')
                            ->default(null),
                        Textarea::make('uses')
                            ->default(null),
                        FileUpload::make('image')
                            ->image()
                            ->required(),
                        FileUpload::make('pdf')
                            ->label('SPC PDF')
                            ->acceptedFileTypes(['application/pdf'])
                            ->nullable(),
                        Textarea::make('meta_description')
                            ->default(null),
                        TextInput::make('meta_keywords')
                            ->default(null),
                    ])
            ]);
    }
}
