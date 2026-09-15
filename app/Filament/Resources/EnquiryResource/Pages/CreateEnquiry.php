<?php

namespace App\Filament\Resources\EnquiryResource\Pages;

use App\Filament\Resources\EnquiryResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateEnquiry extends CreateRecord
{
    protected static string $resource = EnquiryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('create')->label('Create')->action('create'),
        ];
    }
}
