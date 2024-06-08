<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinasiImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'destinasi_id',
        'image_path',
    ];

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class);
    }
}
