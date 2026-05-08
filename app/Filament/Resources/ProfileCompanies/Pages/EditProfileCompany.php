<?php

namespace App\Filament\Resources\ProfileCompanies\Pages;

use App\Filament\Resources\ProfileCompanies\ProfileCompanyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProfileCompany extends EditRecord
{
    protected static string $resource = ProfileCompanyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
