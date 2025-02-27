<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Category;
use App\Models\Order;
use App\Models\Ticket;
use Barryvdh\DomPDF\Facade\Pdf;
// use function Spatie\LaravelPdf\Support\pdf;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
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
        $logo = 'https://paqs2025.com/img/LOGO%20PAQS%20CONGRESS.png';


        // return view('frontend.pdf.receipt', compact('data', 'category', 'total_category', 'total_addon', 'total_price', 'addon', 'tickets'));

        $pdf = Pdf::loadView('frontend.pdf.receipt', compact('data', 'category', 'total_category', 'total_addon', 'total_price', 'addon', 'tickets', 'logo'));
        return $pdf->download('Receipt - #' . $data->no_invoice . '.pdf');

        // return pdf()
        //     ->view('frontend.pdf.receipt', compact('data', 'category', 'total_category', 'total_addon', 'total_price', 'addon', 'tickets', 'logo'))
        //     ->name('Receipt #' . $data->no_invoice . ' - ' . date_format($data->created_at, 'd F Y') . '.pdf');
    }
}
