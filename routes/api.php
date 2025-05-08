<?php

use App\Http\Controllers\Api\BelajarApiController;
use App\Http\Controllers\PaymentController;
use App\Http\Resources\EspayResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/posts', BelajarApiController::class);
Route::post('/v1.0/transfer-va/inquiry', [PaymentController::class, 'inquiry'])->name('payment.inquiry');
