@extends('layouts.app')

@section('content')
    <div class="container">
    
        <div class="row">   
            <div class="col-md-12">
                <h3>Openingsuren</h3>
                    
            </div>
        </div>
        
        </br>
            
        @foreach ($hours as $hour)
    
        <div class="row">
            <div class="col-md-12">
        
                <b>Titel NL:</b> {{ $hour->urenNL }} 
                </br>
                <b>Titel FR</b>  {{ $hour->urenFR }} 
                </br>   
                </br>
                    
                
                <a class="btn btn-small btn-info" href="{{ URL::to('hour/' . $hour->id . '/edit') }}">Uren aanpassen</a>

                </br>
                </br>
            
                {{ Form::open(['method' => 'DELETE', 'route' => ['hour.destroy', $hour->id]]) }}
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