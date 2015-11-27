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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Route::get('/','Auth\AuthController@getLogin');


Route::get('/', function () {
    return Redirect('auth/login');
});

Route::get('home', function () {
    return Redirect('art');
});

Route::group(array('middleware' => 'auth'), function()
{
  	Route::resource('art', 'ArtController');
    Route::resource('contactform', 'ContactFormController');
   	Route::post('art/activate/{id}', 'ArtController@activate');
   	Route::post('art/update/{id}', 'ArtController@update');
  	//Route::get('activate', 'ArtController@activate');
	Route::resource('contact', 'ContactController');
	Route::post('contact/activate/{id}', 'ContactController@activate');
   	Route::post('contact/update/{id}', 'ContactController@update');


	//Route::resource('', '');

});
