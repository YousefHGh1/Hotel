<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use Illuminate\Http\Request;

class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Appartement::with('room')->paginate(10);
        return view('booking.index', compact('bookings'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'Anrede' => 'required',
            'Adults' => 'required',
            'Children' => 'required',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date|after:arrival_date',
            'room_id' => 'required',
            'message' => 'required',
        ]);

        $appartementData = $validatedData;
        $appartementData['anreisedatum'] = session('anreisedatum');
        $appartementData['abreisedatum'] = session('abreisedatum');
        $appartementData['erwachsene'] = session('erwachsene');
        $appartementData['kinder'] = session('kinder');

        $appartement = Appartement::create($appartementData);
        // $appartement->rooms()->attach($request->room_id);

        return redirect()->route('booking')->with('success', 'Booking successfully');
    }

}