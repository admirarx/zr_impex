<?php

namespace App\Filament\Resources\WhatsAppClickResource\Pages;

use App\Filament\Resources\WhatsAppClickResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhatsAppClicks extends ListRecords
{
    protected static string $resource = WhatsAppClickResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
