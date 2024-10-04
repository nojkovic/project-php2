<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends OsnovniController
{
    public function index(Request $request)
    {

        $category=Category::all();
        $gallery=new Gallery();
        return view('pages.gallery',['products'=>$gallery->filter($request->search,$request->filtriranje),'category'=>$category]);
    }


}
