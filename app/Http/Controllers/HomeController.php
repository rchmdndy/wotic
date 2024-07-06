<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        Carbon::setLocale('id');
        $events = $this->fetchJson(env("API_SERVER")."getEventsForCurrentMonth");
        $attractiveDestinations = $this->fetchJson(env('API_SERVER').'getAllAttractiveDestination');
        $bannerDestinatons = $this->fetchJson(env('API_SERVER').'getHighlightDestinations');
        $promo = array_reverse($this->fetchJson(env('API_SERVER').'getAllPromo'));
        $currentMonth = Carbon::now()->monthName;
        return view('welcome', [
            'eventList' => $events,
            'promoList' => $promo,
            'attractiveDestinationList' => $attractiveDestinations,
            'bannerDestinationList' => $bannerDestinatons,
            'currentMonth' => $currentMonth
        ]);
    }
}
