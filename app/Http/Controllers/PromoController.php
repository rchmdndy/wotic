<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    public function fetch_all()
    {
        $promoList = $this->fetchJson(env('API_SERVER').'getAllPromo');

        $promoCollection = collect($promoList);

        $currentDate = Carbon::now();


        $sortedPromoCollection = $promoCollection->sortBy(function ($promo) use ($currentDate) {
            $promoStartDate = Carbon::parse($promo['tanggal_mulai']);

            if ($promoStartDate->month == $currentDate->month){
                return $promoStartDate->greaterThanOrEqualTo($currentDate);
            }
            else if ($promoStartDate->greaterThanOrEqualTo($currentDate)){
                return $promoStartDate->timestamp;
            }else if ($promoStartDate->lessThan($currentDate)){
                return PHP_INT_MAX;
            }
            else{
                return null;
            }
        });

        $promoList = $sortedPromoCollection->values()->toArray();

        return view('promo.list', ['promoList' => $promoList]);
    }

    public function detail($id)
    {
        return view('promo.detail',['promoDetail' => $this->fetchJson(env('API_SERVER')."getDetailPromo/$id")]);
    }
}
