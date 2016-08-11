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
            $reservation->naam = $request->naam;
            $reservation->aantal = $request->aantal;
            //$reservation->tel = $request->tel;
            $reservation->email = $request->email;
            $reservation->opmerkingen = $request->opmerkingen;
            $reservation->reservatiedatum = $request->reservatiedatum;
            $reservation->reservatietijd = $request->reservatietijd;
                        
                        
            $reservation->save();
            
            return redirect('/')
            ->with('success', true)->with('message','Reservatie opgeslagen.');
    
    }
    
        public function delete(Request $request){
        
            Reservation::find($request->id)->delete();
            
            return redirect('/reservations')
            ->with('message', 'de reservatie werd verwijderd');
    
    }
    
            public function confirm(Request $request){
        
            $reservation = Reservation::find($request->id);
            $reservation->bevestigd = true;
            $reservation->save();
            
            return redirect('/reservations');
    
    }  


    
}
