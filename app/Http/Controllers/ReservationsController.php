<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;

class ReservationsController extends Controller
{

  /*
  public function __construct()
  {
   $this->middleware('auth');
  }
  */

  public function __construct() {
     $this->middleware('auth', ['except' => ['store']]);
  }

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

            Mail::send('emails.send', [

              'tekst' => 'Controleer je berichten op via de website.'

            ], function ($message)
            {

                $message->from('noreply@tvoshol.be', 'Contact website');
                $message->subject('Je hebt een reservatie aanvraag ontvangen.');
                $message->to('voshol@telenet.be');


            });

            return redirect('/nl')
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

        public function destroy($id){

            Reservation::find($id)->delete();

            return redirect('/reservation')
            ->with('message', 'de reservatie werd verwijderd');

    }




}
