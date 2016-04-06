@extends('layouts.app')

@section('content')
    <h1>A Shop</h1>
        
    @foreach ($shops as $shop)
    
       
            
        <h1>{{ $shop->posname }}</h1>   
          
            
           
    
    @endforeach    
        
@stop