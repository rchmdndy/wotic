<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_hotel',
        'alamat',
        'kelas',
        'koordinat',
        'img',
        'jarak',
        'koordinat_y',
        'is_important',
    ];
}
