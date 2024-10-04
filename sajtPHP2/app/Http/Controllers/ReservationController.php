<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Reservation;
use App\Models\ReservationLine;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReservationController extends OsnovniController
{
    public function index(){
        $categories=Category::all();
        $all=Gallery::all();
        return view('pages.reservation',['categories'=>$categories,'all'=>$all]);
    }
     public function filter(Request $request){

         $filterSortValue = $request->filterSort;
         $searchByName = $request->search;
         $selectedCategories = $request->categories;
         $productsQuery = Gallery::query()->with("category");

         //dd($selectedCategories);


         if ($selectedCategories != null){
            //dd($selectedCategories);
             $productsQuery->whereIn('id_category', explode(",", $request->categories));
         }


         if ($searchByName != "") {
             //dd($searchByName);
             $productsQuery->where('name', 'LIKE', '%' . strtolower($searchByName) . '%');
         }

         if(!is_numeric($filterSortValue)) {
             $productsQuery->orderBy('year',$filterSortValue)->orderBy('month',$filterSortValue);
         }


         $filteredProducts = $productsQuery->get();
         return response()->json(['all' => $filteredProducts]);
     }
    public function addReserve(ReservationRequest $request)
    {

        try{
            $date = $request->time;

            $categorie=$request->idCat;
            $catName=Category::find($categorie)->category;
            $user=session()->get("user")->id;
            $idGall=$request->idGall;
            $picture=$request->picture;
            $currentDate = new DateTime();
            $targetDate = new DateTime($date);
            $currentDate->add(new DateInterval('P3M'));

            if (empty($date)) {
                return response()->json(['message' => 'Date and time must be provided.']);
            }
            if ($targetDate > $currentDate){
                return response()->json(['message'=> 'The date must not be older than 3 months']);
            }

            if (session()->has('reservationDate')) {
                session()->push('reservations', [
                    'reservationDate' => $targetDate,
                    'reservationCat' => $categorie,
                    'reservationUser' => $user,
                    'picture'=>$picture,
                    'catName'=>$catName,
                    'idGall'=>$idGall
                ]);
            }

            $newReservation = [
                'reservationDate' => $targetDate,
                'reservationCat' => $categorie,
                'reservationUser' => $user,
                'picture'=>$picture,
                'catName'=>$catName,
                'idGall'=>$idGall
            ];

//        $existingReservations[] = $newReservation;
//
//        session()->put('reservations', $existingReservations);
            session()->push('reservations', $newReservation);


            $this->log(3);

            return response()->json(['message' => 'Reservation added to session successfully']);
        }catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['message' => 'Something went wrong. Please try again.']);
        }
    }
    public function check(){

        return view('pages.checkout',['reservations'=>session()->get('reservations')]);
    }
    public function destroy($id){

        $reservations = session()->get('reservations');

        $key = $id;

        //dd($key);

        $new = [];

        foreach ($reservations as $i=>$r) {
            if($i != $key){
                $new[] = $r;
            }
        }
        $this->log(6);
        session()->put('reservations', $new);
    }

    public function store(Request $request)
    {
        try{
            $reservation=new Reservation();
            $reservation->id_user_ours=session()->get('user')->id;
            $reservation->save();

            foreach (session()->get('reservations') as $r){
                $galleryId = $r['idGall'];
                $reservationLine=new ReservationLine();
                $reservationLine->id_reservation=$reservation->id;
                $reservationLine->id_gallery=$galleryId;
                $reservationLine->date=$r['reservationDate'];
                $reservationLine->save();
            }
            $request->session()->forget('reservations');
            $this->log(4);
            return response()->json(['message' => 'Rezervacija uspešna!']);
        }
        catch(\Exception $e) {
            Log::error($e->getMessage());
            return response()->json( 'Please try again',500);
        }

    }
    public function all(){
        $idUser=session()->get("user")->id;
        $reservationB = Reservation::whereHas('reservationLines', function ($query) {
            $query->whereHas('gallery');
        })->where('id_user_ours', $idUser)->with(['reservationLines.gallery'])->get();
        //dd($reservationB);
        $this->log(5);
        return view('pages.checkoutAll',['reservationsBase'=>$reservationB]);
    }


}
