<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Users
    Route::get('/users',  ['as'=> 'listar_perfis','uses' => 'UsersController@showAllusers']);
  
    Route::get('users/{id}', ['uses' => 'UsersController@showOneUsers']);
  
    Route::post('/users/create',  'UsersController@create')->name('criar_usuario');
  
    Route::delete('users/{id}', ['uses' => 'UsersController@destroy']);
  
    Route::put('users/{id}', ['uses' => 'UsersController@update']);

    Route::get('login', ['uses' => 'UsersController@authenticate']);
    
//Times
    Route::get('times',  ['uses' => 'TimesController@showAllTimes']);
  
    Route::get('times/{id}', ['uses' => 'TimesController@showOneTimes']);
  
    Route::post('times', ['uses' => 'TimesController@create']);
  
    Route::delete('times/{id}', ['uses' => 'TimesController@delete']);
  
    Route::put('times/{id}', ['uses' => 'TimesController@update']);
  
