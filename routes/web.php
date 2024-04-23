<?php

use App\Http\Controllers\PromoController;
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
| be assigned to the "web" middleware group. Make something great<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Document</title>
</head>
<body>

</body>
</html>
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');

// Event
Route::prefix('/event')->controller(EventController::class)->name('event.')->group(function (){
    Route::get('/', 'fetch_all')->name('fetch_all');
    Route::get('/{id}/detail', 'detail')->name('detail');
});

// Destination
Route::prefix('/destinasi_wisata')->controller(DestinasiController::class)->name('destination.')->group(function (){
    Route::get('/','fetch_all')->name('all');
    Route::get('/category', 'category')->name('category');
    Route::get('/{jenis_wisata}','fetch_jenis_wisata')->name('fetch');
    Route::get('/{jenis_wisata}/{id}/detail','fetch_detail_wisata')->name('detail');
});

// Promo
Route::prefix('/promo')->controller(PromoController::class)->name('promo.')->group(function (){
    Route::get('/', 'fetch_all')->name('fetch_all');
    Route::get('/{id}/detail', 'detail')->name('detail');
});
// hotel
Route::prefix('/hotel')->controller(HotelController::class)->name('hotel.')->group(function (){
    Route::get('/getAllHotel', 'index')->name('index');
});