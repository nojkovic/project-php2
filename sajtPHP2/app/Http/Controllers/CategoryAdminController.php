<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Reservation;
use App\Models\ReservationLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryAdminController extends OsnovniController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('pages.tableCategories',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.addNewCategories',['category'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'category' => 'required|string|min:3',
            ]);
            $category=new Category();
            $category->category=$request->category;

            $category->save();
            return redirect()->route('categories');

        }catch(\Exception $e){
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
        $category=Category::find($id);
        return view('pages.addNewCategories',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $request->validate([
                'category' => 'required|string|min:3',
            ]);
            $category=Category::find($id);
            $category->category=$request->category;

            $category->save();
            return redirect()->route('categories');

        }catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found.']);
        }

        $galleries = Gallery::where('id_category', $category->id)->get();

        $galleries->each(function ($gallery) {
            $reservationLines = ReservationLine::where('id_gallery', $gallery->id)->get();

            $reservationLines->each(function ($reservationLine) {
                if ($reservationLine->reservation->reservationLines->count() == 1) {
                    $reservationLine->delete();
                    $reservationLine->reservation->delete();
                }

                $reservationLine->delete();
            });

            $gallery->delete();
        });

        $category->delete();

        return redirect()->route('categories');
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }
    }
}
