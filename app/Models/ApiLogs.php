<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiLogs extends Model
{
    protected $guarded = [];
    protected $casts = [
        'headers' => 'array',
        'body' => 'array',
        'response' => 'array',
    ];
}
