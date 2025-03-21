<?php

namespace App\Http\Controllers;

use App\Models\LogScanTicket;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = LogScanTicket::with('ticket')->latest()->take(10)->get();

        return view('frontend.scan_ticket', compact('tickets'));
    }

    public function store(Request $request)
    {
        // Batas waktu scan (5 menit terakhir)
        $batasWaktuScan = Carbon::now()->subMinutes(5);

        // Cek apakah tiket ada berdasarkan barcode
        $ticket = Ticket::where('barcode', $request->barcode)->first();

        // Jika tiket tidak ditemukan
        if (!$ticket) {
            return redirect(url('/dashboard/scan_ticket'))->with('error', 'Tiket tidak ditemukan!');
        }

        // Cek apakah tiket sudah di-scan dalam 5 menit terakhir
        $alreadyScanned = LogScanTicket::where('ticket_id', $ticket->id)
            ->where('created_at', '>=', $batasWaktuScan)
            ->exists();

        if ($alreadyScanned) {
            return redirect(url('/dashboard/scan_ticket'))->with('already_scan', 'Tiket sudah di-scan dalam 5 menit terakhir!');
        }

        // Simpan data scan ticket
        LogScanTicket::create([
            'ticket_id' => $ticket->id,
            'gate' => $request->gate,
        ]);

        return redirect(url('/dashboard/scan_ticket'))->with('success', 'Tiket berhasil di-scan!');
    }
}
