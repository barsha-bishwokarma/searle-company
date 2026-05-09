<?php

namespace App\Filament\Resources\Governances;

use App\Filament\Resources\Governances\Pages\CreateGovernance;
use App\Filament\Resources\Governances\Pages\EditGovernance;
use App\Filament\Resources\Governances\Pages\ListGovernances;
use App\Filament\Resources\Governances\Schemas\GovernanceForm;
use App\Filament\Resources\Governances\Tables\GovernancesTable;
use App\Models\Governance;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class GovernanceResource extends Resource
{
    protected static ?string $model = Governance::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-scale';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return GovernanceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GovernancesTable::configure($table);
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
            'index' => ListGovernances::route('/'),
            'create' => CreateGovernance::route('/create'),
            'edit' => EditGovernance::route('/{record}/edit'),
        ];
    }
}
