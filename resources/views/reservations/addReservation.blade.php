@extends('layouts.app')


@section('content')
    <h1>Add a Reservation</h1>
        <div>
            
           <form method="POST" action="/reservations">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label for="voornaam">Voornaam</label>
                  <input type="text" class="form-control" name="voornaam" placeholder="Voornaam">
                </div>
                <div class="form-group">
                  <label for="naam">Naam</label>
                  <input type="text" class="form-control" name="naam" placeholder="Naam">
                </div>
                <div class="form-group">
                  <label for="aantal">Aantal personen</label>
                  <input type="text" class="form-control" name="aantal" placeholder="Aantal personen">
                </div>                     
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-default">Versturen</button>
            </form>
            
        </div>        
@stop