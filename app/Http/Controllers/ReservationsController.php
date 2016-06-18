<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

use App\Http\Requests;

class ReservationsController extends Controller
{
    public function index(){
        
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    
    }
    
        public function add(){
        
        $reservations = Reservation::all();
        return view('reservations.addReservation', compact('reservations'));
    
    }
    
        public function store(Request $request){
        
            $reservation = new Reservation;
            
            $reservation->voornaam = $request->voornaam;
            
            $reservation->save();
            
            return redirect('/reservations');
    
    }
    
        public function delete(Request $request){
        
            Reservation::find(Input::get('id'))->delete();
            
            return redirect('/reservations')
            ->with('message', 'de reservatie werd verwijderd');
    
    }    


    
}
