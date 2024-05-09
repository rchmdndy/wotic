<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use App\Models\Tempat;
use Illuminate\Support\Facades\Http;

// Sesuaikan dengan model Anda

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $search_result = Http::withQueryParameters(['search' => $query])
            ->get(env('API_SERVER').'getDestinationByName');

        return view('search_results', ['results' => $search_result, 'query' => $query]);
    }
}
