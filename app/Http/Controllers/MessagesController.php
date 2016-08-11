<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new Message;
        
        $message->titelNL = $request->titelNL;
        $message->titelFR = $request->titelFR;
        $message->tekstNL = $request->tekstNL;
        $message->tekstFR = $request->tekstFR;
        
        $message->save();
        
        return redirect('/message')
            ->with('success', true)->with('message','Boodschap opgeslagen.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                // get the nerd
        $message = Message::find($id);

        // show the edit form and pass the nerd
        return view('messages.edit')
            ->with('message', $message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = Message::find($id);
        
        $message->titelNL = Input::get('titelNL');
        $message->titelFR = Input::get('titelFR');
        $message->tekstNL = Input::get('tekstNL');
        $message->tekstFR = Input::get('tekstFR');
        
        $message->save();
        
        return Redirect::to('messages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
