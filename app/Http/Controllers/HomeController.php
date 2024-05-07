<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $events = $this->fetchJson(env('API_SERVER')."getEventsForCurrentMonth");
        $attractiveDestinations = $this->fetchJson(env('API_SERVER').'getAllAttractiveDestination');
        return view('welcome', [
            'eventList' => $events,
            'attractiveDestinationList' => $attractiveDestinations
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
