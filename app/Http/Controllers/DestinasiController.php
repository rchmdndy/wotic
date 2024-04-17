<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;

class   DestinasiController extends Controller
{
    public function category(){
        return view('destination.categories');
    }

    public function fetch_all()
    {
        return view('destination.all');
    }

    public function fetch_jenis_wisata(string $jenis_wisata){
        return view('destination.list', ['jenis_wisata' => $jenis_wisata]);
    }
    public function fetch_detail_wisata(string $jenis_wisata, $id){
        return view('destination.detail', ['jenis_wisata' => $jenis_wisata, 'id' => $id]);
    }
    public function detail($id)
    {
        $detail = Destinasi::findOrFail($id);
        return view('destination.detail', compact('detail'));
    }
}
