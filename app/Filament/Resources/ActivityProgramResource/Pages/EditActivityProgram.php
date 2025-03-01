<?php

namespace App\Filament\Resources\ActivityProgramResource\Pages;

use App\Filament\Resources\ActivityProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActivityProgram extends EditRecord
{
    protected static string $resource = ActivityProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
