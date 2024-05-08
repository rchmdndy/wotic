<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtractiveDestinationController extends Controller
{
    public function fetch_all()
    {
        return view('attractive.list', ['attractiveList' => $this->fetchJson(env('API_SERVER')."getAllAttractiveDestination")]);
    }

    public function detail($id){
        $destinationDetail = $this->fetchJson(env('API_SERVER')."getDetailAttractiveDestination/$id");

        $destinationDetail['jenis_wisata'] = explode(',', $destinationDetail['destinasi']['jenis_wisata']);
        return view('attractive.detail', ['destinationDetail' => $destinationDetail]);
    }
}
