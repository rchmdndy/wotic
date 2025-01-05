<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengamananController extends Controller
{
    public function fetch_detail_pengamanan($id)
    {
        $pengamanan = $this->fetchJson(env('API_SERVER')."getDetailDestination/$id");

        // Explode the transportasi string into an array
        $transportasiArray = array_map(function ($value) {
            return filter_var($value, FILTER_VALIDATE_BOOLEAN);
        }, explode(',', $pengamanan['destinasi']['transportasi']));

        // Add transportasiArray to the destination array
        $pengamanan['transportasiArray'] = $transportasiArray;

        $jeniswisata = explode(',', $pengamanan['destinasi']['jenis_wisata']);

        $pengamanan['jenis_wisata'] = $jeniswisata;


        return view('pengamanan.detail', [
            'destinationDetail' => $pengamanan,
            'transportasiArray' => $transportasiArray,
        ]);
    }

    public function fetch_pengamanan_list($jenisPengamanan){
        $listPengamanan = $this->fetchJson(env('API_SERVER')."getDestinationType", ['jenis_wisata' => $jenisPengamanan]);
//        dd($kulinerList);

//        dd($layananList);
        if (isset($listPengamanan['Error'])){
            return view('pengamanan.list', [
                'destinationList' => $listPengamanan,
                'jenis_wisata' => '']);
        }
        $listPengamanan = $this->processDistance($listPengamanan);
        return view('pengamanan.list', [
            'destinationList' => $listPengamanan,
            'jenis_wisata' => $jenisPengamanan
        ]);
    }
}
