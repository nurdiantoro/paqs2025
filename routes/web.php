<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

// Frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/programme', [FrontendController::class, 'programme']);
Route::get('/general-information', [FrontendController::class, 'information']);
Route::get('/venue', [FrontendController::class, 'venue']);
Route::get('/programme', [FrontendController::class, 'programme']);
Route::get('/call-for-abstract', [FrontendController::class, 'call_for_abstract']);
Route::get('/contact', [FrontendController::class, 'contact']);

// Registrasi & Invoice
Route::get('/registration', [FrontendController::class, 'registration'])->name('registration');
Route::get('/registration/form', [FrontendController::class, 'registration_form'])->name('registration.form');
Route::post('/registration/payment_method', [FrontendController::class, 'registration_payment_method']);
Route::get('/invoice', [FrontendController::class, 'ticket']);
Route::get('/invoice/{no_invoice}', [FrontendController::class, 'invoice']);

// Post
Route::post('/invoice/check', [FrontendController::class, 'check_invoice']);
Route::post('/order/store', [OrderController::class, 'store']);
Route::post('/order/upload_payment/{no_invoice}', [OrderController::class, 'upload_payment']);
Route::post('/inbox/store/', [FrontendController::class, 'inbox_store']);
Route::post('/manage_ticket', [FrontendController::class, 'manage_tickets']);

// Email
// Route::get('/email/{no_invoice}', [EmailController::class, 'testView']);
Route::get('/email/{no_invoice}/{email}', [EmailController::class, 'sendEmail']);

// PDF
Route::get('/invoice/{no_invoice}/pdf', [PdfController::class, 'receipt']);
Route::get('/invoice/{no_invoice}/pdf_unpaid', [PdfController::class, 'receipt_unpaid']);

// Tickets
Route::prefix('dashboard')->middleware(['auth'])->group(
    function () {
        Route::get('/scan_ticket', [TicketController::class, 'index']);
        Route::post('/scan_ticket/store', [TicketController::class, 'store']);
    }
);

Route::prefix('espay')->group(
    function () {
        Route::get('/index', [PaymentController::class, 'index'])->name('payment.index');
        Route::post('/initiatePayment', [PaymentController::class, 'initiatePayment'])->name('payment.initiate');
        Route::get('/virtualAccount', [PaymentController::class, 'virtualAccount'])->name('payment.virtualAccount');
    }
);

// Matiin kalo udah production
// Route::get('/barcode/{no_invoice}', [EmailController::class, 'testGetBarcode']);
// Route::get('/barcode/{no_invoice}/{email}', [EmailController::class, 'sendGetBarcode']);

// Route::get('/test', function () {
//     return view('test');
// });
