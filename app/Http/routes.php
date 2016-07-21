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

Route::auth();
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/customers','CustomerController@index');
    Route::resource('customer','CustomerController');
    Route::get('/customer/{id}/stats','CustomerController@stats');

    Route::get('/coworkers','CoWorkerController@index');
    Route::resource('coworker','CoWorkerController');
    
    Route::get('/settings','SettingsController@index');

    Route::get('/user','UserController@index');

});
Route::get('/new-page', function(){
    // resources/views
    return view('new-page');
});

/* Route Structure

    /
        -> Basic Dashboard Overview
        -> Company Information / Bulletin board
    /customers
        -> Overview of businesses
        -> Ability to send notifications / important messages
    /customer/{id}/stats
        -> Customer specific stats
    /coworkers
        -> List of workers
        -> Add/Remove
    /coworker/{id}
        -> Worker Information
    /settings
        -> Site Settings
        -> User Settings
    /user
        -> User Profile

/page
    -> Overview of pages
/page/1 = page #1
*/
