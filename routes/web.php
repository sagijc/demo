<?php

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
Route::post('/tasks', 'TasksController@store');

Route::post('/tasks/{task}/comments', 'CommentsController@store');
