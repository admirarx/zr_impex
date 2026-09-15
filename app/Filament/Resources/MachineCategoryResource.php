<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MachineCategoryResource\Pages;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class MachineCategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $slug = 'machine-categories';

    protected static ?string $navigationGroup = 'Categories';

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    protected static ?string $modelLabel = 'CNC Machine Category';

    protected static ?string $pluralModelLabel = 'CNC Machine Categories';

    protected static ?int $navigationSort = 1;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->machines();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('type')->default('machine'),
                Forms\Components\Section::make('Category Details')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(100)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (string $operation, ?string $state, Forms\Set $set) {
                                        if ($operation === 'create') {
                                            $set('slug', Str::slug($state));
                                        }
                                    }),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(120)
                                    ->unique(Category::class, 'slug', ignoreRecord: true),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('sort_order')
                                    ->numeric()
                                    ->default(0),
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Active Status')
                                    ->default(true)
                                    ->inline(false),
                            ]),
                        Forms\Components\Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('image_path')
                            ->label('Cover Image')
                            ->image()
                            ->disk('public')
                            ->directory('categories')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Thumbnail')
                    ->square()
                    ->defaultImageUrl('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJjdXJyZW50Q29sb3IiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPjxwYXRoIGQ9Ik0yMSAxNUYxNiAxMC41IDEyIDE0bS0zLTNMMiAxNSIvPjxwYXRoIGQ9Ik0yMSAxNXY0YTIgMiAwIDAgMS0yIDJIMUMzIDIxIDIgMjAgMiAxOHYtNG0xOS0zVjZhMiAyIDAgMCAwLTItMkgzYTIgMiAwIDAgMC0yIDJ2NG0xOS0zSDE5bS00IDBIMSIvPjwvc3ZnPg=='),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(50),
                Tables\Columns\TextColumn::make('products_count')
                    ->counts('products')
                    ->label('Products')
                    ->badge()
                    ->color('gray')
                    ->visibleFrom('md'),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Active')
                    ->visibleFrom('sm'),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMachineCategories::route('/'),
            'create' => Pages\CreateMachineCategory::route('/create'),
            'edit' => Pages\EditMachineCategory::route('/{record}/edit'),
        ];
    }
}
