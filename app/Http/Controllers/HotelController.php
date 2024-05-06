<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        return view('hotel.list', ['hotelList' => $this->fetchJson('http://serverapi.test/api/v1/hotels')]);
    }

    public function detail($id){
        return view('hotel.detail', ['hotel' => $this->fetchJson("http://serverapi.test/api/v1/hotels/$id/detail")]);
    }
}
