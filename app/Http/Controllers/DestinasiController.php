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
        return view('destination.list');
    }
    public function fetch_all()
    {
        return view('destination.all');
    }
    public function detail($id)
    {
        $detail = Destinasi::findOrFail($id);
        return view('destination.detail', compact('detail'));
    }
}
