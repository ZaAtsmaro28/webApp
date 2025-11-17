<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MasterChartController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('/category', CategoryController::class);

Route::resource('/coa', MasterChartController::class);

Route::resource('/transaction', TransactionController::class);
