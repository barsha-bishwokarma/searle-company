<?php

namespace App\Filament\Resources\ProfileCompanies;

use App\Filament\Resources\ProfileCompanies\Pages\CreateProfileCompany;
use App\Filament\Resources\ProfileCompanies\Pages\EditProfileCompany;
use App\Filament\Resources\ProfileCompanies\Pages\ListProfileCompanies;
use App\Filament\Resources\ProfileCompanies\Schemas\ProfileCompanyForm;
use App\Filament\Resources\ProfileCompanies\Tables\ProfileCompaniesTable;
use App\Models\ProfileCompany;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProfileCompanyResource extends Resource
{
    protected static ?string $model = ProfileCompany::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ProfileCompanyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfileCompaniesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProfileCompanies::route('/'),
            'create' => CreateProfileCompany::route('/create'),
            'edit' => EditProfileCompany::route('/{record}/edit'),
        ];
    }
}
