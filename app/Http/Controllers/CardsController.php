<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        $cards = Card::orderBy('created_at', 'desc')->get();
        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cards.create');
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
            'menukaartNL' => 'required',
            'menukaartFR' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('card/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $fileNL = Input::file('menukaartNL');
        $filenameNL = $fileNL->getClientOriginalName();

        $fileFR = Input::file('menukaartFR');
        $filenameFR = $fileFR->getClientOriginalName();

        $card = new Card;

        $card->menukaartNL = $filenameNL;
        $card->menukaartFR = $filenameFR;

        $card->save();

        $fileNL->move(public_path() . '/img/cards', $filenameNL);
        $fileFR->move(public_path() . '/img/cards', $filenameFR);

        return redirect('/card')
            ->with('success', true)->with('card','Menukaart opgeslagen.');
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
    //    $card = Card::find($id);

        // show the edit form and pass the nerd
      //  return view('cards.edit')
        //    ->with('card', $card);
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
      /*  $card = Card::find($id);

        $card->menukaartNL = Input::get('menukaartNL');
        $card->menukaartFR = Input::get('menukaartFR');

        $card->save();

        return redirect('/card'); +/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    }
    public function destroy($id)
    {
        $card = Card::find($id);

        $filenameNL = $card->menukaartNL;
        $fileNL = public_path() . '/img/cards/' . $filenameNL;

        if (file_exists($fileNL) && !is_dir($fileNL)) {
                unlink($fileNL);
        }

        $filenameFR = $card->menukaartFR;
        $fileFR = public_path() . '/img/cards/' . $filenameFR;

        if (file_exists($fileFR) && !is_dir($fileFR)) {
                unlink($fileFR);
        }

        $card->delete();

        // redirect
        return redirect('/card');
    }
}
