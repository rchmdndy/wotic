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
        $currentYear = Carbon::now()->year;


        $sortedPromoCollection = $promoCollection->sortBy(function ($promo) use ($currentDate) {
            $promoStartDate = Carbon::parse($promo['tanggal_mulai']);

            // Calculate the difference in days
            $diffInDays = $promoStartDate->diffInDays($currentDate);

            // Determine a secondary key based on the name to ensure proper sorting
            $secondaryKey = $promo['nama_promo'];

            if ($promoStartDate->month == $currentDate->month) {
                return [$diffInDays, $secondaryKey];
            } else if ($promoStartDate->greaterThanOrEqualTo($currentDate)) {
                return [$diffInDays, $secondaryKey];
            } else if ($promoStartDate->lessThan($currentDate)) {
                // Use a high value for past promos to push them to the end
                return [PHP_INT_MAX, $secondaryKey];
            } else {
                return [PHP_INT_MAX, $secondaryKey];
            }
        });

            $promoList = $sortedPromoCollection->values()->toArray();

        foreach ($promoList as &$promoDetail) { // Note the & to make $promoDetail a reference
            $promoDetail = $this->dateFormat($promoDetail);
        }

        return view('promo.list', ['promoList' => $promoList, 'currentYear' => $currentYear]);
    }

    public function detail($id)
    {
        $promoDetail = $this->fetchJson(env('API_SERVER')."getDetailPromo/$id");

        // Parse and format the dates
        $promoDetail = $this->dateFormat($promoDetail);


        return view('promo.detail',['promoDetail' => $promoDetail]);
    }

    public function fetch_closest_promo(){
        $promoList = $this->fetchJson(env('API_SERVER').'getAllPromo');
        Carbon::setLocale('id');
        $promoCollection = collect($promoList);


        $currentDate = Carbon::now();

        $promoCollection = $promoCollection->map(function ($promo) use ($currentDate) {
            $promodate = Carbon::parse($promo['tanggal_mulai']);
            $promo['diff_in_days'] = $promodate->diffInDays($currentDate);
            return $promo;
        });

        // Sort the collection by 'diff_in_days' and then by 'nama_promo'
        $promoCollection = $promoCollection->sortBy([
            ['diff_in_days', 'asc'],
            ['nama_promo', 'asc']
        ]);



        // Get the closest promo
        $closestPromo = $promoCollection->first();

        return redirect()->route('promo.detail', ['id' => $closestPromo['id']]);

    }

}
