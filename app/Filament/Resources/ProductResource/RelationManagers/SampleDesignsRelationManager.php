<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class SampleDesignsRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    protected static ?string $title = 'Sample Designs & Workpieces';

    protected static ?string $modelLabel = 'Sample Design';

    protected static ?string $pluralModelLabel = 'Sample Designs & Workpieces';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image_path')
                    ->label('Sample Design / Workpiece Photo')
                    ->image()
                    ->disk('public')
                    ->directory('product_samples')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('caption')
                    ->label('Workpiece / Design Title')
                    ->placeholder('e.g. Deep 3D Brass Seal Engraving')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('material')
                    ->label('Substrate / Material Specifications')
                    ->placeholder('e.g. Brass C36000 • 1.2mm depth')
                    ->maxLength(255),
                Forms\Components\TextInput::make('sort_order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0),
                Forms\Components\Hidden::make('is_sample')
                    ->default(true),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->where('is_sample', true))
            ->recordTitleAttribute('caption')
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Workpiece Photo')
                    ->square(),
                Tables\Columns\TextColumn::make('caption')
                    ->label('Design Title')
                    ->weight('bold')
                    ->searchable(),
                Tables\Columns\TextColumn::make('material')
                    ->label('Material / Substrate')
                    ->badge()
                    ->color('primary')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        $data['is_sample'] = true;

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
