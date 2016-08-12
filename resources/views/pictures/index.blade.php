@extends('layouts.app')

@section('content')
    <div class="container">
    
        <div class="row">   
            <div class="col-md-12">
                <h3>Alle afbeeldingen</h3>
                    
            </div>
        </div>
        
        </br>
            
        @foreach ($pictures as $picture)
    
        <div class="row">
            <div class="col-md-12">
        
                <b>Beschrijving NL:</b> {{ $picture->beschrijvingNL }} 
                </br>
                <b>Beschrijving FR</b>  {{ $picture->beschrijvingFR }} 
                </br>   
                <b>Bestandsnaam:</b>  {{ $picture->bestand }} 
                </br>
                <b>Weergeven?:</b>  {{ $picture->tonen }} 
                </br>
                </br>
                    
                
                <a class="btn btn-small btn-info" href="{{ URL::to('picture/' . $picture->id . '/edit') }}">Boodschap aanpassen</a>

                </br>
                </br>
            
                {{ Form::open(['method' => 'DELETE', 'route' => ['picture.destroy', $picture->id]]) }}
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