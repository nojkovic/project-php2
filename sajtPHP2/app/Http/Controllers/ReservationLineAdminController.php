<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddReservationLineRequest;
use App\Http\Requests\UpdateReservationLineRequest;
use App\Models\Gallery;
use App\Models\Reservation;
use App\Models\ReservationLine;
use App\Models\UserOur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReservationLineAdminController extends OsnovniController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = UserOur::all();
        $gallery=Gallery::all();
        return view('pages.addNewReservationLine', ['users'=>$users,'gallery'=>$gallery,'rl'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddReservationLineRequest $request)
    {
        try {
            $userId = $request->id_user;
            $date = $request->date;
            $galleryId = $request->id_gallery;

            $existingReservation = Reservation::where('id_user_ours', $userId)->first();

            if (!$existingReservation) {
                $newReservation = new Reservation();
                $newReservation->id_user_ours = $userId;
                $newReservation->save();
            } else {
                $newReservation = $existingReservation;
            }


            $newReservationLine = new ReservationLine();
            $newReservationLine->date = $date;
            $newReservationLine->id_gallery = $galleryId;

            $newReservationLine->reservation()->associate($newReservation);

            $newReservationLine->save();

            return redirect()->route("reservationA");
        } catch (\Exception $e) {
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
       $reservationLine=ReservationLine::find($id);
       $users=UserOur::all();
       $gallery=Gallery::all();
        $user = $reservationLine->reservation->user;

        return view('pages.addNewReservationLine',['rl'=>$reservationLine,
           'users'=>$users,
           'userSel'=>$user,
           'gallery'=>$gallery
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationLineRequest $request, string $id)
    {
//        try {
        $reservationLine = ReservationLine::find($id);

        if ($reservationLine) {
            $reservationLine->date = $request->input('date', $reservationLine->date);
            $reservationLine->id_gallery = $request->input('id_gallery', $reservationLine->id_gallery);
            $reservationLine->save();

            if ($request->has('id_user')) {
                $newUserId = $request->input('id_user');

                // Ako se menja korisnik, ažuriraj povezanog korisnika u rezervaciji
                $reservation = $reservationLine->reservation;

                if ($reservation && $reservation->user->id != $newUserId) {
                    $reservation->user()->associate($newUserId);
                    $reservation->save();
                }

                // Ažurirajte i druge rezervacije linije novog korisnika
                $newUserReservationLines = ReservationLine::where('id_user', $newUserId)
                    ->where('id', '!=', $reservationLine->id)
                    ->get();

                foreach ($newUserReservationLines as $newUserReservationLine) {
                    $newUserReservationLine->date = $request->input('date', $newUserReservationLine->date);
                    $newUserReservationLine->id_gallery = $request->input('id_gallery', $newUserReservationLine->id_gallery);
                    $newUserReservationLine->save();
                }
            }
        }

        return redirect()->route("reservationA");

//        } catch (\Exception $e) {
//            return redirect()->back()->withErrors(['message' => 'Something went wrong. Please try again.']);
//        }



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $reservationLine = ReservationLine::find($id);

            if (!$reservationLine) {
                return redirect()->back()->withErrors(['message' => 'Something went wrong. Please try again.']);
            }

            $isLastReservationLine = $reservationLine->reservation->reservationLines->count() === 1;

            $reservationLine->delete();

            if ($isLastReservationLine) {
                $reservationLine->reservation->delete();
            }

            return redirect()->route("reservationA");
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['message' => 'Something went wrong. Please try again.']);
        }
    }
}
