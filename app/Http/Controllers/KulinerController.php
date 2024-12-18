<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function fetch_detail_kuliner($id){
        $detailKuliner = $this->fetchJson(env('API_SERVER')."getDetailDestination/$id");
//        dd($detailKuliner);

        // Explode the transportasi string into an array
        $transportasiArray = array_map(function ($value) {
            return filter_var($value, FILTER_VALIDATE_BOOLEAN);
        }, explode(',', $detailKuliner['destinasi']['transportasi']));

        // Add transportasiArray to the destination array
        $detailKuliner['transportasiArray'] = $transportasiArray;

        $jeniswisata = explode(',', $detailKuliner['destinasi']['jenis_wisata']);

        $detailKuliner['jenis_wisata'] = $jeniswisata;


        return view('kuliner.detail', [
            'destinationDetail' => $detailKuliner,
            'transportasiArray' => $transportasiArray,
        ]);
    }

    public function fetch_jenis_kuliner($jenisKuliner){
        $kulinerList = $this->fetchJson(env('API_SERVER')."getDestinationType", ['jenis_wisata' => $jenisKuliner]);
//        dd($kulinerList);

//        dd($layananList);
        if (isset($kulinerList['Error'])){
            return view('kuliner.list', [
                'destinationList' => $kulinerList,
                'jenis_wisata' => '']);
        }
        $kulinerList = $this->processDistance($kulinerList);
        return view('kuliner.list', [
            'destinationList' => $kulinerList,
            'jenis_wisata' => $jenisKuliner
        ]);
    }
}
