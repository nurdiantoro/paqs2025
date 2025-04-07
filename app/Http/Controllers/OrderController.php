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

        // check apakah email memiliki order
        $order = Order::where('email', $request->email)->first();
        if ($order == null) {
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

            $category = Category::find($request->category);
            $total_price = $category->price * $request->quantity;

            if ($request->association == true) {
                $request->validate([
                    'association' => 'required',
                    'member_id' => 'numeric|required',
                ]);
                $association = $request->association;
                $member_id = $request->member_id;
            } else {
                $association = NULL;
                $member_id = NULL;
            }


            // Simpan data ke database
            Order::create(
                [
                    'no_invoice' => $no_invoice,
                    'title' => ucwords($request->title),
                    'first_name' => ucwords($request->first_name),
                    'last_name' => ucwords($request->last_name),
                    'full_name' => $request->first_name . ' ' . $request->last_name,
                    'is_member' => $request->member,
                    'member_id' => $member_id,
                    'association_id' => $association,
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

            // kirim email ke user dulu, baru nanti redirect ke view invoice
            // cek ke route /email/{no_invoice}/{email} biar lebih detail
            return redirect(url('/email/' . $no_invoice . '/' . $request->email));
        }

        // Jika order sudah ada
        // akan di return ke view invoice
        else {
            return redirect(url('invoice/' . $order->no_invoice))->with('order_exist', 'Email telah terdaftar!');
        }
    }

    public function upload_payment($no_invoice, Request $request)
    {
        $request->validate(
            [
                'proof_of_payment' => 'required|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'proof_of_payment.mimes' => 'File format must be .jpeg .png or .jpg',
                'proof_of_payment.max' => 'File size must be less than 2MB',
            ]
        );

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
