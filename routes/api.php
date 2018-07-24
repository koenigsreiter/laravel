<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/messages/{id}', ['uses' => 'MessagesController@getMessages', 'as' => 'GetMessages']);
Route::post('/messages/{id}', ['uses' => 'MessagesController@newMessage', 'as' => 'newMessage']);

Route::post('/appointment/{id}/accept', ['uses' => 'KalenderController@accept', 'as' => 'AcceptAppointment']);
Route::post('/appointment/{id}/deny', ['uses' => 'KalenderController@deny', 'as' => 'DenyAppointment']);
