<?php

use App\Http\Controllers\BeasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route penghubung Controller dan view
Route::get('/', [BeasiswaController::class, 'home'])->name('/');
Route::get('/beasiswa', [BeasiswaController::class, 'beasiswa'])->name('beasiswa');
Route::get('/daftar', [BeasiswaController::class, 'daftar'])->name('daftar');
Route::post('/daftar', [BeasiswaController::class, 'store'])->name('store');
Route::get('/grafik', [BeasiswaController::class, 'grafik'])->name('grafik');
Route::get('/hasil', [BeasiswaController::class, 'hasil'])->name('hasil');