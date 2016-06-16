@extends('layouts.app')

@section('content')
    <h1>All Reservations</h1>
        
    @foreach ($reservations as $reservation)
    
        <div>
            
            {{ $reservation->voornaam }}
            </br>
            
        </div>        
    
    @endforeach    
        
@stop