<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    public function fetch_all()
    {
        return view('promo.list');
    }

    public function detail($id)
    {
        $promo = Promo::findOrFail($id);
        return view('promo.detail', compact('promo'));
    }
}