<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('frontend.registration');
    }
    public function form()
    {
        return view('frontend.registration_form');
    }

    public function invoice($no_invoice)
    {
        // return view('frontend.invoice', compact('no_invoice'));
        $data = Order::where('no_invoice', $no_invoice)->first();
        return view('frontend.invoice', compact('data'));
    }
}
