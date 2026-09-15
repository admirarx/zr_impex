<?php

namespace App\Filament\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    protected static ?string $title = 'Machine Photos & Gallery';

    protected static ?string $modelLabel = 'Machine Photo';

    protected static ?string $pluralModelLabel = 'Machine Photos & Gallery';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image_path')
                    ->label('Gallery Image')
                    ->image()
                    ->disk('public')
                    ->directory('product_gallery')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('caption')
                    ->label('Caption / Description')
                    ->placeholder('e.g. Heavy Steel Gantry Detail')
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_primary')
                    ->label('Set as Primary Image')
                    ->default(false),
                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->where('is_sample', false))
            ->recordTitleAttribute('caption')
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Image')
                    ->square(),
                Tables\Columns\TextColumn::make('caption')
                    ->label('Caption')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_primary')
                    ->label('Primary')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        $data['is_sample'] = false;

                        return $data;
                    }),
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
