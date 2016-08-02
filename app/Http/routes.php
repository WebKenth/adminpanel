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

//Auth::loginUsingId(1);

Route::auth();
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/settings','SettingsController@index');

    Route::get('/user','UserController@index');

    // FileBrowser
    Route::get('files','FileController@index');
    //// GET
    Route::get('api/filebrowser/files/{folder_id?}', 'FileController@getFiles');
    Route::get('api/filebrowser/folders/{parent_id?}', 'FileController@getFolders');
    //// POST
    Route::post('api/filebrowser/file','FileController@createFile');
    Route::post('api/filebrowser/folder','FileController@createFolder');
    ///// PATCH
    Route::patch('api/filebrowser/rename','FileController@renameItem');
    ///// DELETE
    Route::delete('api/filebrowser/deleteBundle','FileController@deleteBundle');

});
Route::get('/new-page', function(){
    // resources/views
    return view('new-page');
});

