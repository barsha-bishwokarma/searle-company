<?php

namespace App\Filament\Resources\InvestorQueries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class InvestorQueryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('organization')
                    ->default(null),
                TextInput::make('postal_address')
                    ->default(null),
                TextInput::make('city')
                    ->required(),
                TextInput::make('postal_zip')
                    ->default(null),
                TextInput::make('country')
                    ->default(null),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('telephone')
                    ->tel()
                    ->required(),
                TextInput::make('fax')
                    ->default(null),
                TextInput::make('url')
                    ->url()
                    ->default(null),
                TextInput::make('interest')
                    ->default(null),
                Textarea::make('message')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
