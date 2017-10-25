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
use App\Task;

Route::get('/tasks', function () {

    //$tasks = DB::table('tasks')->get();  //['Go to the store', 'Finish my screencast', 'Clean the house'];
    //$tasks = App\Task::all();
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function($id){
    //$task = DB::table('tasks')->find($id);
    //$task =App\Task::find($id);

    $task = Task::find($id);
    //Task::incomplete();

    return view('tasks.show', compact('task'));
});

Route::get('/about', function(){
    return view('about');
});