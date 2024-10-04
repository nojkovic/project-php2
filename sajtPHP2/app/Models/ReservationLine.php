<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationLine extends Model
{
    use HasFactory;
    public function reservation(){
        return $this->belongsTo(Reservation::class,'id_reservation');
    }

    public function gallery(){
        return $this->belongsTo(Gallery::class,'id_gallery');
    }

}
