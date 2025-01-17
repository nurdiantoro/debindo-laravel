<?php

namespace App\Filament\Resources\EventCarouselResource\Pages;

use App\Filament\Resources\EventCarouselResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventCarousel extends EditRecord
{
    protected static string $resource = EventCarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
