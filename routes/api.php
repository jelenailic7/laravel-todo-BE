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
Route::post('/login', 'Auth\LoginController@authenticate');
// Route::post('/logout','Auth\LoginController@logout');

// Route::middleware('jwt')->get('todos', 'TodosController@index');
Route::middleware('jwt')->get('todos', 'UsersController@getUserTodos');

Route::middleware('jwt')->post('todos', 'TodosController@store');
Route::middleware('jwt')->delete('todos/{id}', 'TodosController@destroy');
Route::middleware('api')->put('todos/{id}', 'TodosController@update');

