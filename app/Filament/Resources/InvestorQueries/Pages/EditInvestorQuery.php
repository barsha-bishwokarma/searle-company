<?php

namespace App\Filament\Resources\InvestorQueries\Pages;

use App\Filament\Resources\InvestorQueries\InvestorQueryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInvestorQuery extends EditRecord
{
    protected static string $resource = InvestorQueryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
