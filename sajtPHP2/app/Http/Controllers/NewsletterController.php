<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsletterController extends OsnovniController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsletter=Newsletter::all();
        return view('pages.tableNewsletter',['newsletter'=>$newsletter]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.addNewNewsletter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        try{
            $request->validate([
                'email' => 'required|email|unique:newsletters',
            ]);
            //dd($request->emailNews);
            $newsletter=new Newsletter();
            $newsletter->email=$request->email;
            $newsletter->save();

            return redirect()->route("newsletter");
//        }catch(\Exception $e){
//            return response()->json(['message' => 'Something is wrong.Please try again.']);
//        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $newsletter=Newsletter::find($id);
            $newsletter->delete();
            return redirect()->route("newsletter");
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }
    }
}
