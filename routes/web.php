<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' => 'HomeController@root', 'as' => 'root']);
Route::get('/home', ['uses' => 'HomeController@home', 'as' => 'home']);

Route::get('/reg', ['uses' => 'AuthController@getRegister', 'as' => 'getRegister']);
Route::post('/reg', ['uses' => 'AuthController@postRegister', 'as' => 'postRegister']);


Route::get('/login', ['uses' => 'AuthController@getLogin', 'as' => 'getLogin']);

Route::post('/login', ['uses' => 'AuthController@postLogin', 'as' => 'postLogin']);


Route::view('/leistungen', 'leistungen');


Route::view('/vorsorge', 'Vorsorge');
Route::view('/allgemeinmedizin', 'Allgemeinmedizin');

Route::view('/ordination', 'Ordination');
Route::view('/kontakt', 'Kontakt');

Route::view('/vital', 'Vital');

Route::view('/auth', 'Auth');
Route::view('/auth_login', 'Auth_login');

Route::view('/profil', 'profil');

Route::view('/messenger', 'Messenger');

Route::view('/kalender', 'Kalender');