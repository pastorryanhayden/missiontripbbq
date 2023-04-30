<?php

namespace App\Filament\Resources\EntreeResource\Pages;

use App\Filament\Resources\EntreeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEntrees extends ListRecords
{
    protected static string $resource = EntreeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
