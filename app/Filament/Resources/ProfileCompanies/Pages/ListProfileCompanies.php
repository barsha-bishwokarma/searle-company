<?php

namespace App\Filament\Resources\ProfileCompanies\Pages;

use App\Filament\Resources\ProfileCompanies\ProfileCompanyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProfileCompanies extends ListRecords
{
    protected static string $resource = ProfileCompanyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
