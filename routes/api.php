<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rute untuk mengambil semua data karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);

// Rute untuk menambah data karyawan
Route::post('/karyawan', [KaryawanController::class, 'store']);

// Rute untuk mengambil data karyawan berdasarkan ID
Route::get('/karyawan/{id}', [KaryawanController::class, 'show']);

// Rute untuk mengubah data karyawan berdasarkan ID
Route::put('/karyawan/{id}', [KaryawanController::class, 'update']);

// Rute untuk menghapus data karyawan berdasarkan ID
Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy']);
