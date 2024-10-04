<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Http\Requests\TeamUpdateRequest;
use App\Models\OurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TeamAdminController extends OsnovniController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams=OurTeam::all();
        return view('pages.tableTeam',['teams'=>$teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.addNewTeam',['team'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
            try{
                $team=new OurTeam();

                $team->name=$request->nameTeam;
                $team->lastname=$request->lastnameTeam;
                $team->description=$request->descriptionTeam;

                if($request->imageTeam){
                    $newName=time().".".$request->imageTeam->extension();
                    $request->imageTeam->move(public_path("images/Team/"),$newName);
                    $team->image=$newName;
                }
                //dd($request->nameTeam,$request->lastnameTeam,$request->descriptionTeam,$request->imageTeam);

                $team->save();

                return redirect()->route("team");
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
        $team=OurTeam::find($id);
        if ($team === null) {

            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }

        return view('pages.addNewTeam', ['team'=>$team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamUpdateRequest $request, string $id)
    {
        try{
            $team=OurTeam::find($id);
            $team->name=$request->nameTeam;
            $team->lastname=$request->lastnameTeam;
            $team->description=$request->descriptionTeam;

            if($request->hasFile('imageTeam')){
                $newName=time().".".$request->imageTeam->extension();
                $request->imageTeam->move(public_path("images/Team/"),$newName);
                unlink('images/Team/'.$team->image);
                $team->image=$newName;
            }


            $team->save();

            return redirect()->route("team");
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
        $team=OurTeam::find($id);
        try{
                $team->delete();
                return redirect()->route('team');


        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }
    }
}
