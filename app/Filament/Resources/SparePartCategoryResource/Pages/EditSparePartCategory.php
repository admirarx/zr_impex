<?php

namespace App\Filament\Resources\SparePartCategoryResource\Pages;

use App\Filament\Resources\SparePartCategoryResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditSparePartCategory extends EditRecord
{
    protected static string $resource = SparePartCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')->label('Save changes')->action('save'),
            Actions\DeleteAction::make(),
        ];
    }
}
