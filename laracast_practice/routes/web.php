<?php


use App\Services\Twitter;

use App\Services\Facebook;
use App\Services\Google;

use App\Repositories\UserRepository;


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
/*
Route::get('/','PagesController@home');
Route::get('/contact','PagesController@contact');
Route::get('/about','PagesController@about');
*/



Route::get('/google', function(Google $google){

	dd($google);

	return view('welcome');

});



Route::get('/', function(){

	return view('welcome');

});


Route::resource('projects','ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');

//Route::patch('/tasks/{task}', 'ProjectTaskController@update');

Route::post('/completed-tasks/{task}', 'CompletedTaskController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTaskController@destroy');


/*
Route::get('/projects', 'ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/create', 'ProjectsController@create');
Route::get('/projects/{project}/edit','ProjectsController@edit');
Route::patch('/projects/{project}', 'ProjectsController@update');
Route::delete('/projects/{project}', 'ProjectsController@destroy');
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
