<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinasiController;
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

Route::get('/', [HomeController::class, 'index'])->name('welcome');


// Event
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/event/fetch_all', [EventController::class, 'fetch_all'])->name('event.fetch_all');
Route::get('/event/{id}/detail', [EventController::class, 'detail'])->name('event.detail');
// Destination
Route::get('/destinasi-wisata',[DestinasiController::class, 'index'])->name('destination.index');
Route::get('/destinasi-wisata/wisata-alam',[DestinasiController::class, 'fetch_destinasi'])->name('destination.list');
Route::get('/destinasi-wisata/wisata-alam/{id}/detail',[DestinasiController::class, 'detail'])->name('destination.detail');
