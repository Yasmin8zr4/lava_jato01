<?php

namespace App\Filament\Resources\Veiculos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VeiculoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('model')
                    ->required(),
                TextInput::make('plate')
                    ->required(),
                Select::make('proprietario_id')
                    ->relationship('proprietario', 'name')
                    ->required(),
            ]);
    }
}
