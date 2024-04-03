<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('event.index', compact('events'));
    }
    
    public function detail($id)
    {
        $event = Event::findOrFail($id);
        return view('event.detail', compact('event'));
    }
}
