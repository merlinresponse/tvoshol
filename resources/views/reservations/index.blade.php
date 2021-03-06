@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3>Alle Reservaties</h3>
            </div>
        </div>

        </br>

        @foreach ($reservations as $reservation)

        <div class="row">
            <div class="col-md-5">

                <b>Gewenste reservatie:</b> {{ $reservation->datetime }}
                </br>
                <b>Aantal personen:</b>  {{ $reservation->aantal }}
                </br>
                <b>Opmerkingen:</b>  {{ $reservation->opmerkingen }}
                </br>
                <b>Reeds bevestigd?</b>
                @if($reservation->bevestigd)
                  Ja
                @else
                  Nee
                @endif
                </br>

            </div>

            <div class="col-md-5">

                <b>Voornaam:</b>  {{ $reservation->voornaam }}
                </br>
                <b>Naam:</b>  {{ $reservation->naam }}
                </br>
                <b>Telefoonnummer:</b>  {{ $reservation->tel }}
                </br>
                <b>Email:</b>  <a href={{"mailto:" . $reservation->email}} target="_top">{{$reservation->email}}</a>
</p>
                </br>

            </div>

            <div class="col-md-2">

                <a class="btn btn-small btn-info" href="{{ URL::to('reservation/' . $reservation->id . '/edit') }}">Reservatie wijzigen</a>
                </br>
                </br>
          
                {{ Form::open(['method' => 'DELETE', 'route' => ['reservation.destroy', $reservation->id]]) }}
                    {{ Form::submit('Verwijderen', ['class' => 'btn btn-danger']) }}
                {{ Form::close() }}

            </div>

        </div>
        </br>
        <hr>
        </br>

        @endforeach

    </div>
@stop
