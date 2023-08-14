<?php

use App\Http\Controllers\DaduController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UlarController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/dadu', [DaduController::class, 'index']);
Route::get('/ular', [UlarController::class, 'index']);
Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');