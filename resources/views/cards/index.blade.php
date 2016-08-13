@extends('layouts.app')

@section('content')
    <div class="container">
    
        <div class="row">   
            <div class="col-md-12">
                <h3>Alle menukaarten</h3>
                    
            </div>
        </div>
        
        </br>
            
        @foreach ($cards as $card)
    
        <div class="row">
            <div class="col-md-12">
        
                <b>Menukaart Nederlands:</b> {{ $card->menukaartNL }} 
                </br>
                <b>Menukaart Frans:</b>  {{ $card->menukaartFR }} 
                </br>   
                </br>
                
                <a class="btn btn-small btn-info" href="{{ URL::to('card/' . $card->id . '/edit') }}">Menukaart aanpassen</a>

                </br>
                </br>
            
                {{ Form::open(['method' => 'DELETE', 'route' => ['card.destroy', $card->id]]) }}
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