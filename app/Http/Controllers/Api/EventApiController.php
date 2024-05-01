<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventApiController extends Controller
{
    public function getAllEvents(){
        $events = Event::all();

        $eventList = $events->map(function ($event) {
            // Convert tanggal_mulai and tanggal_selesai to date-time format
            $event->tanggal_mulai = Carbon::parse($event->tanggal_mulai)->toDateTimeString();
            $event->tanggal_selesai = Carbon::parse($event->tanggal_selesai)->toDateTimeString();

            return $event;
        })->all();

        return response()->json($eventList);
    }
}
