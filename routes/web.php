<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/homepage');
});
Route::get('/registration', [RegistrationController::class, 'index']);
Route::get('/registration_form', [RegistrationController::class, 'form']);
Route::get('/invoice/{no_invoice}', [RegistrationController::class, 'invoice']);

Route::post('/order/store', [OrderController::class, 'store']);
Route::post('/order/upload_payment/{no_invoice}', [OrderController::class, 'upload_payment']);
