<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\UserOur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReservationAdminController extends OsnovniController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with(['user', 'reservationLines.gallery'])->get();


        return view('pages.tableReservation',['reservations'=>$reservations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.addNewReservation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        try {
            $reservation = Reservation::find($id);

            if (!$reservation) {
                return redirect()->back()->withErrors(['message' => 'Something went wrong. Please try again.']);
            }

            $reservation->reservationLines()->delete();
            $reservation->delete();

            return redirect()->route("reservationA");
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['message' => 'Something went wrong. Please try again.']);
        }
    }
}
