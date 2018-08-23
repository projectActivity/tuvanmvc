<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['namespace' => 'Api'], function () {

	// Api/User
	Route::get('users', [
		'uses' => 'UserController@index',
		'as'   => 'api.user.index'
	]);

	Route::post('user', [
		'uses' => 'UserController@store',
		'as'   => 'api.user.store'
	]);

	Route::get('user/{id}', [
		'uses' => 'UserController@show',
		'as'   => 'api.user.show'
	]);

	Route::get('user/{id}/edit', [
		'uses' => 'UserController@edit',
		'as'   => 'api.user.edit'
	]);

	Route::delete('user/{id}', [
		'uses' => 'UserController@destroy',
		'as'   => 'api.user.destroy'
	]);


	// Api/Tags
	
});
