<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function category(){
        return $this->belongsTo(Category::class,'id_category');
    }
    public function reservationLines(){
        return $this->hasMany(ReservationLine::class,'id_gallery');
    }
    public function filter($search,$cat){
        $products = Gallery::query();
        $pagination = 6;
        if ( $search != "") {
            dd('tuu');
            $pagination = 3;
            $products->where('name', 'LIKE', '%' . $search . '%');
            $products->orwhere('description', 'LIKE', '%' . $search . '%');
        }



        if ($cat) {
            $pagination = 3;
            $products->where('id_category', $cat);
        }
        return $products->paginate($pagination)->withQueryString();


    }
    use HasFactory;
}
