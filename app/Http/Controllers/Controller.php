<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function fetchJson(string $link, array $queryParam = []){
        try {
            $apiJson = Http::withOptions(["verify" => true])->get($link, $queryParam);
            if ($apiJson->successful()){
                $data = $apiJson->json();
            }else{
                $data = [];
            }
        }catch (ConnectionException $e){
            $data = ["Error" => $e];
        }
        return $data;
    }

    public function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        // Convert latitude and longitude from degrees to radians
        $lat1 = deg2rad((float)$lat1);
        $lon1 = deg2rad((float)$lon1);
        $lat2 = deg2rad((float)$lat2);
        $lon2 = deg2rad((float)$lon2);

        // Earth radius in kilometers
        $earthRadius = 6371;

        // Haversine formula
        $deltaLat = $lat2 - $lat1;
        $deltaLon = $lon2 - $lon1;
        $a = sin($deltaLat / 2) * sin($deltaLat / 2) + cos($lat1) * cos($lat2) * sin($deltaLon / 2) * sin($deltaLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earthRadius * $c;
        $rounded_distance = number_format($distance, 2);
        return $rounded_distance; // Distance in kilometers
    }

    /**
     * @param mixed $dataDetail
     * @return mixed
     */
    public function dateFormat(mixed $dataDetail): mixed
    {
        try {
            // Assuming the date format in the API response is 'd-m-Y'
            $tanggalMulai = Carbon::parse($dataDetail['tanggal_mulai']);
            $tanggalSelesai = Carbon::parse($dataDetail['tanggal_selesai']);

            // Set locale to Indonesian
            Carbon::setLocale('id');

            // Format the dates
            $dataDetail['tanggal_mulai'] = $tanggalMulai->translatedFormat('l, j F Y');
            $dataDetail['tanggal_selesai'] = $tanggalSelesai->translatedFormat('l, j F Y');
        } catch (\Exception $e) {
            // Handle invalid date format
            $dataDetail['tanggal_mulai'] = 'Invalid date';
            $dataDetail['tanggal_selesai'] = 'Invalid date';
        }
        return $dataDetail;
    }

}
