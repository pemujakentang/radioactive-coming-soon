<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DetailTransactionController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home.index');
});

Route::get('/voc', function () {
    return view('VOC.index');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate');
    
});

Route::get('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
});

Route::controller(OrderController::class)->group(function () {
    Route::get('/ticket', 'index'); 


    Route::get('/custom-order', 'custom_order');
    Route::get('/order/{quantity}/personal-information', 'order');  

    Route::post('/order/{quantity}/ticket-information', 'ticket_information'); 

    
    Route::post('/checkout', 'checkout');
    Route::get('/invoice/{id}', 'invoice');

    // debug only *nanti dihapus*
    Route::get('/approve', 'approve_ticket');
});

Route::controller(TicketController::class)->group(function (){

    Route::get('/ticket-redeem/{ticket_code}', 'ticket_redeem')->middleware('auth');
    Route::get('/show-qr/{ticket_code}', 'show_qr');
});

Route::middleware('guest')->controller(ResetPasswordController::class)->group(function() {
    Route::get('/forgot-password', 'index')->name('password.request');
    Route::post('/forgot-password', 'forgot_password')->name('password.email');
    Route::get('/reset-password/{token}', 'reset_token')->name('password.reset');
    Route::post('/reset-password', 'reset')->name('password.update');;
});

Route::get('/merch', [MerchController::class, 'index']);
Route::get('/cart', [MerchController::class, 'cart']);
Route::get('/{id}/cart', [MerchController::class, 'addToCart']);
Route::get('/cart/{id}', [MerchController::class, 'removeFromCart']);
Route::get('/merch-checkout', [MerchController::class, 'checkout']);

Route::get('/send', [MailController::class, 'index']);