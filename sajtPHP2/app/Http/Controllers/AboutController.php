<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class AboutController extends OsnovniController
{
    public function index()
    {
        $team=OurTeam::all();
        $products=Gallery::all();
        return view("pages.about",["teams"=>$team,"products"=>$products]);
    }
}
