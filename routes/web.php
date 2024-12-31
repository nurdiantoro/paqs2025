<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/homepage');
});
Route::get('/registration', [RegistrationController::class, 'index']);
Route::get('/registration_form', [RegistrationController::class, 'form']);

Route::post('/order_store', [OrderController::class, 'store']);
