@extends('layouts.app')

@section('content')
       
        <div class="container">
        
            <div class="row">
               <div class="col-md-12">
                  
                  <h3>Een menukaart toevoegen</h3>
               
               </div>
            </div>
            
            </br>
            
            <div class="row">
               <div class="col-md-12">
                  
                  <form method="POST" action="/card" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <div class="form-group">
                         <label for="menukaartNL">Menukaart Nederlands</label>
                         <input type="file" class="form-control" name="menukaartNL">
                       </div>
                       <div class="form-group">
                         <label for="menukaartFR">Menukaart Frans</label>
                         <input type="file" class="form-control" name="menukaartFR">
                       </div>                           

                        </br>
                       <button type="submit" class="btn btn-default">Versturen</button>
                   </form>
               
               </div>
            </div>
            
        </div>        
@stop