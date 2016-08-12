<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Hour;
use Illuminate\Http\Request;

use App\Http\Requests;

class HoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hours = Hour::orderBy('created_at', 'desc')->get();
        return view('hours.index', compact('hours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hours.create');
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
            'urenNL' => 'required',
            'urenFR' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('hour/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        
        
        $hour = new Hour;
        
        $hour->urenNL = $request->urenNL;
        $hour->urenFR = $request->urenFR;
        
        $hour->save();
        
        return redirect('/hour')
            ->with('success', true)->with('hour','Boodschap opgeslagen.');
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
        $hour = Hour::find($id);

        // show the edit form and pass the nerd
        return view('hours.edit')
            ->with('hour', $hour);
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
        $hour = Hour::find($id);
        
        $hour->urenNL = Input::get('urenNL');
        $hour->urenFR = Input::get('urenFR');
        
        $hour->save();
        
        return redirect('/hour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hour = Hour::find($id);
        $hour->delete();

        // redirect
        return redirect('/hour');
    }
}
