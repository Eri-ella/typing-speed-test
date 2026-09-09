<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TexteController;

Route::get('/', [TexteController::class, 'index']);
Route::get('/success', [TexteController::class, 'success']);