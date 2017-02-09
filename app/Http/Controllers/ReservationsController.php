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
            $reservation->email = $request->email;
            $reservation->opmerkingen = $request->opmerkingen;
            $reservation->tel = $request->tel;
            $reservation->datetime = $request->datetime;

            $reservation->save();

            return redirect('/')
            ->with('success', true)->with('message','Reservatie opgeslagen.');

          }

          public function show($id)
          {
              //
          }

          public function edit($id)
          {
                      // get the nerd
              $reservation = Reservation::find($id);

              // show the edit form and pass the nerd
              return view('reservations.edit')
                  ->with('reservation', $reservation);
          }

        public function update(Request $request, $id)
        {
            $reservation = Reservation::find($id);


            $reservation->bevestigd = Input::get('bevestigd');


            $reservation->save();

            return redirect('/reservation');
        }

        public function delete(Request $request){

            Reservation::find($request->id)->delete();

            return redirect('/reservation')
            ->with('message', 'de reservatie werd verwijderd');

    }




}
