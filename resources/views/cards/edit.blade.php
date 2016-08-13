@extends('layouts.app')

@section('content')
       
        <div class="container">
        
            <div class="row">
               <div class="col-md-12">
                  
                  <h3>Een menukaart wijzigen</h3>
               
               </div>
            </div>
            
            </br>
            
            <div class="row">
               <div class="col-md-12">
               
                   {{ Form::model($card, array('route' => array('card.update', $card->id), 'method' => 'PUT', 'files' => true)) }}
                            
                        <div class="form-group">
                            {{ Form::label('menukaartNL', 'Menukaart Nederlands') }}
                            {{ Form::file('menukaartFR', null, array('class' => 'form-control')) }}
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('menukaartFR', 'Menukaart Frans') }}
                            {{ Form::file('menukaartFR', null, array('class' => 'form-control')) }}
                        </div>
        
                    
                        {{ Form::submit('Wijziging opslaan', array('class' => 'btn btn-primary')) }}
                    
                    {{ Form::close() }}
                    

               
               </div>
            </div>
            
        </div>        
@stop