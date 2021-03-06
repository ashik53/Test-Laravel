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

Route::get('view', function () {
    return view('take_input');
});

//Route::get('/show/{id}', 'DatasController');
Route::resource('datas', 'InfoController');
Route::post('save-info', 'InfoController@saveData');
Route::get('/see-all', 'InfoController@seeAll');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
