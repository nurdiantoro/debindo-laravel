<?php

namespace App\Filament\Resources\EventCarouselResource\Pages;

use App\Filament\Resources\EventCarouselResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventCarousels extends ListRecords
{
    protected static string $resource = EventCarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
