<?php

namespace App\Filament\Resources\LogScanTicketResource\Pages;

use App\Filament\Resources\LogScanTicketResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLogScanTicket extends EditRecord
{
    protected static string $resource = LogScanTicketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
