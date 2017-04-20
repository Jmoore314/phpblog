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

Route::get('/', function () {
    return view('index', [
      'name' => 'John Michael Moore',
      'age' => 31
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about')->with('name', 'John Michael Moore');
});

Route::get('extrapage', function () {
    $name = 'John Michael Moore';
    $age = 31;
    $tasks = [
      'go to the store',
      'get milk',
      'drink milk',
      'enjoy life'
    ];
    return view('extrapage', compact('name', 'age', 'tasks'));
});

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');