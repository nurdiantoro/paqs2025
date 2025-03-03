<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainProgram extends Model
{
    protected $guarded = [];
    protected $casts = [
        'image' => 'array',
        'video' => 'array',
    ];
}
