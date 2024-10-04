<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserOur;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RoleController extends OsnovniController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles=Role::all();
        return view('pages.tableRoles',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.addNewRole',['role'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try{
            $request->validate([
                'nameRole' => 'required|string|min:3',
            ]);
            $role=new Role();
            $role->role=$request->nameRole;

            //dd($request->nameRole);

            $role->save();
            return redirect()->route("role");
        }

        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['message' => 'Something went wrong. Please try again.']);
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
        $role=Role::find($id);
        return view('pages.addNewRole', ['role'=>$role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $request->validate([
                'nameRole' => 'required|string|min:3',
            ]);
            $role=Role::find($id);
            $role->role=$request->nameRole;


            $role->save();
            return redirect()->route("role");
        }

        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['message' => 'Something went wrong. Please try again.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);

        if (!$role) {
            return response()->json(['message' => 'Role not found.']);
        }

        try {
            UserOur::where('id_role', $role->id)->delete();
            $role->delete();

            return redirect()->route('role');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'Something went wrong. Please try again.']);
        }
    }
}
