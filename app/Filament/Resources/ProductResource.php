<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationGroup = 'Catalogue Management';

    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Product Information')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('General')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                Forms\Components\Grid::make(3)
                                    ->schema([
                                        Forms\Components\Select::make('type')
                                            ->label('Product Type')
                                            ->options([
                                                'machine' => 'CNC Machine',
                                                'spare_part' => 'Spare Part / Accessory',
                                            ])
                                            ->default('machine')
                                            ->required()
                                            ->native(false)
                                            ->live(),
                                        Forms\Components\Select::make('category_id')
                                            ->label('Catalogue Category')
                                            ->relationship('category', 'name', modifyQueryUsing: function (Builder $query, Forms\Get $get) {
                                                if ($type = $get('type')) {
                                                    $query->where('type', $type);
                                                }

                                                return $query->where('is_active', true);
                                            })
                                            ->searchable()
                                            ->preload()
                                            ->required(),
                                        Forms\Components\TextInput::make('model_number')
                                            ->label('Model / Part Number')
                                            ->placeholder('e.g. ZR-1325-PRO')
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
                                    ->label('Machine Overview & Technical Description')
                                    ->toolbarButtons([
                                        'bold',
                                        'bulletList',
                                        'heading',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'undo',
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
                                            ->placeholder('e.g. High-Speed Galvo: Up to 7000mm/s, 0.001mm resolution')
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
                                                    ->placeholder('e.g. Industrial Marking, Jewelry Engraving')
                                                    ->required(),
                                                Forms\Components\TextInput::make('description')
                                                    ->label('Details / Materials')
                                                    ->placeholder('e.g. Serial numbers, barcodes on automotive parts')
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
                                                    ->placeholder('e.g. High Precision, Cost-Effective')
                                                    ->required(),
                                                Forms\Components\TextInput::make('description')
                                                    ->label('Advantage Explanation')
                                                    ->placeholder('e.g. Crisp, detailed marks for professional results')
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
                                        Forms\Components\TextInput::make('spec_group')
                                            ->label('Group')
                                            ->placeholder('e.g. Laser Source, Galvo, Dimensions')
                                            ->default('General')
                                            ->required(),
                                        Forms\Components\TextInput::make('spec_name')
                                            ->label('Parameter / Metric')
                                            ->placeholder('e.g. Wavelength, Marking Area, Speed')
                                            ->required(),
                                        Forms\Components\TextInput::make('spec_value')
                                            ->label('Specification Value')
                                            ->placeholder('e.g. 1064nm, 200 x 200 mm, 7000 mm/s')
                                            ->required(),
                                        Forms\Components\TextInput::make('sort_order')
                                            ->label('Order')
                                            ->numeric()
                                            ->default(0),
                                    ])
                                    ->columns(4)
                                    ->addActionLabel('+ Add Specification Metric')
                                    ->reorderable('sort_order')
                                    ->collapsible()
                                    ->itemLabel(fn (array $state): ?string => isset($state['spec_name']) ? "{$state['spec_group']}: {$state['spec_name']} = {$state['spec_value']}" : null)
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
                                    ->visible(fn (Forms\Get $get) => $get('type') === 'machine')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('certificate_path')
                                    ->label('CE Conformity & Quality Audit Certificate PDF')
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->disk('public')
                                    ->directory('certificates')
                                    ->visible(fn (Forms\Get $get) => $get('type') === 'machine')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('manual_path')
                                    ->label('Operation, Safety & Programming Manual PDF')
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->disk('public')
                                    ->directory('manuals')
                                    ->visible(fn (Forms\Get $get) => $get('type') === 'machine')
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
                    ->wrap(),
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'machine' => 'CNC Machine',
                        'spare_part' => 'Spare Part',
                        default => $state,
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'machine' => 'primary',
                        'spare_part' => 'info',
                        default => 'gray',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->badge()
                    ->color('gray'),
                Tables\Columns\TextColumn::make('model_number')
                    ->label('Model')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_featured')
                    ->label('Featured'),
                Tables\Columns\ToggleColumn::make('is_published')
                    ->label('Published'),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'machine' => 'CNC Machines',
                        'spare_part' => 'Spare Parts',
                    ]),
                Tables\Filters\SelectFilter::make('category_id')
                    ->relationship('category', 'name'),
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
                    ->url(fn (Product $record) => $record->type === 'machine' ? route('machines.show', $record->slug) : route('spare-parts.show', $record->slug))
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
