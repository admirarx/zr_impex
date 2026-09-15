<?php

namespace App\Filament\Resources\MachineResource\Pages;

use App\Filament\Resources\MachineResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateMachine extends CreateRecord
{
    protected static string $resource = MachineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('create')->label('Create')->action('create'),
        ];
    }
}
