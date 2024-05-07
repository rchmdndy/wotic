<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function fetch_all()
    {
        $events = $this->fetchJson(env('API_SERVER')."getEventsForCurrentMonth");

        $eventsByMonth = [];
        foreach ($events as $event) {
            $month = $event['bulan_mulai'];
            if (!isset($eventsByMonth[$month])) {
                $eventsByMonth[$month] = [];
            }
            $eventsByMonth[$month][] = $event;
        }

        return view('event.list', ['eventList' => $eventsByMonth]);
    }


    public function detail($id)
    {
        return view('event.detail', ['eventDetail' => $this->fetchJson(env("API_SERVER")."getDetailEvent/$id")]);
    }
}
