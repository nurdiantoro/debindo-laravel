<?php

namespace App\Filament\Resources\NextEventResource\Pages;

use App\Filament\Resources\NextEventResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNextEvent extends EditRecord
{
    protected static string $resource = NextEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
