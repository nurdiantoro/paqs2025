<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('frontend.order');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi input
        // $validatedData = $request->validate([
        //     'title' => 'required',
        // ]);

        // Simpan data ke database
        Order::create(
            [
                'title' => $request->title,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'company' => $request->company,
                'address' => $request->address,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'category' => $request->category,
                'add_on' => $request->add_on,
                'quantity' => $request->quantity,
                'total_price' => $request->total_price,
                'payment_status' => $request->payment_status,
                'proof_of_payment' => $request->proof_of_payment,
            ]
        );

        // Redirect ke halaman sukses
        return redirect()->back()->with('success', 'Order berhasil disimpan!');
    }
}
