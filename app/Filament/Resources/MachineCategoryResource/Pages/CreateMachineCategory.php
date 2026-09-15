<?php

namespace App\Filament\Resources\MachineCategoryResource\Pages;

use App\Filament\Resources\MachineCategoryResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateMachineCategory extends CreateRecord
{
    protected static string $resource = MachineCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('create')->label('Create')->action('create'),
        ];
    }
}
