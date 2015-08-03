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
Route::get('home', 'PagesController@home');

Route::get('petition/{id}','PetitionController@show');
Route::get('petitions','PetitionController@index');

/*Change middleware to admin*/
Route::get('ideas/create',['middleware' => 'auth', 'uses' => 'IdeasController@create']);
Route::post('ideas/create',['middleware' => 'auth', 'uses' => 'IdeasController@store']);
Route::get('ideas/edit/{id}',['middleware' => 'auth', 'uses' => 'IdeasController@edit']);
Route::post('ideas/edit/{id}',['middleware' => 'auth', 'uses' => 'IdeasController@update']);
Route::get('ideas/{id}',['middleware' => 'auth', 'uses' => 'IdeasController@show']);
Route::get('ideas/delete/{id}',['middleware' => 'auth', 'uses' => 'IdeasController@destroy']);
Route::get('ideas/restore/{id}',['middleware' => 'auth', 'uses' => 'IdeasController@restore']);

Route::post('comment',['middleware' => 'auth', 'uses' => 'CommentController@store']);
Route::get('addcomment/{id}',['middleware' => 'auth', 'uses' => 'CommentController@addcomment']);
Route::get('support/{id}',['middleware' => 'auth', 'uses' => 'CommentController@support']);

Route::get('admin',['middleware' => 'admin', 'uses' => 'AdminController@index']);

Route::get('admin/createpetition',['middleware' => 'admin', 'uses' => 'AdminController@createpet']);
Route::post('admin/createpetition',['middleware' => 'admin', 'uses' => 'AdminController@storepet']);
Route::get('admin/editpetition/{id}',['middleware' => 'admin', 'uses' => 'AdminController@editpet']);
Route::post('admin/editpetition/{id}',['middleware' => 'admin', 'uses' => 'AdminController@updatepet']);
Route::get('admin/delpetition/{id}',['middleware' => 'admin', 'uses' => 'AdminController@delpet']);
Route::get('admin/undelpetition/{id}',['middleware' => 'admin', 'uses' => 'AdminController@undelpet']);
Route::get('admin/approve/{id}',['middleware' => 'admin', 'uses' => 'AdminController@approve']);
Route::get('admin/disapprove/{id}',['middleware' => 'admin', 'uses' => 'AdminController@disapprove']);
Route::get('admin/reviewidea/{id}',['middleware' => 'admin', 'uses' => 'AdminController@reviewidea']);
Route::post('admin/reviewidea/{id}',['middleware' => 'admin', 'uses' => 'AdminController@storereview']);

Route::get('admin/{id}',['middleware' => 'admin', 'uses' => 'AdminController@show']);



//profile
Route::get('profile', ['middleware' => 'auth', 'uses' => 'ProfileController@index']);
Route::post('profile', ['middleware' => 'auth', 'uses' => 'ProfileController@store']);
Route::get('profile/edit', ['middleware' => 'auth', 'uses' => 'ProfileController@edit']);
Route::get('profile/privacy', ['middleware' => 'auth', 'uses' => 'ProfileController@privacy']);
Route::post('profile/privacy', ['middleware' => 'auth', 'uses' => 'ProfileController@update_privacy']);
Route::get('profile/ideas', ['middleware' => 'auth', 'uses' => 'ProfileController@ideas']);
Route::get('profile/delideas', ['middleware' => 'auth', 'uses' => 'ProfileController@delideas']);
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

/*
 * Static Pages
 */
Route::get('/contact', function(){
    return view('pages.contact');
});


// Display all SQL executed in Eloquent
/*
Event::listen('illuminate.query', function($query)
{
    var_dump($query);
});
*/