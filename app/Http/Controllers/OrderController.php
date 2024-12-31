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


        // Cek apakah kode sudah ada
        $no_invoice = date('Ymd') . rand(1000, 9999);
        while (Order::where('no_invoice', $no_invoice)->exists()) {
            $no_invoice = date('Ymd') . rand(1000, 9999);
        }

        // Simpan data ke database
        Order::create(
            [
                'no_invoice' => $no_invoice,
                'title' => ucwords($request->title),
                'first_name' => ucwords($request->first_name),
                'last_name' => ucwords($request->last_name),
                'full_name' => $request->first_name . ' ' . $request->last_name,
                'company' => $request->company,
                'address' => $request->address,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'category' => $request->category,
                'add_on' => $request->add_on,
                'quantity' => $request->quantity,
                'total_price' => $request->total_price,
                'payment_status' => 'unpaid',
                'proof_of_payment' => $request->proof_of_payment,
            ]
        );

        // Redirect ke halaman sukses
        return redirect(url('/invoice/' . $no_invoice))->with('success', 'Order berhasil disimpan!');
    }
}
