<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /*
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    
    
    public function index()
    {
        
        $messages = Message::orderBy('created_at', 'desc')->take(1)->get();
                
        return view('welcome', compact('messages'));
    }
}
