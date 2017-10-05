<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Picture;
use App\Slim;
use Illuminate\Http\Request;

use App\Http\Requests;

class PicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $pictures = Picture::orderBy('created_at', 'desc')->get();
        return view('pictures.index', compact('pictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $validator = Validator::make($request->all(), [
            'beschrijvingNL' => 'required',
            'beschrijvingFR' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect('picture/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $images = Slim::getImages();
        $image = $images[0];
        $name = $image['output']['name'];
        $data = $image['output']['data'];
        $file = Slim::saveFile($data, $name);
        //$file = Input::file('bestand');
        //$filename = $file->getClientOriginalName();

        $picture = new Picture;

        $picture->beschrijvingNL = $request->beschrijvingNL;
        $picture->beschrijvingFR = $request->beschrijvingFR;
        $picture->bestand = $file['name'];
        $picture->tonen = $request->input('tonen', 0);

        $picture->save();

        $file->move(public_path() . '/img/carousel', $filename);

        return redirect('/picture')
            ->with('success', true)->with('picture','Boodschap opgeslagen.');
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
        $picture = Picture::find($id);

        // show the edit form and pass the nerd
        return view('pictures.edit')
            ->with('picture', $picture);
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
        $picture = Picture::find($id);

        $picture->beschrijvingNL = Input::get('beschrijvingNL');
        $picture->beschrijvingFR = Input::get('beschrijvingFR');
        //$picture->bestand = Input::get('bestand');
        $picture->tonen = Input::get('tonen');

        $picture->save();

        return redirect('/reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $picture = Picture::find($id);

        $filename = $picture->bestand;
        $file = public_path() . '/img/uploads/' . $filename;

        if (file_exists($file) && !is_dir($file)) {
                unlink($file);
        }


        $picture->delete();

        // redirect
        return redirect('/picture');
    }
}
