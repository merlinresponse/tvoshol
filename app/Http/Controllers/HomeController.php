<?php

namespace App\Http\Controllers;

use App\Message;

use App\Http\Requests;
use Illuminate\Http\Request;

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
        
        $messages = Message::orderBy('created_at', 'desc')->get();
                
        return view('welcome', compact('messages'));
    }
}
