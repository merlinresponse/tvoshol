<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Mail;

class EmailController extends Controller
{
  public function send(Request $request)
     {
         $voornaam = $request->input('voornaam');
         $naam = $request->input('naam');
         $email = $request->input('email');
         $tel = $request->input('tel');
         $adres = $request->input('adres');
         $beschrijving = $request->input('beschrijving');
         $stijl = $request->input('stijl');


         // Processing of attachment input

         $files = Input::file('bijlagen');
         // Making counting of uploaded images
         $file_count = count($files);
         // start count how many uploaded
         $uploadcount = 0;

         /*

         foreach((array)$files as $file) {
           $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
           $validator = Validator::make(array('file'=> $file), $rules);
           if($validator->passes()){
             $destinationPath = 'uploads';
             $filename = $file->getClientOriginalName();
             $upload_success = $file->move($destinationPath, $filename);
             $uploadcount ++;
           }
         }
         if($uploadcount == $file_count){
           Session::flash('success', 'Upload successfully');
           return back()->withInput();
         }
         else {
           return back()->withInput();
         }

         */

         // processing of mail sending

         Mail::send('emails.send', [

           'voornaam' => $voornaam,
           'naam' => $naam,
           'email' => $email,
           'tel' => $tel,
           'adres' => $adres,
           'beschrijving' => $beschrijving,
           'stijl' => $stijl

         ], function ($message) use ($files)
         {

             $message->from('noreply@imaginn.be', 'Contact website');

             $message->to('maxime@responsestudios.com');

            //$size = sizeOf($files); //get the count of number of attachments
          //  for ($i=0; $i < $size; $i++) {
            //  $file = $files[$i];
              $message->attach($files);
          //  }

         });

         return response()->json(['message' => 'Request completed']);
     }
}
