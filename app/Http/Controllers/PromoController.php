<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    public function fetch_all()
    {
        return view('promo.list', ['promoList' => $this->fetchJson('http://serverapi.test/api/v1/promo')]);
    }

    public function detail($id)
    {
        return view('promo.detail',['promoDetail' => $this->fetchJson("http://serverapi.test/api/v1/promo/$id/detail")]);
    }
}
