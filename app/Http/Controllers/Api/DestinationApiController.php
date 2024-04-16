<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\DestinasiImages;
use Illuminate\Http\Request;

class DestinationApiController extends Controller
{
    public function getDestinationType(string $jenis_wisata)
    {
        $destinasis = Destinasi::select('id', 'nama_destinasi', 'desa', 'tiket_weekend_local')
            ->where('jenis_wisata', 'like', ('%'.$jenis_wisata.'%'))
            ->get();

        $destinasiList = $destinasis->map(function ($destinasi) {

            $images = DestinasiImages::where('destinasi_id', $destinasi->id)->get(); // Mengambil semua gambar
            $firstImage = $images->isNotEmpty() ? asset('storage/' . $images->first()->image_path) : 'default.jpg'; // Mengambil gambar pertama dalam kurung siku atau null jika tidak ada gambar

            $destinasi->image = $firstImage;
            return $destinasi;
        })->all();

        return response()->json($destinasiList);
    }

    public function getDestinationDetail(string $jenis_wisata, $id)
    {
        $destinasi = Destinasi::where('jenis_wisata', 'like', ('%'.$jenis_wisata.'%'))->findOrFail($id);

        if (!$destinasi) {
            return response()->json(['message' => 'Destinasi not found'], 404);
        }

        // Menambahkan 1 ke kolom viewer pada Destinasi
        $destinasi->increment('viewer');

        // Mengambil hanya 'image_path' dari koleksi 'images' dan menambahkan "storage/"
        $image = DestinasiImages::select('image_path')->where('destinasi_id', $destinasi->id)->get();


        // Menggabungkan data destinasi dan image_paths
        $data = [
            'destinasi' => $destinasi,
            'image' => $image,
        ];

        return response()->json($data);
    }

    public function ambilSemua()
    {
        $destinasis = Destinasi::select('id', 'nama_destinasi', 'desa', 'tiket_weekend_local')->get();

        $destinasiList = $destinasis->map(function ($destinasi) {

            $images = DestinasiImages::where('destinasi_id', $destinasi->id)->get(); // Mengambil semua gambar
            $firstImage = $images->isNotEmpty() ? asset('storage/' . $images->first()->image_path) : 'default.jpg'; // Mengambil gambar pertama dalam kurung siku atau null jika tidak ada gambar

            $destinasi->image = $firstImage;
            return $destinasi;
        })->all();

        return response()->json($destinasiList);
    }
}
