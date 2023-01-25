<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function museum(){
        return $this->belongsTo(Museum::class);
    }

}
