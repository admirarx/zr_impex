<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use App\Models\ProductSpecification;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class SpecificationsRelationManager extends RelationManager
{
    protected static string $relationship = 'specifications';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('spec_group')
                    ->label('Specification Group')
                    ->placeholder('e.g. Dimensions, Electrical, Spindle, Laser')
                    ->default('General')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('spec_name')
                    ->label('Parameter / Key')
                    ->placeholder('e.g. Working Area, Laser Power, Spindle Speed')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('spec_value')
                    ->label('Specification Value')
                    ->placeholder('e.g. 1300 x 2500 mm, 3.5 kW, 24000 RPM')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('spec_name')
            ->columns([
                Tables\Columns\TextColumn::make('spec_group')
                    ->label('Group')
                    ->badge()
                    ->color('primary')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('spec_name')
                    ->label('Parameter')
                    ->weight('bold')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('spec_value')
                    ->label('Value')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                Tables\Filters\SelectFilter::make('spec_group')
                    ->options(fn () => ProductSpecification::distinct()->pluck('spec_group', 'spec_group')->toArray()),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
