<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtractiveDestinationController extends Controller
{
    public function fetch_all()
    {
        return view('attractive.list');
    }
}
