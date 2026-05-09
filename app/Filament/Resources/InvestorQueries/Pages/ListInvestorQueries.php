<?php

namespace App\Filament\Resources\InvestorQueries\Pages;

use App\Filament\Resources\InvestorQueries\InvestorQueryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInvestorQueries extends ListRecords
{
    protected static string $resource = InvestorQueryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
