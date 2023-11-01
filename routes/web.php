<?php

use App\Http\Controllers\Admin\AdminPlnController;
use App\Http\Controllers\Admin\AdminPulsaController;
use App\Http\Controllers\Admin\AdminSetorController;
use App\Http\Controllers\Admin\AdminTarikController;
use App\Http\Controllers\Admin\AdminTransferController;
use App\Http\Controllers\AsuransiController;
use App\Http\Controllers\CicilanBank;
use App\Http\Controllers\CicilanBankController;
use App\Http\Controllers\CicilanLeasingController;
use App\Http\Controllers\PlnController;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\SetorTunaiController;
use App\Http\Controllers\TarikTunaiController;
use App\Http\Controllers\TopupController;
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
Route::get('riwayat/cicilan-bank', [CicilanBankController::class, 'index']);
Route::get('cicilan-bank', [CicilanBankController::class, 'create']);
Route::post('cicilan-bank/store', [CicilanBankController::class, 'store']);
Route::get('riwayat/cicilan-bank/{id}', [CicilanBankController::class, 'show']);

//USER BAYAR CICILAN LEASING
Route::get('riwayat/cicilan-leasing', [CicilanLeasingController::class, 'index']);
Route::get('cicilan-leasing', [CicilanLeasingController::class, 'create']);
Route::post('cicilan-leasing/store', [CicilanLeasingController::class, 'store']);
Route::get('riwayat/cicilan-leasing/{id}', [CicilanLeasingController::class, 'show']);

//USER ASURANSI
Route::get('riwayat/asuransi', [AsuransiController::class, 'index']);
Route::get('asuransi', [AsuransiController::class, 'create']);
Route::post('asuransi/store', [AsuransiController::class, 'store']);
Route::get('riwayat/asuransi/{id}', [AsuransiController::class, 'show']);

//USER PULSA
Route::get('pulsa', [PulsaController::class, 'index']);
Route::get('pulsa/create', [PulsaController::class, 'create']);
Route::post('pulsa/store', [PulsaController::class, 'store']);
Route::get('pulsa/{id}', [PulsaController::class, 'show']);

//USER TOPUP
Route::get('topup', [TopupController::class, 'index']);
Route::get('topup/create', [TopupController::class, 'create']);
Route::post('topup/store', [TopupController::class, 'store']);
Route::get('topup/{id}', [TopupController::class, 'show']);

//USER PLN
Route::get('pln', [PlnController::class, 'index']);
Route::get('pln/create', [PlnController::class, 'create']);
Route::post('pln/store', [PlnController::class, 'store']);
Route::get('pln/{id}', [PlnController::class, 'show']);

//ADMIN PAGES
Route::get('/admin', function() {
    return view('layouts.admin');
});

//ADMIN TRANSFER
Route::get('admin/transfer', [AdminTransferController::class, 'index']);
Route::get('admin/transfer/create', [AdminTransferController::class, 'create']);
Route::post('admin/transfer/store', [AdminTransferController::class, 'store']);
Route::get('admin/transfer/edit/{id}', [AdminTransferController::class, 'edit']);
Route::put('admin/transfer/{id}', [AdminTransferController::class, 'update']);
Route::delete('admin/transfer/{id}', [AdminTransferController::class, 'destroy']);
Route::get('admin/transfer/{id}', [AdminTransferController::class, 'show']);

//ADMIN TARIK TUNAI
Route::get('admin/tarik-tunai', [AdminTarikController::class, 'index']);
Route::get('admin/tarik-tunai/create', [AdminTarikController::class, 'create']);
Route::post('admin/tarik-tunai/store', [AdminTarikController::class, 'store']);
Route::get('admin/tarik-tunai/edit/{id}', [AdminTarikController::class, 'edit']);
Route::put('admin/tarik-tunai/{id}', [AdminTarikController::class, 'update']);
Route::delete('admin/tarik-tunai/{id}', [AdminTarikController::class, 'destroy']);
Route::get('admin/tarik-tunai/{id}', [AdminTarikController::class, 'show']);

//ADMIN SETOR TUNAI
Route::get('admin/setor-tunai', [AdminSetorController::class, 'index']);
Route::get('admin/setor-tunai/create', [AdminSetorController::class, 'create']);
Route::post('admin/setor-tunai/store', [AdminSetorController::class, 'store']);
Route::get('admin/setor-tunai/edit/{id}', [AdminSetorController::class, 'edit']);
Route::put('admin/setor-tunai/{id}', [AdminSetorController::class, 'update']);
Route::delete('admin/setor-tunai/{id}', [AdminSetorController::class, 'destroy']);
Route::get('admin/setor-tunai/{id}', [AdminSetorController::class, 'show']);

//ADMIN PULSA
Route::get('admin/pulsa', [AdminPulsaController::class, 'index']);
Route::get('admin/pulsa/create', [AdminPulsaController::class, 'create']);
Route::post('admin/pulsa/store', [AdminPulsaController::class, 'store']);
Route::get('admin/pulsa/edit/{id}', [AdminPulsaController::class, 'edit']);
Route::put('admin/pulsa/{id}', [AdminPulsaController::class, 'update']);
Route::delete('admin/pulsa/{id}', [AdminPulsaController::class, 'destroy']);
Route::get('admin/pulsa/{id}', [AdminPulsaController::class, 'show']);

//ADMIN PLN
Route::get('admin/pln', [AdminPlnController::class, 'index']);
Route::get('admin/pln/create', [AdminPlnController::class, 'create']);
Route::post('admin/pln/store', [AdminPlnController::class, 'store']);
Route::get('admin/pln/edit/{id}', [AdminPlnController::class, 'edit']);
Route::put('admin/pln/{id}', [AdminPlnController::class, 'update']);
Route::delete('admin/pln/{id}', [AdminPlnController::class, 'destroy']);
Route::get('admin/pln/{id}', [AdminPlnController::class, 'show']);