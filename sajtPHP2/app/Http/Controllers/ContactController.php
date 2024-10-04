<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends OsnovniController
{
    public function index()
    {
        return view("pages.contact");
    }

    public function message(ContactRequest $request){


        $message= new Contact();
        $message->name=$request->name;
        $message->email=$request->mail;
        $message->mobile=$request->contact;
        $message->message=$request->message;
        $message->save();


    }

    public function allContacts()
    {

        $contacts=Contact::all();
        return view('pages.tableContacts',['contacts'=>$contacts]);
    }

    public function destroy($id){
        try{
            $contacts=Contact::find($id);
            $contacts->delete();
            return redirect()->route('contacts');
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }
    }

}
