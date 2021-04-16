<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

Route::get('/', 'ContactsController@index')->name('/');

Route::get('/taarifa/{id}', 'NewsController@show')->name('news');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/parent', 'HomeController@parent')->name('parent');


Route::post('msajili','PlayersController@store');

Route::post('malipo','PlayersController@malipo');

Route::get('payed','PlayersController@paying');

Route::get('mahudhurio','PlayersController@mahudhurio');

Route::get('detele/player/{id}','PlayersController@destroy');

Route::get('showPlayer/{id}','GoalsController@show');


Route::get('detele/email/{id}','ContactsController@destroy');


Route::get('edit/player/{id}','PlayersController@edit');

Route::post('update/player/{id}','PlayersController@update');

Route::post('testmony','PlayersController@update1');

Route::post('addUser','HomeController@addUser');


Route::get('change/status/{id}','PlayersController@send_aprove');

Route::post('customer/contact','ContactsController@store');

Route::get('emails','ContactsController@show');

Route::get('squard', 'SquardController@index')->name('squard');

Route::get('show/player/{id}','SquardController@show')->name('player');

Route::post('atendance','ContactsController@mahudhurio');

Route::post('tukio','EventsController@event');


Route::post('taarifa','InfosController@info');

Route::post('magoli','GoalsController@goal');
