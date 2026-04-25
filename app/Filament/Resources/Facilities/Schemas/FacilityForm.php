<?php

namespace App\Filament\Resources\Facilities\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FacilityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Facilities')
                    ->description('Here we enter the facility to show in frontend.')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('plant_name')
                            ->required(),
                        TextInput::make('location')
                            ->required(),
                        Textarea::make('description')
                            ->required(),

                        FileUpload::make('image')
                            ->image()
                            ->directory('facilities') // This forces the file into storage/app/public/facilities
                            ->disk('public')          // Explicitly set the public disk
                            ->required(),
                    ])

            ]);
    }
}
