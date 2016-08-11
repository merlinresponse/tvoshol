@extends('layouts.app')

@section('content')
    <div class="container">
    
        <div class="row">   
            <div class="col-md-12">
                <h1>All Reservations</h1>
            </div>
        </div>
        
        @foreach ($reservations as $reservation)
    
        <div class="row">
            <div class="col-md-6">
        
                Datum: {{ $reservation->reservatiedatum }} 
                </br>
                Uur: {{ $reservation->reservatietijd }} 
                </br>   
                Aantal personen: {{ $reservation->aantal }} 
                </br>
                Opmerkingen: {{ $reservation->opmerkingen }} 
                </br>
                Reeds bevestigd? {{ $reservation->bevestigd }} 
                </br>
        
            </div>
                
            <div class="col-md-6">
        
                Voornaam: {{ $reservation->voornaam }} 
                </br>
                Naam: {{ $reservation->naam }} 
                </br>   
                Telefoonnummer: {{ $reservation->tel }} 
                </br>
                Email: {{ $reservation->email }} 
                </br>
            
                <form method="POST" action="/reservations/delete">
                    <input type="hidden" name="_method" value="delete" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{ $reservation->id }}">
                    <button type="submit" class="btn btn-default">Verwijderen</button>
                </form>
        
            </div>                
            
        </div>
        </br>
        <hr>
        </br>
    
        @endforeach    
     
    </div>    
@stop