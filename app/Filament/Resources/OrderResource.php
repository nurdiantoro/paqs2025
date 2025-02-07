<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers\TicketsRelationManager;
use App\Models\Order;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;


class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $modelLabel = 'Registration';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Section::make('Personal Information')
                        ->schema([
                            TextInput::make('no_invoice')->readOnly(),

                            TextInput::make('title'),
                            TextInput::make('full_name'),
                            TextInput::make('company'),
                            TextInput::make('address'),
                            TextInput::make('telephone')
                                ->tel()
                                ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/'),
                            TextInput::make('email'),

                        ]),
                    Section::make('Payment')
                        ->schema([
                            FileUpload::make('proof_of_payment')
                                ->image()
                                ->disk('public')
                                ->imagePreviewHeight('500')
                                ->visibility('public')
                                ->imageEditor()
                                ->previewable(true),
                            Select::make('category_id')
                                ->label('Category')
                                ->relationship('category', 'name')
                                ->native(false),
                            // Select::make('addon_id')
                            //     ->label('Addon')
                            //     ->relationship('addon', 'name'),
                            TextInput::make('quantity')->numeric(),
                            TextInput::make('total_price')->numeric(),
                            Select::make('payment_status')
                                ->options([
                                    'paid' => 'paid',
                                    'unpaid' => 'unpaid',
                                    'cancelled' => 'cancelled',
                                ])
                                ->native(false),
                            Toggle::make('is_confirmed')->label('Confirmed'),
                        ]),
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('is_confirmed')
                    ->boolean(),
                TextColumn::make('payment_status')
                    ->sortable()
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'paid' => 'success',
                        'unpaid' => 'warning',
                        'cancelled' => 'danger',
                        'waiting confirmation' => 'danger',
                    }),
                TextColumn::make('no_invoice')->sortable()->searchable(),
                TextColumn::make('full_name')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('telephone')->sortable()->searchable(),
                TextColumn::make('quantity')->sortable(),
                TextColumn::make('total_price')->sortable(),
            ])
            ->filters([
                SelectFilter::make('payment_status')
                    ->options([
                        'paid' => 'paid',
                        'unpaid' => 'unpaid',
                        'cancelled' => 'cancelled',
                        'waiting confirmation' => 'waiting confirmation',
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('See Payment')
                    ->modalContent(function (Order $record): View {
                        return view('frontend.components.modal_image', compact('record'));
                    })
                    ->modalSubmitAction(false)
                    ->modalCancelActionLabel('Close'),
            ])
            ->bulkActions([
                ExportBulkAction::make(),
                // Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            TicketsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            // 'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
