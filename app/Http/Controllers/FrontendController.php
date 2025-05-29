<?php

namespace App\Http\Controllers;

use App\Mail\GetBarcodePersonal;
use App\Models\ActivityProgram;
use App\Models\Addon;
use App\Models\Association;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Hotel;
use App\Models\Inbox;
use App\Models\Itinerary;
use App\Models\MainProgram;
use App\Models\Order;
use App\Models\Programme;
use App\Models\Roadmap;
use App\Models\Speaker;
use App\Models\Ticket;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use libphonenumber\PhoneNumberFormat;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller implements ShouldQueue
{
    public function fetchWeather($kota)
    {
        $apiKey = config('services.weatherapi.key');
        $response = Http::get("https://api.weatherapi.com/v1/current.json?key=$apiKey&q=$kota&aqi=no");

        if ($response->successful()) {
            return $response->json(); // Return data JSON langsung
        } else {
            return null; // Return null jika gagal
        }
    }

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
        $activities = ActivityProgram::all()->groupBy('category');
        $main_programs = MainProgram::all()->groupBy('category');
        // $programmes = Programme::all();

        // dd($main_programs);

        $itinerary_day1 = Itinerary::where('day', 1)->orderBy('time_1', 'asc')->get();
        $itinerary_day2 = Itinerary::where('day', 2)->orderBy('time_1', 'asc')->get();
        return view('frontend.programme', compact('itinerary_day1', 'itinerary_day2', 'activities', 'main_programs'));
    }

    public function information()
    {
        $kota = "Jakarta"; // Default kota
        $weatherData = $this->fetchWeather($kota);

        if (!$weatherData) {
            // Jika gagal, buat array default dengan status error
            $weatherData = [
                'error' => true,
                'message' => 'Failed to retrieve weather data. Please try again later.'
            ];
        }

        // dd($weatherData);

        return view('frontend.information', compact('weatherData'));
    }

    public function venue()
    {
        $hotels = Hotel::all();
        return view('frontend.venue', compact('hotels'));
    }

    public function call_for_abstract()
    {
        $speakers = Speaker::all();
        return view('frontend.call_for_paper', compact('speakers'));
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
        $datas = Category::where('is_active', '1')->get()->groupBy('type');
        // dd($datas);
        return view('frontend.registration', compact('datas'));
    }

    public function registration_form()
    {
        session()->forget('order_data');
        $categories = Category::where('is_active', '1')->get()->groupBy('type');
        $addons = Addon::all();
        $associations = Association::all();

        return view('frontend.registration_form', compact('categories', 'addons', 'associations'));
    }

    public function registration_payment_method(Request $request)
    {
        // Cek apakah sudah pernah order
        $order = Order::where('email', $request->email)->first();
        // if ($order != null) {
        //     return redirect(url('invoice/' . $order->no_invoice))->with('order_exist', 'Email telah terdaftar!');
        // }

        $validator = $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'member' => 'required',
            'member_id' => 'nullable|numeric',
            'association' => 'nullable|numeric',
            'company' => 'required',
            'address' => 'required',
            'telephone' => 'required|numeric',
            'email' => 'required|email',
            'category' => 'required',
            'quantity' => 'required|numeric',
        ]);

        session(['order_data' => $validator]);

        $category = Category::where('id', $request->category)->first();
        $associations = Association::where('id', $request->association)->first();
        // dd($category->name);
        return view('frontend.registration_payment_method', compact('request', 'associations', 'category'));
    }

    public function ticket()
    {
        return view('frontend.ticket');
    }

    public function invoice($no_invoice)
    {
        $data = Order::where('no_invoice', $no_invoice)->first();
        if ($data != null) {
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
        } else {
            return redirect(url('/invoice'))->with('error');
        }
    }

    public function check_invoice(Request $request)
    {
        $orders = Order::where('email', $request->email)
            ->where('telephone', $request->telephone)
            ->with('category')
            ->select('no_invoice', 'quantity', 'category_id', 'total_price', 'payment_method', 'payment_status')
            ->get();
        // return $orders;

        if ($orders->isEmpty()) {
            return redirect()->back()->with('error', 'Invoice tidak ditemukan!');
        } else {
            return view('frontend.invoice_list', compact('orders'));
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
