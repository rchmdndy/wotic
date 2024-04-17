<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function fetch_all()
    {
        return view('event.list');
    }

    public function detail($id)
    {
        $event = Event::findOrFail($id);
        return view('event.detail', compact('event'));
    }
}
