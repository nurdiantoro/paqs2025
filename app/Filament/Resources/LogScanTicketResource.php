<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LogScanTicketResource\Pages;
use App\Filament\Resources\LogScanTicketResource\RelationManagers;
use App\Models\LogScanTicket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class LogScanTicketResource extends Resource
{
    protected static ?string $model = LogScanTicket::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-4';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('ticket_id')
                    ->relationship('ticket', 'name')
                    ->required(),
                Forms\Components\TextInput::make('gate')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                // ExportAction::make(),
                ExportAction::make()->exports([
                    ExcelExport::make()
                        ->fromTable()
                        ->withFilename(date('Y-m-d') . ' - Log Scan Ticket')
                        ->ignoreFormatting(),
                ])
            ])
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Scan Time')
                    ->dateTime(' Y/m/d - H:i')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('gate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ticket.barcode')
                    ->label('Barcode')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('ticket.name')
                    ->label('Name')
                    ->numeric()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('ticket.order.full_name')
                    ->label('Ticket Order By')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('ticket.order.no_invoice')
                    ->label('Order Invoice')
                    ->sortable()
                    // ->html() // Aktifkan HTML rendering
                    // ->formatStateUsing(
                    //     fn($state, $record) =>
                    //     '<a href="' . route('filament.dashboard.resources.orders.edit', ['record' => $record->ticket->order->id]) . '" class="text-primary underline">' . e($state) . '</a>'
                    // )
                    ->searchable(),
                Tables\Columns\TextColumn::make('ticket.order.association.name')
                    ->label('Order Association')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('ticket.order.category.name')
                    ->label('Order Category')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('ticket.order.category.currency')
                    ->label('Order Currency')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('ticket.order.category.price')
                    ->label('Order Price')
                    ->sortable()
                    ->searchable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->visible(fn() => auth()->user()->role === 'Root'),
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
            'index' => Pages\ListLogScanTickets::route('/'),
            // 'create' => Pages\CreateLogScanTicket::route('/create'),
            // 'edit' => Pages\EditLogScanTicket::route('/{record}/edit'),
        ];
    }
}
