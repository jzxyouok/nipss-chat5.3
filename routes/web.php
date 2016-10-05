<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'web'], function() {
	
	Route::get('/', 'AuthenticationController@showLogin')->name('login');
	Route::post('login', 'AuthenticationController@doLogin')->name('getFuckingIn');
	Route::post('/logout', 'AuthenticationController@logout');

	Route::group(['prefix' => 'chat_room'], function() {
	    Route::get('/', 'GroupController@index')->name('get_rooms');
	    Route::get('/try', 'GroupController@fuckyou')->name('try');

	    
	    
	});

});