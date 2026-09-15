<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingResource\Pages;
use App\Models\SiteSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    protected static ?string $navigationGroup = 'Settings & Analytics';

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('System Configuration')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('key')
                                    ->label('Configuration Key')
                                    ->required()
                                    ->disabled(fn (?SiteSetting $record) => $record !== null),
                                Forms\Components\Select::make('group')
                                    ->label('Configuration Group')
                                    ->options([
                                        'contact' => 'Contact & Communication',
                                        'business' => 'Business Details',
                                        'social' => 'Social Links',
                                        'integrations' => 'Integrations (Maps, Analytics)',
                                        'seo' => 'SEO & Analytics',
                                    ])
                                    ->default('contact')
                                    ->required()
                                    ->native(false),
                            ]),
                        Forms\Components\Textarea::make('value')
                            ->label('Setting Value (Phone number, embed code, address text)')
                            ->rows(4)
                            ->columnSpanFull()
                            ->helperText(fn (?SiteSetting $record) => $record?->key === 'google_maps_embed'
                                ? 'You can paste either the complete Google Maps <iframe> code or just the embed URL.'
                                : null),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->label('Setting Key')
                    ->weight('bold')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('group')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'contact' => 'primary',
                        'business' => 'info',
                        'social' => 'success',
                        'integrations' => 'warning',
                        'seo' => 'warning',
                        default => 'gray',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('value')
                    ->label('Current Value')
                    ->limit(60)
                    ->searchable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('d M Y, h:i A')
                    ->sortable(),
            ])
            ->defaultSort('group', 'asc')
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->options([
                        'contact' => 'Contact & Communication',
                        'business' => 'Business Details',
                        'social' => 'Social Links',
                        'integrations' => 'Integrations (Maps, Analytics)',
                        'seo' => 'SEO & Analytics',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //
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
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSetting::route('/create'),
            'edit' => Pages\EditSiteSetting::route('/{record}/edit'),
        ];
    }
}
