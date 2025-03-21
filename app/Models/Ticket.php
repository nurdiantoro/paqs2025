<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    protected $guarded = [];

    protected static function booted()
    {
        // static::updated(function ($ticket) {
        //     // $order->isDirty('payment_status' => ada perubahan di field payment_status
        //     // $order->payment_status === 'paid' => perubahan di field payment_status adalah paid

        //     if ($ticket->isDirty('is_used') && $ticket->is_used = 'true') {
        //         Ticket::where('id', $ticket->id)->update([
        //             'used_at' => now(),
        //         ]);
        //     }
        // });
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function logScan(): HasMany
    {
        return $this->hasMany(LogScanTicket::class);
    }

    // protected static function booted()
    // {
    //     static::updated(function ($order) {
    //         if ($order->isDirty('payment_status') && $order->payment_status === 'paid') {
    //             Ticket::where('order_id', $order->id)->delete();
    //             for ($i = 0; $i < $order->quantity; $i++) {
    //                 do {
    //                     $barcode = random_int(10000000, 99999999);
    //                 } while (Ticket::where('barcode', $barcode)->exists());

    //                 Ticket::create([
    //                     'order_id' => $order->id,
    //                     'barcode' => $barcode,
    //                 ]);
    //             }
    //         }
    //     });
    // }
}
