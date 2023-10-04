<?php

use App\Http\Controllers\SetorTunaiController;
use App\Http\Controllers\TarikTunaiController;
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

//USER TARIK TUNAI
Route::get('riwayat/tarik-tunai', [TarikTunaiController::class, 'index']);
Route::get('tarik-tunai', [TarikTunaiController::class, 'create']);
Route::post('tarik-tunai/store', [TarikTunaiController::class, 'store']);
Route::get('riwayat/tarik-tunai/{id}', [TarikTunaiController::class, 'show']);

//USER SETOR TUNAI
Route::get('riwayat/setor-tunai', [SetorTunaiController::class, 'index']);
Route::get('setor-tunai', [SetorTunaiController::class, 'create']);
Route::post('setor-tunai/store', [SetorTunaiController::class, 'store']);
Route::get('riwayat/setor-tunai/{id}', [SetorTunaiController::class, 'show']);

//USER BAYAR CICILAN
Route::get('riwayat/bayar-cicilan', function() {
    return view('riwayat.bayar-cicilan');
});
Route::get('bayar-cicilan', function() {
    return view('riwayat.user-bayar-cicilan');
});

//USER BAYAR CICILAN BANK