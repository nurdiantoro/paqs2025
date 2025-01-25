<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class RegistrationWidget extends ChartWidget
{
    use InteractsWithPageFilters;
    protected static ?int $sort = 1;

    protected static ?string $heading = 'Registration per day';

    protected function getData(): array
    {
        $startDate = $this->filters['startDate'] ?? null; // Pastikan ada default value
        $endDate = $this->filters['endDate'] ?? null;

        $data = Trend::model(Order::class)
            ->between(
                start: $startDate ? Carbon::parse($startDate) : now()->subDays(30),
                end: $endDate ? Carbon::parse($endDate) : now(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Registration',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn(TrendValue $value) => Carbon::parse($value->date)->format('d M')),
        ];
    }


    protected function getType(): string
    {
        return 'line';
    }
}
