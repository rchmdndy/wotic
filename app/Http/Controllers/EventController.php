<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function fetch_all()
    {
        Carbon::setLocale('id');
        $events = $this->fetchJson(env('API_SERVER')."getEventsForCurrentMonth");
        $currentMonth = Carbon::now()->monthName;

        return view('event.list', ['eventList' => $events, 'currentMonth' => $currentMonth]);
    }


    public function detail($id)
    {
        return view('event.detail', ['eventDetail' => $this->fetchJson(env('API_SERVER')."getDetailEvent/$id")]);
    }
}
