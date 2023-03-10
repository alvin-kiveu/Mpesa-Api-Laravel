<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MpesaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app/home');
});

Route::get('/home', function () {
    return view('app/home');
});

Route::get('/stkpushpage', function () {
    return view('app/stkpushpage');
});

Route::get('/generatetoken', [MpesaController::class, 'generateAccessToken']);

Route::post('/stkpush', [MpesaController::class, 'initiateStkPush']);