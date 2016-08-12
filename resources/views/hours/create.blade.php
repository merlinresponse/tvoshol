@extends('layouts.app')

@section('content')
       
        <div class="container">
        
            <div class="row">
               <div class="col-md-12">
                  
                  <h3>Openingsuren toevoegen</h3>
               
               </div>
            </div>
            
            </br>
            
            <div class="row">
               <div class="col-md-12">
                  
                  <form method="POST" action="/hour">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <div class="form-group">
                         <label for="urenNL">Openingsuren Nederlands</label>
                         <textarea class="form-control" name="urenNL" placeholder="Openingsuren Nederlands"></textarea>
                       </div>                     
                       <div class="form-group">
                         <label for="urenFR">Openingsuren Frans</label>
                         <textarea class="form-control" name="urenFR" placeholder="Openingsuren Frans"></textarea>
                       </div>
                        </br>
                       <button type="submit" class="btn btn-default">Versturen</button>
                   </form>
               
               </div>
            </div>
            
        </div>        
@stop