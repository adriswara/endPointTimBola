<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\SkorController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pemain/showAll', [PemainController::class, 'showAll']);
Route::get('/tim/showAll', [TimController::class, 'showAll']);
Route::get('/jadwal/showAll', [JadwalController::class, 'showAll']);
Route::get('/skor/showAll', [SkorController::class, 'showAll']);
Route::get('/report/showAll', [ReportController::class, 'showAll']);
// 
// Route::post('/jadwal/insert', [JadwalController::class, 'insert']);
