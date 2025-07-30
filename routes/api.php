<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\SkorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/jadwal/insert', [JadwalController::class, 'insert']);
Route::post('/pemain/insert', [PemainController::class, 'insert']);
Route::post('/tim/insert', [TimController::class, 'insert']);
Route::post('/skor/insert', [SkorController::class, 'insert']);
