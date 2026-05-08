<?php

namespace App\Filament\Resources\Governances\Pages;

use App\Filament\Resources\Governances\GovernanceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGovernances extends ListRecords
{
    protected static string $resource = GovernanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
