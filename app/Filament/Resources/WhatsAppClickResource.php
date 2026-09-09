<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhatsAppClickResource\Pages;
use App\Models\WhatsAppClick;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WhatsAppClickResource extends Resource
{
    protected static ?string $model = WhatsAppClick::class;

    protected static ?string $navigationGroup = 'Leads & Inquiries';

    protected static ?string $navigationIcon = 'heroicon-o-cursor-arrow-rays';

    protected static ?int $navigationSort = 2;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_id')
                    ->label('Target Product')
                    ->relationship('product', 'name')
                    ->disabled(),
                Forms\Components\TextInput::make('source_page')
                    ->label('Source URL')
                    ->disabled(),
                Forms\Components\TextInput::make('device_type')
                    ->disabled(),
                Forms\Components\DateTimePicker::make('clicked_at')
                    ->disabled(),
                Forms\Components\TextInput::make('ip_hash')
                    ->label('Hashed IP')
                    ->disabled(),
                Forms\Components\Textarea::make('user_agent')
                    ->label('User Agent String')
                    ->disabled()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('clicked_at')
                    ->label('Timestamp')
                    ->dateTime('d M Y, h:i:s A')
                    ->sortable(),
                Tables\Columns\TextColumn::make('product.name')
                    ->label('Clicked Product')
                    ->badge()
                    ->color('primary')
                    ->placeholder('General WhatsApp CTA')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('device_type')
                    ->label('Device')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'mobile' => 'success',
                        'desktop' => 'info',
                        'tablet' => 'warning',
                        default => 'gray',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('source_page')
                    ->label('Source Page')
                    ->searchable()
                    ->limit(40),
                Tables\Columns\TextColumn::make('ip_hash')
                    ->label('IP Fingerprint')
                    ->copyable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('clicked_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('device_type')
                    ->options([
                        'mobile' => 'Mobile',
                        'desktop' => 'Desktop',
                        'tablet' => 'Tablet',
                    ]),
                Tables\Filters\SelectFilter::make('product_id')
                    ->label('Product')
                    ->relationship('product', 'name'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWhatsAppClicks::route('/'),
            'create' => Pages\CreateWhatsAppClick::route('/create'),
            'edit' => Pages\EditWhatsAppClick::route('/{record}/edit'),
        ];
    }
}
