<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Checkout\CheckoutController;
use App\Http\Controllers\GoogleAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route to handle the callback from Google
    Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('auth.google.callback');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    
});

Route::get("health", function() {
    return ['ok'];
});

Route::post("invoice", [CheckoutController::class, 'create']);

Route::post("insert-reservasi", [CheckoutController::class, 'createReservasi']);

Route::post("get-rate", [App\Http\Controllers\bookingController::class , 'rate']);
Route::get("/get-exchange/{mata}", [App\Http\Controllers\bookingController::class , 'exchange'])->name('api.currency.update');
//============callback
Route::post('/success-payment', [App\Http\Controllers\callbackController::class, 'suksesPayment']);
Route::post('/create-payment', [App\Http\Controllers\callbackController::class, 'createPayment']);

Route::post('/paypal-complete', [App\Http\Controllers\callbackController::class, 'paypalComplete']);