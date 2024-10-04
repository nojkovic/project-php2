<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    public function user(){
        return $this->belongsTo(UserOur::class,'id_user');
    }
    public function type(){
        return $this->belongsTo(TypeOfActivity::class,'id_type');
    }
    use HasFactory;

    public function filterByDates($startDate, $endDate, $perPage = 4)
    {
        return Activity::Query()->whereBetween('created_at', [$startDate, $endDate])->paginate($perPage)->withQueryString();
    }


}
