<?php

namespace App\Filament\Resources\SparePartResource\Pages;

use App\Filament\Resources\SparePartResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateSparePart extends CreateRecord
{
    protected static string $resource = SparePartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('create')->label('Create')->action('create'),
        ];
    }
}
