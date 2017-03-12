<?php
use App\Calls;
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
    return view('home');
});
Route::get('test', function () {
    return view('test');
});
Route::get('landing', function () {
    return view('home');
});
// Route::get('test', 'CallsController@index');
Route::get('calls', function () {
    return View::make('calls')
        ->with('calls', Calls::all());
});

Route::get('create', function(){
  return view('createusers');
});


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
 */
Route::resource('users', 'UsersController');
