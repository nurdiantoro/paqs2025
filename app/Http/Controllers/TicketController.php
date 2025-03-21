<?php

namespace App\Http\Controllers;

use App\Models\LogScanTicket;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('frontend.scan_ticket');
    }

    public function store(Request $request)
    {
        $scan = Ticket::where('barcode', $request->barcode)->first();

        if ($scan != null) {
            LogScanTicket::create([
                'ticket_id' => $scan->id
            ]);
            return redirect(url('/scan_ticket'))->with('success', 'Ticket berhasil discan!');
        } else {
            return redirect(url('/scan_ticket'))->with('error', 'Ticket tidak ditemukan!');
        }
    }
}
