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
        
                <b>Datum:</b> {{ $reservation->reservatiedatum }} 
                </br>
                <b>Uur:</b>  {{ $reservation->reservatietijd }} 
                </br>   
                <b>Aantal personen:</b>  {{ $reservation->aantal }} 
                </br>
                <b>Opmerkingen:</b>  {{ $reservation->opmerkingen }} 
                </br>
                <b>Reeds bevestigd?</b>  {{ $reservation->bevestigd }} 
                </br>
        
            </div>
                
            <div class="col-md-5">
        
                <b>Voornaam:</b>  {{ $reservation->voornaam }} 
                </br>
                <b>Naam:</b>  {{ $reservation->naam }} 
                </br>   
                <b>Telefoonnummer:</b>  {{ $reservation->tel }} 
                </br>
                <b>Email:</b>  {{ $reservation->email }} 
                </br>

            </div>
            
            <div class="col-md-2">
            
                <form method="POST" action="/reservations/delete">
                    <input type="hidden" name="_method" value="delete" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{ $reservation->id }}">
                    <button type="submit" class="btn btn-default">Verwijderen</button>
                </form>
                    
                </br>
                </br>
                    
                <form method="PUT" action="/reservations/confirm">
                    <input type="hidden" name="_method" value="confirm" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{ $reservation->id }}">
                    <button type="submit" class="btn btn-default">Bevestigd</button>
                </form>
        
            </div>     
            
        </div>
        </br>
        <hr>
        </br>
    
        @endforeach    
     
    </div>    
@stop