<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MasterChartController;
use App\Models\MasterChart;

Route::resource('/category', CategoryController::class);

Route::resource('/coa', MasterChartController::class);
