<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketResource\Pages;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('barcode')->readOnly(),
                TextInput::make('name')->readOnly(),
                TextInput::make('email')->readOnly(),
                TextInput::make('no_invoice')->readOnly(),
                // TextInput::make('used_at')->readOnly(),
            ]);
    }
    public static function canCreate(): bool
    {
        return false;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('barcode')
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_used')->boolean()->disabled(),
                // Tables\Columns\TextColumn::make('used_at'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('no_invoice'),
            ])
            ->defaultSort('created_at', 'desc')
            ->defaultPaginationPageOption(50)
            ->paginated([50, 100, 'all'])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListTickets::route('/'),
            // 'create' => Pages\CreateTicket::route('/create'),
            // 'edit' => Pages\EditTicket::route('/{record}/edit'),
        ];
    }
}
