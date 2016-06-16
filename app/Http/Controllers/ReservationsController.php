<?php

namespace App\Http\Controllers;

use App\Http\Request;
use App\Reservation;

use App\Http\Requests;

class ReservationsController extends Controller
{
    public function index(){
        
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    
    }
    
}
