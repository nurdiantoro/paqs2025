<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {
        return view('frontend.order');
    }

    public function store(Request $request)
    {

        // Generate no invoice random & unique
        $no_invoice = date('Ymd') . rand(1000, 9999);
        while (Order::where('no_invoice', $no_invoice)->exists()) {
            $no_invoice = date('Ymd') . rand(1000, 9999);
        }

        $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'address' => 'required',
            'telephone' => 'required|numeric',
            'email' => 'required|email',
            'category' => 'required',
            'quantity' => 'required|numeric',
        ]);

        // Hitung total harga
        $category = Category::find($request->category);
        $addon = Addon::find($request->add_on);
        $total_category = $category->price * $request->quantity;
        if ($addon != null) {
            $total_addon = $addon->price * $request->quantity;
        } else {
            $total_addon = 0;
        }
        $total_price = $total_category + $total_addon;

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
                'category_id' => $request->category,
                'addon_id' => $request->add_on,
                'quantity' => $request->quantity,
                'total_price' => $total_price,
                'payment_status' => 'unpaid',
                'proof_of_payment' => $request->proof_of_payment,
            ]
        );

        // Redirect ke halaman sukses
        return redirect(url('/invoice/' . $no_invoice))->with('success', 'Order berhasil disimpan!');
    }

    public function upload_payment($no_invoice, Request $request)
    {
        // Upload bukti pembayaran
        $file = $request->file('proof_of_payment');
        if ($file != Null) {
            $nama_file = Str::random(12) . "." . $file->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $editImage = $manager->read($file);
            $editImage->resize(height: 1080);
            $editImage->save($file);
            $editImage->toJpeg()->save('storage/' . $nama_file);
        } else {
            return redirect()->back()->with('error', 'Bukti pembayaran belum diupload!');
        }

        Order::where('no_invoice', $no_invoice)->update([
            'payment_status' => 'paid',
            'proof_of_payment' => $nama_file,
        ]);
        return redirect(url('/invoice/' . $no_invoice))->with('success', 'Payment berhasil diupload!');
    }
}
