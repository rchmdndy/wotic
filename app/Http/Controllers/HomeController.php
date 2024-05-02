<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $events = $this->fetchJson('http://serverapi.test/api/v1/events');
        $attractiveDestinations = $this->fetchJson('http://serverapi.test/api/v1/attractiveDestination');
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
