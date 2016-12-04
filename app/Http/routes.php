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
    return view('welcome');
});

Route::resource('necesito','NecesitoController');
Route::resource('tengo','TengoController');
Route::resource('como','ComoController');
Route::resource('categorias','CategoriaController', ['except' => ['create']]);
	
Route::auth();

Route::get('/materiales', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Rutas login
|--------------------------------------------------------------------------
|
*/

	Route::get('/profile', [
        'uses' => 'UserController@profile',
        'as' => 'profile'
    ]);
    Route::post('/updateperfil', [
        'uses' => 'UserController@update_avatar',
        'as' => 'account.save'
    ]);

    Route::get('/EditarPerfil', [
        'uses' => 'UserController@getAccount',
        'as' => 'account'
    ]);
    //Update Account
    Route::post('/updateperfil', [
        'uses' => 'UserController@postSaveAccount',
        'as' => 'account.save'
    ]);
