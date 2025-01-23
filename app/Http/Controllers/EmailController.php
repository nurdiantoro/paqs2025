<?php

namespace App\Http\Controllers;

use App\Mail\Invoice;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function sendEmail()
    {
        $data = [
            'name' => 'User',
            'invoice' => '123',
            'url' => url('/') . '/invoice/' . '123',
        ];

        $kirim = Mail::to('nurdiantoro1999@gmail.com')->send(new Invoice($data));
        if ($kirim) {
            return "Email sent successfully.";
        } else {
            return "Email not sent.";
        }
    }
}
