<?php

namespace App\Filament\Resources\Proprietarios\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProprietarioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('cpf')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
            ]);
    }
}
