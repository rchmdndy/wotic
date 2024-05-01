<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        return view('hotel.list');
    }
    public function detail($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hotel.detail', compact('hotel'));
    }
}
