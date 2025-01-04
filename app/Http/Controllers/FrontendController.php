<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Category;
use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.homepage');
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function programme()
    {
        return view('frontend.programme');
    }
    public function information()
    {
        return view('frontend.information');
    }
    public function venue()
    {
        return view('frontend.venue');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function registration()
    {
        return view('frontend.registration');
    }

    public function registration_form()
    {
        $categories = Category::all();
        $addons = Addon::all();
        return view('frontend.registration_form', compact('categories', 'addons'));
    }

    public function ticket()
    {
        return view('frontend.ticket');
    }

    public function invoice($no_invoice)
    {
        $data = Order::where('no_invoice', $no_invoice)->first();
        $category = Category::where('id', $data->category_id)->first();
        $addon = Addon::where('id', $data->addon_id)->first();

        // buat variabel total harga
        $total_category = $category->price * $data->quantity;
        if ($addon != null) {
            $total_addon = $addon->price * $data->quantity;
        } else {
            $total_addon = 0;
        }
        $total_price = $total_category + $total_addon;

        // buat variabel ticket
        $tickets = Ticket::where('order_id', $data->id)->get();

        return view('frontend.invoice', compact('data', 'category', 'addon', 'total_category', 'total_addon', 'total_price', 'tickets'));
    }

    public function check_invoice(Request $request)
    {
        $order = Order::where('no_invoice', $request->no_invoice)->first();

        if ($order != null) {
            return redirect(url('/invoice/' . $order->no_invoice));
        } else {
            return redirect()->back()->with('error', 'Invoice tidak ditemukan!');
        }
    }
}
