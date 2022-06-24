<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/visi_misi', [PageController::class, 'visi_misi']);
Route::get('/pendaftaran', [PageController::class, 'pendaftaran']);
Route::get('/booster', [PageController::class, 'booster']);
Route::get('/psq', [PageController::class, 'psq']);
Route::get('/ota', [PageController::class, 'ota']);
Route::get('/wakaf', [PageController::class, 'wakaf']);
