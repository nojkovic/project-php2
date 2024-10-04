<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOur extends Model
{
    use HasFactory;
    public function role(){
        return $this->belongsTo(Role::class,"id_role");
    }
    public function reservation(){
       return $this->hasMany(Reservation::class,'id_user_ours');
    }

}
