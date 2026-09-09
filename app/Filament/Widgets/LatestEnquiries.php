<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\EnquiryResource;
use App\Models\Enquiry;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestEnquiries extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Recent Inquiries & Leads')
            ->query(
                Enquiry::query()->latest()->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date')
                    ->dateTime('d M Y, h:i A'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'new' => 'New Lead',
                        'contacted' => 'Contacted',
                        'in_discussion' => 'In Discussion',
                        'converted' => 'Converted',
                        'closed' => 'Closed',
                        default => $state,
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'warning',
                        'contacted' => 'info',
                        'in_discussion' => 'primary',
                        'converted' => 'success',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('name')
                    ->label('Client Name')
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone')
                    ->icon('heroicon-m-phone'),
                Tables\Columns\TextColumn::make('product.name')
                    ->label('Product / Subject')
                    ->badge()
                    ->color('gray'),
                Tables\Columns\TextColumn::make('city')
                    ->label('City'),
            ])
            ->actions([
                Tables\Actions\Action::make('open')
                    ->label('View Lead')
                    ->icon('heroicon-m-eye')
                    ->url(fn (Enquiry $record): string => EnquiryResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
