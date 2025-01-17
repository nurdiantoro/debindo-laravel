<?php

namespace App\Filament\Resources\EventImageResource\Pages;

use App\Filament\Resources\EventImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventImages extends ListRecords
{
    protected static string $resource = EventImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
