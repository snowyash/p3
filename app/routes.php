<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('welcome');
});

Route::get('/xkcd', function()
{
	return View::make('xkcd');
});

Route::get('/fake_user', function()
{
	return View::make('fake_user');
});

Route::get('/lorem_ipsum', array(
    'as' => 'LIController.new',
    'uses' => 'LIController@add'
) );
 
Route::post('/lorem_ipsum', array(
    'as' => 'LIController.create',
    'uses' => 'LIController@create'
) );