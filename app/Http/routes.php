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

use Carbon\Carbon;

Route::get('/', function () {
    //dd($carbon = Carbon::today()->addHours(23)->toDayDateTimeString());
    return view('home');
});


Route::group(['middleware' => 'web'], function () {
    
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/dashboard', 'ClientAuthController@dashboard');
    Route::get('/products', ['as' => 'products', 'uses' => 'HomeController@products']);
    Route::get('/about/us', ['as' => 'about', 'uses' => 'HomeController@about']);
    Route::get('/contact/us', ['as' => 'contact', 'uses' => 'HomeController@contact']);
    Route::post('/contact', ['as' => 'contact.send', 'uses' => 'HomeController@send']);

    #Count
    Route::resource('/count', 'CountsController');
    Route::get('today/count/data', [ 'as' => 'count.data.today', 'uses' => 'CountsController@today']);

    Route::get('/today/count', 'GraphController@today');
    
    Route::get('today/chart', [ 'as' => 'chart.today', 'uses' => 'GraphController@todayChart']);

    #Data
    Route::resource('/data', 'DataController');
    #Data Views (Show data
    Route::get('today/data', [ 'as' => 'data.today', 'uses' => 'DataCountController@today']);
    Route::get('yesterday/data', [ 'as' => 'data.yesterday', 'uses' => 'DataCountController@yesterday']);
    #Data Charts Views
    Route::get('today/data/chart', [ 'as' => 'data.chart.today', 'uses' => 'GraphController@dataToday']);
    Route::get('yesterday/data/chart', [ 'as' => 'data.chart.yesterday', 'uses' => 'GraphController@dataYesterday']);
    #Data Endpoints
    Route::get('/today/data/count', 'DataController@today');
    Route::get('/yesterday/data/count', 'DataController@today');




});


