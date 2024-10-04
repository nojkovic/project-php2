<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
use App\Http\Requests\UserRequest;
use App\Models\UserOur;
use Illuminate\Http\Request;

class SingUpController extends OsnovniController
{

    public function index(){
        if(session()->has('user')) {
            return redirect()->route("home");
        }
        return view("pages.register");
    }
    public function store(UserRequest $requst){
        $user=new UserOur();
        $user->name=$requst->name;
        $user->lastname=$requst->lastname;
        $user->email=$requst->email;
        $user->password=md5($requst->password);
        $user->active=1;
        $user->id_role=2;
        $user->save();



        return redirect()->route("login");

    }
}
