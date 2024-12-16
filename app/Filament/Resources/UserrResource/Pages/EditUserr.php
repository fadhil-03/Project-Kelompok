<?php

namespace App\Filament\Resources\UserrResource\Pages;

use App\Filament\Resources\UserrResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserr extends EditRecord
{
    protected static string $resource = UserrResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
