<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtractiveImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'atractive_id',
        'image_path',
    ];

    public function atractive()
    {
        return $this->belongsTo(AtractiveDestination::class);
    }
}
