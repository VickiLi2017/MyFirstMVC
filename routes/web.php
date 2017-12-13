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

//controller => TasksController
//Eloquent model = Task
//migrate => create_Task_table

Route::post('/tasks','TasksController@store');
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/create', 'TasksController@create');
Route::get('/tasks/{task}/edit','TasksController@edit');
Route::patch('/tasks/{task}/edit', 'TasksController@update');
//Route::get('/tasks/delete/{task}','TasksController@delete');
Route::delete('/tasks/{task}/delete','TasksController@destroy');
Route::get('/tasks/{task}', 'TasksController@show');
Route::get('/tasks/cancel', 'TasksController@index');
Route::get('/tasks/user/{user}', 'TasksController@myTask');
Route::get('/about', function(){ return view('about');  });
Route::get('/contact', function(){ return view('contact');  });
//Route::get('/tasks/create', function(){ return view('tasks.create'); });

Route::post('/tasks/{task}/comments', 'CommentsController@create');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@destroy');    //'HomeController@destroy');




//Route::get('/tasks', function () {

    //$tasks = DB::table('tasks')->get();  //['Go to the store', 'Finish my screencast', 'Clean the house'];
    //$tasks = App\Task::all();
//    $tasks = Task::all();
//    return view('tasks.index', compact('tasks'));
//});
/*
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
*/
                       //url: '/tasks','TasksController@index');

