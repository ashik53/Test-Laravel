<?php

use App\User;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {


    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //Authentication routes
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
    Route::get('logout', ['as' => 'logout','uses' => 'Auth\AuthController@getLogout']);
    
    //Registration routes
    Route::get('register','Auth\AuthController@getRegister');
    Route::post('register',['as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);


    //page routes
    Route::get('/home', function(){
        return view('home');
    });
    Route::get('/authenticated', function(){
        
        //dd(auth()->id());
        return view('authenticated');
    });


});
