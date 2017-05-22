<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/', function(Request $request) {
// 	// dd($request->all());
// 	$validator = Validator::make($request->all(), [
// 		'email.*' => 'required|email'
// 	], [
// 		'email.*' => 'This address must be formatted properly.'
// 	]);
// 	if ($validator->fails()) {
// 		return back()->withInput()->withErrors($validator);
// 	}
// 	return 'Validation was a success!!';
// });
// All the above can be replaced with this:
Route::post('/', 'InvitationsController@store');

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');
