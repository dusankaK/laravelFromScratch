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

 // app()->singleton('App\Example', function () {
// app()->singleton('example', function () {
//     // dd('called');
//     return new \App\Example;
// });
Route::get('/', function () {
//    dd(app('App\Example'));
    return view('welcome');
});

/*
    7 behaviours:

    GET / projects (index) fatch all projects
    GET / projects/create (create)
    GET / projects / {id} (show)
    POST / projects (store)
    GET / projects/{1}/edit (edit)
    PUT update -- sad nebitno
    PATCH /projects/{id} (update) existing project
    DELETE /projects/{id} (destroy) delete data from database
*/ 

Route::resource('projects', 'ProjectsController');

Route::post('projects/{project}/tasks', 'ProjectTasksController@store');
Route::get('/tasks/{task}', 'ProjectTasksController@update');

//Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
//Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

/*Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
Route::get('/projects/{project}', 'ProjectsController@show');
Route::post('/projects', 'ProjectsController@store');
Route::get('projects/{project}/edit', 'ProjectsController@edit');
Route::patch('/projects/{project}', 'ProjectsController@update');
Route::delete('/projects/{project}', 'ProjectsController@destroy');
*/

