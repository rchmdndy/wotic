<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('/v1')->name('api.')->group(function (){
    Route::prefix('destination')->controller(\App\Http\Controllers\Api\DestinationApiController::class)->name('destination.')->group(function(){
         Route::get('/getAll/{jenis_wisata}', 'getDestinationType')->name('type');
         Route::get('/getDetail/{jenis_wisata}/{id}', 'getDestinationDetail')->name('detail');
         Route::get('/ambilsemua', 'ambilSemua')->name('ambil.semua') ;
    });
    Route::prefix('event')->controller(\App\Http\Controllers\Api\EventApiController::class)->name('event.')->group(function (){
       Route::get('/getAll', 'getAllEvents')->name('getall');
    });
//   Route::get();
});
