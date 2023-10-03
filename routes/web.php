<?php

use App\Http\Controllers\TransferController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RIWAYAT USER
Route::get('riwayat', function() {
    return view('riwayat.list');
});

//USER TRANSFER
Route::get('riwayat/transfer', [TransferController::class, 'index']);
Route::get('transfer', [TransferController::class, 'create']);
Route::post('transfer/store', [TransferController::class, 'store']);
Route::get('riwayat/transfer/{id}', [TransferController::class, 'show']);