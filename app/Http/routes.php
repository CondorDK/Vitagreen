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

Route::get('/', 'PagesController@getIndex');
Route::get('materiales', 'PagesController@getMaterial');
Route::get('acercade', 'PagesController@getAcercaDe');
Route::get('servicios', 'PagesController@getServicios');
Route::get('contacto', 'PagesController@getContacto');
Route::resource('tengo', 'TengoController');
Route::resource('necesito', 'NecesitoController');
Route::resource('como', 'ComoController');


/*
|--------------------------------------------------------------------------
| Rutas login
|--------------------------------------------------------------------------
|
*/

Route::auth();
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

