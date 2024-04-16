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
Route::prefix('/event')->controller(EventController::class)->group(function (){
    Route::get('/event/all', 'index')->name('event.index');
    Route::get('/event/fetch_all', 'fetch_all')->name('event.fetch_all');
    Route::get('/event/{id}/detail', 'detail')->name('event.detail');
});

// Destination
Route::prefix('/destinasi_wisata')->controller(DestinasiController::class)->group(function (){
    Route::get('/all','fetch_all')->name('destination.all');
    Route::get('/{jenis_wisata}','fetch_jenis_wisata')->name('destination.fetch');
    Route::get('/{jenis_wisata}/{id}/detail','fetch_detail_wisata')->name('destination.detail');

});
