<?php

namespace App\Filament\Resources\Investors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InvestorForm
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
                            ->required(),
                        Select::make('type')
                            ->required()
                            ->options([
                                'agm'                  => 'Notice of AGM',
                                'eogm'                 => 'Notice of EOGM',
                                'website_compliance'   => 'Website Compliance Certificate',
                                'corporate_briefing'   => 'Corporate Briefing Session',
                                'financial_report'     => 'Financial Report',
                                'financial_highlights' => 'Financial Highlights',
                                'ratio_analysis'       => 'Ratio Analysis',
                                'unclaimed_dividend'   => 'Unclaimed Dividend',
                                'shareholder_form'     => 'Shareholder Information Form',
                                'shareholding_pattern' => 'Pattern of Shareholding',
                            ]),
                        Select::make('language')
                            ->required()
                            ->options([
                                'en' => 'English',
                                'ur' => 'Urdu',
                            ]),
                        FileUpload::make('file')
                            ->label('PDF File')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('investors')
                            ->required(),
                    ]),
            ]);
    }
}
