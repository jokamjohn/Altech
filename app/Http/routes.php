<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});


Route::group(['middleware' => 'web'], function () {
    
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/products', ['as' => 'products', 'uses' => 'HomeController@products']);
    Route::get('/about/us', ['as' => 'about', 'uses' => 'HomeController@about']);
    Route::get('/contact/us', ['as' => 'contact', 'uses' => 'HomeController@contact']);
    Route::post('/contact', ['as' => 'contact.send', 'uses' => 'HomeController@send']);

});


