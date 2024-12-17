<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(){
        return view('layanan.categories');
    }

    public function fetch_jenis_layanan($jenis_layanan){
        $layananList = $this->fetchJson(env('API_SERVER')."getDestinationType", ['jenis_wisata' => $jenis_layanan]);
//        dd($layananList);
        if (isset($layananList['Error'])){
            return view('destination.list', [
                'destinationList' => $layananList,
                'jenis_wisata' => '']);
        }
        $layananList = $this->processDistance($layananList);
        return view('layanan.list', [
            'destinationList' => $layananList,
            'jenis_wisata' => $jenis_layanan
        ]);

    }

//    public function fetch_detail_layanan($id){
//        $layanan = $this->fetchJson(env('API_SERVER')."getDetailDestination/$id");
////        dd($layanan);
//        $transportasiArray = array_map(function ($value) {
//            return filter_var($value, FILTER_VALIDATE_BOOLEAN);
//        }, explode(',', $layanan['destinasi']['transportasi']));
//        $layanan['transportasiArray'] = $transportasiArray;
//
//        return view('layanan.detail', [
//            'destinationDetail' => $layanan,
//            'transportasiArray' => $transportasiArray
//        ]);
//    }
    public function fetch_detail_layanan($id){
        $layanan = $this->fetchJson(env('API_SERVER')."getDetailDestination/$id");

        // Explode the transportasi string into an array
        $transportasiArray = array_map(function ($value) {
            return filter_var($value, FILTER_VALIDATE_BOOLEAN);
        }, explode(',', $layanan['destinasi']['transportasi']));

        // Add transportasiArray to the destination array
        $layanan['transportasiArray'] = $transportasiArray;

        $jeniswisata = explode(',', $layanan['destinasi']['jenis_wisata']);

        $layanan['jenis_wisata'] = $jeniswisata;


        return view('layanan.detail', [
            'destinationDetail' => $layanan,
            'transportasiArray' => $transportasiArray,
        ]);
    }

}
