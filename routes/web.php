<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TriangleController;
use App\Http\Controllers\SpiralController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/home');
})->name('home');

Route::name('triangle.')->prefix('triangle')->group(function () {
    Route::get('/encryption', [TriangleController::class, 'encryptionPage'])->name('encryption');
    Route::post('/encryption', [TriangleController::class, 'encrypt'])->name('encrypt');
    Route::get('/decryption', [TriangleController::class, 'decryptionPage'])->name('decryption');
    Route::post('/decrypt', [TriangleController::class, 'decrypt'])->name('decrypt');
});

Route::name('spiral.')->prefix('spiral')->group(function () {
    Route::get('/encryption', [SpiralController::class, 'encryptionPage'])->name('encryption');
    Route::post('/encryption', [SpiralController::class, 'encrypt'])->name('encrypt');
    Route::get('/decryption', [SpiralController::class, 'decryptionPage'])->name('decryption');
    Route::post('/decryption', [SpiralController::class, 'decrypt'])->name('decrypt');
});