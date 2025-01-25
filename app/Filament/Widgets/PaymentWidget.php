<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\ChartWidget;

class PaymentWidget extends ChartWidget
{
    protected static ?int $sort = 1;
    protected static ?string $heading = 'Payment Confirmed (%)';

    protected function getData(): array
    {
        // Ambil jumlah order dengan is_confirmed true dan false
        $confirmedCount = Order::where('is_confirmed', true)->count();
        $notConfirmedCount = Order::where('is_confirmed', false)->count();


        // Hitung total order
        $totalOrders = $confirmedCount + $notConfirmedCount;

        // Hitung persentase
        $confirmedPercentage = $totalOrders > 0 ? ($confirmedCount / $totalOrders) * 100 : 0;
        $notConfirmedPercentage = $totalOrders > 0 ? ($notConfirmedCount / $totalOrders) * 100 : 0;

        // Kembalikan data dalam format array untuk grafik
        return [
            'datasets' => [
                [
                    'label' => 'Order Confirmation Status',
                    'data' => [
                        round($confirmedPercentage, 2), // Persentase is_confirmed = true
                        round($notConfirmedPercentage, 2), // Persentase is_confirmed = false
                    ],
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    'borderColor' => [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                ],
            ],
            'labels' => [
                'Confirmed ', // Tambahkan tanda %
                'Not Confirmed ', // Tambahkan tanda %
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
