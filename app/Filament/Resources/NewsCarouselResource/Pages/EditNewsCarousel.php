<?php

namespace App\Filament\Resources\NewsCarouselResource\Pages;

use App\Filament\Resources\NewsCarouselResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsCarousel extends EditRecord
{
    protected static string $resource = NewsCarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
