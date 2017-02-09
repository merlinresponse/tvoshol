@extends('layouts.app')

@section('content')

        <div class="container">

            <div class="row">
               <div class="col-md-12">

                  <h3>Een reservatie bevestigen</h3>

               </div>
            </div>

            </br>

            <div class="row">
               <div class="col-md-12">



                     <b>Gewenste reservatie:</b> {{ $reservation->datetime }}
                     </br>
                     <b>Aantal personen:</b>  {{ $reservation->aantal }}
                     </br>
                     <b>Voornaam:</b>  {{ $reservation->voornaam }}
                     </br>
                     <b>Naam:</b>  {{ $reservation->naam }}
                     </br>
                     <b>Telefoonnummer:</b>  {{ $reservation->tel }}
                     </br>
                     <b>Email:</b>  {{ $reservation->email }}
                     </br>
                     <b>Opmerkingen:</b>  {{ $reservation->opmerkingen }}
                     </br>



                   {{ Form::model($reservation, array('route' => array('reservation.update', $reservation->id), 'method' => 'PUT')) }}



                        <div class="form-group">
                            {{ Form::label('bevestigd', 'Reservatie bevestigd?') }}
                            {{ Form::checkbox('bevestigd',1, array('class' => 'form-control')) }}
                        </div>


                        {{ Form::submit('Bevestiging opslaan', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}



               </div>
            </div>

        </div>
@stop
