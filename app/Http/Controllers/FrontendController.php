<?php

namespace App\Http\Controllers;

use App\Mail\GetBarcode;
use App\Mail\GetBarcodePersonal;
use App\Models\Addon;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Hotel;
use App\Models\Inbox;
use App\Models\Order;
use App\Models\Roadmap;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use libphonenumber\PhoneNumberFormat;
use PDO;

class FrontendController extends Controller
{
    public function index()
    {
        $roadmaps = Roadmap::all();
        return view('frontend.homepage', compact('roadmaps'));
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
        $hotels = Hotel::all();
        return view('frontend.venue', compact('hotels'));
    }

    public function call_for_paper()
    {
        return view('frontend.call_for_paper');
    }
    public function contact()
    {
        $phoneNumberUtil = \libphonenumber\PhoneNumberUtil::getInstance();

        // Ambil semua kontak dan format nomor telepon
        $contacts = Contact::all()->map(function ($contact) use ($phoneNumberUtil) {
            try {
                // Format nomor telepon
                $phoneNumber = $phoneNumberUtil->parse($contact->telephone, 'ID'); // Ganti 'ID' jika perlu
                $contact->formatted_telephone = $phoneNumberUtil->format($phoneNumber, PhoneNumberFormat::INTERNATIONAL);
            } catch (\libphonenumber\NumberParseException $e) {
                // Jika parsing gagal, tetap gunakan nomor asli
                $contact->formatted_telephone = $contact->telephone;
            }

            return $contact;
        });

        return view('frontend.contact', compact('contacts'));
    }

    public function registration()
    {
        $datas = Category::get()->groupBy('type');
        // dd($datas);
        return view('frontend.registration', compact('datas'));
    }

    public function registration_form()
    {
        $categories = Category::get()->groupBy('type');
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

    public function inbox_store(Request $request)
    {
        Inbox::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function manage_tickets(Request $request)
    {
        foreach ($request->id as $index => $id) {
            $ticket = Ticket::find($id);

            if ($request->email[$index] != $ticket->email) {
                $ticket->update([
                    'name' => $request->name[$index],
                    'email' => $request->email[$index],
                ]);
                Mail::to($request->email[$index])->send(new GetBarcodePersonal($ticket));
            } else {
                $ticket->update([
                    'name' => $request->name[$index],
                ]);
            }
        }
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
