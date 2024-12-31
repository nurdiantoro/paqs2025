<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('frontend.registration');
    }
    public function form()
    {
        $categories = Category::all();
        $addons = Addon::all();
        return view('frontend.registration_form', compact('categories', 'addons'));
    }

    public function invoice($no_invoice)
    {
        $data = Order::where('no_invoice', $no_invoice)->first();
        $category = Category::where('id', $data->category_id)->first();
        $addon = Addon::where('id', $data->addon_id)->first();

        $total_category = $category->price * $data->quantity;
        if ($addon != null) {
            $total_addon = $addon->price * $data->quantity;
        } else {
            $total_addon = 0;
        }
        $total_price = $total_category + $total_addon;
        return view('frontend.invoice', compact('data', 'category', 'addon', 'total_category', 'total_addon', 'total_price'));
    }
}
