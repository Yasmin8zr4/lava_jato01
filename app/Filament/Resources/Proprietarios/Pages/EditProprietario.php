<?php

namespace App\Filament\Resources\Proprietarios\Pages;

use App\Filament\Resources\Proprietarios\ProprietarioResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProprietario extends EditRecord
{
    protected static string $resource = ProprietarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
