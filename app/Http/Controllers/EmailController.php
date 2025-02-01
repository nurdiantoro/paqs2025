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

    public function sendEmail()
    {
        $data = Order::with(['category', 'addon'])->firstOrFail();
        $category = Category::where('id', $data->category_id)->first();
        $addon = Addon::where('id', $data->addon_id)->first();

        $total_category = $category->price * $data->quantity;
        if ($addon != null) {
            $total_addon = $addon->price * $data->quantity;
        } else {
            $total_addon = 0;
        }
        $total_price = $total_category + $total_addon;

        $kirim = Mail::to('nurdiantoro100@gmail.com')
            ->send(new Invoice($data, $category, $addon, $total_category, $total_addon, $total_price));

        if ($kirim) {
            return "Email sent successfully.";
        } else {
            return "Email not sent.";
        }
    }

    public function testView()
    {

        $data = Order::get()->first();
        $category = Category::where('id', $data->category_id)->first();
        $addon = Addon::where('id', $data->addon_id)->first();

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

    public function testViews($no_invoice)
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
