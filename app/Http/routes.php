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
Route::get('/', 'PagesController@contact');
Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');

Route::resource('articles', 'ArticlesController');
Route::resource('users', 'UsersController');
Route::resource('user', 'UsersController');
Route::resource('stream', 'UsersController@stream');
Route::post('followed', 'UsersController@follow');
Route::get('followers', ['as'=> 'followers', 'uses' =>'UsersController@showFollowers']);
Route::get('uploadcat', 'UploadcatController@uploadcat');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' =>'Auth\PasswordController'
]);
Route::get('foo', ['middleware' => 'manager', function()
{
    return 'this page may only be viewed by managers';
}]);
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



