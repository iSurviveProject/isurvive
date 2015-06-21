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
	return View::make('hello');
});

Route::model('user', 'User');
Route::model('setting', 'Setting');
Route::get('profile/{user}', function(User $user){

});
Route::resource('medication', 'MedicationController');
Route::resource('cd4', 'Cd4Controller');