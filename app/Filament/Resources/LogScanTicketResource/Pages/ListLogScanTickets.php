<?php

namespace App\Filament\Resources\LogScanTicketResource\Pages;

use App\Filament\Resources\LogScanTicketResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLogScanTickets extends ListRecords
{
    protected static string $resource = LogScanTicketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
