<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use mysql_xdevapi\Exception;

class MenuController extends OsnovniController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus=Menu::all();
        return view('pages.tableMenus',['menus'=>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.addNewMenus',['menu'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'nameMenu' => 'required|string|min:3',
                'hrefMenu' => 'required|string|min:3',
            ]);

            $menu=new Menu();
            $menu->menu=$request->nameMenu;
            $menu->href=$request->hrefMenu;

            $menu->save();
            return redirect()->route("menus");


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
        $menu=Menu::find($id);


        return view('pages.addNewMenus',['menu'=>$menu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $request->validate([
                'nameMenu' => 'required|string|min:3',
                'hrefMenu' => 'required|string|min:3',
            ]);

            $menu=Menu::find($id);
            $menu->menu=$request->nameMenu;
            $menu->href=$request->hrefMenu;

            $menu->save();
            return redirect()->route("menus");


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
        try{
            $menu=Menu::find($id);
            $menu->delete();
            return redirect()->route("menus");
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }
    }
}
