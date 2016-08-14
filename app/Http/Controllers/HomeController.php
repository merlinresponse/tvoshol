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
        
        $message = Message::orderBy('created_at', 'desc')->take(1)->get();
        $message_titel = $message->titelNL;
        $message_tekst = $message->tekstFR;
        
    
        
        
        return view('welcome', ['message_titel' => $message_titel, 'message_tekst' => $message_tekst]);
    }
}
