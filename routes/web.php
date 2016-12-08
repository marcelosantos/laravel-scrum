<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function(){
    // Route::get('lists', ['as' => 'lists', function(){
    //     return App\Listing::all();
    // }]);
    Route::resource('listing','ListingController', ['only' => ['index','store','update']]);
    Route::resource('listing.cards','ListingCardController', ['only' => ['index','store','update']]);
});
