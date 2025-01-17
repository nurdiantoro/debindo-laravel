<?php

namespace App\Filament\Resources\NextEventResource\Pages;

use App\Filament\Resources\NextEventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNextEvents extends ListRecords
{
    protected static string $resource = NextEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
