<?php

namespace App\Filament\Resources\LogScanTicketResource\Pages;

use App\Filament\Resources\LogScanTicketResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLogScanTickets extends ManageRecords
{
    protected static string $resource = LogScanTicketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
