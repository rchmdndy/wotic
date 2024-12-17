<?php

use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
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
| be assigned to the "web" middleware group. Make something great
|
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', function (){
    return view('about');
})->name('about');

// Destination
Route::prefix('/destinasi_wisata')->controller(DestinasiController::class)->name('destination.')->group(function (){
    Route::get('/','fetch_all')->name('all');
    Route::get('/search', 'search_destinasi')->name('search');
    Route::get('/categories', 'categories')->name('categories');
    Route::prefix('/unik')->group(function (){
        Route::get('/','fetch_unik_list')->name('unik.all');
        Route::get('/{id}/detail', 'fetch_detail_wisata_unik')->name('unik.detail');
        });
    Route::get('/{jenis_wisata}','fetch_jenis_wisata')->name('fetch');
    Route::get('/{id}/detail','fetch_detail_wisata')->name('detail');
    });

// Event
Route::prefix('/event')->controller(EventController::class)->name('event.')->group(function (){
    Route::get('/', 'fetch_all')->name('fetch_all');
    Route::get('/{id}/detail', 'detail')->name('detail');
});

// Promo
Route::prefix('/promo')->controller(PromoController::class)->name('promo.')->group(function (){
    Route::get('/', 'fetch_all')->name('index');
    Route::get('redirect', 'fetch_closest_promo')->name('floating-icon');
    Route::get('/{id}/detail', 'detail')->name('detail');

});

// Hotel
Route::prefix('/hotel')->controller(HotelController::class)->name('hotel.')->group(function (){
    Route::get('/', 'index')->name('index');
});

Route::prefix('/layanan')->controller(LayananController::class)->name('layanan.')->group(function (){
    Route::get('/categories', 'index')->name('categories');
    Route::get('/{id}/detail', 'fetch_detail_layanan')->name('detail');
    Route::get('/{jenis_layanan}', 'fetch_jenis_layanan')->name('list');
});

//Route::get('/coba_layout', function (){
//    return view('search.search_results');
//});

Route::get('/map_redirect/{lat}/{lng}', function($lat, $lng){
    return redirect()->away("https://www.google.com/maps?q=$lat,$lng");
})->name('map_redirect');
