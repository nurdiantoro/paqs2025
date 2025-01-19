<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/programme', [FrontendController::class, 'programme']);
Route::get('/general-information', [FrontendController::class, 'information']);
// Route::get('/venue', [FrontendController::class, 'venue']);
Route::get('/programme', [FrontendController::class, 'programme']);
Route::get('/contact', [FrontendController::class, 'contact']);


Route::get('/registration', [FrontendController::class, 'registration']);
Route::get('/registration_form', [FrontendController::class, 'registration_form']);
Route::get('/invoice/{no_invoice}', [FrontendController::class, 'invoice']);
Route::get('/invoice', [FrontendController::class, 'ticket']);


Route::post('/order/check/', [FrontendController::class, 'check_invoice']);
Route::post('/order/store', [OrderController::class, 'store']);
Route::post('/order/upload_payment/{no_invoice}', [OrderController::class, 'upload_payment']);
Route::post('/inbox/store/', [FrontendController::class, 'inbox_store']);


Route::get('/test', function () {
    return view('test');
});
