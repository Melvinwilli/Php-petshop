<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PenitipanController;
use App\Http\Controllers\PricelistController;
use App\Http\Controllers\TransactionMasterController;
use App\Http\Controllers\TransactionDetailController;
use App\Http\Controllers\DashboardController;

Route::resource('member', MemberController::class);

Route::resource('category', CategoryController::class);

Route::resource('penitipan', PenitipanController::class);

Route::resource('pricelist', PricelistController::class);

Route::resource(
    'transaction-master',
    TransactionMasterController::class
)->parameters([
    'transaction-master' => 'transactionMaster'
]);

Route::get(
    'transaction-master/{transactionMaster}/detail/create',
    [TransactionDetailController::class, 'create']
)->name('transaction-detail.create');

Route::post(
    'transaction-master/{transactionMaster}/detail',
    [TransactionDetailController::class, 'store']
)->name('transaction-detail.store');

Route::delete(
    'transaction-detail/{transactionDetail}',
    [TransactionDetailController::class, 'destroy']
)->name('transaction-detail.destroy');

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');