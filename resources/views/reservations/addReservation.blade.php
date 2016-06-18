@extends('layouts.app')

@section('content')
    <h1>Add a Reservation</h1>
        <div>
            
           <form>
                <div class="form-group">
                  <label for="voornaam">Voornaam</label>
                  <input type="text" class="form-control" id="voornaam" placeholder="Voornaam">
                </div>
                <div class="form-group">
                  <label for="naam">Naam</label>
                  <input type="text" class="form-control" id="naam" placeholder="Naam">
                </div>
                <div class="form-group">
                  <label for="aantal">Aantal personen</label>
                  <input type="text" class="form-control" id="aantal" placeholder="Aantal personen">
                </div>                     
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-default">Versturen</button>
            </form>
            
        </div>        
@stop