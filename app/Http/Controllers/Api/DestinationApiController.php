<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\DestinasiImages;
use Illuminate\Http\Request;

class DestinationApiController extends Controller
{
    public function getAllDestination()
    {
        $destinasis = Destinasi::select('id', 'nama_destinasi', 'desa', 'tiket_weekend_local')
            ->where('jenis_wisata', 'like', '%Alam%')
            ->get();

        $destinasiList = $destinasis->map(function ($destinasi) {

            $images = DestinasiImages::where('destinasi_id', $destinasi->id)->get(); // Mengambil semua gambar
            $firstImage = $images->isNotEmpty() ? asset('storage/' . $images->first()->image_path) : 'default.jpg'; // Mengambil gambar pertama dalam kurung siku atau null jika tidak ada gambar

            $destinasi->image = $firstImage;
            return $destinasi;
        })->all();

        return response()->json($destinasiList);
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

    public function getDetailDestination($id)
    {
        $destinasi = Destinasi::find($id);

        if (!$destinasi) {
            return response()->json(['message' => 'Destinasi not found'], 404);
        }

        // Menambahkan 1 ke kolom viewer pada Destinasi
        $destinasi->increment('viewer');

        // Mengambil hanya 'image_path' dari koleksi 'images' dan menambahkan "storage/"
        $images = DestinasiImages::select('image_path')->where('destinasi_id', $destinasi->id)->get();

        if (!$images->isEmpty()) {
            $imagePaths = $images->pluck('image_path')->map(function ($imagePath) {
                return asset('storage/' . $imagePath);
            });
        } else {
            $imagePaths = 'default.jpg';
        }

        // Menggabungkan data destinasi dan image_paths
        $data = [
            'destinasi' => $destinasi,
            'image' => $imagePaths,
        ];

        return response()->json($data);
    }
}
