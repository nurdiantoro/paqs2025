<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use pxlrbt\FilamentActivityLog\Pages\ListActivities;

class ListOrderActivities extends ListActivities
{
    protected static string $resource = OrderResource::class;
}
