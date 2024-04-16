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

Route::prefix('/v1')->group(function (){
    Route::prefix('destination')->controller(\App\Http\Controllers\Api\DestinationApiController::class)->group(function(){
         Route::get('/getAll/{jenis_wisata}', 'getDestinationType')->name('api.destination.type');
         Route::get('/getDetail/{jenis_wisata}/{id}', 'getDestinationDetail')->name('api.destination.detail');
         Route::get('/ambilsemua', 'ambilSemua')->name('ambil.semua') ;
    });
//   Route::get();
});
