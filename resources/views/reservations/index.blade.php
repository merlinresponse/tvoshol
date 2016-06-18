@extends('layouts.app')

@section('content')
    <h1>All Reservations</h1>
        
    @foreach ($reservations as $reservation)
    
        <div>
            
            {{ $reservation->voornaam }} 
            </br>
            {{ Form::open('reservations/delete', 'DELETE')}}
            {{ Form::hidden('id', $reservation->id)}}
            {{ Form::submit('verwijderen')}}
            {{ Form::close()}}
            <hr>
            
        </div>        
    
    @endforeach    
        
@stop