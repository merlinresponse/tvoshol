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
          'voornaam'             => 'required',                       // just a normal required validation
          'naam'            => 'required',    // required and must be unique in the ducks table
          'email'         => 'required|email'
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
            return redirect('contact')
                        ->withErrors($validator)
                        ->withInput();
        }



        $message = new Message;

        $message->voornaam = $request->voornaam;
        $message->naam = $request->naam;
        $message->email = $request->email;
        $message->tel = $request->tel;
        $message->adres = $request->adres;
        $message->beschrijving = $request->beschrijving;
        $message->stijl = $request->stijl;
        $message->save();

        // Attachments upload and database save;

        $files = Input::file('images');
        // Making counting of uploaded images
        $file_count = count($files);
        // start count how many uploaded
        $uploadcount = 0;
        foreach((array)$files as $file) {
          $rules = array('file' => 'max:1000|mimes:png,gif,jpeg,txt,pdf,doc'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
          $validator = Validator::make(array('file'=> $file), $rules);
          if($validator->passes()){
            $destinationPath = 'uploads';
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
            $uploadcount ++;
            $attachment = new Attachment;
            $attachment->message_id = $message->id;
            $attachment->filename = $filename;
            $attachment->save();
          }
        }

        // Send a notification to Vincent

        Mail::send('emails.send', [

          'tekst' => 'Controleer je berichten op imaginn.'

        ], function ($message)
        {

            $message->from('noreply@imaginn.be', 'Contact website');
            $message->subject('Je hebt een bericht ontvangen.');
            $message->to('maxime@responsestudios.com');


        });

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
      //  $message = Message::find($id);

        // show the edit form and pass the nerd
      //  return view('messages.edit')
        //    ->with('message', $message);
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

      /*
        $message = Message::find($id);

        $message->titelNL = Input::get('titelNL');
        $message->titelFR = Input::get('titelFR');
        $message->tekstNL = Input::get('tekstNL');
        $message->tekstFR = Input::get('tekstFR');

        $message->save();

        return redirect('/message');

        */
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
        //return $message->attachments;
        //$size = sizeOf($files); //get the count of number of attachments
      //  for ($i=0; $i < $size; $i++) {
        //  $file = $files[$i];

      //  $size = sizeOf($message->attachments);


        foreach($message->attachments as $attachment)
        {
          $fileToRemove = public_path() . '/uploads/' .$attachment->filename;
          if (file_exists($fileToRemove) && !is_dir($fileToRemove))
          {
            unlink($fileToRemove);
          }

        }

        $message->delete();

        // redirect
        return redirect('/message');
    }
}
