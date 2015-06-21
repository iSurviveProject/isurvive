<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('dashboard', array('before' => 'BaseController@auth'));
});

//Route::model('user', 'User');
Route::model('setting', 'Setting');
Route::get('profile/{user}', function(User $user){

});
Route::resource('medication', 'MedicationController');
Route::resource('cd4', 'Cd4Controller');
Route::resource('user', 'UserController');
# Laravel Logs
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
// route to show the login form
Route::get('login', array('uses' => 'UserController@showLogin'));

// route to process the login form
Route::post('login', array('uses' => 'UserController@doLogin'));

// route to process logout
Route::get('logout', array('uses' => 'UserController@doLogout'));