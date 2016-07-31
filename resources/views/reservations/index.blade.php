@extends('layouts.app')

@section('content')
    <h1>All Reservations</h1>
        
    @foreach ($reservations as $reservation)
    
        <div>
            
            {{ $reservation->voornaam }} 
            </br>
            {{ $reservation->naam }} 
            </br>   
            {{ $reservation->aantal }} 
            </br>
            {{ $reservation->tel }} 
            </br>
            {{ $reservation->email }} 
            </br>
            {{ $reservation->opmerkingen }} 
            </br>
            {{ $reservation->bevestigd }} 
            </br>
            {{ $reservation->reservatiedatum }} 
            </br>
            {{ $reservation->reservatietijd }} 
            </br>
            <form method="POST" action="/reservations/delete">
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $reservation->id }}">
                <button type="submit" class="btn btn-default">Verwijderen</button>
            </form>
            
            
            <hr>
            
        </div>        
    
    @endforeach    
        
@stop