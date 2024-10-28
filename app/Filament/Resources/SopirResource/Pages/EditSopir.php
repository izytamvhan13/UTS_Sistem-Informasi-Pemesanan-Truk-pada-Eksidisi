<?php

namespace App\Filament\Resources\SopirResource\Pages;

use App\Filament\Resources\SopirResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSopir extends EditRecord
{
    protected static string $resource = SopirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
