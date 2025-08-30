<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BelajarApiResource;
use App\Models\Order;
use Illuminate\Http\Request;

class BelajarApiController extends Controller
{
    public function index()
    {
        $posts = Order::latest()->paginate(5);

        return new BelajarApiResource(true, 'List Data Post', $posts);
    }
}
