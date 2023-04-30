<?php

namespace App\Filament\Resources\SideResource\Pages;

use App\Filament\Resources\SideResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSide extends EditRecord
{
    protected static string $resource = SideResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
