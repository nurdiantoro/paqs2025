<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = '';
    // protected $fillable = [''];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function addon()
    {
        return $this->belongsTo(Addon::class, 'addon_id');
    }

    protected static function booted()
    {
        static::updated(function ($order) {
            // $order->isDirty('payment_status' => ada perubahan di field payment_status
            // $order->payment_status === 'paid' => perubahan di field payment_status adalah paid
            if ($order->isDirty('updated_at')) {
                if ($order->is_confirmed == true) {
                    Ticket::where('order_id', $order->id)->delete();
                    for ($i = 0; $i < $order->quantity; $i++) {
                        do {
                            $barcode = random_int(10000000, 99999999);
                        } while (Ticket::where('barcode', $barcode)->exists());

                        Ticket::create([
                            'order_id' => $order->id,
                            'barcode' => $barcode,
                        ]);
                    }
                } elseif ($order->is_confirmed == false) {
                    Ticket::where('order_id', $order->id)->delete();
                }
            }
        });
    }
}
