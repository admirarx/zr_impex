<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EnquiryResource\Pages;
use App\Models\Enquiry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class EnquiryResource extends Resource
{
    protected static ?string $model = Enquiry::class;

    protected static ?string $navigationGroup = 'Leads & Inquiries';

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?int $navigationSort = 1;

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where('status', 'new')->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Lead Information')
                    ->schema([
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\Select::make('status')
                                    ->label('Lead Status')
                                    ->options([
                                        'new' => 'New Lead',
                                        'contacted' => 'Contacted',
                                        'in_discussion' => 'In Discussion',
                                        'converted' => 'Converted (Won)',
                                        'closed' => 'Closed (Archived)',
                                    ])
                                    ->required()
                                    ->native(false),
                                Forms\Components\Select::make('product_id')
                                    ->label('Associated Product')
                                    ->relationship('product', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->disabled(),
                                Forms\Components\TextInput::make('source')
                                    ->label('Origin / Channel')
                                    ->disabled(),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(100),
                                Forms\Components\TextInput::make('company_name')
                                    ->maxLength(100),
                                Forms\Components\TextInput::make('phone')
                                    ->tel()
                                    ->required()
                                    ->maxLength(30),
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->maxLength(120),
                                Forms\Components\TextInput::make('city')
                                    ->maxLength(100),
                            ]),
                        Forms\Components\Textarea::make('message')
                            ->label('Client Inquiry Message')
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime('d M Y, h:i A')
                    ->sortable()
                    ->visibleFrom('md'),
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
                        'closed' => 'gray',
                        default => 'gray',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Contact')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable()
                    ->copyable()
                    ->icon('heroicon-m-phone'),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('product.name')
                    ->label('Product')
                    ->badge()
                    ->color('gray')
                    ->searchable()
                    ->visibleFrom('md'),
                Tables\Columns\TextColumn::make('company_name')
                    ->label('Company')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('city')
                    ->label('City')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'new' => 'New Lead',
                        'contacted' => 'Contacted',
                        'in_discussion' => 'In Discussion',
                        'converted' => 'Converted',
                        'closed' => 'Closed',
                    ]),
                Tables\Filters\SelectFilter::make('product_id')
                    ->label('Product')
                    ->relationship('product', 'name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('whatsapp')
                    ->label('WhatsApp')
                    ->icon('heroicon-o-chat-bubble-oval-left-ellipsis')
                    ->color('success')
                    ->url(function (Enquiry $record): string {
                        $clean = preg_replace('/[^0-9]/', '', (string) $record->phone);
                        if (! str_starts_with($clean, '91') && strlen($clean) === 10) {
                            $clean = '91'.$clean;
                        }
                        $productName = $record->product?->name ?? 'our machinery catalogue';
                        $text = urlencode("Hello {$record->name}, this is ZR Impex Machinery following up on your inquiry regarding {$productName}. How may we assist you?");

                        return "https://wa.me/{$clean}?text={$text}";
                    })
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEnquiries::route('/'),
            'create' => Pages\CreateEnquiry::route('/create'),
            'edit' => Pages\EditEnquiry::route('/{record}/edit'),
        ];
    }
}
