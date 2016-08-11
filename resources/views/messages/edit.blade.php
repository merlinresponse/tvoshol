@extends('layouts.app')

@section('content')
       
        <div class="container">
        
            <div class="row">
               <div class="col-md-12">
                  
                  <h3>Een boodschap toevoegen</h3>
               
               </div>
            </div>
            
            </br>
            
            <div class="row">
               <div class="col-md-12">
               
                   {{ Form::model($message, array('route' => array('message.update', $message->id), 'method' => 'PUT')) }}

                        <div class="form-group">
                            {{ Form::label('titelNL', 'Titel Nederlands') }}
                            {{ Form::text('titelNL', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('titelFR', 'Titel Frans') }}
                            {{ Form::text('titelFR', null, array('class' => 'form-control')) }}
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('tekstNL', 'Tekst Nederlands') }}
                            {{ Form::text('tekstNL', null, array('class' => 'form-control')) }}
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('tekstFR', 'Tekst Frans') }}
                            {{ Form::text('tekstFR', null, array('class' => 'form-control')) }}
                        </div>
        
                    
                        {{ Form::submit('Wijziging opslaan', array('class' => 'btn btn-primary')) }}
                    
                    {{ Form::close() }}
               
               </div>
            </div>
            
        </div>        
@stop