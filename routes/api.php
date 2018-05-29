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
Route::middleware('jwt')->get('todos', 'UsersController@getUserTodos');
Route::middleware('jwt')->get('todos/{id}', 'TodosController@show');
Route::middleware('jwt')->post('todos', 'TodosController@store');
Route::middleware('jwt')->delete('todos/{id}', 'TodosController@destroy');
Route::middleware('jwt')->put('todos/{id}', 'TodosController@update');

