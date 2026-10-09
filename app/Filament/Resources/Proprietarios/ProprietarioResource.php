<?php

namespace App\Filament\Resources\Proprietarios;

use App\Filament\Resources\Proprietarios\Pages\CreateProprietario;
use App\Filament\Resources\Proprietarios\Pages\EditProprietario;
use App\Filament\Resources\Proprietarios\Pages\ListProprietarios;
use App\Filament\Resources\Proprietarios\Schemas\ProprietarioForm;
use App\Filament\Resources\Proprietarios\Tables\ProprietariosTable;
use App\Models\Proprietario;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProprietarioResource extends Resource
{
    protected static ?string $model = Proprietario::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ProprietarioForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProprietariosTable::configure($table);
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
            'index' => ListProprietarios::route('/'),
            'create' => CreateProprietario::route('/create'),
            'edit' => EditProprietario::route('/{record}/edit'),
        ];
    }
}
