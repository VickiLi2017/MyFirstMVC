<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Task;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;




class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function myTask(User $user)
    {
        $tasks = User::find($user->id)->task; // Task::find(user);   //->where('user_id', $id )->first();
        //dd($tasks);
       return view('tasks.index', compact('tasks'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $task = Task::find($task);
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //printf("Start create");
        return view('tasks.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo "Start store";
        $this->validate(request(), [
            'body'=> 'required'
        ]);

        $task = new Task;
        $task->user_id = auth()->user()->id;
        $task->body = request('body');
        $task->completed = request('completed');
        $task->save();
        return redirect('/tasks');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact(['task','id'])); $task = Task::find($task->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $this->validate(request(),[
            'body'=> 'required|min:1'
        ]);

        $task->body = request('body');
        $task->completed = request('completed');
        $task->save();
        return redirect('/tasks');
    }

/*
    public function delete(Task $task)
    {
        //return $task;
        $task = Task::find($task->id);
        return view('tasks.delete', compact(['task','id']));
    }
*/
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
        $task->delete();

        // redirect
        return redirect('/tasks');
    }
}
