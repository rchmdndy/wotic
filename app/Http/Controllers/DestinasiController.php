<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use Illuminate\Support\Facades\Http;

class DestinasiController extends Controller
{
    public function fetch_all()
    {
        return view('destination.all', [
            'destinationList' => $this->fetchJson("http://serverapi.test/api/v1/destinations") // -> $data
        ]);
    }
    public function fetch_jenis_wisata(string $jenis_wisata){
        return view('destination.list', [
            'destinationList' => $this->fetchJson("http://serverapi.test/api/v1/destinations/getType?jenis_wisata=$jenis_wisata")
        ]);
    }
    public function fetch_detail_wisata($id){
        $hotelList = $this->fetchJson("http://serverapi.test/api/v1/hotels");
        $destinationDetail = $this->fetchJson("http://serverapi.test/api/v1/destinations/$id/detail");

        $hotelCollection = collect($hotelList);

        $hotels = $hotelCollection->filter(function ($hotel) {
            return $hotel['koordinat'] != null && $hotel['koordinat_y'] != null;
        });
        // Calculate distance for each hotel and destination
        $hotels->transform(function ($hotel) use ($destinationDetail) {
            $latitudeHotel = (float) $hotel['koordinat'];
            $longitudeHotel = (float) $hotel['koordinat_y'];
            $latitudeDestination = (float) $destinationDetail['destinasi']['koordinat_x'];
            $longitudeDestination = (float) $destinationDetail['destinasi']['koordinat_y'];

            // Check if any of the parsed values are 0
            if ($latitudeHotel == 0 || $longitudeHotel == 0 || $latitudeDestination == 0 || $longitudeDestination == 0) {
                // Handle the special case, such as skipping the calculation or treating it differently
                // For example, you can set distance_to_destination to a default value or null
                $hotel['distance_to_destination'] = null; // Or any default value you prefer
            } else {
                // Calculate distance for each hotel and destination
                $hotel['distance_to_destination'] = $this->calculateDistance(
                    $latitudeHotel,
                    $longitudeHotel,
                    $latitudeDestination,
                    $longitudeDestination
                );
            }

            return $hotel;
        });


        // Sort hotels by distance
        $hotels = $hotels->sortBy('distance_to_destination')->sortByDesc('is_important')->filter(function ($hotels){
            return $hotels['distance_to_destination'] != null;
        });

        // Cut the list to 10 hotels
        $hotels = $hotels->take(10);

        // Convert back to array
        $hotelList = $hotels->toArray();

        return view('destination.detail', [
            'hotelList' => $hotelList,
            'destinationDetail' => $destinationDetail,
        ]);
    }
            // array jadiin collection -> sort by is_important

    public function categories(){
        return view('destination.categories');
    }

}
