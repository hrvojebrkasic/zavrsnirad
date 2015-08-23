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

Route::get('index', 'ArticlesController@main');
Route::get('povijest', 'PagesController@povijest');
Route::get('struka', 'PagesController@struka');
Route::get('uprava', 'PagesController@uprava');
Route::get('tablica', 'PagesController@tablica');
Route::get('djevojcice12', 'PagesController@djevojcice12');
Route::get('djecaci12', 'PagesController@djecaci12');
Route::get('kadetkinje', 'PagesController@kadetkinje');
Route::get('mladi_kadeti', 'PagesController@mladi_kadeti');
Route::get('kadeti', 'PagesController@kadeti');
Route::get('juniori', 'PagesController@juniori');
Route::get('raspored', 'PagesController@raspored');
Route::get('dvorane', 'PagesController@dvorane');
Route::resource('admin', 'AdminController');
Route::get('article', 'ArticlesController@index');
Route::get('article/{slug}', 'ArticlesController@show');
Route::post('article', 'ArticlesController@store');
Route::get('admin/leagues/create', 'LeaguesController@create');
Route::post('admin', 'LeaguesController@store');
Route::get('admin/leagues/seniori', 'LeaguesController@index');

// Authentication routes
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);