<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('list.showAll');
});

/**
 * TodoList Routes
 * */
Route::put('/list/update/{list_id}','App\Http\Controllers\TodoListController@update')
->name('list.edit');

Route::get('/list/tasks/{list_id}','App\Http\Controllers\TodoListController@showTasks')
->name('list.showTasks');

Route::delete('/list/delete/{list_id}','App\Http\Controllers\TodoListController@destroy')
->name('list.delete');

Route::post('/list/save','App\Http\Controllers\TodoListController@store')
->name('list.save');

Route::get('/list','App\Http\Controllers\TodoListController@show')
->name('list.showAll');


/**
 * Tasks Routes
 * 
 * */
Route::put('/task/update/{task_id}','App\Http\Controllers\TaskController@update')->name('task.edit');

Route::delete('/task/delete/{task_id}','App\Http\Controllers\TaskController@destroy')
->name('task.delete');

Route::put('/task/edit/status','App\Http\Controllers\TaskController@putStatus')->name('task.status.edit');

Route::post('/task/save/list/{list_id}','App\Http\Controllers\TaskController@store')
->name('task.save');


