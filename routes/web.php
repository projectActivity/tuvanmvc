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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin'], function () {

	Route::get('/login', [
		'uses' => 'AccountController@login',
		'as'   => 'login'
	]);

	Route::post('/signin', [
		'uses' => 'AccountController@signin',
		'as'   => 'signin'
	]);

	Route::get('/forgot-password', [
		'uses' => 'AccountController@forgotPassword',
		'as'   => 'forgot-password'
	]);

	Route::post('/send-email', [
		'uses' => 'AccountController@sendEmail',
		'as'   => 'send-email'
	]);

	Route::group(['prefix' => 'admin'], function () {

		Route::get('logout', [
			'uses' => 'AccountController@logout',
			'as'   => 'logout'
		]);

		Route::get('/', [
			'uses' => 'HomeController@index',
			'as'   => 'admin.index',
		]);

		Route::get('user', [
			'uses' => 'UserController@index',
			'as'   => 'admin.user.index',
		]);

		Route::get('user/{id?}/edit', [
			'uses' => 'UserController@edit',
			'as'   => 'admin.user.edit'
		]);

		Route::delete('user/{id?}/delete', [
			'uses' => 'UserController@destroy',
			'as'   => 'admin.user.destroy',
		]);
	});

});
