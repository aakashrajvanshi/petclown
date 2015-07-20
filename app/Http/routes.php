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

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');

Route::get('petition/create',['middleware' => 'auth', 'uses' => 'PetitionController@create']);
Route::post('petition/create',['middleware' => 'auth', 'uses' => 'PetitionController@store']);
Route::get('petition/edit/{id}',['middleware' => 'auth', 'uses' => 'PetitionController@edit']);
Route::post('petition/edit/{id}',['middleware' => 'auth', 'uses' => 'PetitionController@update']);
Route::get('petition/{id}','PetitionController@show');
Route::get('petitions','PetitionController@index');

Route::post('comment',['middleware' => 'auth', 'uses' => 'CommentController@store']);

Route::get('admin/approve/{id}','AdminController@approve');
Route::get('admin/disapprove/{id}','AdminController@disapprove');
//Route::resource('admin', 'AdminController');
Route::resource('admin', 'AdminController');

//profile resource (authentication done inside the controller)
Route::get('profile', ['middleware' => 'auth', 'uses' => 'ProfileController@index']);
Route::post('profile', ['middleware' => 'auth', 'uses' => 'ProfileController@store']);
Route::get('profile/edit', ['middleware' => 'auth', 'uses' => 'ProfileController@edit']);
Route::get('profile/privacy', ['middleware' => 'auth', 'uses' => 'ProfileController@privacy']);
Route::post('profile/privacy', ['middleware' => 'auth', 'uses' => 'ProfileController@update_privacy']);
Route::get('profile/{id}', ['middleware' => 'auth', 'uses' => 'ProfileController@show']);

//like unlike comments
Route::get('like/{id}',['middleware' => 'auth', 'uses' => 'CommentController@userlike']);
Route::get('unlike/{id}',['middleware' => 'auth', 'uses' => 'CommentController@userunlike']);

// Social authentication
Route::get('oauth/{provider}','LoginController@oauth2provider');
Route::get('callback/{provider}', 'LoginController@callback');

/*
 * Authentication Controller
 * */
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// Display all SQL executed in Eloquent
/*
Event::listen('illuminate.query', function($query)
{
    var_dump($query);
});
*/