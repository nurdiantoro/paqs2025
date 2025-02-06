<?php

namespace App\Http\Controllers;

use App\Mail\Invoice;
use App\Models\Addon;
use App\Models\Category;
use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function sendEmail($no_invoice, $email)
    {
        $data = Order::where('no_invoice', $no_invoice)->first();
        $category = Category::where('id', $data->category_id)->first();
        $addon = Addon::where('id', $data->addon_id)->first();
        $logo = 'https://paqs2025.com/img/LOGO%20PAQS%20CONGRESS.png';

        $total_category = $category->price * $data->quantity;
        if ($addon != null) {
            $total_addon = $addon->price * $data->quantity;
        } else {
            $total_addon = 0;
        }
        $total_price = $total_category + $total_addon;

        $tickets = Ticket::where('order_id', $data->id)->get();
        $kirim = Mail::to($email)
            ->send(new Invoice(
                $data,
                $category,
                $addon,
                $total_category,
                $total_addon,
                $total_price,
                $logo,
                $tickets,
            ));

        if ($kirim) {
            return redirect(url('/invoice/' . $no_invoice))->with('success', 'Order berhasil disimpan!');
        } else {
            return "Email not sent.";
        }
    }

    public function testView($no_invoice)
    {

        $data = Order::where('no_invoice', $no_invoice)->first();
        $category = Category::where('id', $data->category_id)->first();
        $addon = Addon::where('id', $data->addon_id)->first();

        // dd($addon);

        $total_category = $category->price * $data->quantity;
        if ($addon != null) {
            $total_addon = $addon->price * $data->quantity;
        } else {
            $total_addon = 0;
        }
        $total_price = $total_category + $total_addon;

        // buat variabel ticket
        $tickets = Ticket::where('order_id', $data->id)->get();

        return view('email.invoice', compact('data', 'category', 'addon', 'total_category', 'total_addon', 'total_price', 'tickets'));
    }
}
