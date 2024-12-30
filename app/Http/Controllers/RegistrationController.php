<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('frontend.registration');
    }
    public function form()
    {
        return view('frontend.registration_form');
    }
}
