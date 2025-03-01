<?php

namespace App\Filament\Resources\ActivityProgramResource\Pages;

use App\Filament\Resources\ActivityProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActivityPrograms extends ListRecords
{
    protected static string $resource = ActivityProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
