<?php

namespace App\Filament\Resources\CookResource\Pages;

use App\Filament\Resources\CookResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCook extends EditRecord
{
    protected static string $resource = CookResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
