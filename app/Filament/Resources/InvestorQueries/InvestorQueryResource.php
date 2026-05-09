<?php

namespace App\Filament\Resources\InvestorQueries;

use App\Filament\Resources\InvestorQueries\Pages\CreateInvestorQuery;
use App\Filament\Resources\InvestorQueries\Pages\EditInvestorQuery;
use App\Filament\Resources\InvestorQueries\Pages\ListInvestorQueries;
use App\Filament\Resources\InvestorQueries\Schemas\InvestorQueryForm;
use App\Filament\Resources\InvestorQueries\Tables\InvestorQueriesTable;
use App\Models\InvestorQuery;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class InvestorQueryResource extends Resource
{
    protected static ?string $model = InvestorQuery::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return InvestorQueryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InvestorQueriesTable::configure($table);
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
            'index' => ListInvestorQueries::route('/'),
            'create' => CreateInvestorQuery::route('/create'),
            'edit' => EditInvestorQuery::route('/{record}/edit'),
        ];
    }
}
