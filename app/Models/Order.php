<?php

namespace App\Models;

use App\Mail\GetBarcode;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Mail;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Order extends Model implements ShouldQueue
{
    use LogsActivity;

    protected $guarded = '';
    // protected $fillable = [''];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function kategori()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function association()
    {
        return $this->belongsTo(Association::class, 'association_id');
    }
    public function addon()
    {
        return $this->belongsTo(Addon::class, 'addon_id');
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    // Pembuatan Ticket Otomatis ketika sudah paid
    protected static function booted()
    {
        static::updated(function ($order) {
            // $order->isDirty('payment_status' => ada perubahan di field payment_status
            // $order->payment_status === 'paid' => perubahan di field payment_status adalah paid

            if ($order->isDirty('updated_at')) {
                if ($order->is_confirmed == true) {
                    Ticket::where('order_id', $order->id)->delete();

                    // jika daftar personal namanya langsung ditambah
                    if ($order->quantity == 1) {
                        do {
                            $barcode = random_int(10000000, 99999999);
                        } while (Ticket::where('barcode', $barcode)->exists());

                        Ticket::create([
                            'order_id' => $order->id,
                            'no_invoice' => $order->no_invoice,
                            'barcode' => $barcode,
                            'name' => $order->full_name,
                            'email' => $order->email,
                        ]);
                    }

                    // jika daftar group namanya kosong
                    else {
                        for ($i = 0; $i < $order->quantity; $i++) {
                            do {
                                $barcode = random_int(10000000, 99999999);
                            } while (Ticket::where('barcode', $barcode)->exists());

                            Ticket::create([
                                'order_id' => $order->id,
                                'no_invoice' => $order->no_invoice,
                                'barcode' => $barcode,
                            ]);
                        }
                    }

                    $data = Order::where('no_invoice', $order->no_invoice)->first();
                    $tickets = Ticket::where('order_id', $data->id)->get();
                    Mail::to($data->email)->queue(new GetBarcode($data, $tickets));
                } elseif ($order->is_confirmed == false) {
                    Ticket::where('order_id', $order->id)->delete();
                }
            }
        });
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['is_confirmed', 'updated_at']);
        // Chain fluent methods for configuration options
    }
}
