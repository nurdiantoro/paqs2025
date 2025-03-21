<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)
                    ->schema([
                        Select::make('type')
                            ->options([
                                'Congress Fee (Indonesia)' => 'Congress Fee (Indonesia)',
                                'Congress Fee (Non-Indonesia)' => 'Congress Fee (Non-Indonesia)',
                            ])
                            ->required(),
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Select::make('currency')
                            ->options([
                                'IDR' => 'IDR',
                                'USD' => 'USD',
                            ])
                            ->required(),
                        TextInput::make('price')
                            ->numeric()
                            ->required()
                            ->maxLength(255),
                        Toggle::make('is_member'),
                        Toggle::make('is_active'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('is_active')
                    ->boolean(),
                IconColumn::make('is_member')
                    ->boolean(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('currency')
                    ->searchable(),
                TextColumn::make('price')
                    ->numeric(decimalPlaces: 0)
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => Pages\ListCategories::route('/'),
            // 'create' => Pages\CreateCategory::route('/create'),
            // 'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
