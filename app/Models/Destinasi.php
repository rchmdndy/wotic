<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_destinasi',
        'deskripsi',
        // 'img',
        'kecamatan',
        'desa',
        'tiket',
        'jenis_wisata',
        'alamat',
        'koordinat_x',
        'koordinat_y',
        'blank_spot_jaringan',
        'penginapan',
        'route_perjalanan',
        'viewer',
        'banner',
        'transportasi',
        'link_order',
        'tiket_internasional',
        'tiket_weekend_internasional',
        'tiket_weekend_local',
    ];

    public function images()
    {
        return $this->hasMany(DestinasiImages::class, 'destinasi_id');
    }
}
