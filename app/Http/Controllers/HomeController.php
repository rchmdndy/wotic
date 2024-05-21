<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        Carbon::setLocale('id');
        $events = $this->fetchJson("http://serverapi.test/api/v1/events");
        $attractiveDestinations = $this->fetchJson(env('API_SERVER').'getAllAttractiveDestination');
        $bannerDestinatons = $this->fetchJson(env('API_SERVER').'getHighlightDestinations');
        $currentMonth = Carbon::now()->monthName;
        return view('welcome', [
            'eventList' => $events,
            'attractiveDestinationList' => $attractiveDestinations,
            'bannerDestinationList' => $bannerDestinatons,
            'currentMonth' => $currentMonth
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
