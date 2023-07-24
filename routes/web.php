<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamDataController;

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
    return view('welcome');
});

Route::get('/ticket', function () {
    return view('Tickets.index');
});

// Route::get('/form', function(){
//     return view('Forms.index');
// });

Route::resource('teams', TeamDataController::class);