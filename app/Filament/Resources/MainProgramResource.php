<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainProgramResource\Pages;
use App\Filament\Resources\MainProgramResource\RelationManagers;
use App\Models\MainProgram;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MainProgramResource extends Resource
{
    protected static ?string $model = MainProgram::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Root Access';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category')
                    ->options([
                        'Young QS' => 'Young QS',
                        'PAQS Meeting' => 'PAQS Meeting',
                        'Call for Papers' => 'Call for Papers',
                        'Plenary Session' => 'Plenary Session',
                    ])
                    ->native(true),
                FileUpload::make('video')
                    ->hint('Max Size 20MB')
                    ->multiple(),
                FileUpload::make('image_preview')
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageResizeTargetHeight('1080'),
                FileUpload::make('image')
                    ->multiple()
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageResizeTargetHeight('1080'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListMainPrograms::route('/'),
            'create' => Pages\CreateMainProgram::route('/create'),
            'edit' => Pages\EditMainProgram::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
    {
        if (auth()->user()->role == 'Root') {
            return true;
        } else {
            return false;
        }
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->role == 'Root';
    }
}
