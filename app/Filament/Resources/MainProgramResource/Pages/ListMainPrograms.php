<?php

namespace App\Filament\Resources\MainProgramResource\Pages;

use App\Filament\Resources\MainProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMainPrograms extends ListRecords
{
    protected static string $resource = MainProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
