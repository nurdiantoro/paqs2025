<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Category;
use App\Models\Order;
use App\Models\Ticket;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index()
    {
        // Percobaan doang
        $pdf = Pdf::loadView('frontend.about');
        return $pdf->download('invoice.pdf');
    }

    public function receipt($no_invoice)
    {
        $data = Order::where('no_invoice', $no_invoice)->first();
        $addon = Addon::where('id', $data->addon_id)->first();
        $category = Category::where('id', $data->category_id)->first();
        $total_category = $category->price * $data->quantity;
        if ($addon != null) {
            $total_addon = $addon->price * $data->quantity;
        } else {
            $total_addon = 0;
        }
        $total_price = $total_category + $total_addon;
        $tickets = Ticket::where('order_id', $data->id)->get();
        $logo = base64_encode(file_get_contents('https://paqs2025.com/img/LOGO%20PAQS%20CONGRESS.png'));

        $pdf = Pdf::loadView('frontend.pdf.receipt', compact('data', 'category', 'total_category', 'total_addon', 'total_price', 'addon', 'tickets', 'logo'))
            ->setOption('fontDir', storage_path('/fonts/inter'));
        return $pdf->download('Receipt #' . $data->no_invoice . '.pdf');
    }

    public function receipt_unpaid($no_invoice)
    {
        $data = Order::where('no_invoice', $no_invoice)->first();
        $category = Category::where('id', $data->category_id)->first();
        $tickets = Ticket::where('order_id', $data->id)->get();
        $logo = base64_encode(file_get_contents('https://paqs2025.com/img/LOGO%20PAQS%20CONGRESS.png'));

        $pdf = Pdf::loadView('frontend.pdf.receipt', compact('data', 'category', 'logo'));
        return $pdf->download('Receipt #' . $data->no_invoice . '.pdf');

        // test view, nonaktifkan jika production
        // return view('frontend.pdf.receipt', compact('data', 'category', 'logo'));
    }
}
