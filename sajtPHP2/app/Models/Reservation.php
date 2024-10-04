<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(UserOur::class,'id_user_ours');
    }
    public function reservationLines(){
       return $this->hasMany(ReservationLine::class,'id_reservation');
    }

}
