@extends('layouts.app')

@section('content')

        <div class="container">

            <div class="row">
               <div class="col-md-12">

                  <h3>Een afbeelding toevoegen</h3>

               </div>
            </div>

            </br>

            <div class="row">
               <div class="col-md-12">

                  <form method="POST" action="/picture" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">


                       <div class="form-group">
                          
                           <input type="file"
                                  class="slim"
                                  data-ratio="16:9"
                                  data-size="900,900"
                                  name="slim[]">
                       </div>


                       <div class="form-group">
                         <label for="beschrijvingNL">Beschrijving Nederlands</label>
                         <input type="text" class="form-control" name="beschrijvingNL" placeholder="Beschrijving Nederlands">
                       </div>
                       <div class="form-group">
                         <label for="beschrijvingFR">Beschrijving Frans</label>
                         <input type="text" class="form-control" name="beschrijvingFR" placeholder="Beschrijving Frans">
                       </div>


                       <!--
                       <div class="form-group">
                         <label for="bestand">Bestandsnaam</label>
                         <input type="file" class="form-control" name="bestand">
                       </div>
                      -->


                       <div class="form-group">
                         <label for="tonen">Afbeelding weergeven?</label>
                         <input type="checkbox" class="form-control" name="tonen" value="1" checked>
                       </div>
                        </br>
                       <button type="submit" class="btn btn-default">Versturen</button>
                   </form>

               </div>
            </div>

        </div>
@stop
