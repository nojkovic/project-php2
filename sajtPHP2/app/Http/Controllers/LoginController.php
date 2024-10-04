<?php

namespace App\Http\Controllers;

use App\Models\UserOur;
use Illuminate\Http\Request;

class LoginController extends OsnovniController
{
    public function index(){
        if(session()->has('user')) {
            return redirect()->route("home");
        }
        return view("pages.login");
    }

    public function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        $user=UserOur::where("email",$email)->first();

        if(!$user){
            return redirect()->back()->with("errors","Wrong credential");
        }

        if(md5($password) != $user->password){
            return redirect()->back()->with("errors","Wrong credential");
        }
        if ($user->active != 1) {
            return redirect()->back()->with("errors", "Your account is deactivated.");
        }
        $request->session()->put("user",$user);
        $this->log(1);
        return redirect()->route("home");
    }

    public function logout(Request $request){
        $this->log(2);
        $request->session()->forget('user');
        return redirect()->route("login");
    }
}
