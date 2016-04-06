@extends('layouts.app')

@section('content')
    <h1>All Shops</h1>
        
    @foreach ($shops as $shop)
    
        <div>
            
            {{ $shop->title }}
            
        </div>        
    
    @endforeach    
        
@stop