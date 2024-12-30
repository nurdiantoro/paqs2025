<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/homepage');
});
Route::get('/registration', [RegistrationController::class, 'index']);
