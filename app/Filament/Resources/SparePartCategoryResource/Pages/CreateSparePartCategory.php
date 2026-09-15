<?php

namespace App\Filament\Resources\SparePartCategoryResource\Pages;

use App\Filament\Resources\SparePartCategoryResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateSparePartCategory extends CreateRecord
{
    protected static string $resource = SparePartCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('create')->label('Create')->action('create'),
        ];
    }
}
