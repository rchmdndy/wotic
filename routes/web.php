<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/event', function () {
    return view('event');
});

Route::get('/search', 'SearchController@index')->name('search');

Route::get('/hotel/store', [\App\Http\Controllers\HotelController::class, 'create'])->name('hotel.create');
