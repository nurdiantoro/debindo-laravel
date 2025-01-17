<?php

namespace App\Filament\Resources\EventImageResource\Pages;

use App\Filament\Resources\EventImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventImage extends EditRecord
{
    protected static string $resource = EventImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
