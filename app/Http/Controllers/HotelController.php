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
}

