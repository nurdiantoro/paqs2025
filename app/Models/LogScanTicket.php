<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogScanTicket extends Model
{
    protected $guarded = [];

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }
}
