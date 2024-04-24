<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('welcome', ['event' => $events]);
    }

    public function about()
    {
        return view('about');
    }
}
