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

    Route::get('/settings','SettingsController@index');

    Route::get('/user','UserController@index');

//    Route::get('/files','FileController@index');
//    Route::post('/file','FileController@store');
//    Route::post('/folder','FolderController@store');
//    Route::delete('/file/{file}','FileController@delete');
//    Route::delete('/folder/{folder}','FolderController@delete');

    // files
    /*
    post: /folder -> store()
    get: /folder/{id} -> fetch(id)
     */
});
Route::get('/new-page', function(){
    // resources/views
    return view('new-page');
});

