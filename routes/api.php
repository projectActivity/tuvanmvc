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

	// Api/Users
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

	Route::put('user/{id}', [
		'uses' => 'UserController@update',
		'as'   => 'api.user.update'
	]);

	Route::delete('user/{id}', [
		'uses' => 'UserController@destroy',
		'as'   => 'api.user.destroy'
	]);


	// Api/Educations
	Route::get('educations', [
		'uses' => 'EducationController@index',
		'as'   => 'api.education.index'
	]);
	
	// Api/Positions
	Route::get('positions', [
		'uses' => 'PositionController@index',
		'as'   => 'api.position.index'
	]);

	// Api/Tags
	Route::get('tags', [
		'uses' => 'TagController@index',
		'as'   => 'api.tag.index'
	]);

	// Api/Slides
	Route::get('slides', [
		'uses' => 'SlideController@index',
		'as'   => 'api.slide.index'
	]);

	// Api/Catagories
	Route::get('categories', [
		'uses' => 'CategoryController@index',
		'as'   => 'api.category.index'
	]);

	Route::get('category/{id}/edit', [
		'uses' => 'CategoryController@edit',
		'as'   => 'api.category.edit'
	]);

	Route::post('category', [
		'uses' => 'CategoryController@store',
		'as'   => 'api.category.store'
	]);

	Route::put('category/{id}', [
		'uses' => 'CategoryController@update',
		'as'   => 'api.category.update'
	]);

	Route::delete('category/{id}', [
		'uses' => 'CategoryController@destroy',
		'as'   => 'api.category.destroy'
	]);

	// Api/ArticleTypes
	Route::get('article_types', [
		'uses' => 'ArticleTypeController@index',
		'as'   => 'api.articleType.index'
	]);

	// Api/Services
	Route::get('services', [
		'uses' => 'ServiceController@index',
		'as' => 'api.service.index'
	]);

});
