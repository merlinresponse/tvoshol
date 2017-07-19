<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Message;
use App\Attachment;
use Illuminate\Http\Request;
use Session;
use Mail;
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
        $messages = Message::orderBy('created_at', 'desc')->get();
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

      // create the validation rules ------------------------
      $rules = array(
          'titelNL'             => 'required',                       // just a normal required validation
          'tekstNL'            => 'required'    // required and must be unique in the ducks table

                   // required and has to match the password field
      );

      // create custom validation messages ------------------
      $messages = array(
          'required' => 'Gelieve :attribute zeker in te vullen.'

      );

      // do the validation ----------------------------------
      // validate against the inputs from our form
      $validator = Validator::make(Input::all(), $rules, $messages);

        if ($validator->fails()) {
          $messages = $validator->messages();
            return redirect('message')
                        ->withErrors($validator)
                        ->withInput();
        }



        $message = new Message;

        $message->titelNL = $request->titelNL;
        $message->titelFR = $request->titelFR;
        $message->tekstNL = $request->tekstNL;
        $message->tekstFR = $request->tekstFR;

        $message->save();


        // Send a notification to Vincent



        // End of notification
        /*
        if($uploadcount == $file_count){
          Session::flash('success', 'Upload successfully');
          return back()->withInput();
        }
        else {
          return back()->withInput();
        }
        */
        // end of attachments

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
       return view('messages.edit')->with('message', $message);
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
        $message->tekstFR = Input::get('tekstNL');
        $message->tekstFR = Input::get('tekstFR');

        $message->save();

        return redirect('/message');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::find($id);


        $message->delete();

        // redirect
        return redirect('/message');
    }
}
