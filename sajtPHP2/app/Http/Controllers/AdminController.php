<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class AdminController extends OsnovniController
{

    public function index(){
        $activities = Activity::query()->with('user', 'type')
            ->paginate(4)
            ->withQueryString();
        return view('pages.logs',['activities'=>$activities]);
    }

    public function destroy(string $id){
        try{
            $activity=Activity::find($id);
            $activity->delete();
            return redirect()->route("logs");
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json(['message' => 'Something is wrong.Please try again.']);
        }
    }

    public function filter(Request $request){

        $startDate =  $request->startDate;
        $endDate =  $request->endDate;

        $activities = (new Activity())->filterByDates($startDate, $endDate);




        return view('pages.logs', ['activities'=>$activities]);
    }

}
