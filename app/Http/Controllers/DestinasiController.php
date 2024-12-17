<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinasiController extends Controller
{

    public function fetch_all()
    {
        $destinationList = $this->fetchJson("http://woticadmin.test/api/v2/wonosobo/getAllDestination");
        if (isset($destinationList['Error'])){
            return view('destination.list', [
                'destinationList' => $destinationList,
                'jenis_wisata' => '']);
        }
        // Coordinates of the two points
        $destinationList = $this->processDistance($destinationList);

        // Pass the updated destination list to the view
        return view('destination.list', [
            'destinationList' => $destinationList,
            'jenis_wisata' => ''
        ]);
    }
    public function fetch_unik_list()
    {
        return view('attractive.list', ['attractiveList' => $this->fetchJson(env('API_SERVER')."getAllAttractiveDestination")]);
    }


    public function fetch_jenis_wisata(string $jenis_wisata){
        // Fetch destinations from API
        $destinationList = $this->fetchJson(env('API_SERVER')."getDestinationType", ['jenis_wisata' => $jenis_wisata]);
        if (isset($destinationList['Error'])){
            return view('destination.list', [
                'destinationList' => $destinationList,
                'jenis_wisata' => '']);
        }
        // Coordinates of the two points
        $destinationList = $this->processDistance($destinationList);

        // Pass the updated destination list to the view
        return view('destination.list', [
            'destinationList' => $destinationList,
            'jenis_wisata' => $jenis_wisata
        ]);
    }

    public function fetch_detail_wisata($id){
        $hotelList = $this->fetchJson(env("API_SERVER")."getAllHotels");
        $destination = $this->fetchJson(env('API_SERVER')."getDetailDestination/$id");

        // Explode the transportasi string into an array
        $transportasiArray = array_map(function ($value) {
            return filter_var($value, FILTER_VALIDATE_BOOLEAN);
        }, explode(',', $destination['destinasi']['transportasi']));

        // Add transportasiArray to the destination array
        $destination['transportasiArray'] = $transportasiArray;

        $jeniswisata = explode(',', $destination['destinasi']['jenis_wisata']);

        $destination['jenis_wisata'] = $jeniswisata;


        $hotelCollection = collect($hotelList);

        $hotels = $hotelCollection->filter(function ($hotel) {
            return $hotel['koordinat'] != null && $hotel['koordinat_y'] != null;
        });

        // Calculate distance for each hotel and destination
        $hotels->transform(function ($hotel) use ($destination) {
            $latitudeHotel = (float) $hotel['koordinat'];
            $longitudeHotel = (float) $hotel['koordinat_y'];
            $latitudeDestination = (float) $destination['destinasi']['koordinat_x'];
            $longitudeDestination = (float) $destination['destinasi']['koordinat_y'];

            // Check if any of the parsed values are 0
            if ($latitudeHotel == 0 || $longitudeHotel == 0 || $latitudeDestination == 0 || $longitudeDestination == 0) {
                $hotel['distance_to_destination'] = null;
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

        // Cut the list to 15 hotels
        $hotels = $hotels->take(15);

        // Convert back to array
        $hotelList = $hotels->toArray();

        return view('destination.detail', [
            'hotelList' => $hotelList,
            'destinationDetail' => $destination,
            'transportasiArray' => $transportasiArray,
        ]);
    }
    public function fetch_detail_wisata_unik($id){
        $destinationDetail = $this->fetchJson(env('API_SERVER')."getDetailAttractiveDestination/$id");

        $destinationDetail['jenis_wisata'] = explode(',', $destinationDetail['destinasi']['jenis_wisata']);
        return view('attractive.detail', ['destinationDetail' => $destinationDetail]);
    }
    public function search_destinasi(Request $request)
    {
        $query = $request->input('search');

        $search_result = $this->fetchJson(env('API_SERVER').'getDestinationByName', ['search' => $query]);
        if (isset($search_result['Error'])){
            return view('destination.search_results', ['destinationList' => $search_result, 'query' => $query]);
        }

        $search_result = $this->processDistance($search_result);

        return view('destination.search_results', ['destinationList' => $search_result, 'query' => $query]);
    }


    public function categories(){
        return view('destination.categories');
    }


}
