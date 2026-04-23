<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Categories')
                    ->description('Here we enter the Categories to show in frontend.')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
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
                        Textarea::make('meta_description')
                            ->default(null),      
                        TextInput::make('meta_keywords')
                            ->default(null),
                    ])

            ]);
    }
}
