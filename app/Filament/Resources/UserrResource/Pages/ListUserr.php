<?php

namespace App\Filament\Resources\UserrResource\Pages;

use App\Filament\Resources\UserrResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserrs extends ListRecords
{
    protected static string $resource = userrResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
