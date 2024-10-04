<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Menu;


class OsnovniController extends Controller
{
    public function __construct()
    {

        view()->share('menu',$this->menu=Menu::all());
    }

    public function log($type){
        $ipAdress=$_SERVER['REMOTE_ADDR'];
        $idUser=session()->get('user')->id;
        $newLog=new Activity();
        $newLog->id_type=$type;
        $newLog->id_user=$idUser;
        $newLog->ip=$ipAdress;
        $newLog->save();
    }
}
