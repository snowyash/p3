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

Route::get( '/', function()
{
	return View::make( 'welcome' );
});

Route::get( '/xkcd', function()
{
	return View::make( 'xkcd' );
});

Route::get( '/lorem_ipsum', array(
    'as'    => 'LIController.new',
    'uses'  => 'LIController@add'
) );
 
Route::post( '/lorem_ipsum', array(
    'as'    => 'LIController.create',
    'uses'  => 'LIController@create'
) );

Route::get( '/fake_user', array(
    'as'    => 'FUController.new',
    'uses'  => 'FUController@add'
) );
 
Route::post( '/fake_user', array(
    'as'    => 'FUController.create',
    'uses' => 'FUController@create'
) );