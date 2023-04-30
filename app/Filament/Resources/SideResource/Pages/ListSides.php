<?php

namespace App\Filament\Resources\SideResource\Pages;

use App\Filament\Resources\SideResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSides extends ListRecords
{
    protected static string $resource = SideResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
