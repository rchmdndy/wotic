<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    public function fetch_all()
    {
        return view('promo.list', ['promoList' => $this->fetchJson(env('API_SERVER').'getAllPromo')]);
    }

    public function detail($id)
    {
        return view('promo.detail',['promoDetail' => $this->fetchJson(env('API_SERVER')."getDetailPromo/$id")]);
    }
}
