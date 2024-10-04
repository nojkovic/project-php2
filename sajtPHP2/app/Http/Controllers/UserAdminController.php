<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAdminRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Activity;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\UserOur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserAdminController extends OsnovniController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=UserOur::with("role")->get();
        return view('pages.adminT',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $users=UserOur::with("role")->get();
        $role=Role::all();
        return view('pages.addNew', ['users'=>$users,'user'=>null,'role'=>$role]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserAdminRequest $request)
    {
       // dd("tuuu");
        try{
            $user=new UserOur();
            $user->name=$request->nameUser;
            $user->lastname=$request->lastnameUser;
            $user->email=$request->emailUser;
            $user->password=md5($request->password);
            $user->active=$request->activeAdmin;
            $user->id_role=$request->rolAdmin;

            $user->save();

            return redirect()->route("admin2");
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
    public function edit( $id)
    {
        $users=UserOur::with("role")->get();

        $user=UserOur::find($id);
        if ($user === null) {

            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }
        $role=Role::all();
        return view('pages.addNew', ['users'=>$users,'user'=>$user,'role'=>$role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        try{
            $user=UserOur::find($id);
            $user->name=$request->nameUser;
            $user->lastname=$request->lastnameUser;
            $user->email=$request->emailUser;
            if ($request->filled('password')) {
                $user->password = md5($request->password);
            }
            $user->active=$request->activeAdmin;
            $user->id_role=$request->rolAdmin;

            $user->save();

            return redirect()->route("admin2");
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

        $user=UserOur::find($id);
        try{
            if ($user) {
                $userId = $user->id;

                $reservations = Reservation::where('id_user_ours', $userId)->get();

                $reservations->each(function ($reservation) {
                    $reservation->reservationLines()->delete();
                    $reservation->delete();
                });

                $activities = Activity::where('id_user', $userId)->get();

                foreach ($activities as $activity) {
                    $activity->delete();
                }


                $user->delete();
                return redirect()->route('admin2');

            }
            else {
                return response()->json(['message' => 'Something is wrong.Please try again.']);
            }
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }


    }
}
