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
	return View::make('shoppers.createPaymentForm');
});


Route::post('/makeaPayMent', array('as' => 'PayMent', 'uses' => 'ShoppersController@PayMent'));

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++Resource Routes


Route::resource('image', 'ImagersController');
Route::resource('product', 'ProducersController');
Route::resource('checkout', 'SellersController');
Route::resource('promo', 'PromotersController');
Route::resource('show', 'BookersController');
Route::resource('artist', 'PaintersController');
Route::resource('shopper', 'ShoppersController');

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++END Resource Routes




//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++Form Routes
Route::get('/newImage/form', array('as' => 'formnewImage', function(){
	return View::make('producers.newImage');
}));


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++END Form Routes


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++Create New Entry Routes
Route::post('/newProductCat/make', array('as' => 'newProductCat', 'uses' => 'ProducersController@newProductCat'));
Route::post('/newImage/make', array('as' => 'newImage', 'uses' => 'ImagersController@newImage'));




//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++END Create New Entry Routes



//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++BEGIN Sort Routes

Route::get('/fetchProducts/{type}', array('as' => 'sortProducts', 'uses' => 'ProducersController@sortProducts'));

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++END Sort Routes