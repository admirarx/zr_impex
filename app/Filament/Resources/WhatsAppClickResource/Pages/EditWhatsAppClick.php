<?php

namespace App\Filament\Resources\WhatsAppClickResource\Pages;

use App\Filament\Resources\WhatsAppClickResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWhatsAppClick extends EditRecord
{
    protected static string $resource = WhatsAppClickResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
