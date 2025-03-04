<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActivityProgramResource\Pages;
use App\Models\ActivityProgram;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ActivityProgramResource extends Resource
{
    protected static ?string $model = ActivityProgram::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category')
                    ->label('Association')
                    ->options([
                        'Project Visit' => 'Project Visit',
                        'Golf Tournament' => 'Golf Tournament',
                        'Spouse Program' => 'Spouse Program',
                        'Gala Dinner' => 'Gala Dinner',
                        'Exhibition' => 'Exhibition',
                    ])
                    ->native(true),
                FileUpload::make('video')
                    ->hint('Max Size 20MB')
                    ->multiple(),
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
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('video'),
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
            'index' => Pages\ListActivityPrograms::route('/'),
            // 'create' => Pages\CreateActivityProgram::route('/create'),
            'edit' => Pages\EditActivityProgram::route('/{record}/edit'),
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
