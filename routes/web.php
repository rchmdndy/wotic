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

Route::get('/', [HomeController::class, 'index'])->name('index');

// Event
Route::prefix('/event')->controller(EventController::class)->name('event.')->group(function (){
    Route::get('/event/all', 'index')->name('index');
    Route::get('/event/fetch_all', 'fetch_all')->name('fetch_all');
    Route::get('/event/{id}/detail', 'detail')->name('detail');
});

// Destination
Route::prefix('/destinasi_wisata')->controller(DestinasiController::class)->name('destination.')->group(function (){
    Route::get('/all','fetch_all')->name('all');
    Route::get('/category', 'category')->name('category');
    Route::get('/{jenis_wisata}','fetch_jenis_wisata')->name('fetch');
    Route::get('/{jenis_wisata}/{id}/detail','fetch_detail_wisata')->name('detail');

});
