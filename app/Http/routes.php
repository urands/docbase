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

Route::get('/', function () {

//	Debugbar::startMeasure('render','Time for rendering');
//	Debugbar::stopMeasure('render');
//	Debugbar::addMeasure('now', LARAVEL_START, microtime(true));
//	Debugbar::measure('My long operation', function() {
// Do something… 
	
//});

    return view('welcome');
});


Route::controllers([
 'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',
]);


Route::resource('project','ProjectController');


// Authentication routes...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');



//Route::controller(Controller::detect());
