<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotelList = $this->fetchJson(env('API_SERVER')."getAllHotels");

        $hotelCollection = collect($hotelList);

        $hotelList = $hotelCollection->sortByDesc('is_important')->toArray();



        return view('hotel.list', ['hotelList' => $hotelList]);
    }

    public function fetch_kelas_hotel($jenis_hotel){
           $hotelList = $this->fetchJson(env('API_SERVER')."getHotelsType", ['jenis_hotel' => $jenis_hotel]);
//           dd($hotel);

        return view('hotel.list', compact('hotelList', 'jenis_hotel'));
    }
}
