<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Gallery;
use App\Models\Newsletter;
use App\Models\UserOur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends OsnovniController
{
    public function index()
    {
        $products=Gallery::all();

        return view('pages.home',["products"=>$products]);
    }

    public function store(Request $request){
        try{
            $request->validate([
                'email' => 'required|email|unique:newsletters',
            ]);

            $email = $request->email;

            Newsletter::create([
                'email' => $email,
            ]);

            return response()->json(['success' => 'You have successfully subscribed to the newsletter']);

        }catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['errors' => 'Something is wrong.Please try again.']);
        }
    }
    public function author(){
        return view("pages.author");
    }
}
