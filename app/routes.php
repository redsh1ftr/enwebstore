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
	return View::make('hello');
});


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++Resource Routes


Route::resource('image', 'ImagersController');
Route::resource('product', 'ProducersController');
Route::resource('checkout', 'SellersController');
Route::resource('promo', 'PromotersController');
Route::resource('show', 'BookersController');
Route::resource('artist', 'PaintersController');

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++END Resource Routes

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++Create New Entry Routes
Route::post('/newProductCat/make', array('as' => 'newProductCat', 'uses' => 'ProducersController@newProductCat'));




//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++END Create New Entry Routes
