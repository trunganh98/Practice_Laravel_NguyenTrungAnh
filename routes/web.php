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

Route::get('/','TaskController@welcome');

//view
Route::get('/','TaskController@listTask');

Route::post('add_task','TaskController@addTask');

Route::get('delete_task','TaskController@deleteTask');
