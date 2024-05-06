<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use Illuminate\Support\Facades\Http;

class DestinasiController extends Controller
{

    public function fetch_all()
    {
        $destinationList = $this->fetchJson(env("API_SERVER")."getAllDestination");

        // Coordinates of the two points
        $destinationList = $this->processDistance($destinationList);

        // Pass the updated destination list to the view
        return view('destination.all', [
            'destinationList' => $destinationList
        ]);
    }
    public function fetch_jenis_wisata(string $jenis_wisata){
        // Fetch destinations from API
        $destinationList = $this->fetchJson(env("API_SERVER")."getDestinationType?jenis_wisata=$jenis_wisata");

        // Coordinates of the two points
        $destinationList = $this->processDistance($destinationList);

        // Pass the updated destination list to the view
        return view('destination.list', [
            'destinationList' => $destinationList
        ]);
    }

    public function fetch_detail_wisata($id){
        $hotelList = $this->fetchJson(env("API_SERVER")."getAllHotels");
        $destinationDetail = $this->fetchJson(env("API_SERVER")."getDetailDestination/$id");

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
        $hotels = $hotels->take(15);

        // Convert back to array
        $hotelList = $hotels->toArray();

        return view('destination.detail', [
            'hotelList' => $hotelList,
            'destinationDetail' => $destinationDetail,
        ]);
    }

    public function categories(){
        return view('destination.categories');
    }

    /**
     * @param mixed $destinationList
     * @return array
     */
    public function processDistance(mixed $destinationList): array
    {
        $koordinat_semarang = ['-6.981445898419028', '110.41362708674362'];
        $koordinat_jogja = ['-7.886521344500803', '110.42558146813681'];

        // Calculate distances for each destination
        $destinationList = array_map(function ($destination) use ($koordinat_semarang, $koordinat_jogja) {
            $destination['jarak_dari_semarang'] = $this->calculateDistance($destination['koordinat_x'], $destination['koordinat_y'], $koordinat_semarang[0], $koordinat_semarang[1]);
            $destination['jarak_dari_jogja'] = $this->calculateDistance($destination['koordinat_x'], $destination['koordinat_y'], $koordinat_jogja[0], $koordinat_jogja[1]);
            return $destination;
        }, $destinationList);
        return $destinationList;
    }

}
