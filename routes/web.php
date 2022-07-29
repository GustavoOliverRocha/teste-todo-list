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
    return view('todoList.pages.showAll');
});

/**
 * TodoList Routes
 * */
Route::put('/list/update/{list_id}','App\Http\Controllers\TodoListController@update')
->name('list.edit');

Route::get('/list/{list_id}','App\Http\Controllers\TodoListController@showTasks')
->name('list.showTasks');

Route::delete('/list/delete/{list_id}','App\Http\Controllers\TodoListController@destroy')
->name('list.delete');

Route::post('/list/save','App\Http\Controllers\TodoListController@store')
->name('list.save');

Route::get('/list','App\Http\Controllers\TodoListController@show')
->name('list.showAll');

/**
 * Tasks Routes
 * */

Route::delete('/task/delete/{list_id}','App\Http\Controllers\TaskController@destroy')
->name('task.delete');

Route::post('/task/save','App\Http\Controllers\TaskController@store')
->name('task.save');


