<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 *Route::get('/', function () {
    return view('welcome');
});
*/


Route::auth();


    Route::group(['prefix' => LaravelLocalization::setLocale()], function()
    {

      Route::get('/', 'HomeController@index');
      Route::get('/', 'HomeController@webshop');

  });

Route::resource('reservation','ReservationsController');
//Route::get('/reservations', 'ReservationsController@index');
//Route::get('/addreservation', 'ReservationsController@add');
//Route::post('/reservations', 'ReservationsController@store');
//Route::delete('/reservations/delete', 'ReservationsController@delete');

/*Route::get('/shops/{shop}', 'ShopController@show');*/


Route::group(['middleware' => 'auth'], function(){
  Route::resource('message', 'MessagesController');
  Route::resource('picture', 'PicturesController');
  Route::resource('hour', 'HoursController');
  Route::resource('card', 'CardsController');

});
