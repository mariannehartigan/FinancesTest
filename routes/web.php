<?php

use App\Http\Controllers\IncomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IncomeController::class, 'index']);
Route::get('/hello', [IncomeController::class, 'show']);