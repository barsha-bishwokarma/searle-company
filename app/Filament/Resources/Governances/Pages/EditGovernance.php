<?php

namespace App\Filament\Resources\Governances\Pages;

use App\Filament\Resources\Governances\GovernanceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGovernance extends EditRecord
{
    protected static string $resource = GovernanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
