<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleriesAdminRequest;
use App\Http\Requests\GalleriesUpdateRequest;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\ReservationLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GalleriesAdminController extends OsnovniController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries=Gallery::with("category")->get();

        return view('pages.tableGalleries',['galleries'=>$galleries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        return view('pages.addNewGalleries',['category'=>$category,'gallerie'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleriesAdminRequest $request)
    {
        try{
            $gallery=new Gallery();
            $gallery->name=$request->name;
            $gallery->description=$request->description;
            $gallery->year=$request->year;
            $gallery->month=$request->month;


            if($request->image){
                $newName=time().".".$request->image->extension();
                $request->image->move(public_path("images/"),$newName);
                $gallery->image=$newName;
            }
            $gallery->id_category=$request->id_category;
            $gallery->save();

            return redirect()->route("galleries");
        }

        catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galleries=Gallery::with('category')->get();
        $gallerie=Gallery::find($id);
        $category=Category::all();
        return view('pages.addNewGalleries',['gallerie'=>$gallerie,'category'=>$category]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleriesUpdateRequest $request, string $id)
    {
       try{
           $gallery=Gallery::find($id);
           $gallery->name=$request->name;
           $gallery->description=$request->description;
           $gallery->year=$request->year;
           $gallery->month=$request->month;


           if($request->image){
               $newName=time().".".$request->image->extension();
               $request->image->move(public_path("images/"),$newName);
               unlink('images/'.$gallery->image);
               $gallery->image=$newName;

           }
           $gallery->id_category=$request->id_category;
           $gallery->save();

           return redirect()->route("galleries");
       }
       catch(\Exception $e){
           Log::error($e->getMessage());
           return response()->json(['message' => 'Something is wrong.Please try again.']);
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $gallery = Gallery::find($id);

            $relatedReservationLines = ReservationLine::where('id_gallery', $gallery->id)->get();

            foreach ($relatedReservationLines as $reservationLine) {
                $reservationLine->delete();
            }

            $gallery->delete();

            return redirect()->route('galleries');
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }
    }
}
