<?php

namespace App\Filament\Resources\MachineCategoryResource\Pages;

use App\Filament\Resources\MachineCategoryResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditMachineCategory extends EditRecord
{
    protected static string $resource = MachineCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')->label('Save changes')->action('save'),
            Actions\DeleteAction::make(),
        ];
    }
}
