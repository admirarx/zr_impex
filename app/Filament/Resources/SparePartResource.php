<?php

namespace App\Filament\Resources;

use App\Filament\RelationManagers;
use App\Filament\Resources\SparePartResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class SparePartResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $slug = 'spare-parts';

    protected static ?string $navigationGroup = 'Products';

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static ?string $modelLabel = 'Spare Part';

    protected static ?int $navigationSort = 2;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->spareParts();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('type')->default('spare_part'),
                Forms\Components\Tabs::make('Spare Part Information')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('General')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\Select::make('category_id')
                                            ->label('Catalogue Category')
                                            ->relationship('category', 'name', modifyQueryUsing: function (Builder $query) {
                                                return $query->spareParts()->where('is_active', true);
                                            })
                                            ->searchable()
                                            ->preload()
                                            ->required(),
                                        Forms\Components\TextInput::make('model_number')
                                            ->label('Model / Part Number')
                                            ->placeholder('e.g. SP-3KW-AIR')
                                            ->maxLength(100),
                                    ]),
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('name')
                                            ->label('Product Name')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function (string $operation, ?string $state, Forms\Set $set) {
                                                if ($operation === 'create') {
                                                    $set('slug', Str::slug($state));
                                                }
                                            }),
                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique(Product::class, 'slug', ignoreRecord: true),
                                    ]),
                                Forms\Components\Grid::make(3)
                                    ->schema([
                                        Forms\Components\TextInput::make('sort_order')
                                            ->numeric()
                                            ->default(0),
                                        Forms\Components\Toggle::make('is_featured')
                                            ->label('Featured on Homepage')
                                            ->default(false),
                                        Forms\Components\Toggle::make('is_published')
                                            ->label('Published (Visible to Public)')
                                            ->default(true),
                                    ]),
                            ]),
                        Forms\Components\Tabs\Tab::make('Descriptions')
                            ->icon('heroicon-o-document-text')
                            ->schema([
                                Forms\Components\Textarea::make('short_description')
                                    ->label('Short Summary (Card Synopsis)')
                                    ->rows(3)
                                    ->placeholder('Short engineering summary for catalogue cards and preview boxes')
                                    ->columnSpanFull(),
                                Forms\Components\RichEditor::make('description')
                                    ->label('Spare Part Overview & Technical Description')
                                    ->toolbarButtons([
                                        'bold', 'bulletList', 'heading', 'italic', 'link', 'orderedList', 'redo', 'strike', 'undo',
                                    ])
                                    ->columnSpanFull(),
                            ]),
                        Forms\Components\Tabs\Tab::make('Key Features')
                            ->icon('heroicon-o-star')
                            ->schema([
                                Forms\Components\Repeater::make('key_features')
                                    ->label('Key Features & Engineering Highlights (Bulleted Specs)')
                                    ->simple(
                                        Forms\Components\TextInput::make('feature')
                                            ->placeholder('e.g. High precision bearing, low noise')
                                            ->required()
                                    )
                                    ->addActionLabel('+ Add Feature Bullet Point')
                                    ->reorderable()
                                    ->collapsible()
                                    ->defaultItems(1)
                                    ->columnSpanFull(),
                            ]),
                        Forms\Components\Tabs\Tab::make('Applications & Benefits')
                            ->icon('heroicon-o-briefcase')
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\Repeater::make('applications')
                                            ->label('Target Applications & Use Cases')
                                            ->schema([
                                                Forms\Components\TextInput::make('title')
                                                    ->label('Application Sector')
                                                    ->required(),
                                                Forms\Components\TextInput::make('description')
                                                    ->label('Details / Materials')
                                                    ->required(),
                                            ])
                                            ->columns(1)
                                            ->addActionLabel('+ Add Application')
                                            ->reorderable()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null),
                                        Forms\Components\Repeater::make('benefits')
                                            ->label('Engineering & Production Benefits')
                                            ->schema([
                                                Forms\Components\TextInput::make('title')
                                                    ->label('Benefit')
                                                    ->required(),
                                                Forms\Components\TextInput::make('description')
                                                    ->label('Advantage Explanation')
                                                    ->required(),
                                            ])
                                            ->columns(1)
                                            ->addActionLabel('+ Add Benefit')
                                            ->reorderable()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null),
                                    ]),
                            ]),
                        Forms\Components\Tabs\Tab::make('Technical Specifications')
                            ->icon('heroicon-o-table-cells')
                            ->schema([
                                Forms\Components\Repeater::make('specifications')
                                    ->relationship('specifications')
                                    ->schema([
                                        Forms\Components\TextInput::make('spec_name')
                                            ->label('Specification Name')
                                            ->required(),
                                        Forms\Components\TextInput::make('spec_value')
                                            ->label('Specification Value')
                                            ->required(),
                                    ])
                                    ->columns(2)
                                    ->addActionLabel('+ Add Specification')
                                    ->reorderable('sort_order')
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => isset($state['spec_name']) ? "{$state['spec_name']} = {$state['spec_value']}" : null)
                                    ->columnSpanFull(),
                            ]),
                        Forms\Components\Tabs\Tab::make('Media & Documents')
                            ->icon('heroicon-o-photo')
                            ->schema([
                                Forms\Components\FileUpload::make('primary_image')
                                    ->label('Primary Cover Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('products')
                                    ->imageEditor()
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('brochure_path')
                                    ->label('Technical PDF Specification Sheet / Brochure')
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->disk('public')
                                    ->directory('brochures')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('certificate_path')
                                    ->label('CE Conformity & Quality Audit Certificate PDF')
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->disk('public')
                                    ->directory('certificates')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('manual_path')
                                    ->label('Operation, Safety & Programming Manual PDF')
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->disk('public')
                                    ->directory('manuals')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('primary_image')
                    ->label('Thumbnail')
                    ->square(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(50)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        return $state;
                    }),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->badge()
                    ->color('gray')
                    ->visibleFrom('md'),
                Tables\Columns\TextColumn::make('model_number')
                    ->label('Model')
                    ->searchable()
                    ->visibleFrom('md'),
                Tables\Columns\ToggleColumn::make('is_featured')
                    ->label('Featured')
                    ->visibleFrom('lg'),
                Tables\Columns\ToggleColumn::make('is_published')
                    ->label('Published')
                    ->visibleFrom('sm'),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->relationship('category', 'name', modifyQueryUsing: fn (Builder $query) => $query->spareParts()),
                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Featured Status'),
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Published Status'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('view_public')
                    ->label('View Public')
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->color('gray')
                    ->url(fn (Product $record) => route('spare-parts.show', $record->slug))
                    ->openUrlInNewTab(),
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
            RelationManagers\SpecificationsRelationManager::class,
            RelationManagers\ImagesRelationManager::class,
            RelationManagers\SampleDesignsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSpareParts::route('/'),
            'create' => Pages\CreateSparePart::route('/create'),
            'edit' => Pages\EditSparePart::route('/{record}/edit'),
        ];
    }
}
