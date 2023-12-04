<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProdukController;

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
    return view('login');
})->name('index');
Route::post('/sign-in', [SessionController::class, 'signin'])->middleware('guest');
Route::post('/sign-out', [SessionController::class, 'signout']);
Route::resource('/produk', ProdukController::class)->middleware('auth');
