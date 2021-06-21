<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
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
Route::get('/foo', function () {
    Artisan::call('storage:link');

    return "done";
});

Route::get('/foo1', function () {
    Artisan::call('migrate');

    return "done";
});
// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('cache:clear');
//     return "hi";
// });

Route::get('/', 'ContactsController@index')->name('/');

Route::get('/taarifa/{id}', 'FrontController@show1')->name('news');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/parent', 'HomeController@parent')->name('parent');


Route::post('msajili','PlayersController@store');

Route::post('malipo','PlayersController@malipo');

Route::get('payed','PlayersController@paying');

Route::get('mahudhurio','PlayersController@mahudhurio');

Route::get('detele/player/{id}','PlayersController@destroy');

Route::get('delete/user/{id}','PlayersController@destroyuser');

Route::get('showPlayer/{id}','GoalsController@show');

Route::get('showMahudhurio/{id}','PlayersController@showMahudhurio');

Route::get('downloadInvoice/{id}','GoalsController@downloadInvoice');

Route::get('delete/info/{id}','InfosController@destroy');

Route::get('delete/event/{id}','EventsController@destroy');

Route::get('detele/email/{id}','ContactsController@destroy');


Route::get('edit/player/{id}','PlayersController@edit');

Route::post('update/player/{id}','PlayersController@update');

Route::post('testmony','PlayersController@update1');

Route::post('addUser','HomeController@addUser');


Route::get('change/status/{id}','PlayersController@send_aprove');

Route::post('customer/contact','ContactsController@store');

Route::get('emails','ContactsController@show');

Route::get('events','EventsController@show');

Route::get('infos','InfosController@show');

Route::get('squard', 'SquardController@index')->name('squard');

Route::get('show/player/{id}','SquardController@show')->name('player');

Route::post('atendance','ContactsController@mahudhurio');

Route::post('tukio','EventsController@event');


Route::post('taarifa','InfosController@info');


Route::post('about_us','FrontController@store');

Route::post('video_urls','VideoController@update');

Route::get('heros_content','FrontController@index');

Route::get('about_content','FrontController@show');

Route::get('edit/about/{id}','FrontController@edit');

Route::post('update/hero/{id}','FrontController@update');

Route::post('update/about/{id}','FrontController@updateAbout');

Route::get('edit/hero/{id}','FrontController@editHero');
Route::get('delete/hero/{id}','FrontController@destroy');

Route::post('hero','FrontController@storeHero');


Route::post('magoli','GoalsController@goal');
