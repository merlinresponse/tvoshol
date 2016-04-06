<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
    public function index()
    {
        $shops = DB::table('shops')->get();
        
        return view('shops.index', compact('shops'));
    }
}
