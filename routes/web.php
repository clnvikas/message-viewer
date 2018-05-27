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
	
    return view('welcome',['name' => 'vikas']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/register', 'HomeController@register');

Route::post('/storereg', 'HomeController@storereg');

route::get('/details', 'HomeController@details');

route::get('/edit/{id}', 'HomeController@edit');

route::post('/update', 'HomeController@update');

route::get('/delete-data/{id}', 'HomeController@delete');

////////////////////////////////////////////////////////////////

route::get('/calculator','HomeController@calculator');




route::post('/operation','HomeController@operation');


/////////////////////////////////////////////////////////////////

Route::get('/registration', 'RegisterController@registration');

Route::post('/store', 'RegisterController@store');

Route::get('/emplogin', 'RegisterController@emplogin');

Route::post('/checklog', 'RegisterController@checklog');

Route::post('/text', 'RegisterController@text');
