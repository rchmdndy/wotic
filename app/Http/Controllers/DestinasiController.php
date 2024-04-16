<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;

class   DestinasiController extends Controller
{
    public function index(){
        return view('destination.index');
    }
    public function fetch_destinasi()
    {
        $destinasis = Destinasi::with('images')->get();
        return view('destination.list', compact('destinasis'));
    }
    public function detail($id)
    {
        $detail = Destinasi::findOrFail($id);
        return view('destination.detail', compact('detail'));
    }
}
