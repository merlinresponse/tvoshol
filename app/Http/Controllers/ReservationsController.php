<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\Reservation;

use App\Http\Requests;

class ReservationsController extends Controller
{
    public function index(){
        
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'))
    
    }
    
}
