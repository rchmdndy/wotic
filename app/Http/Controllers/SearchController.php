<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tempat; // Sesuaikan dengan model Anda

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        $results = Tempat::where('nama', 'like', '%' . $query . '%')
                         ->orWhere('deskripsi', 'like', '%' . $query . '%')
                         ->get();

        return view('search_results', ['results' => $results, 'query' => $query]);
    }
}