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

	$task = [

		'Go to the market',
		'Go to the school',
		'Go to work'

	];

	$names = [
		'ashik',
		'Iqbal',
		'Islam'

	];

    /*return view('welcome', [

    	'names' => [
    				'ashik',
    	 			'iqbal',
    	 			'islam'
    	],

    	'foo'   => [
    				'foo1',
    				'foo2'
    	]

	]); */

	return view('welcome')->withNames([
    				'ashik',
    	 			'iqbal',
    	 			'islam'
    	])->withFoo([

    		'foo2',
    		'foo3'
    		]
    	);

	
});



Route::get('/contact', function(){

	return view('contact');
});


Route::get('/about', function(){

	return view('about');
});

