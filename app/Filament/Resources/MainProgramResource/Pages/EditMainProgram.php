<?php

namespace App\Filament\Resources\MainProgramResource\Pages;

use App\Filament\Resources\MainProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMainProgram extends EditRecord
{
    protected static string $resource = MainProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
