@extends('layouts.app')

@section('content')
       
        <div class="container">
        
            <div class="row">
               <div class="col-md-12">
                  
                  <h3>Een boodschap wijzigen</h3>
               
               </div>
            </div>
            
            </br>
            
            <div class="row">
               <div class="col-md-12">
               
                   {{ Form::model($picture, array('route' => array('picture.update', $picture->id), 'method' => 'PUT', 'files' => true)) }}

                        <div class="form-group">
                            {{ Form::label('beschrijvingNL', 'Beschrijving Nederlands') }}
                            {{ Form::text('beschrijvingNL', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('beschrijvingFR', 'Beschrijving Frans') }}
                            {{ Form::text('beschrijvingFR', null, array('class' => 'form-control')) }}
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('bestand', 'Bestandsnaam') }}
                            {{ Form::file('bestand', null, array('class' => 'form-control')) }}
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('tonen', 'Afbeelding weergeven?') }}
                            {{ Form::checkbox('tonen', null, array('class' => 'form-control')) }}
                        </div>
        
                    
                        {{ Form::submit('Wijziging opslaan', array('class' => 'btn btn-primary')) }}
                    
                    {{ Form::close() }}
                    

               
               </div>
            </div>
            
        </div>        
@stop