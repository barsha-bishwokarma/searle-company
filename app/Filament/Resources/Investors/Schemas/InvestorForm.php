<?php

namespace App\Filament\Resources\Investors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InvestorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('file')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('investors')
                    ->required(),
                TextInput::make('type')
                    ->required()
                    ->options([
                        'agm'                => 'Notice of AGM',
                        'eogm'               => 'Notice of EOGM',
                        'website_compliance' => 'Website Compliance Certificate',
                        'corporate_briefing' => 'Corporate Briefing Session',
                    ]),
                TextInput::make('language')
                    ->required()
                    ->options([
                        'en' => 'English',
                        'ur' => 'Urdu',
                    ]),
            ]);
    }
}
