<?php

namespace App\Filament\Resources\Proprietarios\Pages;

use App\Filament\Resources\Proprietarios\ProprietarioResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProprietarios extends ListRecords
{
    protected static string $resource = ProprietarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
