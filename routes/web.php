<?php

use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JadwalController::class, 'index']);
Route::post('/tambah-jadwal', [JadwalController::class, 'store']);
Route::get('/hapus-jadwal/{id}', [JadwalController::class, 'delete']);
Route::post('/update-jadwal', [JadwalController::class, 'update']);