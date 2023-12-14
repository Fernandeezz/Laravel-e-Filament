<?php

namespace App\Filament\Resources\CursosResource\Pages;

use App\Filament\Resources\CursosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCursos extends EditRecord
{
    protected static string $resource = CursosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
