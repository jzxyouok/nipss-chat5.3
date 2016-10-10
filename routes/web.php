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

Route::group(['middleware' => 'web'], function() {
	
	Route::get('/', 'AuthenticationController@showLogin')->name('login');
	Route::post('login', 'AuthenticationController@doLogin')->name('getFuckingIn');
	Route::post('/logout', 'AuthenticationController@logout');

	Route::group(['prefix' => 'welcome'], function(){
		Route::get('/', 'HomeController@index')->name('home');

	});

<<<<<<< HEAD
	Route::group(['prefix' => 'chat-room'], function() {
=======
	Route::group(['prefix' => 'chat_room'], function() {
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
		Route::get('/', 'GroupController@index')->name('group');
		Route::get('/{id}', 'GroupController@getRoom')->name('get_rooms');
	    // Route::get('/{id}', 'GroupController@index')->name('room');

	    Route::post('/sendMessage', 'MessageController@postMessage')->name('massenger');
	    
	});


<<<<<<< HEAD
	Route::group(['prefix' => 'general-chat'], function() {
		Route::get('/', 'HomeController@generalChat')->name('generalChat');
	});
	
	Route::group(['prefix' => 'members'], function() {
		Route::get('/', 'HomeController@index')->name('members');
	});
	Route::group(['prefix' => 'mail'], function() {
		Route::get('/', 'HomeController@mail')->name('mail');
		Route::get('/create-mail', 'MailController@createMail')->name('create-mail');
		Route::post('/', 'MailController@postMail')->name('sendmail');
=======
	Route::group(['prefix' => 'all-members'], function() {
		Route::get('/', 'HomeController@members')->name('members');
	});

	Route::group(['prefix' => 'mail'], function() {
		Route::get('/', 'HomeController@mail')->name('mail');
		// Route::get('/create-mail', 'MailController@createMail')->name('create-mail');
		Route::post('/send-mail', 'MailController@postMail')->name('sendmail');
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
	});

	Route::group(['prefix' => 'groups'], function() {
		Route::get('/', 'GroupController@groupIndex')->name('groups');
<<<<<<< HEAD
		
	});

    	Route::get('/group/{id}', 'GroupController@getRoom')->name('selectedgroup');
=======
	});


>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
});