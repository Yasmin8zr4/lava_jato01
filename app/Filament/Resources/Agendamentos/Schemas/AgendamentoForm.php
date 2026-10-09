<?php

namespace App\Filament\Resources\Agendamentos\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class AgendamentoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->required(),
                TimePicker::make('time')
                    ->required(),
                Select::make('veiculo_id')
                    ->relationship('veiculo', 'plate')
                    ->required(),
            ]);
    }
}
