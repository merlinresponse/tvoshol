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
               
                   {{ Form::model($hour, array('route' => array('hour.update', $hour->id), 'method' => 'PUT')) }}

                            
                        <div class="form-group">
                            {{ Form::label('urenNL', 'Openingsuren Nederlands') }}
                            {{ Form::textarea('urenNL', null, array('class' => 'form-control')) }}
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('urenFR', 'Openingsuren Frans') }}
                            {{ Form::textarea('urenFR', null, array('class' => 'form-control')) }}
                        </div>
        
                    
                        {{ Form::submit('Wijziging opslaan', array('class' => 'btn btn-primary')) }}
                    
                    {{ Form::close() }}
                    

               
               </div>
            </div>
            
        </div>        
@stop