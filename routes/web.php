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

Route::get('/auth', ['uses' => 'AuthController@getRegister', 'as' => 'getRegister']);
Route::post('/auth', ['uses' => 'AuthController@postRegister', 'as' => 'postRegister']);


Route::get('/auth_login', ['uses' => 'AuthController@getLogin', 'as' => 'getLogin']);

Route::post('/auth_login', ['uses' => 'AuthController@postLogin', 'as' => 'postLogin']);
Route::get('/logout', ['uses' => 'AuthController@logout', 'as' => 'logout']);


Route::get('/leistungen', ['uses' => 'LeistungenController@leistungen', 'as' => 'Leistugen']);

Route::get('/vorsorge', ['uses' => 'VorsorgeController@vorsorge', 'as' => 'Vorsorge']);

Route::get('/allgemeinmedizin', ['uses' => 'AllgemeinController@allgemein', 'as' => 'Allgemein']);
Route::get('/privatleistungen', ['uses' => 'PrivatController@privat', 'as' => 'Privatleistugnen']);
Route::get('/schularzt', ['uses' => 'SchularztController@schularzt', 'as' => 'Schularzt']);
Route::get('/notfallmedizin', ['uses' => 'NotfallmedizinController@notfall', 'as' => 'Notfallmedizin']);
Route::get('/arbeitsmedizin', ['uses' => 'ArbeitsmedizinController@arbeit', 'as' => 'Arbeitsmedizin']);



Route::get('/ordination', ['uses' => 'OrdinationController@ordination', 'as' => 'Ordination']);

Route::get('/kontakt', ['uses' => 'KontaktController@kontakt', 'as' => 'Kontakt']);
Route::get('/vital', ['uses' => 'VitalController@vital', 'as' => 'Vital']);

Route::get('/profil', ['uses' => 'ProfilController@profil', 'as' => 'Profil'])->middleware('auth');

Route::get('/messenger', ['uses' => 'MessengerController@messenger', 'as' => 'Messenger'])->middleware('auth');
Route::get('/kalender', ['uses' => 'KalenderController@kalender', 'as' => 'Kalender'])->middleware('auth');
Route::post('/kalender', ['uses' => 'KalenderController@newAppointment', 'as' => 'NewAppointment'])->middleware('auth');







Route::get('/dashboard', ['uses' => 'BackendController@backend', 'as' => 'Dashboard'])
    ->middleware('auth');
Route::get('/patients', ['uses' => 'PatientsController@patients', 'as' => 'Patients'])
    ->middleware('auth');
Route::get('/patients_edit/{id}', ['uses' => 'PatientsController@edit', 'as' => 'Patients_edit'])
    ->middleware('auth');
Route::get('/patient/{id}/delete', ['uses' => 'PatientsController@delete', 'as' => 'Patients_delete'])
    ->middleware('auth');
Route::get('/messagesback', ['uses' => 'MessagesBackController@messagesback', 'as' => 'Messages'])
    ->middleware('auth');
Route::get('/calender_backend', ['uses' => 'CalenderBackendController@calender_backend', 'as' => 'Calender'])
    ->middleware('auth');