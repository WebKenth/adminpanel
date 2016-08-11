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

    // Pages
    Route::get('pages', 'PageController@index');
    Route::resource('page', 'PageController');

    // Templates
    Route::resource('template', 'TemplateController');

    // FileBrowser
    Route::get('files','FileController@files');
    Route::get('trashcan', 'FileController@trashcan');
    Route::get('trashcan2', 'FileController@getTrashedItems');

    // Settings
    Route::get('/settings','SettingsController@index');

    // User Settings
    Route::get('/user','UserController@index');

    // API Routes :: FileBrowser
    //// GET
    Route::get('api/filebrowser/files/{folder_id?}', 'FileController@getFiles');
    Route::get('api/filebrowser/folders/{parent_id?}', 'FileController@getFolders');
    Route::get('api/filebrowser/breadcrumbs/{breadcrumbs}' , 'FileController@getBreadcrumbs');
    Route::get('api/filebrowser/trashcan', 'FileController@getTrashedItems');
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

