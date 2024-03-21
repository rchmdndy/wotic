<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function create(){
        $hotel = new Hotel();
        $hotel->nama_hotel = "Test Hotel";
        $hotel->alamat = "Test Alamat";
        $hotel->image = 'sdlkfjsldkfj';
        $hotel->kelas = "Bintang 5";
        $hotel->koordinat = "sekian sekian";
        $hotel->jarak = "sekian sekian";
        $hotel->koordinat_y = 'sekian-sekian';
        $hotel->save();
        return(view('berhasil'));
    }

    public function edit(){

    }
}
