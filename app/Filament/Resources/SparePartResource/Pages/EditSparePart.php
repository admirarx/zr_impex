<?php

namespace App\Filament\Resources\SparePartResource\Pages;

use App\Filament\Resources\SparePartResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditSparePart extends EditRecord
{
    protected static string $resource = SparePartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')->label('Save changes')->action('save'),
            Actions\DeleteAction::make(),
        ];
    }
}
