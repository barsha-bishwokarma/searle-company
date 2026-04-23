<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('partner_name')
                    ->required(),
                TextInput::make('type')
                    ->required(),
            ]);
    }
}
