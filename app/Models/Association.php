<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $guarded = '';

    public function orders()
    {
        return $this->hasMany(Order::class, 'association_id');
    }
}
